@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Dashboard') }}</title>
@endsection
@section('frontend-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-body">
                <div class="dashboard-wrap">
                    <div class="dashboard-container">
                        <div class="rectangle-box-wrap">
                            <div class="rectangle-box">
                                <div class="inner-group">
                                    <img src="{{ asset('uploads/client-dasborad/1.png') }}">
                                    <h4>+24%</h4>
                                </div>
                                <h3>62k</h3>
                                <div class="inner-group-2">
                                    <h4>Active Order</h4>
                                    <div class="arrow">
                                        <img src="{{ asset('uploads/client-dasborad/arrow-down.png') }}">
                                        <h5>30%</h5>
                                    </div>
                                </div>
                            </div>
                            <!--Box 1-->
                            <div class="rectangle-box">
                                <div class="inner-group">
                                    <img src="{{ asset('uploads/client-dasborad/2.png') }}">
                                    <h4><span>-32%</span></h4>
                                </div>
                                <h3>32k</h3>
                                <div class="inner-group-2">
                                    <h4>Complete Order</h4>
                                    <div class="arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <circle cx="7.83725" cy="7.90605" r="7.68393" fill="#FFD5DC" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.02696 8.51839H9.74947V9.69091H5V5.00081H6.18737V7.68929L9.92335 4L10.7629 4.8291L7.02696 8.51839Z"
                                                fill="#FF4768" />
                                        </svg>
                                        <h5>20%</h5>
                                    </div>
                                </div>
                            </div>
                            <!--Box 2-->
                            <div class="rectangle-box">
                                <div class="inner-group">
                                    <img src="{{ asset('uploads/client-dasborad/3.png') }}">
                                    <h4><span>+44%</span></h4>
                                </div>
                                <h3>22k</h3>
                                <div class="inner-group-2">
                                    <h4>Cancel Order</h4>
                                    <div class="arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                            viewBox="0 0 17 16" fill="none">
                                            <circle cx="8.38022" cy="7.90604" r="7.68393" fill="#33A57C"
                                                fill-opacity="0.2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.73599 5.17253H6.01348V4H10.7629V8.6901H9.57558V6.00163L5.8396 9.69091L5 8.86181L8.73599 5.17253Z"
                                                fill="#33A57C" />
                                        </svg>
                                        <h5>60%</h5>
                                    </div>
                                </div>
                            </div>
                            <!--Box 3-->
                            <div class="rectangle-box">
                                <div class="inner-group">
                                    <img src="{{ asset('uploads/client-dasborad/4.png') }}">
                                    <h4><span>-15%</span></h4>
                                </div>
                                <h3>6k</h3>
                                <div class="inner-group-2">
                                    <h4>Compaign</h4>
                                    <div class="arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <circle cx="7.96225" cy="7.90604" r="7.68393" fill="#FFD4DC" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.02696 9.51839H9.74947V10.6909H5V6.00081H6.18737V8.68929L9.92335 5L10.7629 5.8291L7.02696 9.51839Z"
                                                fill="#FF4768" />
                                        </svg>
                                        <h5>20%</h5>
                                    </div>
                                </div>
                            </div>
                            <!--Box 4-->
                        </div>
                    </div>
                    <div class="cp-inf">
                        <div class="Compaign">
                            <div class="header">
                                <h2>Campaign Progress</h2>
                                <button>Monthly</button>

                            </div>
                        </div>
                        <div class="influencer">
                            <div class="header">
                                <h2>Top Influencers</h2>
                                <a href="#">View all</a>
                            </div>
                            <div class="grid">

                                <img src="{{ asset('uploads/client-dasborad/11.png') }}">
                                <img src="{{ asset('uploads/client-dasborad/12.png') }}">
                                <img src="{{ asset('uploads/client-dasborad/13.png') }}">
                                <img src="{{ asset('uploads/client-dasborad/14.png') }}">
                                <img src="{{ asset('uploads/client-dasborad/15.png') }}">
                                <img src="{{ asset('uploads/client-dasborad/16.png') }}">
                                <img src="{{ asset('uploads/client-dasborad/17.png') }}">
                                <img src="{{ asset('uploads/client-dasborad/18.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="order-list">
                        <div class="header">
                            <h2>Top Influencers</h2>
                            <div class="button-group">
                                <button class="btn active">Monthly</button>
                                <button class="btn">Weekly</button>
                                <button class="btn">Today</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </section>
    </div>

    <style>
        .dashboard-wrap {
            width: 100%;
        }

        .dashboard-container {
            width: 100%;
            margin: 0 auto;
        }

        .rectangle-box {
            border-radius: 12px;
            border: 1px solid #F4DCAB;
            background: #FFF5E0;
            padding: 12px;
        }

        .rectangle-box:nth-child(2) {
            border: 1px solid #E1BCFF;
            background: #EFE6F6;
        }

        .rectangle-box:nth-child(3) {
            border: 1px solid #71FCAB;
            background: #E0F8EA;
        }

        .rectangle-box:nth-child(4) {
            border: 1px solid #FFC6BA !important;
            background: #FCEAE4 !important;
        }

        .inner-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 10px;
        }

        .inner-group-2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 15px;
            padding-bottom: 7px;
        }

        .dashboard-wrap h4 {
            color: #FFA400;
            font-size: 15.368px;
            font-weight: 500;
            font-family: "Poppins", serif;
        }

        .dashboard-wrap .inner-group img {
            background: #d78e0a3b;
            border-radius: 50px;
            padding: 5px;
        }

        .dashboard-wrap h3 {
            color: #080D1C;
            font-family: "Poppins", serif;
            font-size: 19.21px;
            font-weight: 600;
            margin: 0;
        }

        .dashboard-wrap h4:nth-child(1) {
            color: #1E1E1E;
            font-family: Poppins;
            font-size: 13.447px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            margin: 0;
        }

        .inner-group-2 img {
            background: transparent;
        }

        .arrow {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .arrow img {
            width: 15px;
        }

        .arrow h5 {
            color: #33A57C;
            font-family: "Poppins", serif;
            font-size: 13.447px;
            font-weight: 400;
            line-height: normal;
            margin: 0;
        }


        .rectangle-box-wrap {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .cp-inf {
            display: flex;
            width: 100%;
            margin: 0 auto;
            gap: 20px;
        }

        .Compaign {
            width: 50%;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: 298px;
        }

        .influencer {
            width: 50%;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Medium devices (tablets, 900px and down) */
        @media only screen and (max-width: 1200px) {
            .rectangle-box-wrap {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .cp-inf {
                display: flex;
                width: 100%;
                flex-direction: column;
                margin: 0 auto;
                gap: 20px;
            }

            .Compaign {
                width: 100%;
                margin: 40px auto 10px auto;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
                height: 298px;
            }

            .influencer {
                width: 100%;
                margin: 10px auto;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }

            .header {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
        }


        /* Small devices (phones, 600px and down) */
        @media only screen and (max-width: 800px) {
            .rectangle-box-wrap {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .header {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
            }

            .grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }
        }

        /* Extra small devices (phones, 400px and down) */
        @media only screen and (max-width: 400px) {
            .rectangle-box-wrap {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 20px;
            }

            .grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .header {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
            }
        }

        .rectangle-box:nth-child(2) img {
            background: #D7BFE9;
        }

        .rectangle-box:nth-child(3) img {
            background: #B3EBCB;
        }

        .rectangle-box:nth-child(4) img {
            background: #F7C7B7;
        }

        .rectangle-box:nth-child(2) h4 span {
            color: #7623B5;
        }

        .rectangle-box:nth-child(3) h4 span {
            color: #33A57C;
        }

        .rectangle-box:nth-child(4) h4 span {
            color: #E33C05;
        }

        .rectangle-box:nth-child(2) h5 {
            color: #FF4768;
        }

        .rectangle-box:nth-child(3) h5 {
            color: #33A57C;
        }

        .rectangle-box:nth-child(4) h5 {
            color: #FF4768;
        }


        .order-list {
            width: 100%;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: 400px;
        }

        .header a {
            color: #6B6B6B;
            font-family: "Poppins", serif;
            font-size: 14px;
            font-weight: 400;

        }

        .header h2 {
            color: #080D1C;
            font-family: Poppins;
            font-size: 21.131px;
            font-family: "Poppins", serif;
            font-weight: 500;

        }


        .grid img {
            border-radius: 0px;
            background: none;
        }

        .header button {
            width: 99px;
            height: 38px;
            border-radius: 19.21px;
            background: #F5F5F5;
            border: none;
            color: #71737C;
            font-family: "Poppins", serif;
            font-size: 13.447px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            cursor: pointer;
        }



        .header button:nth-child(2) {

            border-radius: none;

        }
    </style>

    <!-- End Features -->
@endsection
