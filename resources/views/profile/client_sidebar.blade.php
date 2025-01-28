<style>
    .main-sidebar {
        width: 280px;
    }

    footer.main-footer {
        display: none;
    }

    .toggle-btn a {
        padding-top: 0;
    }

    .main-sidebar .sidebar-brand {
        display: inline-block;
        width: 100%;
        text-align: left;
        padding: 0 20px;
        line-height: 60px;
        font-size: 26px;
        font-family: 'Poppins';
        font-weight: 700;
        margin-bottom: 24px;
        margin-top: 35px;
    }

    .main-content {
        padding-left: 311px;
        padding-bottom: 70px;

    }

    .navbar {
        left: 282px;

    }

    .main-sidebar .sidebar-menu li a {
        padding: 0 21px;
        cursor: pointer;
    }

    .main-sidebar .sidebar-menu li.active a {
        background: transparent;
    }

    .main-sidebar .sidebar-menu li a:hover {
        color: #6036AE;

        background: transparent;
    }

    .toggle-btn li a i {
        font-size: 20px;
        color: #333333;
    }

    .sidebar-header {
        display: flex;
        position: relative;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .search-container {
        position: relative;
        width: 189px;
        margin-left: 22px;
        margin-bottom: 13px;
    }

    /* Style for the search input field */
    .search-container .search-input {
        width: 100%;
        padding: 10px 10px 10px 40px;
        /* Space for the icon on the left */
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid rgba(212, 212, 212, 0.54);
        background: #F4F6F9;
        box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.15);
        color: #868686;
        font-style: normal;
        font-weight: 300;
        line-height: 29.449px;
    }

    /* Positioning the search icon on the left inside the input */
    .search-container .search-icon {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        color: #868686;
    }

    body.sidebar-mini .main-sidebar .search-container {
        display: none;
    }

    body.sidebar-mini .toggle-btn {
        margin: 0 !important;
        width: 100% !important;
    }

    body.sidebar-mini ul.sidebar-menu li a svg {
        margin-right: 0;
    }

    body.sidebar-mini .sidebar-header {
        width: 26px !important;
        margin: 0 auto;
    }

    ul.sidebar-menu li a svg {
        width: 27px;
        margin-right: 15px;
    }

    li.icon-svg a svg {
        width: 18px !important;
    }

    .main-sidebar .sidebar-menu li a i {
        margin-left: 0 !important;
        font-size: 16px;
    }

    /* Style for active link */
    .main-sidebar .sidebar-menu li.active a,
    .main-sidebar .sidebar-menu li.active a span,
    .main-sidebar .sidebar-menu li.active a svg {
        color: #6036AE;
        font-weight: 500;
        background-color: #f8fafb;
        /* fill: currentColor; */
        stroke: currentColor;
    }

    body.sidebar-mini .main-sidebar .sidebar-menu>li.active>a {
        background: #6036AE;
    }

    body.sidebar-mini .main-sidebar .sidebar-menu>li.active>a svg {
        margin: 0 auto;
        background: transparent;
        /* stroke: currentColor; */
        color: #fff;
        /* fill: currentColor; */
        filter: unset;
    }

    /* Add hover effect to both text and icon */
    .main-sidebar .sidebar-menu li.active a:hover {
        color: #6036AE;
        /* Change text color */
        font-weight: 600;
        /* Make font bold */
        background-color: #f8fafb;
        /* Change background color */
    }

    .main-sidebar .sidebar-menu li.active a:hover svg,
    .main-sidebar .sidebar-menu li.active a:hover span {
        color: #6036AE;
        /* Ensure the icon color changes */
        fill: currentColor;
        stroke: currentColor;
    }

    .main-sidebar .sidebar-menu li a span {
        margin-top: 0;
        width: 100%;
        color: #333;
        font-family: "Poppins", serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: var(--line-height-33_6, 33.6px);
    }

    ul.sidebar-menu li a svg {

        margin-right: 15px;
        color: #78828a;
        /* fill: currentColor; */
        stroke: currentColor;
    }

    li.icon-svg svg {
        width: 23px !important;
        !i;
        !;
        fill: #78828a;
    }
