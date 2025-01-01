@extends('influencer.master_layout')
@section('title')
<title>{{__('admin.Dashboard')}}</title>
@endsection
@section('influencer-content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <!-- <div class="section-header">
        <h1>{{__('admin.Dashboard')}}</h1>
      </div> -->

      <div class="section-body">
      <div class=" head-title">
        <h1>{{__('admin.Manage Coupon')}}</h1>
        <!-- <a href="javascript:;" data-toggle="modal" data-target="#create_coupon_id"  class="">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="vuesax/bold/add-circle">
<g id="add-circle">
<path id="Vector" d="M10.0003 1.66663C5.40866 1.66663 1.66699 5.40829 1.66699 9.99996C1.66699 14.5916 5.40866 18.3333 10.0003 18.3333C14.592 18.3333 18.3337 14.5916 18.3337 9.99996C18.3337 5.40829 14.592 1.66663 10.0003 1.66663ZM13.3337 10.625H10.6253V13.3333C10.6253 13.675 10.342 13.9583 10.0003 13.9583C9.65866 13.9583 9.37533 13.675 9.37533 13.3333V10.625H6.66699C6.32533 10.625 6.04199 10.3416 6.04199 9.99996C6.04199 9.65829 6.32533 9.37496 6.66699 9.37496H9.37533V6.66663C9.37533 6.32496 9.65866 6.04163 10.0003 6.04163C10.342 6.04163 10.6253 6.32496 10.6253 6.66663V9.37496H13.3337C13.6753 9.37496 13.9587 9.65829 13.9587 9.99996C13.9587 10.3416 13.6753 10.625 13.3337 10.625Z" fill="#292D32"/>
</g>
</g>
</svg>
             {{__('admin.Add New')}}</a> -->
         
      </div>
        <div class="row">
            <div class="col-12">
                <h4 class="dashboard_title">{{__('admin.Today')}}</h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Total Booking')}}</h4>
                  </div>
                  <div class="card-body">
                    {{ $today_total_order }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Awaiting Booking')}}</h4>
                  </div>
                  <div class="card-body">
                    {{ $today_total_awating_order }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Active Booking')}}</h4>
                  </div>
                  <div class="card-body">
                    {{ $today_approved_order }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Complete Booking')}}</h4>
                  </div>
                  <div class="card-body">
                    {{ $today_complete_order }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Total Earnings')}}</h4>
                  </div>
                  <div class="card-body">
                    {{ currency($today_total_earning) }}

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__('admin.Withdraw Request')}}</h4>
                  </div>
                  <div class="card-body">

                    {{ currency($today_withdraw_request) }}
                  </div>
                </div>
              </div>
            </div>


            <div class="col-12">
                <h4 class="dashboard_title">{{__('admin.This Month')}}</h4>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>{{__('admin.Total Booking')}}</h4>
                    </div>
                    <div class="card-body">
                    {{ $monthly_total_order }}
                    </div>
                </div>
                </div>
            </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Awaiting Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $monthly_total_awating_order }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Active Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $monthly_approved_order }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Complete Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $monthly_complete_order }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-warning">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Total Earnings')}}</h4>
                    </div>
                    <div class="card-body">

                        {{ currency($monthly_total_earning) }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-warning">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Withdraw Request')}}</h4>
                    </div>
                    <div class="card-body">


                        {{ currency($monthly_withdraw_request) }}
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-12">
                <h4 class="dashboard_title">{{__('admin.This Year')}}</h4>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>{{__('admin.Total Booking')}}</h4>
                    </div>
                    <div class="card-body">
                    {{ $yearly_total_order }}
                    </div>
                </div>
                </div>
            </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Awaiting Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $yearly_total_awating_order }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Active Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $yearly_approved_order }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Complete Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $yearly_complete_order }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Total Earnings')}}</h4>
                    </div>
                    <div class="card-body">

                        {{ currency($yearly_total_earning) }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Withdraw Request')}}</h4>
                    </div>
                    <div class="card-body">

                        {{ currency($yearly_withdraw_request) }}
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-12">
                <h4 class="dashboard_title">{{__('admin.Total')}}</h4>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>{{__('admin.Total Booking')}}</h4>
                    </div>
                    <div class="card-body">
                    {{ $total_total_order }}
                    </div>
                </div>
                </div>
            </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Awaiting Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $total_total_awating_order }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Active Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $total_approved_order }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Complete Booking')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $total_complete_order }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Total Earnings')}}</h4>
                    </div>
                    <div class="card-body">

                        {{ currency($total_total_earning) }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Withdraw Request')}}</h4>
                    </div>
                    <div class="card-body">

                        {{ currency($total_withdraw_request) }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-th-large"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>{{__('admin.Service')}}</h4>
                    </div>
                    <div class="card-body">
                      {{ $total_service }}
                    </div>
                  </div>
                </div>
              </div>

          </div>
      </div>

    </section>
</div>
@endsection
