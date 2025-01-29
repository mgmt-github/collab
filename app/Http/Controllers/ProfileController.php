<?php

namespace App\Http\Controllers;

use App\Helpers\MailHelper;
use App\Http\Requests\CartRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Mail\OrderSuccessfully;
use App\Models\AppointmentSchedule;
use App\Models\CustomPagination;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Wishlist;
use Modules\Service\Entities\Service;
use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\MessageDocument;
use App\Models\Message;
use App\Models\Order;
use App\Models\Campaign;
use App\Models\Country;
use App\Models\CouponHistory;
use App\Models\EmailTemplate;
use App\Models\Portfolio;
use App\Models\RefundRequest;
use App\Models\Review;
use App\Models\SeoSetting;
use App\Models\Setting;
use App\Models\SocialPlatform;
use App\Rules\Captcha;
use Hash, Image, File, Str, Session, Stripe;
use Modules\Service\Entities\Category;
use App\Models\StripePayment;
use Illuminate\Support\Facades\Mail;
use Modules\Service\Entities\AdditionalService;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function dashboard(Request $request)
    {
        $user = Auth::guard('web')->user();

        $active_order = Order::where('order_status', 'approved_by_influencer')->where('client_id', $user->id)->count();

        $complete_order = Order::where('order_status', 'complete')->where('client_id', $user->id)->count();

        $cancel_order = Order::where('client_id', $user->id)->where('order_status', 'order_decliened_by_influencer')->orWhere('order_status', 'order_decliened_by_client')->count();

        return view('profile.dashboard', ['user' => $user, 'active_order' => $active_order, 'complete_order' => $complete_order, 'cancel_order' => $cancel_order]);
    }

    public function edit(Request $request)
    {
        $user = Auth::guard('web')->user();

        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required|max:220',
        ];
        $customMessages = [
            'name.required' => trans('admin_validation.Name is required'),
            'email.required' => trans('admin_validation.Email is required'),
            'phone.required' => trans('admin_validation.Phone is required'),
            'address.required' => trans('admin_validation.Address is required')
        ];
        $this->validate($request, $rules, $customMessages);

        $user = Auth::guard('web')->user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->designation = $request->designation;
        $user->save();

        $notification = trans('admin_validation.Your profile updated successfully');
        $notification = array('messege' => $notification, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function change_password(Request $request)
    {
        return view('profile.change_password');
    }

    public function update_password(Request $request)
    {
        $rules = [
            'current_password' => 'required',
            'password' => 'required|min:4|confirmed',
        ];
        $customMessages = [
            'current_password.required' => trans('admin_validation.Current password is required'),
            'password.required' => trans('admin_validation.Password is required'),
            'password.min' => trans('admin_validation.Password minimum 4 character'),
            'password.confirmed' => trans('admin_validation.Confirm password does not match'),
        ];
        $this->validate($request, $rules, $customMessages);

        $user = Auth::guard('web')->user();
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();

            $notification = trans('admin_validation.Password change successfully');
            $notification = array('messege' => $notification, 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification = trans('admin_validation.Current password does not match');
            $notification = array('messege' => $notification, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }

    public function upload_user_avatar(Request $request)
    {
        $user = Auth::guard('web')->user();
        if ($request->file('image')) {
            $old_image = $user->image;
            $user_image = $request->image;
            $extention = $user_image->getClientOriginalExtension();
            $image_name = Str::slug($user->name) . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extention;
            $image_name = 'uploads/custom-images/' . $image_name;
            Image::make($user_image)->save(public_path() . '/' . $image_name);
            $user->image = $image_name;
            $user->save();
            if ($old_image) {
                if (File::exists(public_path() . '/' . $old_image)) unlink(public_path() . '/' . $old_image);
            }
        }

        $notification = trans('admin_validation.Image updated successfully');
        return response()->json(['message' => $notification]);
    }

    public function orders()
    {

        $user = Auth::guard('web')->user();

        $orders = Order::with('influencer')->select('id', 'influencer_id', 'order_id', 'booking_date', 'order_status', 'total_amount', 'coupon_discount')->where('client_id', $user->id)->orderBy('id', 'desc')->paginate(10);

        return view('profile.orders', ['orders' => $orders]);
    }

    public function order_show($order_id)
    {

        $user = Auth::guard('web')->user();

        $order = Order::with('influencer', 'service')->where('client_id', $user->id)->where('order_id', $order_id)->first();
        if (!$order) abort(404);
        $refund_request = RefundRequest::where('order_id', $order->id)->first();

        return view('profile.order_show', ['order' => $order, 'refund_request' => $refund_request]);
    }

    public function mark_as_complete($id)
    {
        $order = Order::find($id);
        $order->order_status = 'complete';
        $order->save();

        $notification = trans('admin_validation.Mark as a completed successfully');
        $notification = array('messege' => $notification, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function mark_as_declined($id)
    {
        $order = Order::find($id);
        $order->order_status = 'order_decliened_by_client';
        $order->save();

        $notification = trans('admin_validation.Mark as a declined successfully');
        $notification = array('messege' => $notification, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function refund_request(Request $request, $id)
    {
        $user = Auth::guard('web')->user();
        $rules = [
            'reasone' => 'required',
            'account_information' => 'required',
        ];
        $customMessages = [
            'order_id.required' => trans('admin_validation.Order id is required'),
            'reasone.required' => trans('admin_validation.Reasone is required'),
            'account_information.required' => trans('admin_validation.Account information is required'),
        ];
        $this->validate($request, $rules, $customMessages);

        $refund = new RefundRequest();
        $refund->client_id = $user->id;
        $refund->reasone = $request->reasone;
        $refund->order_id = $id;
        $refund->account_information = $request->account_information;
        $refund->save();

        $notification = trans('admin_validation.Refund request successfully');
        $notification = array('messege' => $notification, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }


    public function add_to_wishlist($id)
    {
        $user = Auth::guard('web')->user();
        $is_exist = Wishlist::where(['user_id' => $user->id, 'service_id' => $id])->count();
        if ($is_exist == 0) {

            $wishlist = new Wishlist();
            $wishlist->service_id = $id;
            $wishlist->user_id = $user->id;
            $wishlist->save();

            $message = trans('admin_validation.Item added to favourite list');
            return response()->json(['message' => $message]);
        } else {
            $message = trans('admin_validation.Already added to favourite list');
            return response()->json(['message' => $message], 403);
        }
    }

    public function wishlists()
    {

        $user = Auth::guard('web')->user();
        $wishlists = Wishlist::where(['user_id' => $user->id])->get();
        $wishlist_arr = array();
        foreach ($wishlists as $wishlist) {
            $wishlist_arr[] = $wishlist->service_id;
        }

        $services = Service::with('category', 'influencer')->where(['status' => 'active', 'approve_by_admin' => 'enable', 'is_banned' => 'disable'])->whereIn('id', $wishlist_arr)->get();

        return view('profile.wishlists', ['services' => $services]);
    }

    public function remove_wishlist($id)
    {

        $user = Auth::guard('web')->user();
        Wishlist::where(['user_id' => $user->id, 'service_id' => $id])->delete();

        $notification = trans('admin_validation.Item remove to favourite list');
        $notification = array('messege' => $notification, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function reviews()
    {

        $user = Auth::guard('web')->user();

        $reviews = Review::with('service')->orderBy('id', 'desc')->where('status', 1)->where('user_id', $user->id)->paginate(10);

        return view('profile.reviews', ['reviews' => $reviews]);
    }

    public function store_review(Request $request)
    {

        $rules = [
            'rating' => 'required',
            'comment' => 'required',
            'g-recaptcha-response' => new Captcha()
        ];
        $customMessages = [
            'rating.required' => trans('admin_validation.Rating is required'),
            'comment.required' => trans('admin_validation.Review is required'),
        ];
        $this->validate($request, $rules, $customMessages);

        $user = Auth::guard('web')->user();
        $is_exist_order = false;
        $is_exist_order = Order::where(['client_id' => $user->id])->count();

        if ($is_exist_order) {
            $review = new Review();
            $review->user_id = $user->id;
            $review->rating = $request->rating;
            $review->comment = $request->comment;
            $review->influencer_id = $request->influencer_id;
            $review->service_id = $request->service_id;
            $review->save();

            $message = trans('admin_validation.Review Submited successfully');
            return response()->json(['status' => 1, 'message' => $message]);
        } else {
            $message = trans('admin_validation.Opps! You can not review this service');
            return response()->json(['status' => 0, 'message' => $message]);
        }
    }


    public function support_tickets()
    {
        $user = Auth::guard('web')->user();

        $tickets = Ticket::where('user_id', $user->id)->orderBy('id', 'desc')->paginate(10);

        return view('profile.support_tickets', ['tickets' => $tickets]);
    }

    public function support_tickets_show($ticket_id)
    {

        $user = Auth::guard('web')->user();

        $ticket = Ticket::where('user_id', $user->id)->where('ticket_id', $ticket_id)->orderBy('id', 'desc')->first();

        TicketMessage::where('ticket_id', $ticket->id)->update(['unseen_user' => 1]);

        $messages = TicketMessage::where('ticket_id', $ticket->id)->get();

        return view('profile.support_tickets_show', ['ticket' => $ticket, 'messages' => $messages]);
    }

    public function create_support_ticket(Request $request)
    {

        $rules = [
            'subject' => 'required',
            'message' => 'required',
        ];
        $customMessages = [
            'subject.required' => trans('admin_validation.Subject is required'),
            'message.required' => trans('admin_validation.Message is required'),
        ];
        $this->validate($request, $rules, $customMessages);

        $user = Auth::guard('web')->user();

        $ticket = new Ticket();
        $ticket->user_id = $user->id;
        $ticket->subject = $request->subject;
        $ticket->ticket_id = substr(rand(0, time()), 0, 10);
        $ticket->status = 'pending';
        $ticket->ticket_from = 'Client';
        $ticket->save();

        $message = new TicketMessage();
        $message->ticket_id = $ticket->id;
        $message->admin_id = 0;
        $message->user_id = $user->id;
        $message->message = $request->message;
        $message->message_from = 'client';
        $message->unseen_user = 1;
        $message->unseen_admin = 0;
        $message->save();

        $notification = trans('admin_validation.Ticket created successfully');
        $notification = array('messege' => $notification, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function send_ticket_message(Request $request)
    {
        $rules = [
            'ticket_id' => 'required',
            'message' => 'required',
            'documents' => 'max:2048'
        ];
        $customMessages = [
            'message.required' => trans('admin_validation.Message is required'),
            'ticket_id.required' => trans('admin_validation.Ticket is required'),
        ];
        $this->validate($request, $rules, $customMessages);

        $user = Auth::guard('web')->user();
        $message = new TicketMessage();
        $message->ticket_id = $request->ticket_id;
        $message->admin_id = 0;
        $message->user_id = $user->id;
        $message->message = $request->message;
        $message->message_from = 'client';
        $message->unseen_user = 1;
        $message->unseen_admin = 0;
        $message->save();

        if ($request->hasFile('documents')) {
            foreach ($request->documents as $index => $request_file) {
                $extention = $request_file->getClientOriginalExtension();
                $file_name = 'support-file-' . time() . $index . '.' . $extention;
                $destinationPath = public_path('uploads/custom-images/');
                $request_file->move($destinationPath, $file_name);

                $document = new MessageDocument();
                $document->ticket_message_id = $message->id;
                $document->file_name = $file_name;
                $document->save();
            }
        }

        $notification = trans('admin_validation.Message send successfully');
        $notification = array('messege' => $notification, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function influencers()
    {
        $platforms = SocialPlatform::where('status', 1)->get();
        $categories = Category::where('status', 'active')->get();
        $influencers = User::where(['status' => 'enable', 'is_banned' => 'no', 'is_influencer' => 'yes'])->where('email_verified_at', '!=', null)->orderBy('id', 'desc')->get();
        return view('profile.influencers', compact('platforms', 'categories', 'influencers'));
    }
    public function influencer(Request $request, $username)
    {
        $platforms = SocialPlatform::where('status', 1)->get();

        $portfolios = Portfolio::orderBy('id', 'desc')->where('status', 1)->get();
        $influencer = User::where(['status' => 'enable', 'is_banned' => 'no', 'is_influencer' => 'yes'])->where('email_verified_at', '!=', null)->orderBy('id', 'desc')->select('id', 'name', 'username', 'designation', 'total_follower', 'total_following', 'image', 'status', 'is_banned', 'is_influencer', 'tags', 'created_at', 'about_me', 'varsity_name', 'varsity_year', 'school_name', 'school_year', 'phone', 'email', 'address', 'facebook', 'tiktok', 'twitter', 'instagram')->where('username', $username)->first();

        if (!$influencer) abort(404);

        $services = Service::with('category', 'influencer', 'platform', 'translate')->where(['status' => 'active', 'approve_by_admin' => 'enable', 'is_banned' => 'disable'])->where('influencer_id', $influencer->id)->orderBy('id', 'desc')->get();

        $total_review = Review::where('status', 1)->where('influencer_id', $influencer->id)->count();

        $total_pending = Order::where('order_status', 'awaiting_for_influencer_approval')->where('influencer_id', $influencer->id)->count();

        $active_booking = Order::where('order_status', 'approved_by_influencer')->where('influencer_id', $influencer->id)->count();

        $complete_booking = Order::where('order_status', 'complete')->where('influencer_id', $influencer->id)->count();

        $cancel_booking = Order::where('influencer_id', $influencer->id)->where('order_status', 'order_decliened_by_influencer')->orWhere('order_status', 'order_decliened_by_client')->count();
        return view('profile.influencer')->with([
            'influencer' => $influencer,
            'services' => $services,
            'total_review' => $total_review,
            'active_booking' => $active_booking,
            'total_pending' => $total_pending,
            'cancel_booking' => $cancel_booking,
            'complete_booking' => $complete_booking,
            'portfolios' => $portfolios,
            'platforms' => $platforms,

        ]);
    }
    public function toggle(Request $request)
    {
        $userId = auth()->id();
        $influencerId = $request->influencer_id;

        // Check if already in wishlist
        $wishlist = Wishlist::where([
            'user_id' => $userId,
            'influencer_id' => $influencerId,
        ])->first();
        if ($wishlist) {
            // Remove from wishlist
            $wishlist->delete();
            $isWishlist = false;
        } else {
            // Add to wishlist
            $wishlists =  Wishlist::create([
                'user_id' => $userId,
                'influencer_id' => $influencerId,
            ]);
            $isWishlist = true;
        }


        return response()->json([
            'success' => true,
            'isWishlist' => $isWishlist
        ]);
    }

    function cart()
    {
        return view('profile.cart');
    }
    public function checkout()
    {
        $cartItems = Session::get('cart', []);

        // Calculate the subtotal
        $subtotal = array_reduce($cartItems, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);
        return view('profile.checkout', compact('cartItems', 'subtotal'));
    }
    public function checkout_submit(Request $request)
    {
        // Fetch cart data from the session
        $cart = Session::get('cart', []);

        if (empty($cart)) {
            $notification = array(
                'messege' => trans('admin_validation.Cart is empty'),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        // Validation rules
        $rules = [
            'address' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ];
        $customMessages = [
            'address.required' => trans('admin_validation.Address is required'),
            'name.required' => trans('admin_validation.Name is required'),
            'phone.required' => trans('admin_validation.Phone is required'),
        ];

        $this->validate($request, $rules, $customMessages);

        // Prepare booking info
        $booking_info = (object) array(
            'ids' => $request->ids,
            'prices' => $request->prices,
            'names' => $request->names,
            'extra_total' => $request->extra_total,
            'sub_total' => $request->sub_total,
            'total' => $request->total,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'order_note' => $request->order_note,
        );

        $user = Auth::guard('web')->user();
        $service_ids = array_keys($cart);

        // Ensure the services exist and are valid
        $services = Service::whereIn('id', $service_ids)
            ->where(['status' => 'active', 'approve_by_admin' => 'enable', 'is_banned' => 'disable'])
            ->get();

        if ($services->isEmpty()) {
            $notification = array(
                'messege' => trans('admin_validation.Invalid service selected'),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        // Process coupon discount
        $coupon_discount = 0.00;
        if (Session::get('coupon_code') && Session::get('offer_percentage')) {
            $offer_percentage = Session::get('offer_percentage');
            $coupon_discount = ($offer_percentage / 100) * $booking_info->total;
        }

        // Calculate payable amount
        $stripe = StripePayment::first();
        $payable_amount = round(($booking_info->total - $coupon_discount) * $stripe->currency->currency_rate, 2);

        Stripe\Stripe::setApiKey($stripe->stripe_secret);

        try {
            $result = Stripe\Charge::create([
                "amount" => $payable_amount * 100,
                "currency" => $stripe->currency->currency_code,
                "source" => $request->stripeToken,
                "description" => env('APP_NAME')
            ]);

            // Create orders for all items in the cart
            foreach ($cart as $service_id => $cart_item) {
                $service = $services->where('id', $service_id)->first();

                if ($service) {
                    $this->create_order(
                        $user,
                        $service,
                        $booking_info,
                        $service->influencer_id,
                        $user->id,
                        'Stripe',
                        'success',
                        $result->balance_transaction
                    );
                }
            }

            // Clear the cart
            session()->forget('cart');

            // Success Notification
            $notification = array(
                'messege' => trans('admin_validation.Your order has been placed. Thanks for your new order'),
                'alert-type' => 'success'
            );

            return redirect()->route('user.orders')->with($notification);
        } catch (\Exception $e) {
            // Payment Failure Notification
            $notification = array(
                'messege' => trans('admin_validation.Payment failed. Please try again'),
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }



    public function create_order($user, $service, $booking_info, $influencer_id, $client_id, $payment_method, $payment_status, $tnx_info)
    {

        $additional_services = array();

        if ($booking_info->ids) {
            foreach ($booking_info->ids as $extra_index => $extra_id) {
                $addition = AdditionalService::find($booking_info->ids[$extra_index]);
                if ($addition) {
                    $single_extra_service = array(
                        'id' => $addition->id,
                        'title' => $addition->title,
                        'price' => $addition->price,
                        'features' => json_decode($addition->features),
                    );
                    $additional_services[] = $single_extra_service;
                }
            }
        }


        $coupon_discount = 0.00;
        if (Session::get('coupon_code') && Session::get('offer_percentage')) {

            $coupon = Coupon::where(['coupon_code' => Session::get('coupon_code')])->first();

            if ($coupon) {
                $offer_percentage = Session::get('offer_percentage');
                $coupon_discount = ($offer_percentage / 100) * ($booking_info->total);

                $history = new CouponHistory();
                $history->user_id = $client_id;
                $history->influencer_id = $coupon->influencer_id;
                $history->coupon_code = $coupon->coupon_code;
                $history->coupon_id = $coupon->id;
                $history->discount_amount = $coupon_discount;
                $history->save();
            }
        }

        $order = new Order();
        $order->order_id = substr(rand(0, time()), 0, 10);
        $order->client_id = $client_id;
        $order->influencer_id = $influencer_id;
        $order->service_id = $service->id;
        $order->package_amount = $service->price;
        $order->additional_amount = $booking_info->extra_total ?? 0;
        $order->coupon_discount  = $coupon_discount;
        $order->total_amount = $booking_info->total;
        $order->payment_method = $payment_method;
        $order->transection_id = $tnx_info;
        $order->payment_status = $payment_status;
        $order->order_status = 'awaiting_for_influencer_approval';
        $order->package_features = $service->features;
        $order->additional_services = json_encode($additional_services);
        $order->order_note = $booking_info->order_note;
        $order->client_name = $booking_info->name;
        $order->client_phone = $booking_info->phone;
        $order->client_email = $booking_info->email;
        $order->client_address = $booking_info->address;
        $order->save();

        // MailHelper::setMailConfig();

        // $setting = Setting::first();

        // $template = EmailTemplate::where('id', 8)->first();
        // $subject = $template->subject;
        // $message = $template->description;
        // $message = str_replace('{{name}}', $user->name, $message);
        // $message = str_replace('{{amount}}', $setting->currency_icon . $order->total_amount, $message);
        // $message = str_replace('{{order_id}}', $order->order_id, $message);
        // Mail::to($user->email)->send(new OrderSuccessfully($message, $subject));

        // $influencer = User::find($influencer_id);

        // $template = EmailTemplate::where('id', 9)->first();
        // $subject = $template->subject;
        // $message = $template->description;
        // $message = str_replace('{{name}}', $influencer->name, $message);
        // $message = str_replace('{{amount}}', $setting->currency_icon . $order->total_amount, $message);
        // $message = str_replace('{{order_id}}', $order->order_id, $message);
        // Mail::to($influencer->email)->send(new OrderSuccessfully($message, $subject));

        Session::forget('coupon_code');
        Session::forget('offer_percentage');
        Session::forget('booking_info');

        return $order;
    }
    function requirement()
    {
        return view('requirement');
    }
    public function campaigns(Request $request)
    {

        $seo_setting = SeoSetting::where('id', 10)->first();
        $platforms = SocialPlatform::where('status', 1)->get();
        $campaigns = Campaign::where('user_id', Auth()->id())->get();


        return view('profile.campaigns')->with([
            'seo_setting' => $seo_setting,
            'platforms' => $platforms,
            'campaigns' => $campaigns,
        ]);
    }


    public function campaign_show($slug)
    {
        $service = Service::with('category', 'influencer')->where(['status' => 'active', 'approve_by_admin' => 'enable', 'is_banned' => 'disable', 'slug' => $slug])->first();

        if (!$service) abort(404);

        $related_services = Service::with('category', 'influencer')->where(['status' => 'active', 'approve_by_admin' => 'enable', 'is_banned' => 'disable', 'category_id' => $service->category_id])->where('id', '!=', $service->id)->get()->take(10);

        $service_author = User::where(['status' => 'enable', 'is_banned' => 'no', 'is_influencer' => 'yes'])->where('email_verified_at', '!=', null)->orderBy('id', 'desc')->select('id', 'name', 'username', 'designation', 'total_follower', 'total_following', 'image', 'status', 'is_banned', 'is_influencer')->where('id', $service->influencer_id)->first();

        if (!$service_author) abort(404);

        $days = array(
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        );

        $schedule_list = array();

        foreach ($days as $day_item) {
            $schedule_item = AppointmentSchedule::where('user_id', $service->influencer_id)->where('day', $day_item)->orderBy('start_time', 'asc')->first();

            if ($schedule_item) {
                $start_time = strtoupper(date('h:i A', strtotime($schedule_item->start_time)));

                $schedule_item = AppointmentSchedule::where('user_id', $service->influencer_id)->where('day', $day_item)->orderBy('end_time', 'desc')->first();
                $end_time = strtoupper(date('h:i A', strtotime($schedule_item->end_time)));

                $schedule = array(
                    'day' => $day_item,
                    'start_time' => $start_time,
                    'end_time' => $end_time
                );

                $schedule_list[] = $schedule;
            }
        }

        $reviews = Review::with('user')->orderBy('id', 'desc')->where('status', 1)->where('service_id', $service->id)->paginate(10);

        return view('profile.campaign_show')->with([
            'service' => $service,
            'service_author' => $service_author,
            'schedule_list' => $schedule_list,
            'related_services' => $related_services,
            'reviews' => $reviews,

        ]);
    }
    function campaign_store(Request $request)
    {

        $request->validate([
            'platforms' => 'required',
            'category' => 'nullable',
            'country' => 'nullable',
            'no_of_influencer' => 'nullable|integer',
            'range' => 'nullable',
            'language' => 'nullable',
            'gender' => 'nullable',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        }

        Campaign::create([
            'platforms' => $request->platforms,
            'category' => $request->category,
            'country' => $request->country,
            'no_of_influencer' => $request->no_of_influencer,
            'range' => $request->range,
            'language' => $request->language,
            'gender' => $request->gender,
            'image' => $filePath
        ]);

        return redirect()->route('profile.campaign.index')->with('success', 'Influencer added successfully');
    }
    function campaign_create()
    {

        $categories  = Category::get();
        $countries  = Country::get();


        return view('profile.campaign', compact('categories', 'countries'));
    }
    function campaign2()
    {
        return view('profile.campaign2');
    }
    function campaign4()
    {
        return view('profile.campaign4');
    }
}
