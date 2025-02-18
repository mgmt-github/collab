@extends('influencer.master_layout')
@section('title')
    <title>{{ __('admin.Manage Coupon') }}</title>
@endsection
@section('influencer-content')
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
    <!-- Breadcrumbs -->
    <div class="main-content">
        <section class="section">

            <div class="section-body">

                <div class="table-order inflanar-personals__content">
                    <div class="inflanar-table p-0" style="overflow-x:auto;">
                        {{-- id="inflanar-table__order" --}}
                        <table id="dataTable"
                            class="inflanar-table__main inflanar-table__main--order table table-striped report_table">
                            <!-- sherah Table Head -->
                            <thead class="inflanar-table__head">
                                <tr>
                                    <th class="inflanar-table__column-1 inflanar-table__h1">{{ __('Campaign Id') }}</th>
                                    <th class="inflanar-table__column-2 inflanar-table__h2">{{ __('admin.Category') }}
                                    </th>
                                    <th class="inflanar-table__column-3 inflanar-table__h3">{{ __('No of influencer') }}
                                    </th>
                                    <th class="inflanar-table__column-4 inflanar-table__h4">{{ __('Gender') }}</th>
                                    <th class="inflanar-table__column-5 inflanar-table__h5">{{ __('admin.Status') }}</th>
                                    <th class="inflanar-table__column-7 inflanar-table__h6">{{ __('admin.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody class="inflanar-table__body">
                                @foreach ($campaigns as $campaign)
                                    <tr>
                                        <td class="inflanar-table__column-1 inflanar-table__data-1">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">{{ $campaign->id }}</p>
                                            </div>
                                        </td>
                                        <td class="inflanar-table__column-1 inflanar-table__data-1">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">
                                                    {{ html_entity_decode($campaign->category) }}</p>
                                            </div>
                                        </td>
                                        <td class="inflanar-table__column-1 inflanar-table__data-1">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">{{ $campaign->no_of_influencer }}</p>
                                            </div>
                                        </td>
                                        <td class="inflanar-table__column-1 inflanar-table__data-1">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">{{ $campaign->gender }}</p>
                                            </div>
                                        </td>
                                        <td class="inflanar-table__column-1 inflanar-table__data-1">
                                            <div class="inflanar-table__content">
                                                <p class="inflanar-table__desc">{{ $campaign->status }}</p>
                                            </div>
                                        </td>

                                        <td class="inflanar-table__column-6 inflanar-table__data-6">
                                            <div class="inflanar-table__status__group">
                                                <a href="{{ route('influencer.campaign.show', $campaign->id) }}"
                                                    class="inflanar-table__action inflanar-table__action--view"><img
                                                        src="{{ asset('frontend/img/Eye.svg') }}"></a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection
