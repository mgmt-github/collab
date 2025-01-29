@extends('profile.master_layout')
@section('title')

@section('title')
    <title>{{ $influencer->name }}</title>
    @php
        $tags = '';
        if ($influencer->tags) {
            foreach (json_decode($influencer->tags) as $influencer_tag) {
                $tags .= $influencer_tag->value . ', ';
            }
        }
    @endphp

    <meta name="keywords" content="{{ $tags }}">
    <meta name="title" content="{{ $influencer->name }}">
    <meta name="description" content="{{ $influencer->name }}">
@endsection
@section('frontend-content')

    <!-- Breadcrumbs -->

    <div class="main-content DDD">
        <section class="section">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="influencer-profile__inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12 mg-top-30">
                                    <div class="inflanar-influencer inflanar-influencer__sidebar">
                                        <!-- Influencer Head-->
                                        <div class="inflanar-influencer__head">
                                            <img src="{{ $influencer->image ? asset($influencer->image) : asset($setting->default_avatar) }}"
                                                alt="#">
                                        </div>
                                        <!-- Influencer Body -->
                                        <div class="inflanar-influencer__body">
                                            <div class="inflanar-influencer__follower">
                                                <div class="inflanar-influencer__follower--single">
                                                    <b>{{ html_decode($influencer->total_follower) }}</b><span>{{ __('admin.Followers') }}</span>
                                                </div>
                                                <div class="inflancer-hborder"></div>
                                                <div class="inflanar-influencer__follower--single in-right">
                                                    <b>{{ html_decode($influencer->total_following) }}</b><span>{{ __('admin.Following') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Influencer Body -->
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-12 mg-top-30">
                                    <div class="influencers-pinfo">
                                        <div class="influencers-pinfo__content">
                                            <h2 class="influencers-pinfo__title">
                                                <span>{{ html_decode($influencer->designation) }}</span>{{ html_decode($influencer->name) }}
                                            </h2>
                                            <p class="influencers-pinfo__label">{{ __('admin.Member Since') }}:
                                                {{ $influencer->created_at->format('d F Y') }}</p>
                                            <p class="influencers-pinfo__reviews"><i
                                                    class="fas fa-star"></i>{{ __('admin.Reviews') }}<span>{{ $total_review }}</span>
                                            </p>
                                        </div>
                                        <div class="influencers-pinfo__social">
                                            <div class="influencers-pinfo__sinner">
                                                <div class="influencers-pinfo__sbutton">
                                                    @auth('web')
                                                        <a href="#services-row" class="inflanar-btn inflanar-btn__active"
                                                            onclick="sendNewMessage('{{ $influencer->name }}','{{ $influencer->id }}', '{{ $influencer->designation }}', '{{ $influencer->image }}')">{{ __('admin.Contact Here') }}</a>
                                                    @else
                                                        <a href="#services-row" class="inflanar-btn inflanar-btn__active"
                                                            onclick="sendNewMessagePrevLogin()">{{ __('admin.Contact Here') }}</a>
                                                    @endauth
                                                </div>
                                                <div class="social-infos">
                                                    <h4 class="social-headline">{{ __('admin.Social Info') }}</h4>
                                                    <ul class="influencers-pinfo__ssocial list-none">
                                                        @if ($influencer->facebook)
                                                            <li><a href="{{ $influencer->facebook }}"><img
                                                                        src="{{ asset('frontend/img/in-social1.svg') }}"></a>
                                                            </li>
                                                        @endif

                                                        @if ($influencer->tiktok)
                                                            <li><a href="{{ $influencer->tiktok }}"><img
                                                                        src="{{ asset('frontend/img/in-social2.svg') }}"></a>
                                                            </li>
                                                        @endif

                                                        @if ($influencer->twitter)
                                                            <li><a href="{{ $influencer->twitter }}"><img
                                                                        src="{{ asset('frontend/img/in-social3.svg') }}"></a>
                                                            </li>
                                                        @endif

                                                        @if ($influencer->instagram)
                                                            <li><a href="{{ $influencer->instagram }}"><img
                                                                        src="{{ asset('frontend/img/in-social4.svg') }}"></a>
                                                            </li>
                                                        @endif

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12 mg-top-30">
                                            <div class="influencers-pinfo__card">
                                                <h4 class="influencers-pinfo__card--title">{{ __('admin.Active Job') }}
                                                </h4>
                                                <p class="influencers-pinfo__card--info">{{ $active_booking }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12 mg-top-30">
                                            <div class="influencers-pinfo__card influencers-pinfo__card--color2">
                                                <h4 class="influencers-pinfo__card--title">{{ __('admin.Pending Job') }}
                                                </h4>
                                                <p class="influencers-pinfo__card--info">{{ $total_pending }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12 mg-top-30">
                                            <div class="influencers-pinfo__card influencers-pinfo__card--color3">
                                                <h4 class="influencers-pinfo__card--title">{{ __('admin.Cancel Job') }}
                                                </h4>
                                                <p class="influencers-pinfo__card--info">{{ $cancel_booking }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12  mg-top-30 influencers-pinfo__card--color4">
                                            <div class="influencers-pinfo__card">
                                                <h4 class="influencers-pinfo__card--title">{{ __('admin.Complete Job') }}
                                                </h4>
                                                <p class="influencers-pinfo__card--info">{{ $complete_booking }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Influencers -->
        <section class="influencers pd-top-20 " id="services-row">
            <div class="">
                <div class="">
                    <div class=" mg-top-10">
                        <!-- Single Sidebar -->
                        <div class="influencers-sidebar">
                            <!-- Single Inner Sidebar -->
                            <div class="influencers-sidebar__single">
                                <h4 class="influencers-sidebar__title">{{ __('admin.About Me') }}</h4>
                                <p class="influencers-sidebar__text">{{ $influencer->about_me }}</p>
                            </div>
                            <!-- End Single Inner Sidebar -->

                            @if ($influencer->tags)
                                <!-- Single Inner Sidebar -->
                                <div class="influencers-sidebar__single mg-top-50">
                                    <h4 class="influencers-sidebar__title">{{ __('admin.Skills') }}</h4>
                                    <ul class="influencers-sidebar__tag list-none">
                                        @foreach (json_decode($influencer->tags) as $influencer_tag)
                                            <li><a href="javascript:;">{{ $influencer_tag->value }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- End Single Inner Sidebar -->
                            @endif
                            <!-- Single Inner Sidebar -->
                            <div class="influencers-sidebar__single mg-top-50">
                                <h4 class="influencers-sidebar__title">{{ __('admin.Educations') }}</h4>
                                <div class="influencers-sidebar__elist">
                                    @if ($influencer->varsity_name && $influencer->varsity_year)
                                        <!-- Single Elist -->
                                        <div class="influencers-sidebar__selist">
                                            <h4 class="influencers-sidebar__selist--title">
                                                {{ html_decode($influencer->varsity_name) }}</h4>
                                            <p class="influencers-sidebar__selist--text">
                                                {{ html_decode($influencer->varsity_year) }}
                                            </p>
                                        </div>
                                        <!-- End Single Elist -->
                                    @endif

                                    @if ($influencer->school_name && $influencer->school_year)
                                        <!-- Single Elist -->
                                        <div class="influencers-sidebar__selist">
                                            <h4 class="influencers-sidebar__selist--title">
                                                {{ html_decode($influencer->school_name) }}</h4>
                                            <p class="influencers-sidebar__selist--text">
                                                {{ html_decode($influencer->school_year) }}
                                            </p>
                                        </div>
                                        <!-- End Single Elist -->
                                    @endif

                                </div>
                            </div>
                            <!-- End Single Inner Sidebar -->
                            <!-- Single Inner Sidebar -->
                            <div class="influencers-sidebar__single mg-top-50">
                                <h4 class="influencers-sidebar__title">{{ __('admin.Contact') }}</h4>
                                <ul class="influencers-sidebar__contact list-none">
                                    <li><a href="tel:{{ html_decode($influencer->phone) }}"><i
                                                class="fas fa-phone-alt"></i>{{ html_decode($influencer->phone) }}</a></li>
                                    <li><a href="mailto:{{ html_decode($influencer->email) }}"><i
                                                class="fas fa-envelope"></i>{{ html_decode($influencer->email) }}</a></li>
                                    <li><i class="fa-solid fa-location-dot"></i>{{ html_decode($influencer->address) }}
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Inner Sidebar -->
                        </div>
                        <!-- End Single Inner Sidebar -->
                    </div>
                    <div class="col-12 mg-top-30 profile-section">
                        <ul class="nav profile-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="profile-tab-btn active" id="service-tab" data-bs-toggle="tab"
                                    data-bs-target="#service-tab-pane" type="button" role="tab"
                                    aria-controls="service-tab-pane" aria-selected="true">
                                    {{ __('admin.My Service') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="profile-tab-btn" id="portfolio-tab" data-bs-toggle="tab"
                                    data-bs-target="#portfolio-tab-pane" type="button" role="tab"
                                    aria-controls="portfolio-tab-pane" aria-selected="false">
                                    {{ __('admin.My Portfolio') }}
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="service-tab-pane" role="tabpanel"
                                aria-labelledby="service-tab" tabindex="0">
                                <div class="row">
                                    @forelse ($services as $index => $service)
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mg-top-30" data-aos="fade-in"
                                            data-aos-delay="400">
                                            <!-- Single property-->
                                            <div class="inflanar-service">
                                                <!-- Property Head-->
                                                <div class="inflanar-service__head">
                                                    <img src="{{ asset($service->thumbnail_image) }}" alt="#">
                                                    @auth('web')
                                                        <div class="inflanar-service__wishlist {{ $service->is_wishlist($service->id) == true ? 'active' : '' }} add_to_wishlist"
                                                            data-service_id="{{ $service->id }}">
                                                            <a href="javascript:;"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    @else
                                                        <div class="inflanar-service__wishlist add_to_wishlist"
                                                            data-service_id="{{ $service->id }}">
                                                            <a href="javascript:;"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    @endauth
                                                </div>
                                                <!-- Property Body-->
                                                <div class="inflanar-service__body">
                                                    <div class="inflanar-service__top">
                                                        @if ($service->category)
                                                            <a href="{{ route('services', ['categories[]' => $service->category->slug]) }}"
                                                                class="inflanar-service__cat"><img
                                                                    src="{{ asset('frontend/img/in-cat-label.svg') }}">{{ $service->category->name }}</a>
                                                        @endif

                                                        <div class="inflanar-service__price">
                                                            {{ currency($service->price) }}
                                                        </div>
                                                    </div>
                                                    <h3 class="inflanar-service__title"><a
                                                            href="{{ route('service', $service->slug) }}">{{ $service->title }}</a>
                                                    </h3>
                                                    <div class="inflanar-service__author">
                                                        <div class="inflanar-service__author--info">
                                                            @if ($service->influencer)
                                                                <a
                                                                    href="{{ route('influencer', $service->influencer->username) }}"><img
                                                                        src="{{ $service->influencer->image ? asset($service->influencer->image) : asset($setting->default_avatar) }}">{{ $service->influencer->name }}</a>
                                                            @endif

                                                        </div>

                                                        <div class="inflanar-service__author--rating">
                                                            @php
                                                                if ($service->total_review > 0) {
                                                                    $average = $service->average_rating;

                                                                    $int_average = intval($average);

                                                                    $next_value = $int_average + 1;
                                                                    $review_point = $int_average;
                                                                    $half_review = false;
                                                                    if (
                                                                        $int_average < $average &&
                                                                        $average < $next_value
                                                                    ) {
                                                                        $review_point = $int_average + 0.5;
                                                                        $half_review = true;
                                                                    }
                                                                }
                                                            @endphp
                                                            <div class="inflanar-service__author--star">
                                                                @if ($service->total_review > 0)
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        @if ($i <= $review_point)
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        @elseif ($i > $review_point)
                                                                            @if ($half_review == true)
                                                                                <span><i
                                                                                        class="fa-solid fa-star-half-stroke"></i></span>
                                                                                @php
                                                                                    $half_review = false;
                                                                                @endphp
                                                                            @else
                                                                                <span><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                            @endif
                                                                        @endif
                                                                    @endfor
                                                                @else
                                                                    <span><i class="fa-regular fa-star"></i></span>
                                                                    <span><i class="fa-regular fa-star"></i></span>
                                                                    <span><i class="fa-regular fa-star"></i></span>
                                                                    <span><i class="fa-regular fa-star"></i></span>
                                                                    <span><i class="fa-regular fa-star"></i></span>
                                                                @endif

                                                            </div>
                                                            <div class="inflanar-service__author--label">
                                                                ({{ $service->total_review }})</div>
                                                        </div>

                                                    </div>
                                                    <a class="inflanar-btn-full inflanar-btn-full--v2 mg-top-20"
                                                        href="{{ route('booking-service', $service->slug) }}">{{ __('admin.Book Now') }}</a>
                                                </div>
                                            </div>
                                            <!-- End Single property-->
                                        </div>
                                    @empty
                                        <div class="col-12 mg-top-30 text-center text-danger">
                                            <h3>{{ __('admin.Sorry!! Service not found.') }}</h3>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <div class="tab-pane fade" id="portfolio-tab-pane" role="tabpanel"
                                aria-labelledby="portfolio-tab" tabindex="0">
                                <div class="row mt-4">

                                    @foreach ($portfolios as $portfolio)
                                        <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                                            <div class="position-relative porfolio-card">
                                                <p class="portfolio-title">
                                                    {{ $portfolio->name }}
                                                </p>
                                                <div class="portfolio-img-wrapper">
                                                    <img src="{{ asset($portfolio->image) }}" alt=""
                                                        class="img-fluid portfolio-img w-100" />
                                                    <a class="portfoli-link portfolio-item position-absolute top-50 start-50 translate-middle"
                                                        href="{{ asset($portfolio->image) }}">
                                                        <svg width="37" height="37" viewBox="0 0 37 37"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.51562 5.20312H10.9844C11.4444 5.20312 11.8855 5.0204 12.2108 4.69514C12.536 4.36988 12.7188 3.92873 12.7188 3.46875C12.7188 3.00877 12.536 2.56762 12.2108 2.24236C11.8855 1.9171 11.4444 1.73438 10.9844 1.73438H3.46875C3.00877 1.73438 2.56762 1.9171 2.24236 2.24236C1.9171 2.56762 1.73438 3.00877 1.73438 3.46875V10.9844C1.73438 11.4444 1.9171 11.8855 2.24236 12.2108C2.56762 12.536 3.00877 12.7188 3.46875 12.7188C3.92873 12.7188 4.36988 12.536 4.69514 12.2108C5.0204 11.8855 5.20312 11.4444 5.20312 10.9844V7.51562L13.5859 15.8984C13.7378 16.0503 13.918 16.1707 14.1164 16.2529C14.3148 16.3351 14.5275 16.3774 14.7422 16.3774C14.9569 16.3774 15.1696 16.3351 15.3679 16.2529C15.5663 16.1707 15.7466 16.0503 15.8984 15.8984C16.0503 15.7466 16.1707 15.5663 16.2529 15.3679C16.3351 15.1696 16.3774 14.9569 16.3774 14.7422C16.3774 14.5275 16.3351 14.3148 16.2529 14.1164C16.1707 13.918 16.0503 13.7378 15.8984 13.5859L7.51562 5.20312Z"
                                                                fill="#1778f2" />
                                                            <path
                                                                d="M15.8984 21.102C15.7466 20.9501 15.5663 20.8297 15.3679 20.7475C15.1696 20.6653 14.9569 20.623 14.7422 20.623C14.5275 20.623 14.3148 20.6653 14.1164 20.7475C13.918 20.8297 13.7378 20.9501 13.5859 21.102L5.20312 29.4848V26.0161C5.20312 25.5561 5.0204 25.1149 4.69514 24.7897C4.36988 24.4644 3.92873 24.2817 3.46875 24.2817C3.00877 24.2817 2.56762 24.4644 2.24236 24.7897C1.9171 25.1149 1.73438 25.5561 1.73438 26.0161V33.5317C1.73438 33.9917 1.9171 34.4328 2.24236 34.7581C2.56762 35.0833 3.00877 35.2661 3.46875 35.2661H10.9844C11.4444 35.2661 11.8855 35.0833 12.2108 34.7581C12.536 34.4328 12.7188 33.9917 12.7188 33.5317C12.7188 33.0717 12.536 32.6306 12.2108 32.3053C11.8855 31.98 11.4444 31.7973 10.9844 31.7973H7.51562L15.8984 23.4145C16.0503 23.2627 16.1707 23.0824 16.2529 22.884C16.3351 22.6856 16.3774 22.473 16.3774 22.2582C16.3774 22.0435 16.3351 21.8309 16.2529 21.6325C16.1707 21.4341 16.0503 21.2538 15.8984 21.102Z"
                                                                fill="#1778f2" />
                                                            <path
                                                                d="M33.5317 1.73438H26.0161C25.5561 1.73438 25.1149 1.9171 24.7897 2.24236C24.4644 2.56762 24.2817 3.00877 24.2817 3.46875C24.2817 3.92873 24.4644 4.36988 24.7897 4.69514C25.1149 5.0204 25.5561 5.20312 26.0161 5.20312H29.4848L21.102 13.5859C20.9501 13.7378 20.8297 13.918 20.7475 14.1164C20.6653 14.3148 20.623 14.5275 20.623 14.7422C20.623 14.9569 20.6653 15.1696 20.7475 15.3679C20.8297 15.5663 20.9501 15.7466 21.102 15.8984C21.2538 16.0503 21.4341 16.1707 21.6325 16.2529C21.8309 16.3351 22.0435 16.3774 22.2582 16.3774C22.473 16.3774 22.6856 16.3351 22.884 16.2529C23.0824 16.1707 23.2627 16.0503 23.4145 15.8984L31.7973 7.51562V10.9844C31.7973 11.4444 31.98 11.8855 32.3053 12.2108C32.6306 12.536 33.0717 12.7188 33.5317 12.7188C33.9917 12.7188 34.4328 12.536 34.7581 12.2108C35.0833 11.8855 35.2661 11.4444 35.2661 10.9844V3.46875C35.2661 3.00877 35.0833 2.56762 34.7581 2.24236C34.4328 1.9171 33.9917 1.73438 33.5317 1.73438Z"
                                                                fill="#1778f2" />
                                                            <path
                                                                d="M33.5317 24.2817C33.0717 24.2817 32.6306 24.4644 32.3053 24.7897C31.98 25.1149 31.7973 25.5561 31.7973 26.0161V29.4848L23.4145 21.102C23.2627 20.9501 23.0824 20.8297 22.884 20.7475C22.6856 20.6653 22.473 20.623 22.2582 20.623C22.0435 20.623 21.8309 20.6653 21.6325 20.7475C21.4341 20.8297 21.2538 20.9501 21.102 21.102C20.9501 21.2538 20.8297 21.4341 20.7475 21.6325C20.6653 21.8309 20.623 22.0435 20.623 22.2582C20.623 22.473 20.6653 22.6856 20.7475 22.884C20.8297 23.0824 20.9501 23.2627 21.102 23.4145L29.4848 31.7973H26.0161C25.5561 31.7973 25.1149 31.98 24.7897 32.3053C24.4644 32.6306 24.2817 33.0717 24.2817 33.5317C24.2817 33.9917 24.4644 34.4328 24.7897 34.7581C25.1149 35.0833 25.5561 35.2661 26.0161 35.2661H33.5317C33.9917 35.2661 34.4328 35.0833 34.7581 34.7581C35.0833 34.4328 35.2661 33.9917 35.2661 33.5317V26.0161C35.2661 25.5561 35.0833 25.1149 34.7581 24.7897C34.4328 24.4644 33.9917 24.2817 33.5317 24.2817Z"
                                                                fill="#1778f2" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="influancer-list">
            <h4>Services</h4>
            <div class="influancer-item">
                <button type="button" class="active" data-filter="all">All</button>
                @foreach ($platforms as $platform)
                    <button type="button"
                        data-filter="{{ strtolower($platform->name) }}">{{ $platform->name }}</button>
                @endforeach
            </div>
            <div class="influancer-body">
                @foreach ($services as $service)
                    <div class="in-item" data-category="{{ strtolower($service->platform?->name) }}">
                        <h5>{{ $service->translate->title }}</h5>

                        <div class="cart-item">
                            <form method="POST" action="{{ route('user.cart.add-to-cart') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $service->id }}">
                                <input type="hidden" name="image" value="{{ $service->thumbnail_image }}">
                                <input type="hidden" name="name" value="{{ $service->translate->title }}">
                                <input type="hidden" name="price" value="{{ $service->price }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit">Add to Cart</button>
                            </form>
                            <span>${{ $service->price }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            // Select all filter buttons and influencer items
            const filterButtons = document.querySelectorAll(".influancer-item button");
            const items = document.querySelectorAll(".influancer-body .in-item");

            // Add click event listeners to all buttons
            filterButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    // Remove 'active' class from all buttons
                    filterButtons.forEach((btn) => btn.classList.remove("active"));

                    // Add 'active' class to the clicked button
                    button.classList.add("active");

                    // Get the filter category
                    const filterValue = button.getAttribute("data-filter");

                    // Show/hide items based on the filter
                    items.forEach((item) => {
                        const category = item.getAttribute("data-category");

                        if (filterValue === "all" || category === filterValue) {
                            item.style.display = "block";
                        } else {
                            item.style.display = "none";
                        }
                    });
                });
            });
        </script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            .content-holder {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .col-12.mg-top-30.profile-section {
                display: none;
            }

            section.section,
            .profile-section {
                border-radius: 10px;
                background: #FFF;
                PADDING: 16PX;
            }

            .influencers-sidebar__tag a:hover {
                background-color: #5856D6;

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
                z-index: 99;
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

            .influencers-pinfo__reviews {
                background: #1778f2;
            }

            .influencers-sidebar__contact li i {
                font-size: 18px;
                color: #1778f2;
            }

            .profile-tab-btn.active {
                background-color: #1778f2;
                color: #ffffff;
            }

            .influancer-list {
                border-radius: 10px;
                background: #fff;
                box-shadow: 0px 0px 30px 5px rgba(0, 0, 0, 0.08);
                padding: 35px 20px;
                margin: 30px 0 0;
            }

            .influancer-body {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 10px;
                row-gap: 15px;
            }

            .influancer-item button {
                border-radius: 4.75px;
                border: 1.188px solid #E4E4E4;
                background: rgba(255, 255, 255, 0.15);
                box-shadow: 0px 0px 4.75px 0px rgba(0, 0, 0, 0.15);
                color: #7C7C7C;
                ppins;
                font-size: 15.73px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.876px;
                /* 196.284% */
                font-family: "Poppins", serif;
                padding: 2px 15px 0;
            }

            .influancer-item {
                margin-bottom: 26px;
            }

            .in-item {
                border-radius: 6.374px;
                border: 1.035px solid #D1D1D1;
                background: #FBFBFF;
                height: 152.098px;
                padding: 14px;
                position: relative;
            }

            .influancer-item .active,
            .influancer-item button:focus {
                color: #5856D6;
                background: #E6E6F9;
                outline: none;
            }

            .in-item h5 {
                color: #222;
                font-family: "Poppins", serif;
                font-size: 16.555px;
                font-style: normal;
                font-weight: 400;
                line-height: 157.118%;
                /* 26.011px */
            }

            .in-item a {
                border-radius: 3.133px;
                border: 0.448px solid #C1C1C1;
                background: #E6E6F9;
                padding: 5px 13px;
                color: #4A48B8;
                font-family: "Poppins", serif;
                font-size: 12px;
                font-style: normal;
                font-weight: 500;
                line-height: normal;
            }

            .cart-item span {
                color: #222;
                font-family: "Poppins", serif;
                font-size: 16.555px;
                font-style: normal;
                font-weight: 500;
            }

            .cart-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0;
                position: absolute;
                width: 89%;
                bottom: 10px;
            }

            .cart-item button {
                border-radius: 3px;
                border: 0.448px solid #C1C1C1;
                background: #E6E6F9;
                color: #4A48B8;
                font-size: 12px;
                font-style: normal;
                font-weight: 500;
                line-height: 30.876px;
                font-family: "Poppins", serif;
                padding: 0 5px 0;
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
                z-index: 1;
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
    @endsection