</style>
@php
    $auth_user = Auth::guard('web')->user();
    $unseen_ticket = App\Models\TicketMessage::where('user_id', $auth_user->id)->where('unseen_user', 0)->count();
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('influencer.dashboard') }}">
                <img src="{{ asset('/uploads/client-dasborad/actro-logo.png') }}" alt="Actrology" />
                {{-- {{ $setting->app_name }} --}}
            </a>
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
                        fill="#868686" />
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

        <ul class="sidebar-menu">
            <li class="{{ Route::is('user.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M13.25 9V3.5H20.5V9H13.25ZM3.5 12.5V3.5H10.75V12.5H3.5ZM13.25 20.5V11.5H20.5V20.5H13.25ZM3.5 20.5V15H10.75V20.5H3.5ZM5 11H9.25V5H5V11ZM14.75 19H19V13H14.75V19ZM14.75 7.5H19V5H14.75V7.5ZM5 19H9.25V16.5H5V19Z"
                            fill="#333333" />
                    </svg>
                    <span>{{ __('admin.Dashboard') }}</span></a>
            </li>

            <li class="{{ Route::is('user.influencers') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.influencers') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                        fill="none">
                        <path
                            d="M6.671 6.22627C5.81489 6.22627 5.08204 5.92148 4.47246 5.3119C3.86273 4.70217 3.55787 3.96925 3.55787 3.11313C3.55787 2.25702 3.86273 1.52418 4.47246 0.914594C5.08204 0.304865 5.81489 0 6.671 0C7.52711 0 8.25996 0.304865 8.86954 0.914594C9.47927 1.52418 9.78413 2.25702 9.78413 3.11313C9.78413 3.96925 9.47927 4.70217 8.86954 5.3119C8.25996 5.92148 7.52711 6.22627 6.671 6.22627ZM0 13V11.0225C0 10.587 0.118299 10.1836 0.354897 9.81237C0.591495 9.44117 0.907701 9.1558 1.30351 8.95626C2.1826 8.52532 3.06947 8.20207 3.96413 7.98652C4.85879 7.77097 5.76108 7.6632 6.671 7.6632C7.58092 7.6632 8.48321 7.77097 9.37787 7.98652C10.2725 8.20207 11.1594 8.52532 12.0385 8.95626C12.4343 9.1558 12.7505 9.44117 12.9871 9.81237C13.2237 10.1836 13.342 10.587 13.342 11.0225V13H0ZM1.3342 11.6658H12.0078V11.0225C12.0078 10.8424 11.9556 10.6756 11.8513 10.5222C11.7469 10.3689 11.6052 10.2438 11.4263 10.1468C10.6599 9.76938 9.87849 9.48342 9.08212 9.28892C8.2856 9.09457 7.4819 8.9974 6.671 8.9974C5.8601 8.9974 5.0564 9.09457 4.25988 9.28892C3.46351 9.48342 2.68211 9.76938 1.91569 10.1468C1.73676 10.2438 1.59511 10.3689 1.49075 10.5222C1.38638 10.6756 1.3342 10.8424 1.3342 11.0225V11.6658ZM6.671 4.89207C7.16021 4.89207 7.579 4.71788 7.92737 4.36951C8.27575 4.02113 8.44993 3.60234 8.44993 3.11313C8.44993 2.62393 8.27575 2.20514 7.92737 1.85676C7.579 1.50839 7.16021 1.3342 6.671 1.3342C6.18179 1.3342 5.763 1.50839 5.41463 1.85676C5.06625 2.20514 4.89207 2.62393 4.89207 3.11313C4.89207 3.60234 5.06625 4.02113 5.41463 4.36951C5.763 4.71788 6.18179 4.89207 6.671 4.89207Z"
                            fill="#333333" />
                    </svg>
                    <span>Influencers</span></a>
            </li>


            <li class="{{ Route::is('user.wishlists') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.wishlists') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M11.5333 20L10.5419 19.0757C9.0529 17.6749 7.82156 16.4712 6.84786 15.4646C5.87416 14.4578 5.10257 13.5618 4.53308 12.7765C3.96359 11.9914 3.56575 11.2752 3.33954 10.6278C3.11318 9.98056 3 9.32379 3 8.65746C3 7.33552 3.42981 6.22875 4.28943 5.33716C5.1492 4.44572 6.21647 4 7.49123 4C8.2754 4 9.01645 4.19018 9.71439 4.57054C10.4123 4.9509 11.0186 5.49636 11.5333 6.20694C12.048 5.49636 12.6543 4.9509 13.3523 4.57054C14.0502 4.19018 14.7913 4 15.5754 4C16.8502 4 17.9175 4.44572 18.7772 5.33716C19.6369 6.22875 20.0667 7.33552 20.0667 8.65746C20.0667 9.32379 19.9535 9.98056 19.7271 10.6278C19.5009 11.2752 19.1031 11.9914 18.5336 12.7765C17.9641 13.5618 17.1939 14.4578 16.2231 15.4646C15.2524 16.4712 14.0196 17.6749 12.5248 19.0757L11.5333 20ZM11.5333 18.1121C12.9705 16.7711 14.1532 15.6216 15.0814 14.6637C16.0096 13.706 16.7432 12.8739 17.2821 12.1676C17.8211 11.4612 18.1953 10.8339 18.4049 10.2857C18.6145 9.73768 18.7193 9.19493 18.7193 8.65746C18.7193 7.72597 18.4199 6.94972 17.8211 6.32873C17.2222 5.70773 16.4737 5.39724 15.5754 5.39724C14.8661 5.39724 14.2106 5.60589 13.6087 6.0232C13.0071 6.44066 12.5306 7.02137 12.1794 7.76532H10.8873C10.5302 7.01532 10.0523 6.43313 9.45345 6.01878C8.85462 5.60442 8.20054 5.39724 7.49123 5.39724C6.59867 5.39724 5.85156 5.70773 5.24988 6.32873C4.64821 6.94972 4.34737 7.72597 4.34737 8.65746C4.34737 9.19493 4.45216 9.73768 4.66175 10.2857C4.87135 10.8339 5.24561 11.4612 5.78456 12.1676C6.32351 12.8739 7.05708 13.7045 7.98526 14.6593C8.91345 15.6141 10.0961 16.765 11.5333 18.1121Z"
                            fill="#333333" />
                    </svg>
                    <span>{{ __('admin.Favorite List') }}</span></a>
            </li>

            <li class="{{ Route::is('user.orders') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.orders') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M4.50023 19.5003V7.6003L2.64648 3.54255L4.00398 2.9043L6.14248 7.5503H17.858L19.9965 2.9043L21.354 3.54255L19.5002 7.6003V19.5003H4.50023ZM10.0002 12.7503H14.0002C14.2127 12.7503 14.3908 12.6784 14.5345 12.5345C14.6783 12.3907 14.7502 12.2125 14.7502 12C14.7502 11.7874 14.6783 11.6093 14.5345 11.4658C14.3908 11.3221 14.2127 11.2503 14.0002 11.2503H10.0002C9.78773 11.2503 9.60965 11.3222 9.46598 11.466C9.32215 11.6099 9.25023 11.788 9.25023 12.0005C9.25023 12.2132 9.32215 12.3913 9.46598 12.5348C9.60965 12.6785 9.78773 12.7503 10.0002 12.7503ZM6.00023 18.0003H18.0002V9.0503H6.00023V18.0003Z"
                            fill="#333333" />
                    </svg>
                    <span>{{ __('admin.Orders') }}</span></a>
            </li>



            <li class="{{ Route::is('user.support-tickets') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.support-tickets') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M12.0003 16.6538C12.2129 16.6538 12.391 16.5818 12.5345 16.438C12.6782 16.2943 12.75 16.1162 12.75 15.9035C12.75 15.6908 12.6781 15.5127 12.5343 15.3693C12.3904 15.2256 12.2122 15.1538 11.9998 15.1538C11.7871 15.1538 11.609 15.2257 11.4655 15.3695C11.3218 15.5133 11.25 15.6916 11.25 15.9043C11.25 16.1168 11.3219 16.2948 11.4658 16.4385C11.6096 16.582 11.7878 16.6538 12.0003 16.6538ZM12.0003 12.75C12.2129 12.75 12.391 12.6781 12.5345 12.5343C12.6782 12.3904 12.75 12.2122 12.75 11.9997C12.75 11.7871 12.6781 11.609 12.5343 11.4655C12.3904 11.3218 12.2122 11.25 11.9998 11.25C11.7871 11.25 11.609 11.3219 11.4655 11.4658C11.3218 11.6096 11.25 11.7878 11.25 12.0003C11.25 12.2129 11.3219 12.391 11.4658 12.5345C11.6096 12.6782 11.7878 12.75 12.0003 12.75ZM12.0003 8.84625C12.2129 8.84625 12.391 8.77433 12.5345 8.6305C12.6782 8.48667 12.75 8.30842 12.75 8.09575C12.75 7.88325 12.6781 7.70517 12.5343 7.5615C12.3904 7.418 12.2122 7.34625 11.9998 7.34625C11.7871 7.34625 11.609 7.41817 11.4655 7.562C11.3218 7.70567 11.25 7.88383 11.25 8.0965C11.25 8.30917 11.3219 8.48725 11.4658 8.63075C11.6096 8.77442 11.7878 8.84625 12.0003 8.84625ZM19.6923 19.5H4.30775C3.81058 19.5 3.385 19.323 3.031 18.969C2.677 18.615 2.5 18.1894 2.5 17.6923V14.404C3.06933 14.295 3.545 14.0157 3.927 13.5662C4.309 13.1169 4.5 12.5948 4.5 12C4.5 11.4052 4.309 10.8831 3.927 10.4337C3.545 9.98425 3.06933 9.705 2.5 9.596V6.30775C2.5 5.81058 2.677 5.385 3.031 5.031C3.385 4.677 3.81058 4.5 4.30775 4.5H19.6923C20.1894 4.5 20.615 4.677 20.969 5.031C21.323 5.385 21.5 5.81058 21.5 6.30775V9.596C20.9307 9.705 20.455 9.98425 20.073 10.4337C19.691 10.8831 19.5 11.4052 19.5 12C19.5 12.5948 19.691 13.1169 20.073 13.5662C20.455 14.0157 20.9307 14.295 21.5 14.404V17.6923C21.5 18.1894 21.323 18.615 20.969 18.969C20.615 19.323 20.1894 19.5 19.6923 19.5ZM19.6923 18C19.7821 18 19.8558 17.9712 19.9135 17.9135C19.9712 17.8558 20 17.7821 20 17.6923V15.45C19.3833 15.0833 18.8958 14.5958 18.5375 13.9875C18.1792 13.3792 18 12.7167 18 12C18 11.2833 18.1792 10.6208 18.5375 10.0125C18.8958 9.40417 19.3833 8.91667 20 8.55V6.30775C20 6.21792 19.9712 6.14417 19.9135 6.0865C19.8558 6.02883 19.7821 6 19.6923 6H4.30775C4.21792 6 4.14417 6.02883 4.0865 6.0865C4.02883 6.14417 4 6.21792 4 6.30775V8.55C4.61667 8.91667 5.10417 9.40417 5.4625 10.0125C5.82083 10.6208 6 11.2833 6 12C6 12.7167 5.82083 13.3792 5.4625 13.9875C5.10417 14.5958 4.61667 15.0833 4 15.45V17.6923C4 17.7821 4.02883 17.8558 4.0865 17.9135C4.14417 17.9712 4.21792 18 4.30775 18H19.6923Z"
                            fill="#333333" />
                    </svg>
                    <span>{{ __('admin.Support Ticket') }}</span></a>
            </li>

            <li class="{{ Route::is('user.cart') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.cart') }}"><i class="far fa-newspaper"></i>
                    <span>{{ __('admin.Cart') }}</span></a>
            </li>

            <li class="{{ Route::is('user.campaigns') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.campaigns') }}"><i class="far fa-newspaper"></i>
                    <span>{{ __('admin.campaigns') }}</span></a>
            </li>










            <li class="icon-svg {{ Route::is('user.edit-profile') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.edit-profile') }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.0001 0H4.00012C1.79098 0 0.00012207 1.79086 0.00012207 4V16C0.00012207 17.8642 1.27544 19.4306 3.00123 19.8743C3.32052 19.9563 3.65522 20 4.00012 20H16.0001C16.345 20 16.6797 19.9563 16.999 19.8743C18.7248 19.4306 20.0001 17.8642 20.0001 16V4C20.0001 1.79086 18.2093 0 16.0001 0ZM13.0001 7C13.0001 5.34315 11.657 4 10.0001 4C8.34327 4 7.00012 5.34315 7.00012 7C7.00012 8.65685 8.34327 10 10.0001 10C11.657 10 13.0001 8.65685 13.0001 7ZM5.15269 15.0155C5.70097 13.2824 7.66335 12 10.0001 12C12.3369 12 14.2993 13.2824 14.8475 15.0155C15.0141 15.5421 14.5524 16 14.0001 16H6.00012C5.44784 16 4.98611 15.5421 5.15269 15.0155Z">
                        </path>
                    </svg>
                    <span>{{ __('admin.My Profile') }}</span></a>
            </li>

            {{-- <li class="icon-svg">
                <a class="nav-link {{ Route::is('user.change-password') ? 'active' : '' }}"
                    href="{{ route('user.change-password') }}">
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.00012 0.25C5.37677 0.25 3.25012 2.49007 3.25012 5.25333V5.32204C1.39948 5.6731 0.00012207 7.29905 0.00012207 9.25184V15.9985C0.00012207 18.2077 1.79098 19.9985 4.00012 19.9985H12.0001C14.2093 19.9985 16.0001 18.2077 16.0001 15.9985V9.25185C16.0001 7.29905 14.6008 5.6731 12.7501 5.32204V5.25333C12.7501 2.49007 10.6235 0.25 8.00012 0.25ZM11.2501 5.25185C11.2494 3.36187 9.79458 1.83 8.00012 1.83C6.20567 1.83 4.75089 3.36187 4.75012 5.25185H11.2501ZM10.0001 12.626C10.0001 13.7895 9.10469 14.7327 8.00012 14.7327C6.89555 14.7327 6.00012 13.7895 6.00012 12.626C6.00012 11.4626 6.89555 10.5194 8.00012 10.5194C9.10469 10.5194 10.0001 11.4626 10.0001 12.626Z">
                        </path>
                    </svg>
                    <span class="inflanar-psidebar__title">{{ __('admin.Change Password') }}</span>
                </a>
            </li> --}}


            <li class="icon-svg">
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logout_modal">

                    <i class="fas fa-sign-out-alt"></i>

                    <span class="inflanar-psidebar__title">{{ __('admin.Logout') }}</span>
                </a>


            </li>

        </ul>

    </aside>
</div>

<div class="inflanar-preview__modal modal fade" id="logout_modal" tabindex="-1" aria-labelledby="logoutmodal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered inflanar-preview__logout">
        <div class="modal-content">
            <div class="modal-header inflanar__modal__header">
                <h4 class="modal-title inflanar-preview__modal-title" id="logoutmodal">{{ __('admin.Confirm') }}</h4>
                <button type="button" class="inflanar-preview__modal--close btn-close" data-bs-dismiss="modal"
                    aria-label="Close"><i class="fas fa-remove"></i></button>
            </div>
            <div class="modal-body inflanar-modal__body">
                <div class="inflanar-preview__close">
                    <div class="inflanar-preview__close-img">
                        <img src="{{ asset('frontend/img/in-logout-icon.svg') }}" alt="#">
                    </div>
                    <h2 class="inflanar-preview__close-title">{{ __('admin.Are you sure you want to Logout') }}
                        <span>{{ __('admin.Inflanar?') }}</span>
                    </h2>
                    <div class="inflanar__item-button--group">


                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                onclick="event.preventDefault();
                            this.closest('form').submit();"
                                class="inflanar-btn" type="submit">{{ __('admin.Yes Logout') }}</button>
                        </form>

                        <button class="inflanar-btn inflanar-btn__cancel" data-bs-dismiss="modal">
                            <span class="ntfmax__btn-textgr">{{ __('admin.Cancel') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Logout Modal -->

<!-- <script>
    (function($) {
        "use strict";
        $(document).ready(function() {
            $("#upload_user_avatar_form").on("submit", function(e) {
                e.preventDefault();

                var isDemo = "{{ env('APP_MODE') }}"
                if (isDemo == 'DEMO') {
                    toastr.error('This Is Demo Version. You Can Not Change Anything');
                    return;
                }

                $.ajax({
                    type: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    url: "{{ route('user.upload-user-avatar') }}",
                    success: function(response) {
                        toastr.success(response.message)
                    },
                    error: function(response) {

                    }
                });
            })
        });
    })(jQuery);


    function previewThumnailImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview-user-avatar');
            output.src = reader.result;
        }

        reader.readAsDataURL(event.target.files[0]);
        $("#upload_user_avatar_form").submit();
    };
</script>

     -->
