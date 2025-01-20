@extends('layout')
@section('title')
    <title>{{ __('admin.Login') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')
    <!-- Sign In -->
    <style>
        .footer-cta,
        .footer-area,
        .inflanar-header.inflanar-header__v2 {
            display: none;
        }

        .login-page .inflanar-signin__forgot,
        .login-page .inflanar-signin__text a {
            color: #2266CB;
        }

        .login-page .inflanar-signin__button--group {
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 80px;
        }

        .login-page .inflanar-btn-login {
            border-radius: 8px;
            background: #ECCB28;
            display: flex;
            width: 100%;
            height: 48px;
            padding: 8px 16px;
            justify-content: center;
            align-items: center;
            gap: 4px;
            font-family: 'Poppins';
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        .influencer-btn {
            background: #4C4AD9 !important;
        }

        .login-page .list-group {
            border-radius: 0px
        }

        .login-page .inflanar-signin__options a {
            border-radius: 0px;
        }

        .client-link-color {
            color: #B69A0E !important;
        }

        /* tab starts  */
        .login-page .inflanar-signin__options {
            display: flex;
            justify-content: center;
            gap: 1px;
            color: #000
        }

        .login-page .list-group .list-group-item {
            flex: 1;
            text-align: center;
            border: 1px solid #D4D4D4 !important;
            border-bottom: none !important;
            background-color: inherit;
            color: #333;
            padding: 20px;
            transition: all 0.3s ease;
            font-family: 'Poppins';
            font-size: 26px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        /* for client tab  */
        .login-page .list-group .list-group-item:nth-child(1).active {
            border: 0px !important;
            border-top: 4px solid #ECCB28 !important;
            border-bottom: none !important;
            background: #FFF !important;
            color: #DBBC25 !important;
        }

        .login-page .list-group .list-group-item:nth-child(1):hover {
            background-color: #f8f9fa !important;
            color: #DBBC25 !important;
        }

        /* Style for Influencer tab */
        .login-page .list-group .list-group-item:nth-child(2).active {
            background-color: #FFF !important;
            color: #5856D6 !important;
            border-top: 4px solid #5856D6 !important;
        }

        .login-page .list-group .list-group-item:nth-child(2):hover {
            background-color: #f8f9fa !important;
            color: #5856D6 !important;
        }

        /* both tab ends */

        .login-page .inflanar-signin__body {
            padding: 20px 80px 50px 80px;
            box-shadow: none;
            border-radius: 0px;
        }

        .login-page .at-center {
            text-align: center;
            margin-top: 16px !important;
        }

        .login-page .inflanar-signin__form-login--label {
            margin-bottom: 30px;
            margin-top: 43px;
            min-width: 100%;
        }

        .login-page .toggle-password {
            position: absolute;
            top: 70%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #555;
        }

        .login-page .inflanar-signin__form-input {
            width: 100%;
            padding-right: 40px;
        }

        .login-page .inflanar-signin__form-login--label:before {
            width: 100%;
            height: 0.5px;
            border-bottom: 1px solid #313131;
        }

        .login-page .inflanar-signin__form-login--label span {
            font-size: 14px;
        }

        .login-page .inflanar-form-input input {
            border-radius: 8px;
            padding: 8px 0px 8px 16px;
            border: 1px solid #D1D1D1;
            background: #FFF;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .login-page .inflanar-signin {
            background: #F4F4F4;
        }

        .login-page .inflanar-signin__title {
            color: #000;
            font-family: 'Poppins';
            font-size: 30px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        .custom-style {
            background: #F4F4F4;
            min-height: 100vh;
            padding: 81px 110px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .inflanar-back {
            position: absolute;
            left: 50px;
            top: 57px;
            cursor: pointer;
        }

        .login-page input[type=text]:focus {
            border: #DBBC25;
        }

        .login-page input[type="checkbox"]:checked {
            background: #ECCB28;
        }

        .login-page .influencer-checkbox:checked {
            background: #2266CB !important;
        }
    </style>
    <section class="login-page inflanar-signin custom-style">
        <a href="javascript:history.back()" class='inflanar-back'>
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                <path
                    d="M2.57463 10.0474L10.3367 17.807L9.38056 18.7551L0 9.37755L9.38056 0L10.3367 0.948137L2.57463 8.70773L18.7611 8.70773V10.0474L2.57463 10.0474Z"
                    fill="black" />
            </svg>
        </a>
        <div class="container">
            <div class="row">
                <div class="inflanar-login__heading__options">
                    <!--Tab Nav -->
                    <div class="list-group inflanar-signin__options" id="list-tab" role="tablist">
                        <a class="list-group-item active" data-bs-toggle="list" href="#in-tab9" role="tab">
                            <span>{{ __('admin.Client') }}</span>
                        </a>
                        <a class="list-group-item" data-bs-toggle="list" href="#in-tab10" role="tab">
                            <span>{{ __('admin.Influencer') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="inflanar-signin__body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="inflanar-signin__logins">
                                    <!-- Login header -->
                                    <div class="inflanar-signin__header">
                                        <div class="inflanar-signin__heading">
                                            <h4 class="inflanar-signin__title">{{ __('admin.Login') }}</h4>
                                        </div>
                                    </div>
                                    <!-- End Login header -->

                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Single Tab Client-->
                                        <div class="tab-pane fade active show login1" id="in-tab9" role="tabpanel">
                                            <div class="inflanar-signin__inner">
                                                <form method="POST" action="{{ route('user-login') }}">
                                                    @csrf
                                                    <input type="hidden" name="user_type" value="client">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Email') }}</label>
                                                                @if (env('APP_MODE') == 'DEMO')
                                                                    <input class="ecom-wc__form-input" type="email"
                                                                        name="email" value="client@gmail.com">
                                                                @else
                                                                    <input class="ecom-wc__form-input" type="email"
                                                                        name="email">
                                                                @endif

                                                            </div>
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Password') }}</label>
                                                                @if (env('APP_MODE') == 'DEMO')
                                                                    <input
                                                                        class="inflanar-signin__form-input password-field"
                                                                        type="password" name="password" value="1234">
                                                                    <span class="toggle-password"
                                                                        onclick="togglePassword()">
                                                                        <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                    </span>
                                                                @else
                                                                    <input
                                                                        class="inflanar-signin__form-input password-field"
                                                                        type="password" name="password">
                                                                    <span class="toggle-password"
                                                                        onclick="togglePassword()">
                                                                        <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="inflanar-signin__check-inline mg-top-15">
                                                                    <div class="inflanar-signin__checkbox">
                                                                        <div class="inflanar-signin__checkbox--group">

                                                                            <input class="inflanar-signin__form-check"
                                                                                id="checkbox" name="remember"
                                                                                type="checkbox">
                                                                            <label
                                                                                for="checkbox">{{ __('admin.Remember Me') }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="inflanar-signin__forgot">
                                                                        <a href="{{ route('password.request') }}"
                                                                            class="forgot-pass client-link-color">{{ __('admin.Forgot Password?') }}</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @if ($google_recaptcha->status == 1)
                                                                <div class="form-group inflanar-form-input mg-top-20">
                                                                    <div class="g-recaptcha"
                                                                        data-sitekey="{{ $google_recaptcha->site_key }}">
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            <!-- Login Button Group -->
                                                            <div class="form-group mg-top-40">
                                                                <button type="submit"
                                                                    class="inflanar-btn-login inflanar-btn"><span>{{ __('admin.Login') }}</span></button>
                                                            </div>
                                                            <p class="inflanar-signin__text at-center">
                                                                {{ __('admin.Don’t have an account ?') }} <a
                                                                    href="{{ route('register') }}"
                                                                    class="client-link-color">{{ __('admin.Create Account') }}</a>
                                                            </p>

                                                            <div class="inflanar-signin__bottom">
                                                                <div class="inflanar-signin__form-login--label">
                                                                    <span>{{ __('admin.Or login with') }}</span>
                                                                </div>
                                                                <!-- Login Button Group -->
                                                                <div class="inflanar-signin__button--group">
                                                                    <a href="{{ route('login-facebook') }}"
                                                                        class="inflanar-btn__other" type="button"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="24"
                                                                            viewBox="0 0 25 24" fill="none">
                                                                            <path
                                                                                d="M24.1545 12.0733C24.1545 5.40546 18.7819 0 12.1545 0C5.52717 0 0.154541 5.40536 0.154541 12.0733C0.154541 18.0994 4.54279 23.0943 10.2795 24V15.5633H7.23267V12.0733H10.2795V9.41343C10.2795 6.38755 12.0711 4.71615 14.8121 4.71615C16.125 4.71615 17.4983 4.95195 17.4983 4.95195V7.92313H15.9852C14.4944 7.92313 14.0295 8.85381 14.0295 9.80864V12.0733H17.3577L16.8256 15.5633H14.0295V24C19.7663 23.0943 24.1545 18.0995 24.1545 12.0733Z"
                                                                                fill="#1877F2" />
                                                                        </svg></a>

                                                                    <a href="{{ route('login-google') }}"
                                                                        class="inflanar-btn__other" type="button"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="24"
                                                                            viewBox="0 0 25 24" fill="none">
                                                                            <path
                                                                                d="M22.6742 10.0415H21.8687V10H12.8687V14H18.5202C17.6957 16.3285 15.4802 18 12.8687 18C9.55515 18 6.86865 15.3135 6.86865 12C6.86865 8.6865 9.55515 6 12.8687 6C14.3982 6 15.7897 6.577 16.8492 7.5195L19.6777 4.691C17.8917 3.0265 15.5027 2 12.8687 2C7.34615 2 2.86865 6.4775 2.86865 12C2.86865 17.5225 7.34615 22 12.8687 22C18.3912 22 22.8687 17.5225 22.8687 12C22.8687 11.3295 22.7997 10.675 22.6742 10.0415Z"
                                                                                fill="#FFC107" />
                                                                            <path
                                                                                d="M4.02197 7.3455L7.30747 9.755C8.19647 7.554 10.3495 6 12.869 6C14.3985 6 15.79 6.577 16.8495 7.5195L19.678 4.691C17.892 3.0265 15.503 2 12.869 2C9.02797 2 5.69697 4.1685 4.02197 7.3455Z"
                                                                                fill="#FF3D00" />
                                                                            <path
                                                                                d="M12.8688 22.0003C15.4518 22.0003 17.7988 21.0118 19.5733 19.4043L16.4783 16.7853C15.4406 17.5745 14.1725 18.0014 12.8688 18.0003C10.2678 18.0003 8.05931 16.3418 7.22731 14.0273L3.96631 16.5398C5.62131 19.7783 8.98231 22.0003 12.8688 22.0003Z"
                                                                                fill="#30FF38" />
                                                                            <path
                                                                                d="M22.6742 10.0415H21.8687V10H12.8687V14H18.5202C18.1258 15.1082 17.4153 16.0766 16.4767 16.7855L16.4782 16.7845L19.5732 19.4035C19.3542 19.6025 22.8687 17 22.8687 12C22.8687 11.3295 22.7997 10.675 22.6742 10.0415Z"
                                                                                fill="#1976D2" />
                                                                        </svg></a>

                                                                    <a href="#" class="inflanar-btn__other"
                                                                        type="button"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="24"
                                                                            viewBox="0 0 25 24" fill="none">
                                                                            <path
                                                                                d="M18.1002 12.5555C18.0908 10.957 18.815 9.75234 20.2775 8.86406C19.4596 7.69219 18.2221 7.04766 16.5908 6.92344C15.0463 6.80156 13.3564 7.82344 12.7377 7.82344C12.0838 7.82344 10.5885 6.96563 9.41191 6.96563C6.98379 7.00313 4.40332 8.90156 4.40332 12.7641C4.40332 13.9055 4.61191 15.0844 5.0291 16.2984C5.58691 17.8969 7.59785 21.8133 9.69551 21.75C10.7924 21.7242 11.5682 20.9719 12.9955 20.9719C14.3807 20.9719 15.0979 21.75 16.3213 21.75C18.4377 21.7195 20.2564 18.1594 20.7861 16.5563C17.9479 15.218 18.1002 12.6375 18.1002 12.5555ZM15.6369 5.40703C16.8252 3.99609 16.7174 2.71172 16.6822 2.25C15.6322 2.31094 14.4182 2.96484 13.7268 3.76875C12.965 4.63125 12.5174 5.69766 12.6135 6.9C13.7479 6.98672 14.7838 6.40313 15.6369 5.40703Z"
                                                                                fill="#313131" />
                                                                        </svg></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Single Tab Client-->

                                        <!-- Single Tab Influencer -->
                                        <div class="tab-pane fade login2" id="in-tab10" role="tabpanel">
                                            <div class="inflanar-signin__inner">
                                                <form method="POST" action="{{ route('user-login') }}">
                                                    @csrf
                                                    <input type="hidden" name="user_type" value="influencer">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Email') }}</label>
                                                                @if (env('APP_MODE') == 'DEMO')
                                                                    <input class="ecom-wc__form-input" type="email"
                                                                        name="email" value="influencer@gmail.com">
                                                                @else
                                                                    <input class="ecom-wc__form-input" type="email"
                                                                        name="email">
                                                                @endif

                                                            </div>
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Password') }}</label>
                                                                @if (env('APP_MODE') == 'DEMO')
                                                                    <input
                                                                        class="inflanar-signin__form-input password-field"
                                                                        type="password" name="password" value="1234">
                                                                    <span class="toggle-password"
                                                                        onclick="togglePassword()">
                                                                        <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                    </span>
                                                                @else
                                                                    <input
                                                                        class="inflanar-signin__form-input password-field"
                                                                        type="password" name="password">
                                                                    <span class="toggle-password"
                                                                        onclick="togglePassword()">
                                                                        <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group mg-top-20">
                                                                <div class="inflanar-signin__check-inline">
                                                                    <div class="inflanar-signin__checkbox">
                                                                        <div class="inflanar-signin__checkbox--group">

                                                                            <input
                                                                                class="inflanar-signin__form-check influencer-checkbox"
                                                                                id="checkbox" name="remember"
                                                                                type="checkbox">
                                                                            <label
                                                                                for="checkbox">{{ __('admin.Remember Me') }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="inflanar-signin__forgot">
                                                                        <a href="{{ route('password.request') }}"
                                                                            class="forgot-pass">{{ __('admin.Forgot Password?') }}</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @if ($google_recaptcha->status == 1)
                                                                <div class="form-group inflanar-form-input mg-top-20">
                                                                    <div class="g-recaptcha"
                                                                        data-sitekey="{{ $google_recaptcha->site_key }}">
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            <!-- Login Button Group -->
                                                            <div class="form-group mg-top-40">
                                                                <button type="submit"
                                                                    class="inflanar-btn-login inflanar-btn influencer-btn"><span>{{ __('admin.Log In') }}</span></button>
                                                            </div>
                                                            <p class="inflanar-signin__text at-center">
                                                                {{ __('admin.Don’t have an account ?') }} <a
                                                                    href="{{ route('register') }}">{{ __('admin.Create Account') }}</a>
                                                            </p>
                                                            <div class="inflanar-signin__bottom">
                                                                <div class="inflanar-signin__form-login--label">
                                                                    <span>{{ __('admin.Or login with') }}</span>
                                                                </div>
                                                                <!-- Login Button Group -->
                                                                <div class="inflanar-signin__button--group">

                                                                    <a href="{{ route('login-facebook') }}"
                                                                        class="inflanar-btn__other" type="button"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="24"
                                                                            viewBox="0 0 25 24" fill="none">
                                                                            <path
                                                                                d="M24.1545 12.0733C24.1545 5.40546 18.7819 0 12.1545 0C5.52717 0 0.154541 5.40536 0.154541 12.0733C0.154541 18.0994 4.54279 23.0943 10.2795 24V15.5633H7.23267V12.0733H10.2795V9.41343C10.2795 6.38755 12.0711 4.71615 14.8121 4.71615C16.125 4.71615 17.4983 4.95195 17.4983 4.95195V7.92313H15.9852C14.4944 7.92313 14.0295 8.85381 14.0295 9.80864V12.0733H17.3577L16.8256 15.5633H14.0295V24C19.7663 23.0943 24.1545 18.0995 24.1545 12.0733Z"
                                                                                fill="#1877F2" />
                                                                        </svg></a>

                                                                    <a href="{{ route('login-google') }}"
                                                                        class="inflanar-btn__other" type="button"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="24"
                                                                            viewBox="0 0 25 24" fill="none">
                                                                            <path
                                                                                d="M22.6742 10.0415H21.8687V10H12.8687V14H18.5202C17.6957 16.3285 15.4802 18 12.8687 18C9.55515 18 6.86865 15.3135 6.86865 12C6.86865 8.6865 9.55515 6 12.8687 6C14.3982 6 15.7897 6.577 16.8492 7.5195L19.6777 4.691C17.8917 3.0265 15.5027 2 12.8687 2C7.34615 2 2.86865 6.4775 2.86865 12C2.86865 17.5225 7.34615 22 12.8687 22C18.3912 22 22.8687 17.5225 22.8687 12C22.8687 11.3295 22.7997 10.675 22.6742 10.0415Z"
                                                                                fill="#FFC107" />
                                                                            <path
                                                                                d="M4.02197 7.3455L7.30747 9.755C8.19647 7.554 10.3495 6 12.869 6C14.3985 6 15.79 6.577 16.8495 7.5195L19.678 4.691C17.892 3.0265 15.503 2 12.869 2C9.02797 2 5.69697 4.1685 4.02197 7.3455Z"
                                                                                fill="#FF3D00" />
                                                                            <path
                                                                                d="M12.8688 22.0003C15.4518 22.0003 17.7988 21.0118 19.5733 19.4043L16.4783 16.7853C15.4406 17.5745 14.1725 18.0014 12.8688 18.0003C10.2678 18.0003 8.05931 16.3418 7.22731 14.0273L3.96631 16.5398C5.62131 19.7783 8.98231 22.0003 12.8688 22.0003Z"
                                                                                fill="#30FF38" />
                                                                            <path
                                                                                d="M22.6742 10.0415H21.8687V10H12.8687V14H18.5202C18.1258 15.1082 17.4153 16.0766 16.4767 16.7855L16.4782 16.7845L19.5732 19.4035C19.3542 19.6025 22.8687 17 22.8687 12C22.8687 11.3295 22.7997 10.675 22.6742 10.0415Z"
                                                                                fill="#1976D2" />
                                                                        </svg></a>

                                                                    <a href="#" class="inflanar-btn__other"
                                                                        type="button"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="24"
                                                                            viewBox="0 0 25 24" fill="none">
                                                                            <path
                                                                                d="M18.1002 12.5555C18.0908 10.957 18.815 9.75234 20.2775 8.86406C19.4596 7.69219 18.2221 7.04766 16.5908 6.92344C15.0463 6.80156 13.3564 7.82344 12.7377 7.82344C12.0838 7.82344 10.5885 6.96563 9.41191 6.96563C6.98379 7.00313 4.40332 8.90156 4.40332 12.7641C4.40332 13.9055 4.61191 15.0844 5.0291 16.2984C5.58691 17.8969 7.59785 21.8133 9.69551 21.75C10.7924 21.7242 11.5682 20.9719 12.9955 20.9719C14.3807 20.9719 15.0979 21.75 16.3213 21.75C18.4377 21.7195 20.2564 18.1594 20.7861 16.5563C17.9479 15.218 18.1002 12.6375 18.1002 12.5555ZM15.6369 5.40703C16.8252 3.99609 16.7174 2.71172 16.6822 2.25C15.6322 2.31094 14.4182 2.96484 13.7268 3.76875C12.965 4.63125 12.5174 5.69766 12.6135 6.9C13.7479 6.98672 14.7838 6.40313 15.6369 5.40703Z"
                                                                                fill="#313131" />
                                                                        </svg></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Single Tab Influencer-->
                                    </div>
                                </div>
                            </div>
                            <!-- Image Block  -->
                            <div class="col-lg-6 col-12 d-none d-lg-block">
                                <div class="inflanar-signin__welcome inflanar-bg-cover">
                                    <img src="{{ asset($setting->login_page_bg) }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign In -->
    <script>
        document.querySelectorAll('.toggle-password').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const passwordField = this.previousElementSibling;
                const icon = this.querySelector('i');
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    passwordField.type = 'password';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });
        });
    </script>
@endsection
