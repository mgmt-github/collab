@extends('layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="keywords" content="{{ $seo_setting->seo_keyword }}">
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{{ $seo_setting->seo_description }}">
@endsection
@section('frontend-content')
    <!-- Breadcrumbs -->
    <section class="inflanar-breadcrumb" style="background-image: url({{ asset($breadcrumb) }});">
        <div class="container">
            <div class="row">
                <!-- Breadcrumb-Content -->
                <div class="col-12">
                    <div class="inflanar-breadcrumb__inner">
                        <div class="inflanar-breadcrumb__content">
                            <h2 class="inflanar-breadcrumb__title m-0">{{ __('admin.campaigns') }}</h2>
                            <ul class="inflanar-breadcrumb__menu list-none">
                                <li><a href="{{ route('home') }}">{{ __('admin.Home') }}</a></li>
                                <li class="active"><a href="javascript:;">{{ __('admin.campaigns') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs -->

    <!-- Features -->
    <section class="inflaner-inner-page pd-top-90 pd-btm-120">
        <div class="container">

        </div>
        </div>
    </section>
    <!-- End Features -->

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
