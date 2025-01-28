@extends('profile.master_layout')
@section('title')
    <title>
        {{ __('admin.Favorite List') }}</title>
@endsection
@section('frontend-content')
    <style>
        .whishlist-layout {
            border-radius: 10px;
            background: #FFF;
        }

        .inflanar-table__head {
            background: #f3f3f3;
        }

        .inflanar-table__sthumb img {
            width: 20%;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .content-holder {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        /* Cards Styles */
        .cards {
            /* display: flex; */
            /* flex-wrap: wrap; */
            color: #222;
            font-size: 13.898px;
            font-weight: 400;
            line-height: normal;
            font-family: "Poppins", serif;
        }

        .cards h4 {
            color: #5856D6;
            font-family: "Poppins", serif;
            font-size: 13px;
            font-weight: 600;
            line-height: normal;
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 94%;
        }

        .cards strong {
            color: #222;
            font-size: 14.67px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            font-family: "Inter", serif;
        }

        .cards .box {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 7px;
            background-size: cover !important;
            width: 100%;
            height: 309px;
            cursor: pointer;
        }

        .cards .box .img-box {
            display: block;
            width: 100%;
            transition: transform 0.8s ease-in-out;
        }

        .cards .box:hover .img-box {
            transform: scale(1.1);
        }

        .img-title {
            align-items: end;
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            background: url({{ asset('uploads/layout-images/overlay.svg') }}) no-repeat;
            padding: 11px 10px 15px;
            width: 93%;
            color: #fff;
            font-size: 11.5px;
            font-family: "Inter", serif;
            background-size: cover;
            display: flex;
            justify-content: space-between;
        }

        .img-title h5 {
            font-family: "Inter", serif;
            font-size: 12.8px;
            margin-bottom: 4px;
        }

        .img-title address {
            width: 87px;
            margin-bottom: 0;
            line-height: 21px;
            font-weight: 300;
        }

        .aside.collapsed2 {
            margin-left: 122px;
            margin-right: 61px;
        }

        .cards .box span {
            position: relative;
            border-radius: 5px;
            z-index: 99;
            top: -5px;
            border: var(--stroke-weight-1, 1px) solid var(--color-white-solid, #FFF);
            background: var(--color-black-70, rgba(0, 0, 0, 0.70));
            box-shadow: 0px 2px 10px 0px rgba(120, 120, 170, 0.30);
            /* height: 23px; */
            font-size: 13px;
            font-family: "Inter", serif;
            padding: 3px 5px 2px;
        }

        /* Hide the dark heart by default */
        .light-heart {
            display: block;
        }

        .dark-heart {
            display: none;
        }

        /* Heart container styling */
        .heart {
            cursor: pointer;
            display: inline-block;
            width: 24px;
            height: 24px;
            float: right;
            margin: 3px 4px 0 0;
            position: absolute;
            right: 2px;
            z-index: 1;
            top: 3px;
        }

        .cards .box img {
            width: 100%;
            height: 100%;
        }

        .cards .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .light-heart,
        .dark-heart {
            transition: opacity 0.3s ease;
        }

        @media only screen and (min-width: 1600px) {
            .img-title h5 {
                font-size: 19.8px;
            }

            .cards {
                font-size: 15.898px;
            }

            .cards h4 {
                font-size: 17px;
                margin-top: 14px;
            }

            .cards strong {
                font-size: 18px;
            }

            .img-title address {
                width: 129px;
                font-size: 16px;
            }

            .img-title {
                font-size: 16.5px;
            }


            .cards p {
                margin: 11px 0 0;
            }

            .cards .box {
                height: 385px;
            }

            .sidebar-nav .nav-link {
                font-size: 22px;
            }

            .sidebar {
                width: 280px;
            }

            .aside {
                margin-left: 334px;
            }

            .search-container {
                width: 223px;
            }
        }
    </style>
    <style>
        /* Basic styling */
        .dropdown-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 9px;
            width: 846px;
            height: 56px;
            border-radius: 100px;
            background: var(--inflanar-mamunuiux-com-white, #FFF);
            box-shadow: 0px 0px 30px 5px rgba(0, 0, 0, 0.08);
            margin: 0 auto 76px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        /* Dropdown button styling */
        .dropdown-button {
            background-color: #fff;
            border: none;
            padding: 12px 10px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
        }

        .dropdown-button-text {
            display: inline-block;
        }

        /* Ensure the selected items container (multiple select) is visible */
        .selected-items {
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
        }

        .selected-item {
            background-color: #f1f1f1;
            border-radius: 16px;
            padding: 4px 8px;
            display: flex;
            align-items: center;
            font-size: 14px;
            margin-right: 5px;
        }

        .selected-item .remove {
            cursor: pointer;
            margin-left: 5px;
            font-size: 12px;
            color: #888;
        }

        /* Hidden dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 119%;
            left: 0;
            background-color: #fff;
            width: 90%;
            border: 1px solid #ccc;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        div#leftDropdown {
            left: 13px;
        }

        /* Dropdown links */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown-content a.selected {
            background-color: #d3f8e2;
            color: #4d9d44;
        }

        /* Search Button */
        .search-button {
            width: 40px;
            height: 40px;
            background: #000;
            padding: 8px;
            border-radius: 10px;
        }

        #leftDropdownButton {
            border-right: 1px solid #C8C8C8;
        }

        div#rightDropdown a {
            width: fit-content;
            background-color: #f1f1f1;
            border-radius: 16px;
            padding: 4px 11px;
            font-size: 14px;
            margin-bottom: 9px;
            text-align: left;
            float: left;
            margin-right: 5px;
        }

        div#rightDropdown {
            padding: 10px 10px;
        }
    </style>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="content-holder">
                    @foreach ($services as $index => $service)
                        <div class="cards">
                            <a href="{{ route('service', $service->slug) }}" class="card-link">

                                <div class="box" style="background:url(''); no-repeat">
                                    <!-- Multiple Heart Boxes -->

                                    <div class="heart">

                                        <svg class="dark-heart" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M12.2994 20.4845C17.3662 17.0586 22.433 13.2462 22.433 8.17944C22.433 6.88234 21.9386 5.58596 20.9491 4.59649C19.9596 3.60774 18.6633 3.11264 17.3662 3.11264C16.0698 3.11264 14.7727 3.60774 13.7839 4.59649L12.2994 6.08106L10.8155 4.59649C9.82604 3.60774 8.52967 3.11264 7.23257 3.11264C5.93619 3.11264 4.63909 3.60774 3.65034 4.59649C2.66087 5.58596 2.16577 6.88234 2.16577 8.17944C2.16577 13.2462 7.23257 17.0586 12.2994 20.4845Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </div>
                                    <img src="{{ asset($service->thumbnail_image) }}" class="img-box" />
                                    <div class="img-title">
                                        <div>
                                            <h5>
                                                @if ($service->influencer)
                                                    {{ $service->influencer->name }}
                                                @endif
                                            </h5>
                                            {{-- <address>{{ $influencer->address }}</address> --}}
                                        </div>
                                        <span>Top creator</span>
                                    </div>
                                </div>
                                <h4> <a href="{{ route('service', $service->slug) }}">{{ $service->title }}</a>
                                    <strong>{{ currency($service->price) }}</strong>
                                </h4>

                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    </div>
    <script>
        "use strict";

        function deleteDocument(id) {
            Swal.fire({
                title: "{{ __('admin.Are you realy want to delete this item ?') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "{{ __('admin.Yes, Delete It') }}",
                cancelButtonText: "{{ __('admin.Cancel') }}",
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#remove_wishlist-" + id).submit();
                }

            })
        }
    </script>
@endsection
