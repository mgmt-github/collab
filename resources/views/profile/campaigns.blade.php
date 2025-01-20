@extends('profile.master_layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="keywords" content="{{ $seo_setting->seo_keyword }}">
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{{ $seo_setting->seo_description }}">
@endsection
@section('frontend-content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') .main-content {
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

        .campaign-page .inflanar-table__main .inflanar-table__body tr:nth-child(odd) {
            background-color: rgba(96, 54, 174, 0.13);
        }

        .campaign-page .inflanar-table__desc {
            color: #292D32;
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

        .campaign-title {
            display: flex;
            justify-content: space-between;
        }

        .campaign-title a {
            padding: 5px 10px;
            background: #6036AE;
            color: #FFF;
            border-radius: 10px;
            height: 40px;
        }

        .campaign-title a:hover {
            color: #FFF
        }

        .campaign-page .inflanar-table__label {
            border-radius: 100px;
            border: 1px solid #47D455;
            background: #CAFFCF;
            color: #292D32;
        }

        .campaign-page .inflanar-table__action {
            background: #fff;
            border-radius: 50px;
        }

        .trash-icon {
            background: none !important;
        }

        .campaign-page .inflanar-table__main .inflanar-table__body tr td {
            padding: 14px 6px;
        }

        .campaign-page .inflanar-table__label--cancel {
            border-radius: 100px;
            border: 1px solid #EE7C7C;
            background: #FFD5D5;
        }
    </style>
    <!-- Breadcrumbs -->
    <div class="main-content">
        <section class="section">

            <div class="section-body">


                <div class="table-order inflanar-personals__content campaign-page">
                    <div class="campaign-title">
                        <h3>Campaign</h3>
                        <a class="inflanar-btn" href="{{ route('user.campaign.store') }}"> Add campaign</a>
                    </div>
                    <div class="inflanar-table p-0 mg-top-20">
                        <table id="inflanar-table__order" class="inflanar-table__main inflanar-table__main--order ">
                            <!-- sherah Table Head -->
                            <thead class="inflanar-table__head">
                                <tr>
                                    <th class="inflanar-table__column-1 inflanar-table__h1">{{ __('admin.Order Id') }}</th>
                                    <th class="inflanar-table__column-2 inflanar-table__h2">{{ __('admin.Influencer') }}
                                    </th>
                                    <th class="inflanar-table__column-3 inflanar-table__h3">{{ __('Platform') }}</th>
                                    <th class="inflanar-table__column-4 inflanar-table__h4">{{ __('admin.Amount') }}</th>
                                    <th class="inflanar-table__column-5 inflanar-table__h5">{{ __('admin.Status') }}</th>
                                    <th class="inflanar-table__column-7 inflanar-table__h6">{{ __('admin.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody class="inflanar-table__body">
                                <tr>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">PDT-10022024-001</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">Fay Doyle</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">Instagram</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">$95.66</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-5 inflanar-table__data-5">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__label">{{ __('admin.Active') }}</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-6 inflanar-table__data-6">
                                        <div class="inflanar-table__status__group">
                                            <a href="#"
                                                class="inflanar-table__action inflanar-table__action--view"><img
                                                    src="{{ asset('frontend/img/Eye.svg') }}"></a>
                                            <a href="#"
                                                class="inflanar-table__action inflanar-table__action--view trash-icon"><img
                                                    src="{{ asset('frontend/img/trash.svg') }}"></a>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">PDT-10022024-001</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">Fay Doyle</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">Instagram</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-1 inflanar-table__data-1">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__desc">$95.66</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-5 inflanar-table__data-5">
                                        <div class="inflanar-table__content">
                                            <p class="inflanar-table__label inflanar-table__label--cancel">
                                                {{ __('admin.Awaiting') }}</p>
                                        </div>
                                    </td>
                                    <td class="inflanar-table__column-6 inflanar-table__data-6">
                                        <div class="inflanar-table__status__group">
                                            <a href="#"
                                                class="inflanar-table__action inflanar-table__action--view"><img
                                                    src="{{ asset('frontend/img/Eye.svg') }}"></a>
                                            <a href="#"
                                                class="inflanar-table__action inflanar-table__action--view trash-icon"><img
                                                    src="{{ asset('frontend/img/trash.svg') }}"></a>


                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </section>
    </div>


    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                let max_amount = "{{ $max_amount }}";
                let req_min_amount = "{{ $req_min_amount }}";
                let req_max_amount = "{{ $req_max_amount }}";
                // Use a different symbol for jQuery UI
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: max_amount,
                    values: [req_min_amount, req_max_amount],
                    slide: function(event, ui) {

                        $("#amount").val(ui.values[0] + " - " + ui.values[1]);

                        $("#min_amount").val(ui.values[0]);
                        $("#max_amount").val(ui.values[1]);
                    }
                });

                $("#amount").val($("#slider-range").slider("values", 0) +
                    " - " + $("#slider-range").slider("values", 1));

            });

        })(jQuery);
    </script>
@endsection
