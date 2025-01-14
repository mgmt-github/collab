@extends('layout')
@section('title')
    <title>{{ __('admin.Cart') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')


    <style>
        .footer-cta,
        .footer-area,
        .inflanar-header.inflanar-header__v2 {
            display: none;
        }

        .custom-font {
            font-family: 'Poppins';
            background: linear-gradient(0deg, #F4F6F9 0%, #F4F6F9 100%), #FFF;
            padding: 40px 0px;
            min-height: 100vh;
        }

        .custom-font input[type="checkbox"]:checked {
            background: #5856D6
        }

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

        .table-main {
            border-radius: 12px;
            background: #FFF;
            padding: 37px;
        }

        .cart-title {
            color: #000;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .cart-para {
            color: #5B5B5B;
            font-size: 16px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            padding-top: 5px;
        }

        .custom-font table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .custom-font table th,
        .custom-font table td {
            text-align: center;
            padding: 20px 10px
        }

        .custom-font table td {
            color: #000;
            font-size: 17.775px;
            font-style: normal;
            font-weight: 400;
            line-height: 28.439px;
        }

        .custom-font table th {
            color: #000;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: 28.439px;
        }

        .custom-font table img {
            width: 67px;
            height: 71px;
            border-radius: 5px;
        }

        .quantity-input {
            width: 40px !important;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .bottom-btn-checkout {
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .bottom-btns {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-right: 50px;
            padding-left: 50px;
        }

        .subtotal {
            color: #000;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            padding-bottom: 20px;
            margin-bottom: 56px;
            margin-right: 100px;
            gap: 120px;
            display: flex;
            justify-content: center;
            border-bottom: 2px solid #DFDFDF;
        }

        .subtotal-btn {
            display: flex;
            width: 100%;
            justify-content: flex-end
        }

        .checkout-btn {
            display: block;
            width: 407px;
            background-color: #6036AE;
            color: #fff;
            text-align: center;
            padding: 12px;
            border-radius: 5px;
            justify-content: center;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .checkout-btn:hover {
            background-color: #5a4cc4;
            color: #fff;
        }

        .btn-with-icon {
            border-radius: 90px;
            border: 2px solid #E6E8EC;
            display: inline-flex;
            padding: 16px 24px;
            justify-content: center;
            align-items: center;
            gap: 12px;
        }

        .span-class {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .img-story {
            display: flex;
            flex-direction: row;
            gap: 20px;
            align-items: center;
        }

        .image-title {
            color: #000;
            font-size: 22px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .img-card {
            width: 254px;
            height: 246px;
            position: relative;
            border-radius: 6.16px;
            overflow: hidden;
        }

        .img-class {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6.16px;

        }

        .add-cart-btn {
            position: absolute;
            bottom: 20px;
            left: 30%;
            border-radius: 3.133px;
            border: 1px solid #FFF;
            color: #FFF;
            padding: 5px 11px;
            font-size: 12px;
            font-weight: 500;
        }

        .add-cart-btn:hover {
            border: 1px solid #FFF;
            color: #FFF;
            transition: all 0.3s ease;
        }

        .img-description {
            display: flex;
            justify-content: space-between;
            padding-top: 5px;
            color: var(--color-grey-13, #222);
            font-size: 12px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        .img-card-bottom {
            display: flex;
            direction: row;
            gap: 43px;
        }

        .img-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30%;
            background-color: rgb(0 0 0 / 50%);
            pointer-events: none;
        }

        .table-container {
            width: 1226px;
        }

        .table-wrap {
            width: 100%;
        }

        .title-flex {
            display: flex;
            justify-content: space-between;
        }

        .title-flex span {
            font-size: 18px;
            font-weight: 300px;
            cursor: pointer;
        }
    </style>
    <section class="custom-font">
        <div class="container">
            <!--Tab Nav -->
            <div class="steps">
                <a href="#" class="steps-item active"><span>1</span>{{ __('admin.Shopping cart') }}</a>
                <a href="/checkout" class="steps-item"><span>2</span>{{ __('admin.Checkout details') }}</a>
                <a href="#" class="steps-item"><span>3</span>{{ __('admin.Requirements') }}</a>
            </div>
            <!-- Tab Content -->
            {{-- cart table  --}}
            <div class="table-wrap">
                <div class="table-container">
                    {{-- table content start  --}}
                    <div class="table-main mg-top-40">
                        <div class="title-flex">
                            <div>
                                <div class="cart-title">{{ __('admin.Shopping cart') }}</div>
                                <p class="cart-para">{{ __('admin.You have 3 items in your cart') }}</p>
                            </div>
                            <span>{{ __('admin.Select All') }}</span>
                        </div>
                        <table class="mg-top-20">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{ __('admin.Price') }}</th>
                                    <th>{{ __('admin.Quantity') }}</th>
                                    <th>{{ __('admin.Total') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="img-story">
                                        <input type="checkbox">
                                        <img src="https://s3-alpha-sig.figma.com/img/0936/2c37/10541d2d44297ae91b60bbf7cfdb055a?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Kdt0lBezKoeTOc~KtAkJgsGHdwwGbObz5vPxcoyDuYwTkpWOM2anRCv6N6CzBThPqnbagKiUmOyRJ5PU5x8dtW-ODWRK9LjjrvljhZoYDylp6YGYWVRIxTk1Lb0LvyvNzCdmedX41-DT0F-iTrm8e2LqhUBCrqeqlk4qNVTdeN0r2X8CH~2ZGepsWCUPDZc8x2XHHJH~ZBg7dvKKurtmSPCeMycIg9uleFU~jx4L3WYwtLYskWVwE7Cok0B3JPVO9bxiWBOyTLPjzZuNf3orIvdYZS31lVvY~ilEp~zub6y1siKTsbQJMG3dpzn8N7elb5PY50qHX5xMZqgWxJ-40Q__"
                                            alt="Item">
                                        <span
                                            class="span-class">{{ __('admin.1 Detailed Instagram Story') }}<br><small>{{ __('admin.Erin') }}</small></span>
                                    </td>
                                    <td>$15.00</td>
                                    <td><input type="number" class="quantity-input" value="3"></td>
                                    <td>$75.00</td>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M16.8856 6.22109L16.1148 17.0124C16.0483 17.9426 15.2744 18.6633 14.3418 18.6633H6.98716C6.05464 18.6633 5.28066 17.9426 5.21422 17.0124L4.44341 6.22109M8.88704 9.77599V15.1083M12.4419 9.77599V15.1083M13.3307 6.22109V3.55491C13.3307 3.06408 12.9328 2.66618 12.4419 2.66618H8.88704C8.39621 2.66618 7.99832 3.06408 7.99832 3.55491V6.22109M3.55469 6.22109H17.7743"
                                                stroke="#C16A6A" stroke-width="1.77745" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></td>
                                </tr>
                                <tr>
                                    <td class="img-story">
                                        <input type="checkbox">

                                        <img src="https://s3-alpha-sig.figma.com/img/0936/2c37/10541d2d44297ae91b60bbf7cfdb055a?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Kdt0lBezKoeTOc~KtAkJgsGHdwwGbObz5vPxcoyDuYwTkpWOM2anRCv6N6CzBThPqnbagKiUmOyRJ5PU5x8dtW-ODWRK9LjjrvljhZoYDylp6YGYWVRIxTk1Lb0LvyvNzCdmedX41-DT0F-iTrm8e2LqhUBCrqeqlk4qNVTdeN0r2X8CH~2ZGepsWCUPDZc8x2XHHJH~ZBg7dvKKurtmSPCeMycIg9uleFU~jx4L3WYwtLYskWVwE7Cok0B3JPVO9bxiWBOyTLPjzZuNf3orIvdYZS31lVvY~ilEp~zub6y1siKTsbQJMG3dpzn8N7elb5PY50qHX5xMZqgWxJ-40Q__"
                                            alt="Item">
                                        <span
                                            class="span-class">{{ __('admin.1 Detailed Instagram Story') }}<br><small>{{ __('admin.Erin') }}</small></span>
                                    </td>
                                    <td>$15.00</td>
                                    <td><input type="number" class="quantity-input" value="1"></td>
                                    <td>$15.00</td>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M16.8856 6.22109L16.1148 17.0124C16.0483 17.9426 15.2744 18.6633 14.3418 18.6633H6.98716C6.05464 18.6633 5.28066 17.9426 5.21422 17.0124L4.44341 6.22109M8.88704 9.77599V15.1083M12.4419 9.77599V15.1083M13.3307 6.22109V3.55491C13.3307 3.06408 12.9328 2.66618 12.4419 2.66618H8.88704C8.39621 2.66618 7.99832 3.06408 7.99832 3.55491V6.22109M3.55469 6.22109H17.7743"
                                                stroke="#C16A6A" stroke-width="1.77745" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></td>
                                </tr>
                                <tr>

                                    <td class="img-story">
                                        <input type="checkbox">

                                        <img src="https://s3-alpha-sig.figma.com/img/0936/2c37/10541d2d44297ae91b60bbf7cfdb055a?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Kdt0lBezKoeTOc~KtAkJgsGHdwwGbObz5vPxcoyDuYwTkpWOM2anRCv6N6CzBThPqnbagKiUmOyRJ5PU5x8dtW-ODWRK9LjjrvljhZoYDylp6YGYWVRIxTk1Lb0LvyvNzCdmedX41-DT0F-iTrm8e2LqhUBCrqeqlk4qNVTdeN0r2X8CH~2ZGepsWCUPDZc8x2XHHJH~ZBg7dvKKurtmSPCeMycIg9uleFU~jx4L3WYwtLYskWVwE7Cok0B3JPVO9bxiWBOyTLPjzZuNf3orIvdYZS31lVvY~ilEp~zub6y1siKTsbQJMG3dpzn8N7elb5PY50qHX5xMZqgWxJ-40Q__"
                                            alt="Item">
                                        <span
                                            class="span-class">{{ __('admin.1 Detailed Instagram Story') }}<br><small>{{ __('admin.Erin') }}</small></span>
                                    </td>
                                    <td>$15.00</td>
                                    <td><input type="number" class="quantity-input" value="7"></td>
                                    <td>$105.00</td>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M16.8856 6.22109L16.1148 17.0124C16.0483 17.9426 15.2744 18.6633 14.3418 18.6633H6.98716C6.05464 18.6633 5.28066 17.9426 5.21422 17.0124L4.44341 6.22109M8.88704 9.77599V15.1083M12.4419 9.77599V15.1083M13.3307 6.22109V3.55491C13.3307 3.06408 12.9328 2.66618 12.4419 2.66618H8.88704C8.39621 2.66618 7.99832 3.06408 7.99832 3.55491V6.22109M3.55469 6.22109H17.7743"
                                                stroke="#C16A6A" stroke-width="1.77745" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="subtotal-btn">
                            <div class="subtotal">{{ __('admin.Subtotal') }}: <span>$195.00</span></div>
                        </div>
                        <div class="bottom-btns">
                            <div class="btn-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5ZM13.5875 8.12876C13.8197 7.87335 13.8008 7.47807 13.5454 7.24588C13.29 7.01368 12.8947 7.03251 12.6625 7.28792L8.96529 11.3549L7.34366 9.51705C7.11528 9.25822 6.72032 9.23353 6.46149 9.46191C6.20267 9.69029 6.17798 10.0852 6.40636 10.3441L8.36657 12.5656C8.67862 12.9193 9.22872 12.9234 9.54598 12.5744L13.5875 8.12876Z"
                                        fill="#6036AE" />
                                </svg>
                                <a href="#">{{ __('admin.Cart has been updated') }}</a>
                            </div>
                            <a href="#" class="checkout-btn">{{ __('admin.Checkout') }}</a>
                        </div>

                    </div>
                    {{-- table content ends --}}
                    {{-- images part start  --}}
                    <div class="mg-top-40">
                        <span class="image-title">{{ __('admin.Similar Creators With these Package') }}</span>
                        <div class="img-card-bottom mg-top-20">
                            <div>
                                <div class="img-card">
                                    <div class="img-class">
                                        <img src="https://s3-alpha-sig.figma.com/img/3a99/63b8/02b84d84bb29593f18526952b224c0c2?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=b08cDX69WDoU7M9pq756YHWbIqW~Pc40tap4hM0K7ZPIb9zyKNSDRz2Q2L8U8Xhs8WA63Iq9VEkb46HLDV7WKyaLwDYzMt7fcuIT7iWO8WYp-lwaI5ZLQVxOIVdJ0Z193Liyb1Rfnm6hv2ICyrRQ31YJqCvC5moZx54LJpWHemIimev3Bu9XmZO5RqfoPtSE-6s7YXDGTHqOyZo8X6TdnLddrO7mmVqHsscz6uN7ty~4iIAtrJY6zbB5GaZ7m4ZxyxkIlnhPxnRycIErq23vbqkz2-IfE-SLPT1Z9Mlm57VDchkcsY5LYUpy20Vw49ZpIwf90bfMcPOhPuabpYkcew__"
                                            alt="Item" />
                                        <div class="img-overlay"></div>
                                        <a href="#" class="add-cart-btn">{{ __('admin.Add to Cart') }}</a>
                                    </div>
                                </div>
                                <div class="img-description">
                                    <span>{{ __('admin.Makeup Wih two Influencers') }}</span><span>$1200</span>
                                </div>
                            </div>
                            <div>
                                <div class="img-card">
                                    <div class="img-class">
                                        <img src="https://s3-alpha-sig.figma.com/img/76bf/352d/53a460c54e056ba7b75db285fa7fde83?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=SccbQkzgD4zXJK5KIRtovH7SLzJY3aaueMArk0lxmlT~vF7OUrcp2pqHiAVM91cZEQleHQScEESxGOIhDVdE3~U9CmX~5cuALxc2A1qDuXHpHfQ4jMEOmh3RLiT~tRv~uKS4xWanVYFIUoyQPNncti7lOJ~l-T7IAzI-OX~1-ZUF9H1M3ZCShGWKdc6-XLHGxURH3PIcbiXMFTjFCb31ljQo9jvQzd4lVVSatg355oZboJUYqnpcgWKJB0M2KWD40aIFoStxuT9A6OuDpZHs53BtL3BmF72YnE0LwP1ybGkMYgerXIBU0Q2inW5jeYGkZGXWwCXZNBKz-7nE2x600g__"
                                            alt="Item" />
                                        <div class="img-overlay"></div>
                                        <a href="#" class="add-cart-btn">{{ __('admin.Add to Cart') }}</a>
                                    </div>
                                </div>
                                <div class="img-description">
                                    <span>{{ __('admin.Makeup Wih two Influencers') }}</span><span>$1200</span>
                                </div>
                            </div>
                            <div>
                                <div class="img-card">
                                    <div class="img-class">
                                        <img src="https://s3-alpha-sig.figma.com/img/3a99/63b8/02b84d84bb29593f18526952b224c0c2?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=b08cDX69WDoU7M9pq756YHWbIqW~Pc40tap4hM0K7ZPIb9zyKNSDRz2Q2L8U8Xhs8WA63Iq9VEkb46HLDV7WKyaLwDYzMt7fcuIT7iWO8WYp-lwaI5ZLQVxOIVdJ0Z193Liyb1Rfnm6hv2ICyrRQ31YJqCvC5moZx54LJpWHemIimev3Bu9XmZO5RqfoPtSE-6s7YXDGTHqOyZo8X6TdnLddrO7mmVqHsscz6uN7ty~4iIAtrJY6zbB5GaZ7m4ZxyxkIlnhPxnRycIErq23vbqkz2-IfE-SLPT1Z9Mlm57VDchkcsY5LYUpy20Vw49ZpIwf90bfMcPOhPuabpYkcew__"
                                            alt="Item" />
                                        <div class="img-overlay"></div>
                                        <a href="#" class="add-cart-btn">{{ __('admin.Add to Cart') }}</a>
                                    </div>
                                </div>
                                <div class="img-description">
                                    <span>{{ __('admin.Makeup Wih two Influencers') }}</span><span>$1200</span>
                                </div>
                            </div>
                            <div>
                                <div class="img-card">
                                    <div class="img-class">
                                        <img src="https://s3-alpha-sig.figma.com/img/3a99/63b8/02b84d84bb29593f18526952b224c0c2?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=b08cDX69WDoU7M9pq756YHWbIqW~Pc40tap4hM0K7ZPIb9zyKNSDRz2Q2L8U8Xhs8WA63Iq9VEkb46HLDV7WKyaLwDYzMt7fcuIT7iWO8WYp-lwaI5ZLQVxOIVdJ0Z193Liyb1Rfnm6hv2ICyrRQ31YJqCvC5moZx54LJpWHemIimev3Bu9XmZO5RqfoPtSE-6s7YXDGTHqOyZo8X6TdnLddrO7mmVqHsscz6uN7ty~4iIAtrJY6zbB5GaZ7m4ZxyxkIlnhPxnRycIErq23vbqkz2-IfE-SLPT1Z9Mlm57VDchkcsY5LYUpy20Vw49ZpIwf90bfMcPOhPuabpYkcew__"
                                            alt="Item" />
                                        <div class="img-overlay"></div>
                                        <a href="#" class="add-cart-btn">{{ __('admin.Add to Cart') }}</a>
                                    </div>
                                </div>
                                <div class="img-description">
                                    <span>{{ __('admin.Makeup Wih two Influencers') }}</span><span>$1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- images part end  --}}
                </div>
            </div>
            {{-- cart table end  --}}

        </div>
        </div>
    </section>
