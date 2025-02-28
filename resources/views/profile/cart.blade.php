@extends('profile.master_layout')
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


        .table-main {
            border-radius: 12px;
            background: #FFF;
            padding: 37px 10px;
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
            padding: 10px;
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
            flex: 1;
            width: 30px !important;
            text-align: center;
            border: 1px solid #ddd;
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

        .btn-with-icon {
            border-radius: 90px;
            border: 2px solid #E6E8EC;
            display: inline-flex;
            padding: 0 10px;
            justify-content: center;
            align-items: center;
            gap: 12px;
        }

        .influancer-body {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            row-gap: 15px;
        }

        .subtotal {
            color: #000;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            padding-bottom: 20px;
            margin-bottom: 56px;
            margin-right: 8%;
            gap: 120px;
            display: flex;
            justify-content: center;
            border-bottom: 2px solid #DFDFDF;
        }

        .checkout-btn {
            display: block;
            background-color: #6036AE;
            color: #fff;
            text-align: center;
            padding: 12px 30px;
            border-radius: 5px;
            justify-content: center;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            width: 35%;
        }

        @media only screen and (max-width: 1200px) {

            .influancer-body {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 10px;
                row-gap: 15px;
            }

        }

        @media only screen and (max-width: 900px) {
            .btn-with-icon {
                border-radius: 90px;
                border: 2px solid #E6E8EC;
                display: inline-flex;
                padding: 10px;
                justify-content: center;
                align-items: center;
                gap: 5px;
                margin-top: 20px;

            }

            .checkout-btn {
                display: block;
                background-color: #6036AE;
                color: #fff;
                text-align: center;
                padding: 12px;
                border-radius: 5px;
                justify-content: center;
                font-size: 18px;
                font-style: normal;
                font-weight: 500;
                line-height: normal;
                width: auto;
            }

            .bottom-btns {
                display: flex;
                flex-direction: column-reverse;
                justify-content: space-between;
                padding: 10px;
            }

            .influancer-body {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
                row-gap: 15px;
            }

        }

        @media only screen and (max-width: 600px) {
            .influancer-body {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 10px;
                row-gap: 15px;
            }

            .steps {
                display: inline-flex;
                flex-direction: column;
                border: none;
                border-radius: 0px;
                gap: 35px;
            }

            .subtotal {
                color: #000;
                text-align: center;
                font-size: 16px;
                font-weight: 500;
                padding-bottom: 20px;
                margin-bottom: 56px;
                margin-right: 8%;
                gap: 80px;
                display: flex;
                justify-content: center;
                border-bottom: 2px solid #DFDFDF;
            }

            .btn-with-icon {
                border-radius: 90px;
                border: 2px solid #E6E8EC;
                display: inline-flex;
                padding: 10px;
                justify-content: center;
                align-items: center;
                gap: 5px;
            }

            .checkout-btn {
                display: block;
                background-color: #6036AE;
                color: #fff;
                text-align: center;
                padding: 12px;
                border-radius: 5px;
                justify-content: center;
                font-size: 18px;
                font-style: normal;
                font-weight: 500;
                line-height: normal;
                width: auto;
            }

            .bottom-btns {
                display: flex;
                flex-direction: column-reverse;
                justify-content: space-between;
                padding: 10px;
            }
        }

        .inflanar-table__main {
            border-radius: 0px !important;
            overflow: hidden;
            width: 100%;
        }


        .subtotal-btn {
            display: flex;
            width: 100%;
            justify-content: flex-end
        }


        .checkout-btn:hover {
            background-color: #5a4cc4;
            color: #fff;
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
            width: 500px;
        }

        .image-title {
            color: #000;
            font-size: 22px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .table-wrap {
            width: 100%;
        }

        .title-flex {
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
        }

        .title-flex span {
            font-size: 18px;
            font-weight: 300px;
            cursor: pointer;
        }

        .quantity-control {
            display: flex;
            border: 1px solid #DFDFDF;
            border-radius: 5px;
            width: 80px;
            text-align: center;
        }

        .quantity-control button {
            background: none;
            border: none;
            flex: 1;
        }

        .quantity-control button:focus {
            outline: none;
        }

        .quantity-control button:hover {
            background: #DFDFDF;
        }

        .remove-btn {
            background: none;
            border: none;
        }

        .remove-btn-form {
            margin: 0 !important;
        }


        .in-item {
            border-radius: 6.374px;
            border: 1.035px solid #D1D1D1;
            background: #FBFBFF;
            height: 152.098px;
            padding: 14px;
            position: relative;
        }

        .in-item h5 {
            color: #222;
            font-family: "Poppins", serif;
            font-size: 16.555px;
            font-style: normal;
            font-weight: 400;
            line-height: 157.118%;
            /* 26.011px */
        }

        .in-item a {
            border-radius: 3.133px;
            border: 0.448px solid #C1C1C1;
            background: #E6E6F9;
            padding: 5px 13px;
            color: #4A48B8;
            font-family: "Poppins", serif;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .cart-item span {
            color: #222;
            font-family: "Poppins", serif;
            font-size: 16.555px;
            font-style: normal;
            font-weight: 500;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0;
            position: absolute;
            width: 89%;
            bottom: 10px;
        }

        .cart-item button {
            border-radius: 3px;
            border: 0.448px solid #C1C1C1;
            background: #E6E6F9;
            color: #4A48B8;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: 30.876px;
            font-family: "Poppins", serif;
            padding: 0 5px 0;
        }
    </style>


    <div class="main-content">
        <section class="section custom-font">
            <div class="section-body">
                <!--Tab Nav -->
                <div class="steps">
                    <a href="#" class="steps-item active"><span>1</span>{{ __('admin.Shopping cart') }}</a>
                    <a href="#" class="steps-item"><span>2</span>{{ __('admin.Checkout details') }}</a>
                </div>
                <!-- Tab Content -->
                {{-- cart table  --}}
                <div class="table-wrap mg-top-20">
                    <div class="table-container">
                        {{-- table content start  --}}
                        <div class="table-main">
                            <div class="title-flex">
                                <div>
                                    <div class="cart-title">{{ __('admin.Shopping cart') }}</div>
                                    <p class="cart-para">
                                        {{ __('admin.You have') }} {{ count($cart) }} {{ __('admin.items in your cart') }}
                                    </p>
                                </div>
                            </div>
                            <div style="overflow-x:auto;">
                                <table id="inflanar-table__order" class="inflanar-table__main inflanar-table__main-v2"
                                    style="overflow-x:auto;">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            {{-- <th>{{ __('admin.Price') }}</th> --}}
                                            <th>{{ __('Price') }}</th>
                                            <th>{{ __('admin.Quantity') }}</th>
                                            <th>{{ __('admin.Total') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $id => $item)
                                            <tr data-item-id="{{ $id }}">
                                                <td class="img-story">

                                                    @if (isset($item['image']))
                                                        <img src="{{ asset($item['image']) }}" alt="Item">
                                                    @endif
                                                    <span class="span-class">
                                                        {{ $item['name'] }}
                                                        <br>
                                                        <small>{{ __('admin.Item ID') }}: {{ $id }}</small>
                                                    </span>
                                                </td>
                                                <td>${{ number_format($item['price'], 2) }}</td>
                                                <td>
                                                    <div class="quantity-control">
                                                        <button class="decrease-quantity"
                                                            onclick="changeQuantity(this, -1)">-</button>
                                                        <input type="number" class="quantity-input"
                                                            data-item-id="{{ $id }}"
                                                            value="{{ $item['quantity'] }}" min="1" readonly>
                                                        <button class="increase-quantity"
                                                            onclick="changeQuantity(this, 1)">+</button>
                                                    </div>

                                                </td>
                                                <td class="item-total">
                                                    ${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('user.cart.remove', $id) }}"
                                                        class="remove-btn-form">
                                                        @csrf
                                                        <button type="submit" class="remove-btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" viewBox="0 0 22 22" fill="none">
                                                                <path
                                                                    d="M16.8856 6.22109L16.1148 17.0124C16.0483 17.9426 15.2744 18.6633 14.3418 18.6633H6.98716C6.05464 18.6633 5.28066 17.9426 5.21422 17.0124L4.44341 6.22109M8.88704 9.77599V15.1083M12.4419 9.77599V15.1083M13.3307 6.22109V3.55491C13.3307 3.06408 12.9328 2.66618 12.4419 2.66618H8.88704C8.39621 2.66618 7.99832 3.06408 7.99832 3.55491V6.22109M3.55469 6.22109H17.7743"
                                                                    stroke="#C16A6A" stroke-width="1.77745"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                            <div class="subtotal-btn">
                                <div class="subtotal">{{ __('admin.Subtotal') }}:
                                    <span>${{ number_format($subtotal, 2) }}</span>
                                </div>
                            </div>

                            <div class="bottom-btns">
                                <div class="btn-with-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5ZM13.5875 8.12876C13.8197 7.87335 13.8008 7.47807 13.5454 7.24588C13.29 7.01368 12.8947 7.03251 12.6625 7.28792L8.96529 11.3549L7.34366 9.51705C7.11528 9.25822 6.72032 9.23353 6.46149 9.46191C6.20267 9.69029 6.17798 10.0852 6.40636 10.3441L8.36657 12.5656C8.67862 12.9193 9.22872 12.9234 9.54598 12.5744L13.5875 8.12876Z"
                                            fill="#6036AE" />
                                    </svg>
                                    <a href="#">{{ __('admin.Cart has been updated') }}</a>
                                </div>
                                <a href="{{ route('user.checkout') }}" class="checkout-btn">{{ __('admin.Checkout') }}</a>
                            </div>


                            <div class="cart-title  my-5 ">{{ __('Some Random Service') }}</div>
                            <div class="influancer-body ">

                                @foreach ($services as $service)
                                    <div class="in-item" data-category="{{ strtolower($service->platform?->name) }}">
                                        <h5>{{ $service->translate->title }}</h5>

                                        <div class="cart-item">
                                            <form method="POST" action="{{ route('user.cart.add-to-cart') }}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $service->id }}">
                                                <input type="hidden" name="image"
                                                    value="{{ $service->thumbnail_image }}">
                                                <input type="hidden" name="name"
                                                    value="{{ $service->translate->title }}">
                                                <input type="hidden" name="price" value="{{ $service->price }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit">Add to Cart</button>
                                            </form>
                                            <span>${{ $service->price }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- images part end  --}}
                    </div>
                </div>
                {{-- cart table end  --}}

            </div>
        </section>
    </div>

    <script>
        $(document).ready(function() {
            $('.quantity-input').on('change', function() {
                let itemId = $(this).data('item-id');
                let newQuantity = $(this).val();
                let row = $(this).closest('tr');
                let route = "{{ route('user.cart.update', ['id' => '__ID__']) }}"; // Placeholder for ID
                let finalRoute = route.replace("__ID__", itemId);

                $.ajax({
                    url: finalRoute,
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        quantity: newQuantity,
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // Update item total and subtotal
                            row.find('.item-total').text(`$${response.item_total.toFixed(2)}`);
                            $('.subtotal span').text(`$${response.subtotal.toFixed(2)}`);

                            // Show success message
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        // Handle validation errors
                        if (xhr.status === 422) {
                            alert(xhr.responseJSON.errors.quantity[0]);
                        } else {
                            alert(xhr.responseJSON.message);
                        }
                    },
                });
            });
        });
    </script>
    <script>
        function changeQuantity(button, delta) {
            let input = $(button).siblings('.quantity-input');
            let currentQuantity = parseInt(input.val());
            let newQuantity = currentQuantity + delta;

            if (newQuantity >= 1) {
                input.val(newQuantity).trigger('change');
            }
        }
    </script>
@endsection
