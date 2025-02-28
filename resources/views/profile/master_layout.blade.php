@php
    $setting = App\Models\Setting::first();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset($setting->favicon) }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @yield('title')
    <title>{{ __('admin.Login') }}</title>


    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link href="{{ asset('backend/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">
    @if ($setting->text_direction == 'rtl')
        <link rel="stylesheet" href="{{ asset('backend/css/rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/dev_rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap4-toggle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/dev.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('backend/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome-iconpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/clockpicker/dist/bootstrap-clockpicker.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome-all.min.css') }}">
    <!-- Swiper Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-slider.min.css') }}">
    <!-- Select2 CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/select2-min.css') }}"> -->
    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('frontend/css/datatables.min.css') }}">
    <!-- Video Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/video-popup.min.css') }}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('frontend/css/datatables.min.css') }}">
    <!-- Video Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/video-popup.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-default.css') }}">

    @if (Session::get('lang_dir'))
        @if (Session::get('lang_dir') == 'right_to_left')
            <link rel="stylesheet" href="{{ asset('frontend/rtl.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
        @endif
    @else
        <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    @endif

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <style>
        .fade.in {
            opacity: 1 !important;
        }

        .tox .tox-promotion,
        .tox-statusbar__branding {
            display: none !important;
        }

        .main-content {
            background: #F4F6F9;
            padding-top: 100px;
        }

        ul.navbar-nav.navbar-right li,
        ul.navbar-nav.navbar-right div {
            color: #333;
            font-family: "Poppins", serif;
            font-size: 14.625px;
            font-style: normal;
            font-weight: 400;
            line-height: var(--line-height-26, 26px);
            /* 177.778% */
        }

        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        p {
            font-family: "Poppins", serif;
            color: #6c798b;
            color: #6c798b;

        }

        .profile-nav {
            left: 86% !important;
        }

        .inflanar-btn.inflanar-btn__cancel {
            background: #EAE5F4;
            color: #292D32;
            font-family: Poppins;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: 136%;
            letter-spacing: -0.14px;
        }

        .inflanar-btn:hover {
            color: #000;
            box-shadow: 0px 0px 10px #0000001f;
        }

        a.inflanar-btn {
            border-radius: 40px;
            background: #EAE5F4;

            color: #292D32;
            font-family: Poppins;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 136%;
            letter-spacing: -0.14px;
        }

        .inflanar-support {
            border-radius: 10px;
            background: #FFF;
            padding: 25px;
        }

        .inflanar-custom {
            border-radius: 10px;
            background: #FFF;
            padding: 25px;
        }

        .dropdown-menu {
            border-radius: 16px;
            background: #FFF;
            box-shadow: 7px 4px 18.6px 0px rgba(0, 0, 0, 0.05);
            padding: none
        }

        a.dropdown-item {
            color: #333;
            font-family: 'Poppins';
            font-size: 14.625px;
            font-style: normal;
            font-weight: 400;
            line-height: var(--line-height-26, 26px);
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dropdown-divider {
            border-top-color: #E7E7E7;
        }

        .live-chat-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <nav class="navbar navbar-expand-lg main-navbar profile-nav">

                <ul class="navbar-nav navbar-right">
                    </li>

                    @php
                        $setting = App\Models\Setting::first();
                        $default_avatar = (object) [
                            'image' => $setting->default_avatar,
                        ];
                        $default_avatar = $default_avatar;
                        $header_seller = Auth::guard('web')->user();
                    @endphp
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            @if ($header_seller->image)
                                <img alt="imagehave" src="{{ asset($header_seller->image) }}"
                                    class="rounded-circle mr-1">
                            @else
                                <img alt="imagenone" src="{{ asset($default_avatar->image) }}"
                                    class="rounded-circle mr-1">
                            @endif
                            <div class="d-sm-none d-lg-inline-block">{{ $header_seller->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a href="{{ route('user.edit-profile') }}" class="dropdown-item has-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M12 11.6923C11.0375 11.6923 10.2136 11.3496 9.52825 10.6643C8.84275 9.97876 8.5 9.15476 8.5 8.19226C8.5 7.22976 8.84275 6.40584 9.52825 5.72051C10.2136 5.03501 11.0375 4.69226 12 4.69226C12.9625 4.69226 13.7864 5.03501 14.4718 5.72051C15.1573 6.40584 15.5 7.22976 15.5 8.19226C15.5 9.15476 15.1573 9.97876 14.4718 10.6643C13.7864 11.3496 12.9625 11.6923 12 11.6923ZM4.5 19.3078V17.0845C4.5 16.5948 4.633 16.1413 4.899 15.724C5.165 15.3067 5.5205 14.9858 5.9655 14.7615C6.95383 14.277 7.95092 13.9136 8.95675 13.6713C9.96258 13.4289 10.977 13.3078 12 13.3078C13.023 13.3078 14.0374 13.4289 15.0433 13.6713C16.0491 13.9136 17.0462 14.277 18.0345 14.7615C18.4795 14.9858 18.835 15.3067 19.101 15.724C19.367 16.1413 19.5 16.5948 19.5 17.0845V19.3078H4.5ZM6 17.8078H18V17.0845C18 16.882 17.9413 16.6945 17.824 16.522C17.7067 16.3497 17.5474 16.209 17.3462 16.1C16.4846 15.6757 15.6061 15.3542 14.7107 15.1355C13.8153 14.917 12.9117 14.8078 12 14.8078C11.0883 14.8078 10.1848 14.917 9.28925 15.1355C8.39392 15.3542 7.51542 15.6757 6.65375 16.1C6.45258 16.209 6.29333 16.3497 6.176 16.522C6.05867 16.6945 6 16.882 6 17.0845V17.8078ZM12 10.1923C12.55 10.1923 13.0208 9.99643 13.4125 9.60476C13.8042 9.21309 14 8.74226 14 8.19226C14 7.64226 13.8042 7.17143 13.4125 6.77976C13.0208 6.38809 12.55 6.19226 12 6.19226C11.45 6.19226 10.9792 6.38809 10.5875 6.77976C10.1958 7.17143 10 7.64226 10 8.19226C10 8.74226 10.1958 9.21309 10.5875 9.60476C10.9792 9.99643 11.45 10.1923 12 10.1923Z"
                                        fill="#333333" />
                                </svg>{{ __('admin.My Profile') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a onclick="event.preventDefault();
                this.closest('form').submit();"
                                    href="javascritp:;" class="dropdown-item has-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 18 18" fill="none">
                                        <path
                                            d="M2.30775 17.5C1.80258 17.5 1.375 17.325 1.025 16.975C0.675 16.625 0.5 16.1974 0.5 15.6923V2.30775C0.5 1.80258 0.675 1.375 1.025 1.025C1.375 0.675 1.80258 0.5 2.30775 0.5H9.0095V2H2.30775C2.23075 2 2.16025 2.03208 2.09625 2.09625C2.03208 2.16025 2 2.23075 2 2.30775V15.6923C2 15.7692 2.03208 15.8398 2.09625 15.9038C2.16025 15.9679 2.23075 16 2.30775 16H9.0095V17.5H2.30775ZM13.2308 13.2692L12.1923 12.1845L14.627 9.75H6.09625V8.25H14.627L12.1923 5.8155L13.2308 4.73075L17.5 9L13.2308 13.2692Z"
                                            fill="#333333" />
                                    </svg>{{ __('admin.Logout') }}
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>

            @include('profile.client_sidebar')
            @yield('frontend-content')

            <footer class="main-footer">
                <div class="footer-left">
                    {{ $setting->copyright }}
                </div>
                <div class="footer-right">
                    {{ $setting->app_version }}
                </div>
            </footer>
            <button class="wsus__message__button inflanar-btn inflanar-btn--header live-chat-btn">
                <span><img src="{{ asset('uploads/website-images/chat_icon.png') }}" alt="chat"
                        class="img-fluid w-100"></span>
                {{ __('admin.Live Chat') }}
            </button>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('admin.Item Delete Confirmation') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ __('admin.Are You sure want to delete this item ?') }}</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <form id="deleteForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">{{ __('admin.Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('admin.Yes, Delete') }}</button>
                    </form>



                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('backend/js/moment.min.js') }}"></script>
    <script src="{{ asset('backend/js/stisla.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <!-- <script src="{{ asset('backend/js/select2.min.js') }}"></script> -->
    <script src="{{ asset('backend/js/tagify.js') }}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap4-toggle.min.js') }}"></script>
    <script src="{{ asset('backend/js/fontawesome-iconpicker.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/clockpicker/dist/bootstrap-clockpicker.js') }}"></script>
    <script src="{{ asset('backend/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Aos JS -->
    <script src="{{ asset('frontend/js/aos.min.js') }}"></script>
    <!-- CK Editor JS -->
    <script src="{{ asset('frontend/js/ckeditor.min.js') }}"></script>
    <!-- Full Calendar JS -->
    <script src="{{ asset('frontend/js/fullcalendar.min.js') }}"></script>
    <!-- Select2 JS-->
    <!-- <script src="{{ asset('frontend/js/select2-js.min.js') }}"></script> -->
    <!-- Video Popup JS -->
    <script src="{{ asset('frontend/js/video-popup.min.js') }}"></script>
    <!-- Swiper SLider JS -->
    <script src="{{ asset('frontend/js/swiper-slider.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend/js/active.js') }}"></script>

    <script src="{{ asset('toastr/toastr.min.js') }}"></script>

    <!-- Lightbox -->
    <script src="{{ asset('frontend/js/glightbox.min.js') }}"></script>



    @vite('resources/js/app.js')

    <script>
        @if (Session::has('messege'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}');
            </script>
        @endforeach
    @endif

    <script>
        let activeSellerId = '';
        let myId = {{ Auth::guard('web')->user()->id }};

        (function($) {
            "use strict";
            $(document).ready(function() {
                tinymce.init({
                    selector: '.summernote',
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    mergetags_list: [{
                            value: 'First.Name',
                            title: 'First Name'
                        },
                        {
                            value: 'Email',
                            title: 'Email'
                        },
                    ]
                });
                $('#dataTable').DataTable();
                // $('.select2').select2();
                $('.tags').tagify();
                $('.custom-icon-picker').iconpicker({
                    templates: {
                        popover: '<div class="iconpicker-popover popover"><div class="arrow"></div>' +
                            '<div class="popover-title"></div><div class="popover-content"></div></div>',
                        footer: '<div class="popover-footer"></div>',
                        buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' +
                            ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
                        search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
                        iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
                        iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
                    }
                })
                $('.datepicker').datepicker({
                    format: 'yyyy-mm-dd',
                    startDate: '-Infinity'
                });
                $('.clockpicker').clockpicker();

            });

        })(jQuery);
    </script>
    @if ($setting->preloader_status == 'enable')
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                </div>
            </div>
        </div>
    @endif
    <!-- Mobile Menu Modal -->
    <div class="modal offcanvas-modal inflanar-mobile-menu fade" id="offcanvas-modal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-remove"></i>
                    </button>
                </div>
                <!-- offcanvas-logo-start -->
                <div class="offcanvas-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}" alt="#"></a>
                </div>
                <!-- offcanvas-logo-end -->
                <!-- offcanvas-menu start -->
                <nav id="offcanvas-menu" class="offcanvas-menu">
                    <!-- Main Menu -->
                    <ul class="nav-menu menu navigation list-none">

                        @if ($setting->selected_theme == 'all_theme')
                            <li class="menu-item-has-children active"><a
                                    href="{{ route('home', ['theme' => 'one']) }}">{{ __('admin.Home') }}</a>
                                <ul class="sub-menu">
                                    <li><a
                                            href="{{ route('home', ['theme' => 'one']) }}">{{ __('admin.Homepage V1') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('home', ['theme' => 'two']) }}">{{ __('admin.Homepage V2') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('home', ['theme' => 'three']) }}">{{ __('admin.Homepage V3') }}</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('home') }}">{{ __('admin.Home') }}</a></li>
                        @endif

                        <li><a href="{{ route('about-us') }}">{{ __('admin.About Us') }}</a></li>

                        <li><a href="{{ route('influencers') }}">{{ __('admin.Influencers') }}</a></li>

                        <li><a href="{{ route('services') }}">{{ __('admin.Services') }}</a></li>

                        <li class="menu-item-has-children"><a href="#">{{ __('admin.Pages') }}</a>
                            <ul class="sub-menu">
                                @if ($setting->commission_type == 'subscription')
                                    @php
                                        $json_module_data = file_get_contents(base_path('modules_statuses.json'));
                                        $module_status = json_decode($json_module_data);
                                    @endphp

                                    @if ($module_status->Subscription)
                                        <li>
                                            <a class="{{ Route::is('pricing-plan') ? 'active' : '' }}"
                                                href="{{ route('pricing-plan') }}">{{ __('admin.Subscription') }}</a>
                                        </li>
                                    @endif
                                @endif
                                <li><a href="{{ route('blogs') }}">{{ __('admin.Our Blogs') }}</a></li>
                                <li><a href="{{ route('faq') }}">{{ __('admin.FAQ') }}</a></li>
                                <li><a
                                        href="{{ route('terms-conditions') }}">{{ __('admin.Terms & Conditions') }}</a>
                                </li>
                                <li><a href="{{ route('privacy-policy') }}">{{ __('admin.Privacy Policy') }}</a>
                                </li>
                                @foreach ($custom_pages as $custom_page)
                                    <li><a
                                            href="{{ route('custom-page', $custom_page->slug) }}">{{ $custom_page->page_name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>

                        <li><a href="{{ route('contact-us') }}">{{ __('admin.Contact') }}</a></li>
                    </ul>
                    <!-- End Main Menu -->
                </nav>
                <!-- offcanvas-menu end -->

                <div class="inflanar-header__button h-with-lang-switch mobile ">
                    <div class="currency-item">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <!-- Currency Dropdown -->
                        <select class="form-select form-select-lg mb-3 inflanar-header__lang--list"
                            aria-label=".form-select-lg example">
                            @if (Session::get('currency_code'))
                                @foreach ($currency_list as $currency_item)
                                    <option
                                        {{ Session::get('currency_code') == $currency_item->lang_code ? 'selected' : '' }}
                                        value="{{ $currency_item->currency_code }}">
                                        {{ $currency_item->currency_name }}</option>
                                @endforeach
                            @else
                                @foreach ($currency_list as $currency_item)
                                    <option value="{{ $currency_item->currency_code }}">
                                        {{ $currency_item->currency_name }}</option>
                                @endforeach
                            @endif

                        </select>
                    </div>

                    <div class="qnav-btn-item">
                        <!-- Language Dropdown -->
                        <form action="{{ route('language-switcher') }}" id="lang_swithcer_form_for_mobile">
                            <div class="inflanar-header__lang">
                                <i class="fas fa-globe"></i>
                                <select id="lang_swithcer_for_mobile" class="inflanar-header__lang--list"
                                    name="lang_code">
                                    @if (Session::get('front_lang'))
                                        @foreach ($language_list as $language)
                                            <option
                                                {{ Session::get('front_lang') == $language->lang_code ? 'selected' : '' }}
                                                value="{{ $language->lang_code }}">{{ $language->lang_name }}
                                            </option>
                                        @endforeach
                                    @else
                                        @foreach ($language_list as $language)
                                            <option value="{{ $language->lang_code }}">{{ $language->lang_name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Menu Modal -->
    @stack('message-box')

</body>

</html>
