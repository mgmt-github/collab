@extends('profile.master_layout')
@section('title')
  

 
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
    <section class="pd-top-90 pd-btm-120">
        <div class="container">

        </div>
    </section>
    <!-- End Features -->


    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                /* Testimonial Slider */
                var swiper = new Swiper(".inflanar-slider-related", {
                    autoplay: {
                        delay: 3333500,
                    },
                    mousewheel: true,
                    keyboard: true,
                    loop: true,
                    grabCursor: true,
                    spaceBetween: 30,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: "1",
                        },
                        428: {
                            slidesPerView: "2",
                        },
                        768: {
                            slidesPerView: "3",
                        },
                        1024: {
                            slidesPerView: "4",
                        },
                    },
                });
            });

        })(jQuery);
    </script>


    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $("#after_login").on("click", function() {
                    toastr.error('Please Login First');
                })


                $("#serviceReviewForm").on('submit', function(e) {
                    e.preventDefault();
                    var isDemo = "{{ env('APP_MODE') }}"
                    if (isDemo == 'DEMO') {
                        toastr.error('This Is Demo Version. You Can Not Change Anything');
                        return;
                    }
                    $.ajax({
                        type: 'POST',
                        data: $('#serviceReviewForm').serialize(),
                        url: "{{ route('user.store-review') }}",
                        success: function(response) {
                            if (response.status == 1) {
                                toastr.success(response.message)
                                $("#serviceReviewForm").trigger("reset");
                            }

                            if (response.status == 0) {
                                toastr.error(response.message)
                                $("#serviceReviewForm").trigger("reset");
                            }
                        },
                        error: function(response) {

                            if (response.status == 402) {
                                toastr.error("{{ __('admin.Please login first') }}")
                            }

                            if (response.responseJSON.errors.comment) toastr.error(response
                                .responseJSON.errors.comment[0])

                            if (!response.responseJSON.errors.comment) {
                                toastr.error(
                                    "{{ __('admin.Please complete the recaptcha to submit the form') }}"
                                    )
                            }
                        }
                    });
                })

            });
        })(jQuery);


        function productReview(rating) {
            $(".service_rat").each(function() {
                var service_rat = $(this).data('rating')
                if (service_rat > rating) {
                    $(this).removeClass('fa-solid fa-star').addClass('fa-regular fa-star');
                } else {
                    $(this).removeClass('fa-regular fa-star').addClass('fa-solid fa-star');
                }
            })
            $("#service_rating").val(rating);
            let html = `(${rating}.0)`
            $("#show_rating").html(html);
        }
    </script>
@endsection
