@extends('profile.master_layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="keywords" content="{{ $seo_setting->seo_keyword }}">
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{{ $seo_setting->seo_description }}">
@endsection
@section('frontend-content')
    <!-- Breadcrumbs -->
    <div class="main-content">
        <section class="section">

            <div class="section-body">


                <div class="table-order inflanar-personals__content">
                    <h3>Campaign</h3>
                    <a href="{{ route('user.campaign.store') }}"> add campaign</a>
                    <div class="inflanar-table p-0">
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
