@extends('layout')
@section('title')
    <title>{{ __('admin.Login') }}</title>
@endsection
@section('frontend-content')
    <!-- Sign In -->
    <section class="inflanar-signin mg-top-70 pd-top-120 pd-btm-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inflanar-signin__body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="inflanar-signin__logins">
                                    <!-- Login header -->
                                    <!-- End Login header -->

                                    <div class="tab-content mg-top-30" id="nav-tabContent">
                                        <!-- Single Tab -->
                                        <div class="tab-pane fade active show" id="in-tab9" role="tabpanel">
                                            <div class="inflanar-signin__inner">
                                                <form method="POST" action="{{ route('user-login') }}">
                                                    @csrf
                                                    <input type="hidden" name="user_type" value="client">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Email') }}*</label>
                                                                @if (env('APP_MODE') == 'DEMO')
                                                                    <input class="ecom-wc__form-input" type="email"
                                                                        name="email" value="client@gmail.com">
                                                                @else
                                                                    <input class="ecom-wc__form-input" type="email"
                                                                        name="email">
                                                                @endif

                                                            </div>
                                                            <div class="form-group inflanar-form-input mg-top-20">
                                                                <label>{{ __('admin.Password') }}*</label>
                                                                @if (env('APP_MODE') == 'DEMO')
                                                                    <input class="inflanar-signin__form-input"
                                                                        id="password-field" type="password" name="password"
                                                                        value="1234">
                                                                @else
                                                                    <input class="inflanar-signin__form-input"
                                                                        id="password-field" type="password" name="password">
                                                                @endif


                                                            </div>
                                                            <div class="form-group mg-top-20">
                                                                <div class="inflanar-signin__check-inline">
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
                                                                    class="inflanar-btn"><span>{{ __('admin.Log In') }}</span></button>
                                                            </div>
                                                            <div class="inflanar-signin__bottom">
                                                                <div class="inflanar-signin__form-login--label">
                                                                    <span>{{ __('admin.OR') }}</span></div>
                                                                <!-- Login Button Group -->
                                                                <div class="inflanar-signin__button--group">

                                                                    <a href="{{ route('login-google') }}"
                                                                        class="inflanar-btn inflanar-btn__other"
                                                                        type="button">
                                                                        <div class="inflanar-signin__btn-icon"><img
                                                                                src="{{ asset('frontend/img/in-google-logo.png') }}">
                                                                        </div>{{ __('admin.Sign In with Google') }}
                                                                    </a>

                                                                    <a href="{{ route('login-facebook') }}"
                                                                        class="inflanar-btn inflanar-btn__other"
                                                                        type="button">
                                                                        <div class="inflanar-signin__btn-icon"><img
                                                                                src="{{ asset('frontend/img/in-facebook-logo.png') }}">
                                                                        </div>{{ __('admin.Sign In with Facebook') }}
                                                                    </a>
                                                                </div>
                                                                <p class="inflanar-signin__text mg-top-20">
                                                                    {{ __('admin.Don’t have an account ?') }} <a
                                                                        href="{{ route('register') }}">{{ __('admin.Create Account') }}</a>
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
                                <div class="inflanar-signin__welcome inflanar-bg-cover inflanar-section-shape18">
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
