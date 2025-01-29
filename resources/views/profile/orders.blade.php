@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Orders') }}</title>
@endsection
@section('frontend-content')
    <!-- Breadcrumbs -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .main-content {
            padding-top: 75px;
        }

        .table-order.inflanar-personals__content {
            padding: 17px;
            border-radius: 10px;
            background: #FFF;
        }

        .table-order.inflanar-personals__content thead.inflanar-table__head {
            background: transparent;
        }

        .inflanar-table__main .inflanar-table__body tr:nth-child(2n) {
            background-color: transparent;
        }

        .inflanar-pagination ul li a:hover,
        .inflanar-pagination ul li.active a {

            color: #fff !important;
            border-color: transparent !important;
            border-radius: 8px;
            background: #6036AE;
        }

        .inflanar-table__main .inflanar-table__body tr:nth-child(odd) {
            background-color: #f5f5f5;
        }

        table#inflanar-table__order thead th {
            color: #292D32;
            font-family: "Poppins", serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            padding: 14px 6px;
        }

        table#inflanar-table__order td {
            color: #292D32;
            font-family: "Poppins", serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .table-order.inflanar-personals__content h3 {
            color: #292D32;
            font-family: Inter;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            margin-bottom: 0;
            line-height: 136%;
            letter-spacing: -0.24px;
            padding: 0 4px;
        }

        .inflanar-pagination ul li a:hover,
        .inflanar-pagination ul li.active a {

            background: #6036AE;

        }

        .inflanar-pagination li a {
            font-size: 16px;
            font-weight: 400;
            width: 32px;
            height: 32px;
            padding: 10px;
            border-radius: 8px;
            background: #EEE;
            border-color: #EEE !important;
            color: #333;
            font-family: "Poppins", serif;
            font-size: 13px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        .inflanar-pagination .inflanar-pagination__button a {
            color: #333 !important;
        }
    </style>
    <!-- End breadcrumbs -->

    <!-- Features -->
    <div class="main-content">
        <section class="section">
            <!-- <div class="section-header">
                        <h1>{{ __('admin.Dashboard') }}</h1>
                      </div> -->

            <div class="section-body">


                <div class="table-order inflanar-personals__content">
                    <h3>Order</h3>
                    <div class="inflanar-table p-0">
                        <table id="inflanar-table__order" class="inflanar-table__main inflanar-table__main--order ">
                            <!-- sherah Table Head -->
                            <thead class="inflanar-table__head">
                                <tr>
                                    <th class="inflanar-table__column-1 inflanar-table__h1">{{ __('admin.Order Id') }}</th>
                                    <th class="inflanar-table__column-2 inflanar-table__h2">{{ __('admin.Influencer') }}
                                    </th>
                                    {{-- <th class="inflanar-table__column-3 inflanar-table__h3">{{ __('Place Order Date') }} --}}
                                    </th>
                                    <th class="inflanar-table__column-4 inflanar-table__h4">{{ __('admin.Amount') }}</th>
                                    <th class="inflanar-table__column-5 inflanar-table__h5">{{ __('admin.Status') }}</th>
                                    <th class="inflanar-table__column-7 inflanar-table__h6">{{ __('admin.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody class="inflanar-table__body">
                                @foreach ($orders as $index => $order)
                                    <tr>
                                        <td class="inflanar-table__column-1 inflanar-table__data-1">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">#{{ $order->order_id }}</p>
                                            </div>
                                        </td>
                                        <td class="inflanar-table__column-2 inflanar-table__data-2">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">{{ $order->influencer->name }}</p>
                                            </div>
                                        </td>
                                        {{-- <td class="inflanar-table__column-3 inflanar-table__data-3">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">
                                                    {{ date('F d, Y', strtotime($order->created_at)) }}</p>
                                            </div>
                                        </td> --}}
                                        <td class="inflanar-table__column-3 inflanar-table__data-4">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">

                                                    {{ currency($order->total_amount - $order->coupon_discount) }}
                                                </p>
                                            </div>
                                        </td>

                                        @if ($order->order_status == 'approved_by_influencer')
                                            <td class="inflanar-table__column-5 inflanar-table__data-5">
                                                <div class="inflanar-table__content">
                                                    <p class="inflanar-table__label">{{ __('admin.Active') }}</p>
                                                </div>
                                            </td>
                                        @elseif ($order->order_status == 'complete')
                                            <td class="inflanar-table__column-5 inflanar-table__data-5">
                                                <div class="inflanar-table__content">
                                                    <p class="inflanar-table__label">{{ __('admin.completed') }}</p>
                                                </div>
                                            </td>
                                        @elseif ($order->order_status == 'order_decliened_by_influencer' || $order->order_status == 'order_decliened_by_client')
                                            <td class="inflanar-table__column-5 inflanar-table__data-5">
                                                <div class="inflanar-table__content">
                                                    <p class="inflanar-table__label inflanar-table__label--cancel">
                                                        {{ __('admin.Declined') }}</p>
                                                </div>
                                            </td>
                                        @elseif ($order->order_status == 'awaiting_for_influencer_approval')
                                            <td class="inflanar-table__column-5 inflanar-table__data-5">
                                                <div class="inflanar-table__content">
                                                    <p class="inflanar-table__label inflanar-table__label--cancel">
                                                        {{ __('admin.Awaiting') }}</p>
                                                </div>
                                            </td>
                                        @endif

                                        <td class="inflanar-table__column-6 inflanar-table__data-6">
                                            <div class="inflanar-table__status__group">
                                                <a href="{{ route('user.order', $order->order_id) }}"
                                                    class="inflanar-table__action inflanar-table__action--view"><img
                                                        src="{{ asset('frontend/img/in-table-eye-icon.svg') }}"></a>


                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="inflanar-supports__bgroup mg-top-40">
                        {{ $orders->links('custom_pagination') }}
                    </div>
                    <!-- End Pagination -->

                </div>
            </div>


        </section>
    </div>

    <!-- End Features -->
@endsection
