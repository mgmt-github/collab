@extends('layout')
@section('title')
    <title>{{ __('admin.Register') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')
    <!-- Sign In -->
    <style>
        .footer-area,
        .inflanar-header.inflanar-header__v2,
        .footer-cta__inner,
        .inflanar-section-shape3 {
            display: none;
        }

        .signup-page .inflanar-signin__forgot,
        .signup-page .inflanar-signin__text a {
            color: #2266CB;
        }

        .signup-page {
            background: #F4F4F4;
            min-height: 100vh;
            padding: 81px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            font-family: 'Poppins';
        }

        .signup-page .inflanar-signin__body {
            padding: 20px 80px 50px 80px;
            box-shadow: none;
            border-radius: 0px;
        }

        .signup-page .list-group .list-group-item {
            flex: 1;
            text-align: center;
            border: 1px solid #D4D4D4 !important;
            border-bottom: none !important;
            background-color: inherit;
            color: #333;
            padding: 20px;
            transition: all 0.3s ease;
            font-size: 26px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .signup-page .inflanar-signin__title {
            font-size: 30px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (max-width: 1200px) {
            .signup-page {
                background: #F4F4F4;
                min-height: 100vh;
                padding: 50px 20px;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }

            .signup-page .inflanar-signin__body {
                padding: 20px 80px 50px 80px;
                box-shadow: none;
                border-radius: 0px;
            }

            .signup-page .list-group .list-group-item {
                flex: 1;
                text-align: center;
                border: 1px solid #D4D4D4 !important;
                border-bottom: none !important;
                background-color: inherit;
                color: #333;
                padding: 20px;
                transition: all 0.3s ease;
                font-size: 26px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .signup-page .inflanar-signin__title {
                font-size: 30px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
            }

        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .signup-page {
                background: #F4F4F4;
                min-height: 100vh;
                padding: 10px 0;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }

            .signup-page .inflanar-signin__body {
                padding: 10px;
                box-shadow: none;
                border-radius: 0px;
            }

            .signup-page .list-group .list-group-item {
                flex: 1;
                text-align: center;
                border: 1px solid #D4D4D4 !important;
                border-bottom: none !important;
                background-color: inherit;
                color: #333;
                padding: 10px;
                transition: all 0.3s ease;
                font-family: 'Poppins';
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .signup-page .inflanar-signin__title {
                color: #000;
                font-family: 'Poppins';
                font-size: 26px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
            }

        }


        .signup-page .inflanar-signin__options a {
            border-radius: 0px;
        }

        /* tab starts  */
        .signup-page .inflanar-signin__options {
            display: flex;
            justify-content: center;
            gap: 1px;
            color: #000
        }

        .signup-page .list-group {
            border-radius: 0px
        }

        /* for client tab  */
        .signup-page .list-group .list-group-item:nth-child(1).active {
            border: 0px !important;
            border-top: 4px solid #ECCB28 !important;
            border-bottom: none !important;
            background: #FFF !important;
            color: #DBBC25 !important;
        }

        .signup-page .list-group .list-group-item:nth-child(1):hover {
            background-color: #f8f9fa !important;
            color: #DBBC25 !important;
        }

        /* Style for Influencer tab */
        .signup-page .list-group .list-group-item:nth-child(2).active {
            background-color: #FFF !important;
            color: #5856D6 !important;
            border-top: 4px solid #5856D6 !important;
        }

        .signup-page .list-group .list-group-item:nth-child(2):hover {
            background-color: #f8f9fa !important;
            color: #5856D6 !important;
        }


        .signup-page .inflanar-signin {
            background: #F4F4F4;
        }


        .signup-page .inflanar-form-input input {
            border-radius: 8px;
            padding: 8px 0px 8px 16px;
            border: 1px solid #D1D1D1;
            background: #FFF;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .signup-page input[type="checkbox"]:checked {
            background: #ECCB28;
        }

        .signup-page .influencer-checkbox:checked {
            background: #2266CB !important;
        }

        .signup-page .toggle-password {
            position: absolute;
            top: 70%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #555;
        }

        .signup-page .inflanar-signin__check-inline label a {
            color: #2266CB
        }

        .client-link-color {
            color: #B69A0E !important;
        }

        .signup-page .inflanar-btn {
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
    </style>
    <section class="inflanar-signin signup-page">
        <div class="container">
            <div class="row">
                <div class="inflanar-signin__heading__options">
                    <!--Tab Nav -->
                    <div class="list-group inflanar-signin__options" id="list-tab" role="tablist">
                        <a class="list-group-item active" data-bs-toggle="list" href="#in-tab11" role="tab">
                            <span>{{ __('admin.Client') }}</span>
                        </a>
                        <a class="list-group-item" data-bs-toggle="list" href="#in-tab12" role="tab">
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
                                            <h4 class="inflanar-signin__title">{{ __('admin.SignUp') }}</h4>
                                        </div>
                                    </div>
                                    <!-- End Login header -->

                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Single Tab -->
                                        <div class="tab-pane fade active show" id="in-tab11" role="tabpanel">
                                            <div class="inflanar-signin__inner">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Name') }}*</label>
                                                                <input class="ecom-wc__form-input" type="text"
                                                                    name="name" placeholder="{{ __('admin.Name') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Email') }}*</label>
                                                                <input class="ecom-wc__form-input" type="text"
                                                                    name="email" placeholder="{{ __('admin.Email') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Password') }}*</label>
                                                                <input class="ecom-wc__form-input password-field"
                                                                    type="password" name="password"
                                                                    placeholder="{{ __('admin.Password') }}">
                                                                <span class="toggle-password" onclick="togglePassword()">
                                                                    <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Confirm Password') }}*</label>
                                                                <input class="ecom-wc__form-input password-field"
                                                                    type="password" name="password_confirmation"
                                                                    placeholder="{{ __('admin.Confirm Password') }}">
                                                                <span class="toggle-password" onclick="togglePassword()">
                                                                    <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group mg-top-20">
                                                                <div class="inflanar-signin__check-inline">
                                                                    <div class="inflanar-signin__checkbox">
                                                                        <div class="inflanar-signin__checkbox--group">
                                                                            <input required
                                                                                class="inflanar-signin__form-check"
                                                                                id="checkbox" name="checkbox"
                                                                                type="checkbox">
                                                                            <label
                                                                                for="checkbox">{{ __('admin.I agree with the') }}
                                                                                <a href="{{ route('terms-conditions') }}"
                                                                                    class="forgot-pass client-link-color">{{ __('admin.Terms and Conditions') }}</a></label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            @if ($google_recaptcha->status == 1)
                                                                <div class="col-12">
                                                                    <div class="form-group inflanar-form-input mg-top-20">
                                                                        <div class="g-recaptcha"
                                                                            data-sitekey="{{ $google_recaptcha->site_key }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            <!-- Login Button Group -->
                                                            <div class="form-group mg-top-40">
                                                                <button type="submit"
                                                                    class="inflanar-btn"><span>{{ __('admin.Create Account') }}</span></button>
                                                            </div>
                                                            <div class="inflanar-signin__bottom mg-top-20">
                                                                <p class="inflanar-signin__text">
                                                                    {{ __('admin.Alread have an account?') }} <a
                                                                        href="{{ route('login') }}"
                                                                        class="client-link-color">{{ __('admin.Login') }}</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Single Tab -->
                                        <!-- Single Tab -->
                                        <div class="tab-pane fade" id="in-tab12" role="tabpanel">
                                            <div class="inflanar-signin__inner">
                                                <form action="{{ route('influencer-register') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Name') }}*</label>
                                                                <input class="ecom-wc__form-input" type="text"
                                                                    name="name" placeholder="{{ __('admin.Name') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Designation') }}*</label>
                                                                <input class="ecom-wc__form-input" type="text"
                                                                    name="designation"
                                                                    placeholder="{{ __('admin.Designation') }}">
                                                            </div>
                                                        </div>



                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Email') }}*</label>
                                                                <input class="ecom-wc__form-input" type="email"
                                                                    name="email"
                                                                    placeholder="{{ __('admin.Email Address') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Phone') }}*</label>
                                                                <input class="ecom-wc__form-input" type="text"
                                                                    name="phone"
                                                                    placeholder="{{ __('admin.Phone Number') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Country') }}*</label>
                                                                <input class="ecom-wc__form-input" type="text"
                                                                    name="country"
                                                                    placeholder="{{ __('admin.Country') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Address') }}*</label>
                                                                <input class="ecom-wc__form-input" type="text"
                                                                    name="address"
                                                                    placeholder="{{ __('admin.Type Address') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Password') }}*</label>
                                                                <input class="ecom-wc__form-input password-field"
                                                                    type="password" name="password"
                                                                    placeholder="{{ __('admin.Password') }}">
                                                                <span class="toggle-password" onclick="togglePassword()">
                                                                    <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Confirm Password') }}*</label>
                                                                <input class="ecom-wc__form-input password-field"
                                                                    type="password" name="password_confirmation"
                                                                    placeholder="{{ __('admin.Confirm Password') }}">
                                                                <span class="toggle-password" onclick="togglePassword()">
                                                                    <i id="toggle-icon" class="fas fa-eye-slash"></i>
                                                                </span>
                                                            </div>
                                                        </div>



                                                        <div class="col-12">
                                                            <div class="form-group mg-top-20">
                                                                <div class="inflanar-signin__check-inline">
                                                                    <div class="inflanar-signin__checkbox">
                                                                        <div class="inflanar-signin__checkbox--group">
                                                                            <input required
                                                                                class="inflanar-signin__form-check influencer-checkbox"
                                                                                id="checkbox1" name="checkbox"
                                                                                type="checkbox">
                                                                            <label
                                                                                for="checkbox1">{{ __('admin.I agree with the') }}
                                                                                <a href="{{ route('terms-conditions') }}"
                                                                                    class="forgot-pass">{{ __('admin.Terms and Conditions') }}</a></label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            @if ($google_recaptcha->status == 1)
                                                                <div class="col-12">
                                                                    <div class="form-group inflanar-form-input mg-top-20">
                                                                        <div class="g-recaptcha"
                                                                            data-sitekey="{{ $google_recaptcha->site_key }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif


                                                            <div class="form-group mg-top-40">
                                                                <button type="submit"
                                                                    class="inflanar-btn influencer-btn"><span>{{ __('admin.Create Account') }}</span></button>
                                                            </div>

                                                            <div class="inflanar-signin__bottom mg-top-20">
                                                                <p class="inflanar-signin__text">
                                                                    {{ __('admin.Dont’t have an aceount ?') }} <a
                                                                        href="{{ route('login') }}">{{ __('admin.Login') }}</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Single Tab -->
                                    </div>
                                </div>
                            </div>
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
