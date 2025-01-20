@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Campaign') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')


    <div class="custom-font">
        <div class="container">
            <div class="campaign-main">
                <h2>{{ __('admin.Category') }}</h2>
                <div class="campaign-title">
                    <input type="text" placeholder="" />
                </div>

                <h2>{{ __('admin.Required number of Influencer') }}</h2>
                <form class="stepper">
                    <div class="stepper-btn" id="decrement">-</div>
                    <input type="text" class="stepper-input" id="stepper-value" value="1" readonly>
                    <div class="stepper-btn" id="increment">+</div>
                </form>
                <h2>{{ __('admin.Influencer Gender') }}</h2>
                <form class="btns-group-radio">
                    <div class="campaign-btn">
                        <input type="radio" id='male' name="gender" class="radio-custom" checked />

                        <label for='male' class="radio-custom-label">{{ __('admin.Male') }}</label>
                    </div>
                    <div class="campaign-btn">
                        <input type="radio" id='female' name="gender" class="radio-custom" />

                        <label for='female' class="radio-custom-label">{{ __('admin.Female') }}</label>
                    </div>
                    <div class="campaign-btn">
                        <input type="radio" id='other' name="gender" class="radio-custom" />

                        <label for='other' class="radio-custom-label">{{ __('admin.Other') }}</label>
                    </div>
                </form>
                <div class="platforms mg-top-40">
                    <div class="platforms-item">
                        <img src="./public/frontend/img/facebook.png" alt="Facebook Logo" class="logo">
                        <h1>{{ __('admin.Facebook') }}</h1>
                    </div>
                    <h2 class="custom-margin">{{ __('admin.Follower range') }}</h2>
                    <form class="dropdown-card">
                        <select id="follower-range">
                            <option value="" disabled selected>{{ __('admin.Range') }}</option>
                            <option value="0-100">0-100</option>
                            <option value="100-200">100-200</option>
                            <option value="200-300">200-300</option>
                            <option value="300-400">300-400</option>
                            <option value="400-500">400-500</option>
                        </select>
                    </form>
                </div>
                <h2 class="mg-top-20">{{ __('admin.Campaign Budget') }}</h2>
                <p>{{ __('admin.Campaign budget  represents how much remuneration influencers will get after succesfully completing this campaign') }}
                </p>
                <form class="input-container">
                    <input type="text" class="text-input" placeholder="098">
                    <div class="dropdown">
                        <select>
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="INR">INR</option>
                        </select>
                    </div>
                </form>
                <div class="navigation-btns">
                    <div class="navigation-btns-item"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="24"
                            viewBox="0 0 29 24" fill="none">
                            <path
                                d="M11.0001 17.3079L4.85156 12.0001L11.0001 6.69238L11.82 7.40013L7.07051 11.5001H23.3862V12.5001H7.07051L11.82 16.6001L11.0001 17.3079Z"
                                fill="black" />
                        </svg><span>{{ __('admin.Previous') }}</span></div>
                    <div class="navigation-btns-item active"><span>{{ __('admin.Submit') }}</span></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const decrementBtn = document.getElementById('decrement');
        const incrementBtn = document.getElementById('increment');
        const stepperValue = document.getElementById('stepper-value');

        decrementBtn.addEventListener('click', () => {
            let value = parseInt(stepperValue.value, 10);
            if (value > 0) {
                stepperValue.value = value - 1;
            }
        });

        incrementBtn.addEventListener('click', () => {
            let value = parseInt(stepperValue.value, 10);
            stepperValue.value = value + 1;
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
            min-height: 100vh;
            background: linear-gradient(0deg, #f4f6f9 0%, #f4f6f9 100%), #fff;
        }

        .campaign-main {
            border-radius: 12px;
            background: #FFF;
            padding: 24px 20px;
            width: 1094px;
        }

        .required {
            color: #D65656 !important;
        }

        .campaign-main h1 {
            color: #21272A;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: 20px;
            margin: 0
        }

        .campaign-main h2 {
            color: #000;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin: 20px 0 16px 0;
        }

        .campaign-main p {
            color: #747474;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            margin: 0;
        }

        .campaign-main span {
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .custom-margin {
            margin: 0 0 20px 0 !important;
        }

        .platforms .btns-group-radio input {
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            padding: 8px 12px;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
            width: 178px;
        }

        .campaign-title input {
            border-radius: 6.694px !important;
            border: 0.837px solid #CFCFCF !important;
            background: #FFF;
            color: #000 !important;
            font-size: 14.5px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding: 11px 12px !important;
        }

        .campaign-btn {
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            padding: 8px 12px;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
            width: 178px;
            cursor: pointer;
        }

        .campaign-btn:hover {
            background: #F1F1F1;
        }

        .campaign-btn label {
            margin: 0px;
        }

        .campaign-btn.custom-width {
            width: 195px;
            padding: 11px 5px;
            font-size: 14px;
        }

        .btns-group {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px
        }

        .btns-group-radio {
            display: flex;
            gap: 18px;
        }

        .stepper {
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #fff;
            width: 143px;
            border-radius: 10px;
            border: 1px solid #D9D9D9;
            background: #FFF;
        }

        .stepper-btn {
            flex: 1;
            border: none;
            color: #5856D6;
            font-size: 1.5rem;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
            padding: 8px 0;
        }

        .stepper-btn:hover {
            background-color: #e0e0e0;
        }

        .stepper-input {
            flex: 1;
            border: 1px solid #CFCFCF;
            border-bottom: none !important;
            border-top: none !important;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            outline: none;
            background-color: #fff;
            color: #000;
            padding: 8px 0 !important;
        }

        .logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
        }

        .platforms-item {
            display: flex;
            gap: 8px;
            align-items: center;
            margin-bottom: 16px;
        }

        .platforms .campaign-btn {
            color: #747474;
            font-size: 14px;
            font-weight: 500;
            width: 148px;
            padding: 8px;
        }

        /* radio button  */
        .checkbox-custom,
        .radio-custom {
            opacity: 0;
            position: absolute;
        }

        .checkbox-custom,
        .checkbox-custom-label,
        .radio-custom,
        .radio-custom-label {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
        }

        .checkbox-custom-label,
        .radio-custom-label {
            position: relative;
        }

        .checkbox-custom+.checkbox-custom-label:before,
        .radio-custom+.radio-custom-label:before {
            content: '';
            background: #fff;
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            text-align: center;
        }


        .checkbox-custom+.checkbox-custom-label:before,
        .radio-custom+.radio-custom-label:before {
            border-radius: 50%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px;
            font-size: 8px;
            height: 12px;
            width: 12px;
            outline: none;
            background: #DEDDF7;
            border: none;
        }

        .checkbox-custom:checked+.checkbox-custom-label:before,
        .radio-custom:checked+.radio-custom-label:before {
            content: "\f00c";
            font-family: 'FontAwesome';
            color: #fff;
            background: #5856D6;
            text-align: center;
        }

        .radio-custom:focus+.radio-custom-label {
            outline: none;
        }

        /* radio button ends  */
        .input-container {
            display: flex;
            align-items: center;
            border: 0.84px solid #CFCFCF;
            border-radius: 6px;
            overflow: hidden;
            width: 100%;
            margin: 16px 0;
        }

        .input-container .text-input {
            flex: 1;
            border: none;
            padding: 8px 10px;
            outline: none;
            font-size: 14px;
        }

        .text-input:focus {
            outline: none;
        }

        .input-container .dropdown {
            display: flex;
            align-items: center;
            background-color: #f4f4f4;
            border-left: 1px solid #d1d1d1;
            cursor: pointer;
        }

        .input-container .dropdown select {
            border: none;
            background: transparent;
            font-size: 14px;
            appearance: none;
            outline: none;
            cursor: pointer;
        }

        .dropdown-card {
            width: 143px;
        }

        .dropdown-card select {
            width: 200px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #555;
            background-color: #fff;
            appearance: none;
            -webkit-appearance: none;
            /* Safari */
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 6'%3E%3Cpath d='M0 0h10L5 6z' fill='%23333'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 10px 6px;
        }

        .dropdown:focus {
            border-color: #aaa;
            outline: none;
        }

        .navigation-btns {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            margin-top: 10%;
        }

        .navigation-btns-item {
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            padding: 10px;
            cursor: pointer;
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .navigation-btns-item.active {
            border: 0.837px solid #B2A6CC;
            background: #E0CFFF;
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: centrer;
            padding: 10px 30px;
        }

        .navigation-btns-item span {
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .navigation-btns-item:hover {
            background: #F1EDF8;
            transition: 500ms linear;
        }
    </style>
