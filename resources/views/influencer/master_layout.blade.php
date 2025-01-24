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
    <link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome-iconpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-datepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/clockpicker/dist/bootstrap-clockpicker.css') }}">

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .head-title h1 {
            color: #080D1C;
            font-size: 21.131px;
            font-family: "Poppins", serif;
            font-weight: 500;
            margin: 0;
            display: block;
        }

        .head-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 31px;
        }

        .section-body .head-title a {
            text-decoration: none !important;
            border-radius: 40px;
            background-color: #E0CFFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.15);
            padding: 10px 20px 7px;
            color: #292D32;
            font-family: Poppins;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 136%;
            letter-spacing: -0.14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .section-body {
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card .card-body {
            padding-left: 0;
            padding-right: 0;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #fff !important;
        }

        .main-content {
            padding-left: 311px;
            padding-bottom: 70px;
            background: #F4F6F9;
            padding-top: 100px;
        }

        .main-sidebar {
            width: 280px;
        }

        .fade.in {
            opacity: 1 !important;
        }

        .tox .tox-promotion,
        .tox-statusbar__branding {
            display: none !important;
        }

        li.dropdown div {
            color: #333;
        }

        .sidebar-header {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .toggle-btn li a i {
            font-size: 20px;
            color: #333333;
        }

        .search-container {
            position: relative;
            width: 189px;
            margin-left: 22px;
            margin-bottom: 13px;
        }

        .search-container .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #868686;
        }

        .search-container .search-input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid rgba(212, 212, 212, 0.54);
            background: #F4F6F9;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.15);
            color: #868686;
            font-style: normal;
            font-weight: 300;
            line-height: 29.449px;
        }

        .main-sidebar .sidebar-brand {
            display: inline-block;
            width: 100%;
            text-align: left;
            padding-left: 24px;
            line-height: 60px;
            font-size: 26px;
            font-family: 'Poppins';
            font-weight: 700;
            margin-bottom: 24px;
            margin-top: 35px;
        }

        .main-sidebar .sidebar-brand a {
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
            color: #000;
        }

        .main-sidebar .sidebar-menu li.active a,
        .main-sidebar .sidebar-menu li.active a span,
        .main-sidebar .sidebar-menu li.active a svg {
            color: #6036AE;
            font-weight: 500;
            background-color: #f8fafb;
            /* fill: currentColor; */
            stroke: currentColor;
        }

        .main-sidebar .sidebar-menu li a {
            padding: 0 21px;
            cursor: pointer;
        }

        .main-sidebar .sidebar-menu li a span {
            margin-top: 0;
            width: 100%;
            color: #333;
            font-family: "Poppins", serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: var(--line-height-33_6, 33.6px);
        }

        .sidebar-header form a {
            position: relative;
            z-index: 999;
            padding-top: 0;
        }

        body.sidebar-mini .main-sidebar .search-container {
            display: none;
        }

        body.sidebar-mini .toggle-btn {
            margin: 0 !important;
            width: 100% !important;
        }

        body.sidebar-mini ul.sidebar-menu li a svg {
            margin-right: 0;
        }

        body.sidebar-mini .sidebar-header {
            width: 26px !important;
            margin: 0 auto;
        }

        body.sidebar-mini .main-sidebar .sidebar-menu>li.active>a {
            background: #6036AE;
        }

        body.sidebar-mini .main-sidebar .sidebar-menu>li.active>a svg {
            margin: 0 auto;
            background: transparent;
            /* stroke: currentColor; */
            color: #fff;
            /* fill: currentColor; */
            filter: unset;
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
    </style>

</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
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

                            <a href="{{ route('influencer.edit-profile') }}" class="dropdown-item has-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M12 11.6923C11.0375 11.6923 10.2136 11.3496 9.52825 10.6643C8.84275 9.97876 8.5 9.15476 8.5 8.19226C8.5 7.22976 8.84275 6.40584 9.52825 5.72051C10.2136 5.03501 11.0375 4.69226 12 4.69226C12.9625 4.69226 13.7864 5.03501 14.4718 5.72051C15.1573 6.40584 15.5 7.22976 15.5 8.19226C15.5 9.15476 15.1573 9.97876 14.4718 10.6643C13.7864 11.3496 12.9625 11.6923 12 11.6923ZM4.5 19.3078V17.0845C4.5 16.5948 4.633 16.1413 4.899 15.724C5.165 15.3067 5.5205 14.9858 5.9655 14.7615C6.95383 14.277 7.95092 13.9136 8.95675 13.6713C9.96258 13.4289 10.977 13.3078 12 13.3078C13.023 13.3078 14.0374 13.4289 15.0433 13.6713C16.0491 13.9136 17.0462 14.277 18.0345 14.7615C18.4795 14.9858 18.835 15.3067 19.101 15.724C19.367 16.1413 19.5 16.5948 19.5 17.0845V19.3078H4.5ZM6 17.8078H18V17.0845C18 16.882 17.9413 16.6945 17.824 16.522C17.7067 16.3497 17.5474 16.209 17.3462 16.1C16.4846 15.6757 15.6061 15.3542 14.7107 15.1355C13.8153 14.917 12.9117 14.8078 12 14.8078C11.0883 14.8078 10.1848 14.917 9.28925 15.1355C8.39392 15.3542 7.51542 15.6757 6.65375 16.1C6.45258 16.209 6.29333 16.3497 6.176 16.522C6.05867 16.6945 6 16.882 6 17.0845V17.8078ZM12 10.1923C12.55 10.1923 13.0208 9.99643 13.4125 9.60476C13.8042 9.21309 14 8.74226 14 8.19226C14 7.64226 13.8042 7.17143 13.4125 6.77976C13.0208 6.38809 12.55 6.19226 12 6.19226C11.45 6.19226 10.9792 6.38809 10.5875 6.77976C10.1958 7.17143 10 7.64226 10 8.19226C10 8.74226 10.1958 9.21309 10.5875 9.60476C10.9792 9.99643 11.45 10.1923 12 10.1923Z"
                                        fill="#333333" />
                                </svg>{{ __('admin.My Profile') }}
                            </a>
                            <a href="{{ route('influencer.change-password') }}" class="dropdown-item has-icon">
                                <i class="fas fa-lock"></i>{{ __('admin.Change Password') }}
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

            @include('influencer.sidebar')

            @yield('influencer-content')

            <footer class="main-footer">
                <div class="footer-left">
                    {{ $setting->copyright }}
                </div>
                <div class="footer-right">
                    {{ $setting->app_version }}
                </div>
            </footer>

        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal" data-keyboard="false" data-backdrop="static">
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
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/js/tagify.js') }}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap4-toggle.min.js') }}"></script>
    <script src="{{ asset('backend/js/fontawesome-iconpicker.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/clockpicker/dist/bootstrap-clockpicker.js') }}"></script>
    <script src="{{ asset('backend/tinymce/js/tinymce/tinymce.min.js') }}"></script>


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
                $('.select2').select2();
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

    @stack('message-box')

</body>

</html>
