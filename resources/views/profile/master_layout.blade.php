@php
    $setting = App\Models\Setting::first();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="shortcut icon"  href="{{ asset($setting->favicon) }}"  type="image/x-icon">
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  @yield('title')
  <title>{{__('admin.Login')}}</title>


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
		<link rel="stylesheet" href="{{ asset('frontend/css/select2-min.css') }}">
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
    .tox-statusbar__branding{
        display: none !important;
    }
    .main-content {
    background: #F4F6F9;
    padding-top: 100px;
}
ul.navbar-nav.navbar-right li, ul.navbar-nav.navbar-right div {
    color: #333;
    font-family: "Poppins", serif;
    font-size: 14.625px;
    font-style: normal;
    font-weight: 400;
    line-height: var(--line-height-26, 26px); /* 177.778% */
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
.inflanar-support{
    border-radius: 10px;
    background: #FFF;
    padding: 25px;
}
.inflanar-custom{
    border-radius: 10px;
    background: #FFF;
    padding: 25px;
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
                $default_avatar = (object) array(
                    'image' => $setting->default_avatar
                );
                $default_avatar =  $default_avatar;
                $header_seller=Auth::guard('web')->user();
            @endphp
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              @if ($header_seller->image)
              <img alt="imagehave" src="{{ asset($header_seller->image) }}" class="rounded-circle mr-1">
              @else
              <img alt="imagenone" src="{{ asset($default_avatar->image) }}" class="rounded-circle mr-1">
              @endif
            <div class="d-sm-none d-lg-inline-block">{{ $header_seller->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">

              <a href="{{ route('user.edit-profile') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i>{{__('admin.My Profile')}}
              </a>
              <a href="{{ route('influencer.change-password') }}" class="dropdown-item has-icon">
                <i class="fas fa-lock"></i>{{__('admin.Change Password')}}
              </a>

              <div class="dropdown-divider"></div>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a onclick="event.preventDefault();
                this.closest('form').submit();" href="javascritp:;" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i>{{__('admin.Logout')}}
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

    </div>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{__('admin.Item Delete Confirmation')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{__('admin.Are You sure want to delete this item ?')}}</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <form id="deleteForm" action="" method="POST">
                @csrf
                @method("DELETE")
                <button type="button" class="btn btn-danger"  data-dismiss="modal">{{__('admin.Close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('admin.Yes, Delete')}}</button>
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
		<script src="{{ asset('frontend/js/select2-js.min.js') }}"></script>
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
        @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
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
    let activeSellerId= '';
    let myId = {{ Auth::guard('web')->user()->id; }};

    (function($) {
    "use strict";
    $(document).ready(function () {
        tinymce.init({
            selector: '.summernote',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
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
                            <li class="menu-item-has-children active"><a href="{{ route('home', ['theme' => 'one']) }}">{{__('admin.Home')}}</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('home', ['theme' => 'one']) }}">{{__('admin.Homepage V1')}}</a></li>
                                    <li><a href="{{ route('home', ['theme' => 'two']) }}">{{__('admin.Homepage V2')}}</a></li>
                                    <li><a href="{{ route('home', ['theme' => 'three']) }}">{{__('admin.Homepage V3')}}</a></li>
                                </ul>
                            </li>
                            @else
                                <li><a href="{{ route('home') }}">{{__('admin.Home')}}</a></li>
                            @endif

							<li><a href="{{ route('about-us') }}">{{__('admin.About Us')}}</a></li>

							<li><a href="{{ route('influencers') }}">{{__('admin.Influencers')}}</a></li>

                            <li><a href="{{ route('services') }}">{{__('admin.Services')}}</a></li>

                            <li class="menu-item-has-children"><a href="#">{{__('admin.Pages')}}</a>
                                <ul class="sub-menu">
                                    @if ($setting->commission_type == 'subscription')
                                        @php
                                            $json_module_data = file_get_contents(base_path('modules_statuses.json'));
                                            $module_status = json_decode($json_module_data);
                                        @endphp

                                        @if ($module_status->Subscription)

                                            <li>
                                                <a class="{{ Route::is('pricing-plan') ? 'active':'' }}" href="{{ route('pricing-plan') }}">{{__('admin.Subscription')}}</a>
                                            </li>
                                        @endif
                                    @endif
                                    <li><a href="{{ route('blogs') }}">{{__('admin.Our Blogs')}}</a></li>
                                    <li><a href="{{ route('faq') }}">{{__('admin.FAQ')}}</a></li>
                                    <li><a href="{{ route('terms-conditions') }}">{{__('admin.Terms & Conditions')}}</a></li>
                                    <li><a href="{{ route('privacy-policy') }}">{{__('admin.Privacy Policy')}}</a></li>
                                    @foreach ($custom_pages as $custom_page)
                                        <li><a href="{{ route('custom-page', $custom_page->slug) }}">{{ $custom_page->page_name }}</a></li>
                                    @endforeach

                                </ul>
                            </li>

							<li><a href="{{ route('contact-us') }}">{{__('admin.Contact')}}</a></li>
						</ul>
						<!-- End Main Menu -->
					</nav>
					<!-- offcanvas-menu end -->

				<div class="inflanar-header__button h-with-lang-switch mobile ">
						<div class="currency-item">
							<i class="fa-solid fa-dollar-sign"></i>
								 <!-- Currency Dropdown -->
								<select class="form-select form-select-lg mb-3 inflanar-header__lang--list" 	aria-label=".form-select-lg example">
                                    @if (Session::get('currency_code'))
                                        @foreach ($currency_list as $currency_item)
                                        <option {{ Session::get('currency_code') == $currency_item->lang_code ? 'selected' : '' }} value="{{ $currency_item->currency_code }}" >{{ $currency_item->currency_name }}</option>
                                        @endforeach
                                    @else
                                        @foreach ($currency_list as $currency_item)
                                        <option value="{{ $currency_item->currency_code }}" >{{ $currency_item->currency_name }}</option>
                                        @endforeach
                                    @endif

							</select>
						</div>

					<div class="qnav-btn-item">
 						<!-- Language Dropdown -->
 						<form action="{{ route('language-switcher') }}" id="lang_swithcer_form_for_mobile">
							<div class="inflanar-header__lang">
								<i class="fas fa-globe"></i>
								<select id="lang_swithcer_for_mobile"  class="inflanar-header__lang--list" name="lang_code">
									@if (Session::get('front_lang'))
									@foreach ($language_list as $language)
									<option {{ Session::get('front_lang') == $language->lang_code ? 'selected' : '' }} value="{{ $language->lang_code }}">{{ $language->lang_name }}</option>
									@endforeach
									@else
									@foreach ($language_list as $language)
									<option value="{{ $language->lang_code }}">{{ $language->lang_name }}</option>
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
