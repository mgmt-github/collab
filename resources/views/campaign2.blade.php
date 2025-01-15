@extends('layout')
@section('title')
    <title>{{ __('admin.Campaign2') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')

    <div class="campaign-wrap">
        <div class="compaign-container">
            <div class="inner-content-row">
                <div class="inner-content">
                    <div class="logo">
                        <img src="./public/frontend/img/facebook.png">
                        <h5>Facebook</h5>
                    </div>
                    <h4>Select your content type</h4>
                    <p>Select the ways in which your brand wil be promoted on Facebook</p>
                    <form action="/action_page.php">
                        <select name="cars" id="cars">
                            <option value="volvo">Select Option</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <!-- <input type="submit" value="Submit"> -->
                    </form>
                    <h4>Content Placement</h4>
                    <p>Select the content place where influencer will post content to promote your band</p>
                    <form action="/action_page.php">
                        <select name="cars" id="cars">
                            <option value="volvo">Select Option</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <!-- <input type="submit" value="Submit"> -->
                    </form>
                    <h5>Required number of posts or stories or reels on Facebook</h5>
                    <div class="counter">
                        <button id="decrement">-</button>
                        <span id="count">1</span>
                        <button id="increment">+</button>
                    </div>
                </div>
                <div class="right-sec">
                    <div class="checkbox-container">
                        <div class="checkbox-sec">
                            <img src="Frame.png">
                            <label for="checkbox">Photos</label>
                            <input type="checkbox" id="checkbox" />
                        </div>
                        <div class="checkbox-sec">
                            <img src="Frame.png">
                            <label for="checkbox">Videos</label>
                            <input type="checkbox" id="checkbox" />
                        </div>
                        <div class="checkbox-sec">
                            <img src="Frame.png">
                            <label for="checkbox">Text</label>
                            <input type="checkbox" id="checkbox" />
                        </div>
                    </div>
                    <div class="checkbox-container">
                        <div class="checkbox-sec">
                            <img src="Frame.png">
                            <label for="checkbox">Photos</label>
                            <input type="checkbox" id="checkbox" />
                        </div>
                        <div class="checkbox-sec">
                            <img src="Frame.png">
                            <label for="checkbox">Videos</label>
                            <input type="checkbox" id="checkbox" />
                        </div>
                        <div class="checkbox-sec">
                            <img src="Frame.png">
                            <label for="checkbox">Text</label>
                            <input type="checkbox" id="checkbox" />
                        </div>
                    </div>
                </div>
            </div>
            <!--First row-->
            <div class="inner-content-row">
                <div class="inner-content">
                    <div class="logo">
                        <img src="insta.png">
                        <h5>Instagram</h5>
                    </div>
                    <h4>Select your content type</h4>
                    <p>Select the ways in which your brand wil be promoted on Instagram</p>
                    <form action="/action_page.php">
                        <select name="cars" id="cars">
                            <option value="volvo">Select Option</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <!-- <input type="submit" value="Submit"> -->
                    </form>
                    <h4>Content Placement</h4>
                    <p>Select the content place where influencer will post content to promote your band</p>
                    <form action="/action_page.php">
                        <select name="cars" id="cars">
                            <option value="volvo">Select Option</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <!-- <input type="submit" value="Submit"> -->
                    </form>
                    <h5>Required number of posts or stories or reels on Instagram</h5>
                    <div class="counter">
                        <button id="decrement">-</button>
                        <span id="count">1</span>
                        <button id="increment">+</button>
                    </div>
                </div>
                <div>
                </div>
            </div>
            <!--Second section-->
            <div class="inner-content-row">
                <div class="inner-content">
                    <div class="logo">
                        <img src="youtube.png">
                        <h5>Youtube</h5>
                    </div>
                    <h4>Select your content type</h4>
                    <p>Select the ways in which your brand wil be promoted on Youtube</p>
                    <form action="/action_page.php">
                        <select name="cars" id="cars">
                            <option value="volvo">Select Option</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <!-- <input type="submit" value="Submit"> -->
                    </form>
                    <h4>Content Placement</h4>
                    <p>Select the content place where influencer will post content to promote your band</p>
                    <form action="/action_page.php">
                        <select name="cars" id="cars">
                            <option value="volvo">Select Option</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <!-- <input type="submit" value="Submit"> -->
                    </form>
                    <h5>Required number of posts or stories or reels on Youtube</h5>
                    <div class="counter">
                        <button id="decrement">-</button>
                        <span id="count">1</span>
                        <button id="increment">+</button>
                    </div>
                </div>
                <div>
                </div>
            </div>
            <!--Third section-->
        </div>
    </div>
    <script>
        const countDisplay = document.getElementById('count');
        const decrementButton = document.getElementById('decrement');
        const incrementButton = document.getElementById('increment');

        let count = 1;

        decrementButton.addEventListener('click', () => {
            if (count > 0) {
                count--;
                countDisplay.textContent = count;
            }
        });

        incrementButton.addEventListener('click', () => {
            count++;
            countDisplay.textContent = count;
        });
    </script>
    <style>
        .footer-cta,
        .footer-area,
        .inflanar-header.inflanar-header__v2 {
            display: none;
        }

        .compaign-container {
            width: 1094px;
            margin: 0 auto;
            font-family: "Poppins", serif;
        }

        .logo h5 {
            color: #000;
            margin: 0px;
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: -0.18px;
            text-transform: capitalize;
        }

        .inner-content p {
            color: #747474;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
        }

        .inner-content h4 {
            color: #000;
            margin: 20px 0px 0px 0px;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .campaign-wrap {
            width: 100%;
        }

        .campaign-container {
            width: 1094px;
            margin: 0 auto;
        }

        .inner-content {}

        .inner-content select {
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            width: 143px;
            height: 44px;
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding: 6px 11px 6px 10px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox-sec {
            display: flex;
            align-items: center;
            justify-content: space-around;
            border-bottom: 1px solid #EFEFEF;
            padding: 14px 1px;
        }

        .checkbox-container {
            border-radius: 10px;
            border: 1px solid #E8E8E8;
            background: #FFF;
            box-shadow: 0px 0px 8.6px 0px rgba(0, 0, 0, 0.15);
            margin-bottom: 37px;
            width: 223px;
            height: 165px;
            flex-shrink: 0;
            align-items: center;
        }

        .checkbox-container input[type="checkbox"] {
            margin-left: 10px;
            width: 20px;
            height: 20px;
        }

        .checkbox-container label {
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .inner-content-row {
            display: flex;
            justify-content: space-around;
        }

        .inner-content-row {
            display: flex;
            justify-content: space-between;
            border-radius: 14px;
            border: 1px solid #E6E6E6;
            background: #FFF;
            padding: 30px;
            margin-bottom: 40px;
        }

        .inner-content h5 {
            color: #000;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .counter {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 120px;
            height: 40px;
            background-color: #fff;
        }

        .counter button {
            all: unset;
            width: 30%;
            text-align: center;
            font-size: 18px;
            color: #4a4aef;
            cursor: pointer;
            user-select: none;
        }

        .counter button:hover {
            color: #3a3acc;
        }

        .counter span {
            width: 40%;
            text-align: center;
            font-size: 18px;
            color: #000;
        }

        .counter span {
            border: 1px solid #D9D9D9;
            height: 40px;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        :focus-visible {
            outline: none;
        }

        .right-sec {
            margin-top: 60px;
        }
    </style>
