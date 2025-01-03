@extends('influencer.master_layout')
@section('title')
<title>{{__('admin.Coupon Histories')}}</title>
@endsection
@section('influencer-content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      

        <div class="section-body">
        <div class=" head-title">
        <h1>{{__('admin.Manage Coupon')}}</h1>
        <a href="javascript:;" data-toggle="modal" data-target="#create_coupon_id"  class="">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="vuesax/bold/add-circle">
<g id="add-circle">
<path id="Vector" d="M10.0003 1.66663C5.40866 1.66663 1.66699 5.40829 1.66699 9.99996C1.66699 14.5916 5.40866 18.3333 10.0003 18.3333C14.592 18.3333 18.3337 14.5916 18.3337 9.99996C18.3337 5.40829 14.592 1.66663 10.0003 1.66663ZM13.3337 10.625H10.6253V13.3333C10.6253 13.675 10.342 13.9583 10.0003 13.9583C9.65866 13.9583 9.37533 13.675 9.37533 13.3333V10.625H6.66699C6.32533 10.625 6.04199 10.3416 6.04199 9.99996C6.04199 9.65829 6.32533 9.37496 6.66699 9.37496H9.37533V6.66663C9.37533 6.32496 9.65866 6.04163 10.0003 6.04163C10.342 6.04163 10.6253 6.32496 10.6253 6.66663V9.37496H13.3337C13.6753 9.37496 13.9587 9.65829 13.9587 9.99996C13.9587 10.3416 13.6753 10.625 13.3337 10.625Z" fill="#292D32"/>
</g>
</g>
</svg>
             {{__('admin.Add New')}}</a>
         
      </div>
            <div class="row mt-sm-4">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{__('admin.SN')}}</th>
                                            <th>{{__('admin.Coupon Code')}}</th>
                                            <th>{{__('admin.Discount Amount')}}</th>
                                            <th>{{__('admin.Date')}}</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupon_histories as $index => $coupon_history)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $coupon_history->coupon_code }}</td>
                                                <td>

                                                    {{ currency($coupon_history->discount_amount) }}

                                                </td>
                                                <td>{{ date('H:iA, d M Y', strtotime($coupon_history->created_at)) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

