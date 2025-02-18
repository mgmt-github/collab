@extends('layout')
@section('title')
    <title>{{ __('admin.Forget Password') }}</title>
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

        .forgetpass-page .inflanar-signin__forgot,
        .forgetpass-page .inflanar-signin__text a {
            color: #B69A0E;
        }


        .forgetpass-page {
            background: #F4F4F4;
            min-height: 100vh;
            padding: 50px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            font-family: 'Poppins';
        }

        .forgetpass-page .inflanar-signin__body {
            padding: 30px 80px;
            box-shadow: none;
            border-radius: 0px;
        }

        .forgetpass-page .inflanar-signin__title {
            font-size: 30px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .forgetpass-page {
                background: #F4F4F4;
                min-height: 100vh;
                padding: 10px 0;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                font-family: 'Poppins';
            }

            .forgetpass-page .inflanar-signin__body {
                padding: 10px;
                box-shadow: none;
                border-radius: 0px;
            }

            .forgetpass-page .inflanar-signin__title {
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
            }

        }

        .forgetpass-page .inflanar-signin__welcome {
            padding: 40px 70px
        }

        .forgetpass-page .inflanar-form-input input {
            border-radius: 8px;
            padding: 8px 0px 8px 16px;
            border: 1px solid #D1D1D1;
            background: #FFF;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .forgetpass-page .inflanar-btn {
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
    </style>
    <section class="inflanar-signin forgetpass-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inflanar-signin__body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="inflanar-signin__logins">
                                    <!-- Login header -->
                                    <div class="inflanar-signin__header mg-btm-10">
                                        <div class="inflanar-signin__heading">
                                            <h4 class="inflanar-signin__title">{{ __('admin.Forget Your Password ?') }}</h4>
                                            <p class="inflanar-signin__tag">
                                                {{ __('admin.Did you forget your password ? Dont worry. Please submit below form using your email, and get a reset password link.') }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Login header -->
                                    <div class="inflanar-signin__inner mg-top-20">
                                        <form method="POST" action="{{ route('forget-password') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group inflanar-form-input">
                                                        <label>{{ __('admin.Email') }}*</label>
                                                        <input class="ecom-wc__form-input" type="email" name="email"
                                                            placeholder="{{ __('admin.Email') }}">
                                                    </div>

                                                    @if ($google_recaptcha->status == 1)
                                                        <div class="form-group inflanar-form-input mg-top-20">
                                                            <div class="g-recaptcha"
                                                                data-sitekey="{{ $google_recaptcha->site_key }}"></div>
                                                        </div>
                                                    @endif

                                                    <!-- Login Button Group -->
                                                    <div class="form-group mg-top-30">
                                                        <button type="submit"
                                                            class="inflanar-btn"><span>{{ __('admin.Send Reset Link') }}</span></button>
                                                    </div>
                                                    <div class="inflanar-signin__bottom">
                                                        <p class="inflanar-signin__text mg-top-20">
                                                            {{ __('admin.Go to login page') }} <a
                                                                href="{{ route('login') }}">{{ __('admin.Login') }}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
@endsection
