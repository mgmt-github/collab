<?php

namespace App\Http\Controllers;

use App\Models\StripePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Modules\Service\Entities\Service;
use  Stripe;

class CartController extends Controller
{
    // Display cart
    public function index()
    {
        $cart = Session::get('cart', []);

        // Calculate the subtotal
        $subtotal = array_reduce($cart, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);
        $services = Service::with('category', 'influencer')
            ->where(['status' => 'active', 'approve_by_admin' => 'enable', 'is_banned' => 'disable'])
            ->get();
        return view('profile.cart', compact('cart', 'subtotal', 'services'));
    }

    // Add item to cart
    public function add(Request $request)
    {
        $id = $request->input('id');
        $image = $request->input('image');
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity', 1);

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity; // Update quantity if exists
        } else {
            $cart[$id] = [
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'image' => $image
            ];
        }

        Session::put('cart', $cart); // Save cart to session

        return redirect()->route('user.cart')->with('success', 'Item added to cart!');
    }

    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        // Validate input
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        if (isset($cart[$id])) {
            // Update the quantity
            $cart[$id]['quantity'] = $validated['quantity'];
            session()->put('cart', $cart);

            // Calculate the new subtotal
            $subtotal = array_sum(array_map(function ($item) {
                return $item['price'] * $item['quantity'];
            }, $cart));

            return response()->json([
                'status' => 'success',
                'message' => __('admin.Cart updated successfully!'),
                'subtotal' => $subtotal,
                'item_total' => $cart[$id]['price'] * $cart[$id]['quantity'],
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => __('admin.Item not found in cart.'),
        ], 404);
    }

    // Remove item from cart
    public function remove(Request $request, $id)
    {
        // Cart session get karo
        $cart = Session::get('cart', []);

        // Check karo agar ID exist karti hai tabhi remove karo
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart); // Save updated cart to session

            // Success notification
            $notification = trans('admin_validation.Item removed from cart successfully');
            $notification = array('messege' => $notification, 'alert-type' => 'success');

            return redirect()->route('user.cart')->with($notification);
        }

        // Error notification agar item nahi mila
        $notification = trans('admin_validation.Item not found in cart');
        $notification = array('messege' => $notification, 'alert-type' => 'error');

        return redirect()->route('user.cart')->with($notification);
    }


    public function placeOrder(Request $request)
    {
        $cart = Session::get('cart', []);
        dd($cart);
        $rules = [
            'address' => 'required',
            'date' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'schedule_time_slot' => 'required',
        ];
        $customMessages = [
            'address.required' => trans('admin_validation.Address is required'),
            'date.required' => trans('admin_validation.Schedule date is required'),
            'name.required' => trans('admin_validation.Name is required'),
            'phone.required' => trans('admin_validation.Phone is required'),
            'schedule_time_slot.required' => trans('admin_validation.Schedule slot is required'),
        ];
        $this->validate($request, $rules, $customMessages);

        $booking_info = (object) array(
            'ids' => $request->ids,
            'prices' => $request->prices,
            'names' => $request->names,
            'extra_total' => $request->extra_total,
            'sub_total' => $request->sub_total,
            'total' => $request->total,
            'date' => $request->date,
            'schedule_time_slot' => $request->schedule_time_slot,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'order_note' => $request->order_note,
        );
        $user = Auth::guard('web')->user();
        $service = Service::where(['status' => 'active', 'approve_by_admin' => 'enable', 'is_banned' => 'disable', 'id' => $id])->first();

        $influencer_id = $service->influencer_id;
        $client_id = $user->id;

        $coupon_discount = 0.00;
        if (Session::get('coupon_code') && Session::get('offer_percentage')) {
            $offer_percentage = Session::get('offer_percentage');
            $coupon_discount = ($offer_percentage / 100) * $booking_info->total;
        }

        $stripe = StripePayment::first();
        $payable_amount = round(($booking_info->total - $coupon_discount) * $stripe->currency->currency_rate, 2);
        Stripe\stripe::setApiKey($stripe->stripe_secret);

        $result = Stripe\Charge::create([
            "amount" => $payable_amount * 100,
            "currency" => $stripe->currency->currency_code,
            "source" => $request->stripeToken,
            "description" => env('APP_NAME')
        ]);

        $order = $this->create_order($user, $service, $booking_info, $influencer_id, $client_id, 'Stripe', 'success', $result->balance_transaction);

        $notification = trans('admin_validation.Your order has been placed. Thanks for your new order');
        $notification = array('messege' => $notification, 'alert-type' => 'success');



        // Clear the cart
        session()->forget('cart');

        return redirect()->route('user.orders')->with($notification);
    }
}
