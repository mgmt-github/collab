@extends('layout')
@section('title')
    <title>{{ __('admin.Requirements') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')


    <div class="custom-font">
        <div class="container">
            {{-- top nav  --}}
            <div class="steps">
                <a href="#" class="steps-item active"><span>1</span>{{ __('admin.Shopping cart') }}</a>
                <a href="/checkout" class="steps-item active"><span>2</span>{{ __('admin.Checkout details') }}</a>
                <a href="#" class="steps-item active"><span>3</span>{{ __('admin.Requirements') }}</a>
            </div>
            {{-- top nav  --}}

            <div class="notification-box mg-top-40">
                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="10"
                        viewBox="0 0 12 10" fill="none">
                        <path d="M10.6673 1.79167L4.25065 8.20833L1.33398 5.29167" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg></span>
                <span>{{ __('admin.Congratulations! Your details have been successfully sent to the Influencer.') }}</span>
            </div>
            <div class="order-sidebar mg-top-40">

                <h3>{{ __('admin.Details') }}</h3>

                <div class="order-form">
                    <form class="form-row">
                        <div class="form-col">
                            <label>{{ __('admin.Name') }}</label>
                            <input type="text" name="name" id="" placeholder="Alexa" />
                        </div>

                        <div class="form-col">
                            <label>{{ __('admin.Email') }}</label>
                            <input type="text" name="email" id="" placeholder="abc@example.com" />
                        </div>
                    </form>
                    <form class="form-row">
                        <div class="form-col">
                            <label>{{ __('admin.Phone Number') }}</label>
                            <input type="number" name="name" id="" placeholder="+12 3456 7890" />
                        </div>
                        <div class="form-col">
                            <label>{{ __('admin.Your Address') }}</label>
                            <input type="text" name="name" id="" placeholder="F 43, 41 Street Hamburg " />
                        </div>
                    </form>
                    <div class="form-group">
                        <label for="note">
                            <div class="note-label"><span>{{ __('admin.Write Note') }} </span><span
                                    class="note-count">0/5000</span>
                            </div>
                        </label>
                        <div class="note-row">
                            <input id="note" rows="3" placeholder="I want 2 Video ..." />
                            <span class="attachment"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M11.5 22C9.96667 22 8.66667 21.4667 7.6 20.4C6.53333 19.3333 6 18.0333 6 16.5V6C6 4.9 6.39167 3.95833 7.175 3.175C7.95833 2.39167 8.9 2 10 2C11.1 2 12.0417 2.39167 12.825 3.175C13.6083 3.95833 14 4.9 14 6V15.5C14 16.2 13.7583 16.7917 13.275 17.275C12.7917 17.7583 12.2 18 11.5 18C10.8 18 10.2083 17.7583 9.725 17.275C9.24167 16.7917 9 16.2 9 15.5V6H10.5V15.5C10.5 15.7833 10.5958 16.0208 10.7875 16.2125C10.9792 16.4042 11.2167 16.5 11.5 16.5C11.7833 16.5 12.0208 16.4042 12.2125 16.2125C12.4042 16.0208 12.5 15.7833 12.5 15.5V6C12.5 5.3 12.2583 4.70833 11.775 4.225C11.2917 3.74167 10.7 3.5 10 3.5C9.3 3.5 8.70833 3.74167 8.225 4.225C7.74167 4.70833 7.5 5.3 7.5 6V16.5C7.5 17.6 7.89167 18.5417 8.675 19.325C9.45833 20.1083 10.4 20.5 11.5 20.5C12.6 20.5 13.5417 20.1083 14.325 19.325C15.1083 18.5417 15.5 17.6 15.5 16.5V6H17V16.5C17 18.0333 16.4667 19.3333 15.4 20.4C14.3333 21.4667 13.0333 22 11.5 22Z"
                                        fill="#828282" />
                                </svg></span>
                        </div>
                    </div>
                    <div class="place-btn">
                        <button>{{ __('admin.Send') }}</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script>
        const paymentMethods = document.querySelectorAll(".payment-method");
        paymentMethods.forEach((method) => {
            method.addEventListener("change", (event) => {
                const selectedId = event.target.id;
                const isChecked = event.target.checked;
                document.querySelectorAll(".billing-details").forEach((details) => {
                    details.classList.add("hidden");
                });
                if (isChecked) {
                    if (selectedId === "card-payment") {
                        document
                            .getElementById("card-billing-details")
                            .classList.remove("hidden");
                    } else if (selectedId === "stripe-payment") {
                        document
                            .getElementById("stripe-billing-details")
                            .classList.remove("hidden");
                    }
                }
            });
        });
    </script>
    <style>
        .footer-cta,
        .footer-area,
        .inflanar-header.inflanar-header__v2 {
            display: none;
        }

        .custom-font {
            margin: 0;
            padding: 20px 0px;
            font-family: "Poppins", serif;
            padding-bottom: 30px;
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
            /* margin-left: 55px; */
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

        .note-row {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 12px;
            height: 40px;
            font-size: 14px;
            display: flex;
            font-family: 'Poppins';
            justify-content: space-between;
            gap: 10px;
        }

        .note-label {
            display: flex;
            justify-content: space-between;
        }

        .note-count {
            color: #5856D6;
        }

        .note-row input {
            border: none;
            resize: none
        }

        .note-row .attachment {
            color: #6a6a6a;
            cursor: pointer;
        }

        /* order steps end  */

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-row-expiry {
            width: 97.8%;
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
            width: 97.8%;
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
            width: 540px;
            height: 40px;
            background: #fff;
            padding-left: 10px;
        }

        .order-sidebar {
            border-radius: 14px;
            border: 1px solid #e6e6e6;
            background: #fff;
            padding: 30px;
            width: 1226px;
        }

        .order-form {
            background: #fff;
            padding: 15px 0px;
            margin-top: 20px;
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

        hr.border {
            border: 1px solid #e6e8ec;
            margin: 25px 0px;
        }


        .place-btn button {
            border-radius: 5.874px;
            background: #6036ae;
            width: 265.615px;
            height: 57.807px;
            color: white;
            display: block;
            margin-top: 50px;
            font-weight: 500;
            border: none;
            color: #fff;
            font-family: "Poppins", serif;
            font-size: 18px;
            cursor: pointer;
        }

        .place-btn {
            display: flex;
            justify-content: end;
        }

        .inputs-group:nth-last-child(1) {
            border-bottom: 0px;
        }

        .order-sidebar h4 {
            color: #000;
            font-family: Poppins;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 32px;
        }

        input {
            color: #242424;
            /* Replaced --dark-gray9 */
            font: 1em/1.5 "DM Sans", sans-serif;
            transition: background-color 0.25s, color 0.25s;
        }

        .notification-box {
            display: flex;
            width: 666px;
            align-items: center;
            gap: 10px;
            background-color: #E9E9FF;
            border-radius: 7px;
            padding: 12px 10px;
            color: #1F2026;
            font-size: 16px;
        }

        .notification-box .icon {
            border-radius: 30px;
            background: #5856D6;
            display: flex;
            width: 22px;
            height: 22px;
            padding: 4px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
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
            width: 80%;
        }

        .inputs-group {
            display: grid;
            /* gap: 0.75em; */
            position: relative;
            border-bottom: 1px solid #cdcdcd;
        }

        .order-sidebar .inputs-group {
            display: flex;
            justify-content: center;
        }

        .order-sidebar .inputs-group input {
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
        }

        .order-sidebar .inputs-group {
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

        .order-sidebar .inputs-group input {
            box-shadow: none;
            border: none;
            background: transparent;
            width: 80%;
        }

        .order-sidebar .inputs-group .phone-input {
            display: flex;
            gap: 27px;
        }

        .order-sidebar .inputs-group select {
            width: 124px;
        }

        .order-sidebar .inputs-group input {
            width: 465px;
        }

        .order-sidebar .inputs-group label {
            font-size: 14px;
            font-weight: 300;
        }

        .order-sidebar .inputs-group select {
            width: 185px;
        }

        .order-sidebar .inputs-group .card-icons {
            right: 8px;
            display: flex;
            gap: 5px;
            margin-right: 15px;
            align-items: center;
        }

        .order-sidebar .inputs-group .form-group input {
            border-radius: 6.694px;
            border: 0.837px solid #cfcfcf;
            height: 40px;
            background: #fff;
            padding-left: 5px;
            font-family: "Poppins";
        }

        .order-sidebar .inputs-group {
            width: 100%;
        }

        .order-sidebar .inputs-group .form__label {
            color: #000;
            font-weight: 500;
            margin-bottom: 16px;
            font-size: 16px;
        }
    </style>
