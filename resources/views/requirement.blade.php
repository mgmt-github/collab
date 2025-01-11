@extends('layout')
@section('title')
    <title>{{ __('admin.Requirements') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')


    <section class="custom-font">
        <div class="container">
            {{-- top nav  --}}
            <div class="steps">
                <a href="#" class="steps-item active"><span>1</span>{{ __('admin.Shopping cart') }}</a>
                <a href="/checkout" class="steps-item active"><span>2</span>{{ __('admin.Checkout details') }}</a>
                <a href="#" class="steps-item active"><span>3</span>{{ __('admin.Requirements') }}</a>
            </div>
            {{-- top nav  --}}


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
                    <form class="form-row">
                        <div class="form-col">
                            <label class="">{{ __('admin.Write Note') }}<span>0/5000</span></label>
                            <input type="textarea" name="name" id="" placeholder="I want 2 Video ......" />
                        </div>
                    </form>
                </div>
                <div class="place-btn">
                    <button>{{ __('admin.Send') }}</button>
                </div>
            </div>

        </div>
    </section>
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

        /* order steps end  */

        .form-row {
            width: 97.8%;
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
            width: 288px;
            height: 40px;
            background: #fff;
            padding-left: 10px;
        }

        .order-sidebar {
            border-radius: 14px;
            border: 1px solid #e6e6e6;
            background: #fff;
            padding: 30px;
            width: 57.3%;
        }

        .order-form {
            background: #fff;
            padding: 18px;
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
            margin: 0 auto;
            display: block;
            margin-top: 50px;
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
