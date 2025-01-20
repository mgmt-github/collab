<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('influencer.dashboard') }}">{{ $setting->app_name }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('influencer.dashboard') }}">A</a>
        </div>
        <div class="sidebar-header">
            <div class="search-container">
                <!-- Search icon on the left inside the input field -->
                <svg xmlns="http://www.w3.org/2000/svg" class="search-icon" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <path
                        d="M19.4844 20.154L13.2229 13.8925C12.7229 14.3182 12.1479 14.6477 11.4979 14.881C10.8479 15.1144 10.1947 15.231 9.53837 15.231C7.9367 15.231 6.58112 14.6766 5.47162 13.5678C4.36228 12.4589 3.80762 11.1042 3.80762 9.50353C3.80762 7.9027 4.36203 6.54678 5.47087 5.43578C6.5797 4.32495 7.93445 3.76953 9.53512 3.76953C11.136 3.76953 12.4919 4.3242 13.6029 5.43353C14.7137 6.54303 15.2691 7.89861 15.2691 9.50028C15.2691 10.1951 15.146 10.8675 14.8999 11.5175C14.6537 12.1675 14.3306 12.7233 13.9306 13.1848L20.1921 19.4465L19.4844 20.154ZM9.53837 14.231C10.8652 14.231 11.9854 13.7743 12.8989 12.8608C13.8124 11.9474 14.2691 10.8273 14.2691 9.50028C14.2691 8.17328 13.8124 7.05311 12.8989 6.13978C11.9854 5.22628 10.8652 4.76953 9.53837 4.76953C8.21137 4.76953 7.0912 5.22628 6.17787 6.13978C5.26437 7.05311 4.80762 8.17328 4.80762 9.50028C4.80762 10.8273 5.26437 11.9474 6.17787 12.8608C7.0912 13.7743 8.21137 14.231 9.53837 14.231Z"
                        fill="#868686"></path>
                </svg>
                <!-- Search input field -->
                <input type="text" class="search-input" placeholder="Search...">
            </div>
            <form class="form-inline ">
                <ul class="navbar-nav mr-3 toggle-btn">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                class="fas fa-search"></i></a></li>
                </ul>
            </form>
        </div>
        <!-- <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
         
          </ul>
        </form> -->
        <ul class="sidebar-menu">
            <li class="{{ Route::is('influencer.dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('influencer.dashboard') }}"><i class="fas fa-home"></i>
                    <span>{{ __('admin.Dashboard') }}</span></a></li>

            <li
                class="nav-item dropdown {{ Route::is('influencer.all-booking') || Route::is('influencer.pending-booking') || Route::is('influencer.booking-show') || Route::is('influencer.awaiting-booking') || Route::is('influencer.active-booking') || Route::is('influencer.completed-booking') || Route::is('influencer.declined-booking') || Route::is('influencer.complete-request') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-shopping-cart"></i><span>{{ __('admin.My Bookings') }}</span></a>

                <ul class="dropdown-menu">

                    <li
                        class="{{ Route::is('influencer.all-booking') || Route::is('influencer.booking-show') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('influencer.all-booking') }}">{{ __('admin.All Bookings') }}</a>
                    </li>

                    <li class="{{ Route::is('influencer.awaiting-booking') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.awaiting-booking') }}">{{ __('admin.Awaiting Approval') }}</a>
                    </li>

                    <li class="{{ Route::is('influencer.active-booking') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.active-booking') }}">{{ __('admin.Active Bookings') }}</a></li>

                    <li class="{{ Route::is('influencer.completed-booking') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.completed-booking') }}">{{ __('admin.Completed Bookings') }}</a>
                    </li>

                    <li class="{{ Route::is('influencer.complete-request') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.complete-request') }}">{{ __('admin.Complete Request') }}</a>
                    </li>

                    <li class="{{ Route::is('influencer.declined-booking') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.declined-booking') }}">{{ __('admin.Declined Bookings') }}</a>
                    </li>


                </ul>
            </li>

            @php
                $user = Auth::guard('web')->user();
                $unseenMessages = App\Models\TicketMessage::where(['unseen_user' => 0, 'user_id' => $user->id])
                    ->groupBy('ticket_id')
                    ->get();
                $count = $unseenMessages->count();
            @endphp

            <li
                class="{{ Route::is('influencer.ticket') || Route::is('influencer.ticket-show') || Route::is('influencer.create-new-ticket') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('influencer.ticket') }}"><i class="fas fa-envelope-open-text"></i>
                    <span>{{ __('admin.Support Ticket') }} <sup
                            class="badge badge-danger">{{ $count }}</sup></span></a>
            </li>


            <li
                class="nav-item dropdown {{ Route::is('influencer.service.*') || Route::is('influencer.awaiting-for-approval-service') || Route::is('influencer.active-service') || Route::is('influencer.banned-service') || Route::is('influencer.review-list') || Route::is('influencer.show-review') || Route::is('influencer.additional-service') || Route::is('influencer.additional-create') || Route::is('influencer.additional-edit') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-th-large"></i><span>{{ __('admin.Manage Services') }}</span></a>

                <ul class="dropdown-menu">
                    <li
                        class="{{ Route::is('influencer.service.*') || Route::is('influencer.additional-service') || Route::is('influencer.additional-create') || Route::is('influencer.additional-edit') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('influencer.service.index') }}">{{ __('admin.All Service') }}</a>
                    </li>

                    <li class="{{ Route::is('influencer.awaiting-for-approval-service') ? 'active' : '' }}"><a
                            class="nav-link"
                            href="{{ route('influencer.awaiting-for-approval-service') }}">{{ __('admin.Awaiting for Approval') }}</a>
                    </li>

                    <li class="{{ Route::is('influencer.active-service') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.active-service') }}">{{ __('admin.Active Service') }}</a></li>

                    <li class="{{ Route::is('influencer.banned-service') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.banned-service') }}">{{ __('admin.Banned Service') }}</a></li>

                    <li
                        class="{{ Route::is('influencer.review-list') || Route::is('provider.show-review') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('influencer.review-list') }}">{{ __('admin.Review list') }}</a>
                    </li>



                </ul>
            </li>


            <li class="{{ Route::is('influencer.live-chat') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('influencer.live-chat') }}"><i class="far fa-newspaper"></i>
                    <span>{{ __('admin.Live Chat') }}</span></a></li>
            <li class="{{ Route::is('influencer.campaign') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('influencer.campaigns') }}"><i class="far fa-newspaper"></i>
                    <span>{{ __('admin.campaigns') }}</span></a></li>

            <li class="{{ Route::is('influencer.appointment-schedule.*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('influencer.appointment-schedule.index') }}"><i class="far fa-newspaper"></i>
                    <span>{{ __('admin.Appointment Schedule') }}</span></a></li>

            <li
                class="nav-item dropdown {{ Route::is('influencer.coupon.*') || Route::is('influencer.coupon-history') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-th-large"></i><span>{{ __('admin.Manage Coupon') }}</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ Route::is('influencer.coupon.*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.coupon.index') }}">{{ __('admin.Coupon') }}</a></li>

                    <li class="{{ Route::is('influencer.coupon-history') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('influencer.coupon-history') }}">{{ __('admin.Coupon Histories') }}</a>
                    </li>

                </ul>
            </li>

            @if ($setting->commission_type == 'subscription')
                @php
                    $json_module_data = file_get_contents(base_path('modules_statuses.json'));
                    $module_status = json_decode($json_module_data);
                    $user = Auth::guard('web')->user();
                    $find_plan = Modules\Subscription\Entities\PurchaseHistory::where('provider_id', $user->id)
                        ->where('status', 'active')
                        ->first();
                @endphp

                <li
                    class="nav-item dropdown {{ Route::is('influencer.purchase-history') || Route::is('influencer.pending-plan-payment') || Route::is('purchase-history-show.*') ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown"><i
                            class="fas fa-th-large"></i><span>{{ __('admin.Subscription Plan') }}</span></a>

                    <ul class="dropdown-menu">
                        <li class="{{ Route::is('influencer.purchase-history') ? 'active' : '' }}"><a
                                class="nav-link"
                                href="{{ route('influencer.purchase-history') }}">{{ __('admin.Purchase History') }}</a>
                        </li>

                        <li class="{{ Route::is('influencer.pending-plan-payment') ? 'active' : '' }}"><a
                                class="nav-link"
                                href="{{ route('influencer.pending-plan-payment') }}">{{ __('admin.Pending Payment') }}</a>
                        </li>

                        <li class=""><a class="nav-link" href="{{ route('pricing-plan') }}"
                                target="blank">{{ __('admin.Buy a Plan') }}</a></li>

                    </ul>
                </li>

                @if ($find_plan)
                    <li class="{{ Route::is('influencer.payment-getway-setup') ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('influencer.payment-getway-setup') }}"><i
                                class="fas fa-th-large"></i></i> <span>{{ __('admin.Payment Gateway') }}</span></a>
                    </li>
                @endif
            @else
                <li class="{{ Route::is('influencer.my-withdraw.index') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('influencer.my-withdraw.index') }}"><i class="far fa-newspaper"></i>
                        <span>{{ __('admin.My Withdraw') }}</span></a></li>
            @endif

            <li class="{{ Route::is('influencer.portfolio-list') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('influencer.portfolio-list') }}"><i class="fas fa-th-large"></i>
                    <span>{{ __('admin.My Portfolio') }}</span></a></li>

        </ul>

    </aside>
</div>
