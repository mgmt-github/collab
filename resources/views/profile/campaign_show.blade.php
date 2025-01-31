@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Campaign') }}</title>
@endsection
@section('frontend-content')
    <div class="main-content">
        <section class="section">
            <!-- <div class="section-header">
                        <h1>{{ __('admin.Dashboard') }}</h1>
                      </div> -->

            <div class="section-body">
                <div class="inflanar-order-detail">
                    <div class="row">
                        <div class="col-12">
                            <div class="inflanar-supports__head">
                                <div class="inflanar-supports__buttons">
                                    <a href="javascript:history.back()" class="inflanar-btn">
                                        <i class="fa-solid fa-left-long"></i> {{ __('admin.Go Back') }}
                                    </a>
                                </div>
                            </div>
                            <div class="row order-details">
                                <div class="col-lg-6 col-12">
                                    <div class="inflanar-order-list mg-top-30">
                                        <div class="inflanar-profile-info__head">
                                            <h3 class="inflanar-profile-info__heading">
                                                {{ __('admin.Campaign Details') }}
                                            </h3>
                                        </div>
                                        <ul class="inflanar-profile-info__list inflanar-dflex-column list-none">
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">{{ __('admin.Platform') }}:
                                                </h4>
                                                <p class="inflanar-profile-info__text">{{ $campaign->platform?->name }}
                                                </p>
                                            </li>
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">{{ __('admin.Category') }}:
                                                </h4>
                                                <p class="inflanar-profile-info__text">
                                                    {{ html_entity_decode($campaign->category) }}</p>
                                            </li>
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">{{ __('admin.Country') }}:</h4>
                                                <p class="inflanar-profile-info__text">{{ $campaign->country }}</p>
                                            </li>
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">
                                                    {{ __('admin.No. of Influencers') }}:</h4>
                                                <p class="inflanar-profile-info__text">
                                                    {{ $campaign->no_of_influencer }}</p>
                                            </li>
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">
                                                    {{ __('admin.Audience Range') }}:</h4>
                                                <p class="inflanar-profile-info__text">{{ $campaign->range }}</p>
                                            </li>
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">{{ __('admin.Language') }}:
                                                </h4>
                                                <p class="inflanar-profile-info__text">{{ $campaign->language }}</p>
                                            </li>
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">{{ __('admin.Gender') }}:</h4>
                                                <p class="inflanar-profile-info__text">{{ $campaign->gender }}</p>
                                            </li>
                                            <li class="inflanar-dflex">
                                                <h4 class="inflanar-profile-info__title">{{ __('admin.Status') }}:</h4>
                                                <p class="inflanar-profile-info__text">{{ ucfirst($campaign->status) }}
                                                </p>
                                            </li>
                                            {{-- @if ($campaign->image)
                                                <li class="inflanar-dflex">
                                                    <h4 class="inflanar-profile-info__title">{{ __('admin.Image') }}:
                                                    </h4>
                                                    <p class="inflanar-profile-info__text">
                                                        <img src="{{ asset('storage/' . $campaign->image) }}"
                                                            alt="Campaign Image" width="100">
                                                    </p>
                                                </li>
                                            @endif --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- End Features -->
@endsection
