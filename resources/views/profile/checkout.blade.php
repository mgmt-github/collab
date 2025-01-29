@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Checkout') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')
    <style>
        .custom-font {
            margin: 0;
            font-family: "Poppins", serif;
            background: linear-gradient(0deg, #f4f6f9 0%, #f4f6f9 100%), #fff;
        }


        .country-code-input {
            border-radius: 6.694px !important;
            border: 0.837px solid #cfcfcf !important;
            height: 40px !important;
            background: #fff !important;
            padding-left: 5px !important;
            font-family: "Poppins" !important;
        }


        /* order steps  */
        .steps {
            display: inline-flex;
            flex-direction: row;
            border: none;
            border-radius: 0px;
            gap: 35px;
        }

        .steps a,
        a::before {
            transition: all 0.3s ease;
        }

        .steps a {
            border: none;
            display: flex;
            align-items: center;
            gap: 16px;
            background: transparent !important;
            color: #B1B5C3 !important;
            padding: 0;
            padding-bottom: 20px;
            padding-right: 30px;
            border-bottom: 2px solid #B1B5C3;
            width: 256px;
            font-weight: 500;
            font-size: 18px;
        }

        .steps a.active,
        .steps a:hover {
            color: #5856D6 !important;
        }

        .steps-item.active {
            z-index: 2;
            border-color: #5856D6;
            border-bottom: 2px solid #5856D6
        }

        .steps a.active span,
        .steps a:hover span {
            background: #5856D6;
        }

        .steps a span {
            width: 52px;
            height: 52px;
            background: #B1B5C3;
            display: inline-block;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            border-radius: 100%;
        }

        /* order steps end  */
        .order-wrap {
            width: 100%;
            min-height: 100vh;
        }

        .order-container {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .inputs-group .form-wrap {
            width: 712px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-row-expiry {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-col label {
            display: block;
            margin-bottom: 10px;
        }

        .order-sidebar .inputs-group .form-input-single {
            margin-bottom: 20px;
            width: 100%;
        }

        .order-sidebar .inputs-group .form-input-single label {
            display: block;
            margin-bottom: 10px;
        }

        .order-sidebar .inputs-group .form-input-single input {
            border-radius: 6.694px;
            border: 0.837px solid #cfcfcf;
            max-width: inherit;
            width: 100%;
            height: 40px;
            background: #fff;
            padding-left: 5px;
        }

        .form-col-input-width {
            width: 50%;
        }

        .form-col-input-width input {
            width: 185px;
            border-radius: 6.694px;
            border: 0.837px solid #cfcfcf;
            height: 1px;
            background: #fff;
            padding: 18px;
        }

        .form-col-input-width label {
            display: block;
            margin-bottom: 10px;
        }

        .order-sidebar .form-col input {
            border-radius: 6.694px;
            border: 0.837px solid #cfcfcf;
            height: 40px;
            background: #fff;
            padding-left: 10px;
        }

        .order-sidebar {
            border-radius: 14px;
            border: 1px solid #e6e6e6;
            background: #fff;
            padding: 30px;
            width: 60%;
            flex-grow: 1;
        }

        .order-aside {
            border-radius: 14px;
            border: 1px solid #e6e6e6;
            background: #fff;
            padding: 30px;
            width: 40%;
            max-height: 800px;
            overflow-y: auto;
        }

        .order-wrap h3 {
            margin: 0px 0px 15px 0px;
        }

        .order-form {
            border-radius: 12px;
            border: 1px solid #e6e6e6;
            background: #fff;
            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.07);
            padding: 18px;
            margin-top: 20px;
        }

        .card-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-option h5 {
            color: #000;
            font-family: "Poppins", serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .order-sidebar h3 {
            margin: 0px;
            color: #000;
            font-family: "Poppins", serif;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 32px;
        }

        .order-aside h4 {
            color: #23262f;
            font-family: "Poppins", serif;
            font-size: 30px;
            font-style: normal;
            font-weight: 500;
            line-height: 40px;
            letter-spacing: -0.3px;
            margin: 0px;
        }

        hr.border {
            border: 1px solid #e6e8ec;
            margin: 25px 0px;
        }

        .payment-fields {
            border-radius: 12px;
            border: 1px solid #e6e6e6;
            background: #fff;
            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.07);
            margin-top: 20px;
            /* height: 285px; */
        }

        .image-box {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .image-box img {
            width: 75px;
            height: 75px;
            border-radius: 6px;
        }

        .aside-inner-sec {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0;
        }

        .aside-inner-sec h4 {
            color: #000;
            font-family: "Poppins", serif;
            font-size: 20px !important;
            font-style: normal;
            font-weight: 400;
            line-height: 32px;
        }

        .aside-inner-sec h5 {
            color: #777e90;
            font-family: "Poppins", serif;
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: 32px;
            margin: 6px 0px 0px 0px;
        }

        .aside-inner-sec h6 {
            color: #000;
            font-family: "Poppins", serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 28.439px;
            margin-top: -10px;
        }

        .total-amount {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .total-amount h4 {
            color: #000;
            text-align: center;
            font-family: "Poppins", serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
        }

        .place-btn button {
            border-radius: 5.874px;
            background: #6036ae;
            width: 265.615px;
            height: 57.807px;
            color: white;
            margin: 0 auto;
            display: block;
            margin-top: 20px;
            font-weight: 500;
            border: none;
            color: #fff;
            font-family: "Poppins", serif;
            font-size: 18px;
            cursor: pointer;
        }

        .inputs-group:nth-last-child(1) {
            border-bottom: 0px;
        }

        .order-container h4 {
            color: #000;
            font-family: Poppins;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 32px;
        }

        label.checkbox {
            padding: 25px;
        }

        input {
            color: #242424;
            /* Replaced --dark-gray9 */
            font: 1em/1.5 "DM Sans", sans-serif;
            transition: background-color 0.25s, color 0.25s;
        }

        .inputs-group {
            display: grid;
            /* gap: 0.75em; */
            position: relative;
            border-bottom: 1px solid #cdcdcd;
        }

        .card-logos {
            position: absolute;
            right: 11px;
            top: 19px;
        }

        .order-sidebar .inputs-group .checkbox,
        .order-sidebar .inputs-group .radio {
            background-color: #fff;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            gap: 0.75em;
            align-items: center;
            padding: 23px 12px;
            position: relative;
            min-width: 0;

            border-radius: 8px 8px 0 0;
            margin-bottom: 0;
        }

        .order-sidebar .inputs-group .checkbox,
        .order-sidebar .inputs-group .checkbox__input,
        .order-sidebar .inputs-group .radio,
        .order-sidebar .inputs-group .radio__input {
            transition: background-color 0.25s, box-shadow 0.25s,
                transform 0.25s cubic-bezier(0.65, 0, 0.35, 1.65);
            -webkit-tap-highlight-color: transparent;
            transition: background-color 0.25s, box-shadow 0.25s, transform 0.25s cubic-bezier(0.65, 0, 0.35, 1.65);
            -webkit-tap-highlight-color: transparent;
            width: 98%;

        }

        .order-sidebar .inputs-group .checkbox__input,
        .order-sidebar .inputs-group .radio__input {
            background-color: #fff;
            /* Replaced --light-gray1 */
            flex-shrink: 0;
            width: 1.25em;
            height: 1.25em;
            -webkit-appearance: none;
            appearance: none;
        }

        .order-sidebar .inputs-group .checkbox__label,
        .order-sidebar .inputs-group .radio__label {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .order-sidebar .inputs-group .checkbox__label {
            color: #000;
            font-weight: 500;
        }

        .order-sidebar .inputs-group .checkbox:before,
        .order-sidebar .inputs-group .radio:before {
            border-radius: inherit;
            box-shadow: 1px 1px 3px #f1f1f1;
            content: "";
            display: block;
            opacity: 0;
            position: absolute;
            inset: 0;
            transition: opacity 0.25s;
        }

        .order-sidebar .inputs-group .checkbox:has(.checkbox__input:focus-visible,
            .radio__input:focus-visible):before,
        .order-sidebar .inputs-group .radio:has(.checkbox__input:focus-visible,
            .radio__input:focus-visible):before {
            opacity: 1;
        }

        .order-sidebar .inputs-group .checkbox__input {
            border-radius: 0.25em;
            box-shadow: 1px 1px 1px #f1f1f1;
            border: 1px solid #d4d4d4;
            color: #c4c4c4;
            /* Replaced --light-gray1 */
        }

        .order-sidebar .inputs-group .checkbox__input:before {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="%23fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><polyline points="4 8,7 11,12 5" /></svg>') 0 0/100% auto;
            content: "";
            display: block;
            opacity: 0;
            transition: opacity 0.25s;
            width: 100%;
            height: 100%;
        }

        .order-sidebar .inputs-group .checkbox__input:checked {
            background-color: #2e5b93;
            /* Replaced --primary3 */
            box-shadow: 1px 1px 3px #f1f1f1;
        }

        .order-sidebar .inputs-group .checkbox__input:checked:before {
            opacity: 1;
        }

        .order-sidebar .inputs-group .radio__input {
            border-radius: 50%;
            box-shadow: 1px 1px 3px #f1f1f1;
        }

        .order-sidebar .inputs-group .radio__input:checked {
            box-shadow: 1px 1px 3px #f1f1f1;
        }

        .order-sidebar .inputs-group .flex-class {
            display: flex;
            justify-content: center;
        }

        .order-sidebar .inputs-group .flex-class input {
            width: 185px;
        }

        .order-sidebar .inputs-group .required {
            color: #f00;
        }

        .order-sidebar .inputs-group .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .order-sidebar .inputs-group .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px !important;
            font-weight: 400;
            color: #333;
        }

        .order-sidebar .inputs-group .card-number-input {
            margin-bottom: 15px;
            border-radius: 6.694px;
            border: 0.837px solid #cfcfcf;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 40px;
            background: #fff;
        }

        .order-sidebar .inputs-group .card-number-input input {
            box-shadow: none;
            border: none;
            background: transparent;
            width: 90%;
        }

        .order-sidebar .inputs-group .phone-input {
            display: flex;
            gap: 27px;
        }

        .order-sidebar .inputs-group .phone-input select {
            width: 124px;
        }

        .order-sidebar .inputs-group .phone-input input {
            width: 350px;
        }

        .order-sidebar .inputs-group .phone-input label {
            font-size: 14px;
            font-weight: 300;
        }

        .order-sidebar .inputs-group .expiry-date {
            display: flex;
            /* gap: 10px; */
        }

        .order-sidebar .inputs-group select {
            width: 110px;
        }

        .order-sidebar .inputs-group .card-icons {
            right: 8px;
            display: flex;
            gap: 5px;
            margin-right: 15px;
            align-items: center;
        }

        .order-sidebar .inputs-group .form-group input,
        .order-sidebar .inputs-group .form-group select {
            border-radius: 6.694px;
            /* border: 0.837px solid #cfcfcf; */
            height: 40px;
            /* background: #fff; */
            padding-left: 5px;
            font-family: "Poppins";
        }

        .order-sidebar .inputs-group .country-input {
            width: 100%;
        }

        .order-sidebar .inputs-group .form__label {
            color: #000;
            font-weight: 500;
            margin-bottom: 16px;
            font-size: 16px;
        }

        .order-sidebar .inputs-group .radius-right-expiry {
            border-top-right-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
            border-right: 0 !important;
        }

        .order-sidebar .inputs-group .radius-left-expiry {
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }

        .hidden {
            display: none;
        }

        .total-amount h5 {
            font-size: 14px;
            font-weight: 400;
            font-family: "Poppins";
            margin: 0;
        }

        .billing-details {
            padding: 20px;
        }

        .select2-container .select2-selection--single {
            width: 98% !important;
            min-height: 40px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: -2px !important;
        }

        .select2-container {
            z-index: 999;
            width: 98% !important;
        }

        .error {
            background-color: #ffe6e6;
        }

        .error::placeholder {
            color: red;
            font-style: italic;
        }
    </style>
    <div class="main-content">
        <section class="section custom-font">
            <div class="container">
                {{-- top nav  --}}
                <div class="steps">
                    <a href="#" class="steps-item active"><span>1</span>{{ __('admin.Shopping cart') }}</a>
                    <a href="/checkout" class="steps-item active"><span>2</span>{{ __('admin.Checkout details') }}</a>
                    {{-- <a href="#" class="steps-item"><span>3</span>{{ __('admin.Requirements') }}</a> --}}
                </div>
                {{-- top nav  --}}
                <form action="{{ route('user.checkout.submit') }}" method="POST" id="payment-form"
                    class="require-validation" data-stripe-publishable-key="pk_test_qblFNYngBkEdjEZ16jxxoWSM">
                    @csrf
                    <div class="order-wrap mg-top-40">
                        <div class="order-container">
                            <div class="order-sidebar">
                                <h3>{{ __('admin.Your Information') }}</h3>
                                <div class="order-form">
                                    <div class="form-row">
                                        <div class="form-col">
                                            <label>{{ __('admin.First Name') }}</label>
                                            <input type="text" name="name" id="name" class=""
                                                value="{{ auth()->user()->name }}" placeholder="Alexa" required />
                                        </div>

                                        <div class="form-col">
                                            <label>{{ __('admin.user name') }}</label>
                                            <input type="text" name="username" id="" placeholder="Adriana"
                                                value="{{ auth()->user()->username }}" />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-col">
                                            <label>{{ __('admin.Email') }}</label>
                                            <input type="text" name="email" class="email" id=""
                                                value="{{ auth()->user()->email }}" placeholder="abc@example.com"
                                                required />
                                        </div>

                                        <div class="form-col">
                                            <label>{{ __('admin.Mobile Phone') }}</label>
                                            <input type="text" name="phone" class="" id="phone"
                                                value="{{ auth()->user()->phone }}" placeholder="+12 3456 7890" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="order-payment mg-top-20"></div>
                                <h4>{{ __('admin.Payment Method') }}</h4>

                                <div class="payment-fields">
                                    {{-- card payment  --}}
                                    <div class="inputs-group hidden">
                                        <label class="checkbox">
                                            <input class="checkbox__input payment-method" type="checkbox"
                                                name="payment-method" id="card-payment" />
                                            <span class="checkbox__label">{{ __('admin.Card') }}</span>
                                        </label>
                                        <div class="card-logos">
                                            <img src="{{ asset('/uploads/checkout/visa.png') }}" alt="Cards" />
                                            <img src="{{ asset('/uploads/checkout/master.png') }}" alt="Cards" />
                                        </div>
                                        <!-- billing details Card start -->
                                        <div id="card-billing-details" class="billing-details hidden">
                                            <div class="form-input-single">
                                                <label>{{ __('admin.Name on card') }}</label>
                                                <input type="text" name="cname" id=""
                                                    placeholder="abc@example.com" />
                                            </div>
                                            <div class="form-input-single">
                                                <label for="card-number">{{ __('admin.Card Number') }}
                                                </label>
                                                <div class="card-number-input">
                                                    <input type="text" id="card-number" placeholder="1234 1234 1234" />
                                                    <div class="card-icons">
                                                        <img src="{{ asset('/uploads/checkout/visa.png') }}"
                                                            alt="Cards" />
                                                        <img src="{{ asset('/uploads/checkout/master.png') }}"
                                                            alt="Cards" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row-expiry">
                                                <div class="form-group 11">
                                                    <label for="expiry-month">{{ __('admin.Expiry Date') }}
                                                    </label>
                                                    <div class="expiry-date">
                                                        <select id="expiry-month" class="radius-right-expiry">
                                                            <option value="month">{{ __('admin.Month') }}</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <!-- Add remaining months -->
                                                        </select>
                                                        <select id="expiry-year" class="radius-left-expiry">
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <!-- Add more years -->
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cvv">{{ __('admin.CVV') }}</label>
                                                    <input type="text" id="cvv" placeholder="XXX" />
                                                </div>
                                            </div>
                                            <div class="form__label">{{ __('admin.Billing Information') }}</div>
                                            <div class="form-row">
                                                <div class="form-col">
                                                    <label>{{ __('admin.First Name') }}</label>
                                                    <input type="text" name="cbfname" id=""
                                                        placeholder="John" />
                                                </div>

                                                <div class="form-col">
                                                    <label>{{ __('admin.Last Name') }}</label>
                                                    <input type="text" name="cblname" id=""
                                                        placeholder="Doe" />
                                                </div>
                                            </div>
                                            <div class="form-input-single">
                                                <label>{{ __('admin.Email') }}</label>
                                                <input type="email" name="cbemail" id=""
                                                    placeholder="abc@example.com" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="country-code">{{ __('admin.Phone') }}
                                                    </label>
                                                    <div class="phone-input">
                                                        <div>
                                                            <label>{{ __('admin.Country Code') }}<span
                                                                    class="">*</span></label>
                                                            <select id="country-code" name="bcountry_code"
                                                                class="country-code-input">
                                                                <option value="+1">+1</option>
                                                                <option value="+44">+44</option>
                                                                <!-- Add other country codes -->
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>{{ __('admin.Number') }}</label>
                                                            <input class="tel-input" type="tel" name="cbphone"
                                                                id="phone-number" placeholder="000 000 000" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-input-single">
                                                <label for="country">{{ __('admin.Country') }} </label>
                                                <input type="text" id="country" placeholder="United States" />

                                            </div>
                                            <div class="form-input-single">
                                                <label>{{ __('admin.Address') }}</label>
                                                <input type="text" name="cbaddress" id=""
                                                    placeholder="F 43, 41 Street Hamburg " />
                                            </div>
                                            <div class="form-input-single">
                                                <label>{{ __('admin.City') }}</label>
                                                <input type="text" name="cbcity" id=""
                                                    placeholder="Berlin" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-col">
                                                    <label>{{ __('admin.State') }}</label>
                                                    <input type="text" name="cbstate" id=""
                                                        placeholder="South Whales" />
                                                </div>

                                                <div class="form-col">
                                                    <label>{{ __('admin.Postal Code') }}</label>
                                                    <input type="text" name="cbpostal_code" id=""
                                                        placeholder="47010" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- billing details Card ends -->
                                    </div>
                                    {{-- stripe payment  --}}
                                    <div class="inputs-group Stripe">
                                        <label class="checkbox">
                                            <input class="checkbox__input payment-method" type="checkbox"
                                                name="stripe-payment" id="stripe-payment" />
                                            <span class="checkbox__label">{{ __('admin.Pay with Stripe') }}</span>
                                        </label>
                                        <div class="card-logos">
                                            <img src="{{ asset('/uploads/checkout/stripe.png') }}" alt="stripe" />
                                        </div>
                                        <!-- billing details Stripe Starts -->
                                        <div id="stripe-billing-details" class="billing-details hidden">
                                            <div class="form-group">
                                                <label for="card-name">Name on Card</label>
                                                <input type="text" id="card-name" class="card-name" name="cardName"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="form-group">
                                                <div class="form-input-single">
                                                    <label for="card-number">{{ __('admin.Card Number') }}
                                                    </label>
                                                    <div class="card-number-input">
                                                        <input type="text" id="card-number" class="card-number"
                                                            name="cardNumber" placeholder="1234 1234 1234 1234"
                                                            maxlength="19" required />
                                                        <div class="card-icons">
                                                            <img src="{{ asset('/uploads/checkout/stripe.png') }}"
                                                                alt="stripe" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row-expiry">
                                                <div class="form-group">
                                                    <label for="expiry-month">{{ __('admin.Expiry Date') }}
                                                    </label>
                                                    <div class="expiry-date">
                                                        <select id="expiry-month" name="expiry-month"
                                                            class="card-expiry-month radius-right-expiry" required>
                                                            <option value="month" disabled>{{ __('admin.Month') }}
                                                            </option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <select id="expiry-year" name="expiry-year"
                                                            class="radius-left-expiry card-expiry-year" required>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cvv">{{ __('admin.CVV') }}</label>
                                                    <input type="text" id="cvv" class="card-cvc" name="cvc"
                                                        placeholder="123" maxlength="4" required />
                                                </div>
                                            </div>

                                            <div class="form__label">{{ __('admin.Billing Information') }}</div>
                                            <div class="form-row">
                                                <div class="form-col">
                                                    <label>{{ __('admin.First Name') }}</label>
                                                    <input type="text" name="bfname" id=""
                                                        placeholder="John" required />
                                                </div>

                                                <div class="form-col">
                                                    <label>{{ __('admin.Last Name') }}</label>
                                                    <input type="text" name="blname" id=""
                                                        placeholder="Doe" />
                                                </div>
                                            </div>
                                            <div class="form-input-single">
                                                <label>{{ __('admin.Email') }}</label>
                                                <input type="email" name="bemail" id=""
                                                    placeholder="abc@example.com" required />
                                            </div>
                                            <div class="form-input-single">
                                                <label for="country-code">{{ __('admin.Phone') }}
                                                </label>
                                                <input class="tel-input" type="tel" name="bphone" id="phone-number"
                                                    placeholder="000 000 000" required />
                                            </div>
                                            <div class="form-input-single">
                                                <label for="country">{{ __('admin.Country') }} </label>
                                                <input type="text" id="country" name="country"
                                                    placeholder="United States" required />

                                            </div>
                                            <div class="form-input-single">
                                                <label>{{ __('admin.Address') }}</label>
                                                <input type="text" name="address" id=""
                                                    placeholder="F 43, 41 Street Hamburg " required />
                                            </div>
                                            <div class="form-input-single">
                                                <label>{{ __('admin.City') }}</label>
                                                <input type="text" name="city" id="" placeholder="Berlin"
                                                    required />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-col">
                                                    <label>{{ __('admin.State') }}</label>
                                                    <input type="text" name="state" id=""
                                                        placeholder="South Whales" required />
                                                </div>

                                                <div class="form-col">
                                                    <label>{{ __('admin.Postal Code') }}</label>
                                                    <input type="text" name="postal_code" id=""
                                                        placeholder="47010" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- billing details Stripe Ends -->
                                    </div>
                                </div>
                            </div>
                            <div class="order-aside">
                                <h4>{{ __('admin.Your Order') }}</h4>
                                <hr class="border" />
                                @foreach ($cartItems as $item)
                                    <div class="aside-inner-sec">
                                        <div class="image-box">
                                            <div>
                                                <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" />
                                            </div>
                                            <div>
                                                <h6>{{ $item['name'] }}</h6>
                                                {{-- <h5>{{ $item['brand'] }}</h5> --}}
                                            </div>
                                        </div>
                                        <div>
                                            <h6>{{ $item['quantity'] }} x
                                                ${{ number_format($item['price'] * $item['quantity'], 2) }}</h6>
                                        </div>
                                    </div>

                                    <hr class="border" />
                                @endforeach

                                <div class="total-amount">
                                    <h5>{{ __('admin.Subtotal') }}</h5>
                                    <h4>${{ number_format($subtotal, 2) }}</h4>
                                    <input type="hidden" name="total" value="{{ number_format($subtotal, 2) }}">
                                </div>

                                <div class="place-btn">
                                    <button type="submit" id="payment-submit"> {{ __('admin.Place Order') }}</button>
                                </div>
                                <div class="alert alert-danger d-none mg-top-10" id="payment-errors" role="alert">
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    {{-- start stripe payment --}}
    <script src="https://js.stripe.com/v2/"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById("payment-form");
            const publishableKey = form.getAttribute("data-stripe-publishable-key");
            Stripe.setPublishableKey(publishableKey);

            form.addEventListener("submit", async (e) => {
                e.preventDefault(); // Prevent default submission

                let allValid = true;
                const errors = [];
                const requiredFields = form.querySelectorAll("[required]");

                // Validate required fields
                requiredFields.forEach((field) => {
                    if (!validateField(field)) {
                        allValid = false;
                        errors.push(`Invalid: ${getFieldName(field)}`);
                        field.classList.add("error");
                    } else {
                        field.classList.remove("error");
                    }
                });

                // If validation fails, show alert and stop submission
                if (!allValid) {
                    alert("Please fix the following errors:\n" + errors.join("\n"));
                    return;
                }

                // If a Stripe token is already present, submit the form
                if (form.querySelector("input[name='stripeToken']")) {
                    form.submit();
                    return;
                }

                // If no token yet, generate one
                Stripe.createToken({
                    number: document.querySelector(".card-number").value,
                    cvc: document.querySelector(".card-cvc").value,
                    exp_month: document.querySelector(".card-expiry-month").value,
                    exp_year: document.querySelector(".card-expiry-year").value
                }, stripeResponseHandler);
            });

            // Stripe Response Handler
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    alert(response.error.message);
                } else {
                    let token = response.id;
                    let input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "stripeToken";
                    input.value = token;
                    form.appendChild(input);
                    form.submit(); // Submit form after adding Stripe token
                }
            }

            // Validate Input Fields
            function validateField(field) {
                const value = field.value.trim();
                if (!value) return false;

                // Specific validations
                if (field.id === "card-name" && !/^[A-Za-z\s]+$/.test(value)) return false;
                if (field.id === "card-number" && !/^\d{16}$/.test(value.replace(/\s+/g, ""))) return false;
                if (field.id === "cvv" && !/^\d{3,4}$/.test(value)) return false;
                if (field.id === "postal_code" && !/^\d{5,6}$/.test(value)) return false;
                if (field.type === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) return false;
                if (field.type === "tel" && !/^\+?\d{10,15}$/.test(value)) return false;

                return true;
            }

            // Get Field Name for Error Display
            function getFieldName(field) {
                const label = field.closest(".form-group")?.querySelector("label");
                return label ? label.textContent.trim() : field.name || "Field";
            }

            // Prevent non-numeric input for specific fields
            document.querySelectorAll("#card-number, #cvv, [name='postal_code'], [name='bphone']").forEach((
                field) => {
                field.addEventListener("input", () => {
                    field.value = field.value.replace(/\D/g, "");
                });
            });

            // Remove error dynamically when user corrects input
            document.querySelectorAll("[required]").forEach((field) => {
                field.addEventListener("input", () => {
                    if (validateField(field)) {
                        field.classList.remove("error");
                    }
                });
            });
        });
    </script>

    {{-- end stripe payment --}}
    <script>
        const paymentMethods = document.querySelectorAll(".payment-method");

        paymentMethods.forEach((method) => {
            method.addEventListener("change", (event) => {
                const selectedId = event.target.id;
                const isChecked = event.target.checked;

                // Get the related billing details element
                let relatedBillingDetails = null;
                if (selectedId === "card-payment") {
                    relatedBillingDetails = document.getElementById("card-billing-details");
                } else if (selectedId === "stripe-payment") {
                    relatedBillingDetails = document.getElementById("stripe-billing-details");
                }

                // Toggle visibility based on checkbox state
                if (relatedBillingDetails) {
                    if (isChecked) {
                        relatedBillingDetails.classList.remove("hidden");
                    } else {
                        relatedBillingDetails.classList.add("hidden");
                    }
                }
            });
        });
    </script>
    <script>
        document.querySelector(".place-btn button").addEventListener("click", () => {
            const formData = new FormData(document.querySelector(".order-wrap"));
            fetch("/checkout/submit", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: formData,
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) alert("Order placed successfully!");
                    else alert("Error: " + data.message);
                })
                .catch((error) => console.error("Error:", error));
        });
    </script>
@endsection
