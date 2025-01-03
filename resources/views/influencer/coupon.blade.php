@extends('influencer.master_layout')
@section('title')
<title>{{__('admin.Manage Coupon')}}</title>
@endsection
@section('influencer-content')
<style>

</style>
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
                                            <th>{{__('admin.Offer')}}</th>
                                            <th>{{__('admin.End time')}}</th>
                                            <th>{{__('admin.Status')}}</th>
                                            <th>{{__('admin.Action')}}</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupons as $index => $coupon)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $coupon->coupon_code }}</td>
                                                <td>{{ $coupon->offer_percentage }}%</td>

                                                <td>{{ date('d M Y', strtotime($coupon->expired_date)) }}</td>

                                                <td>
                                                    @if ($coupon->status == 1)
                                                    <span class="badge badge-success">{{__('admin.Active')}}</span>
                                                    @else

                                                    <span class="badge badge-danger">{{__('admin.Inactive')}}</span>

                                                    @endif
                                                </td>

                                                <td>

                                                    <a href="javascript:;" data-toggle="modal" data-target="#edit_coupon_id_{{ $coupon->id }}" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData({{ $coupon->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                                </td>

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

@foreach ($coupons as $index => $coupon)
    <div class="modal fade" id="edit_coupon_id_{{ $coupon->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">{{__('admin.Create Coupon')}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="{{ route('influencer.coupon.update', $coupon->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">{{__('admin.Coupon Code')}} <span class="text-danger">*</span></label>
                                <input type="text" name="coupon_code" autocomplete="off" class="form-control" value="{{ $coupon->coupon_code }}">
                            </div>

                            <div class="form-group">
                                <label for="">{{__('admin.Offer')}}(%) <span class="text-danger">*</span></label>
                                <input type="text" name="offer_percentage" autocomplete="off" class="form-control" value="{{ $coupon->offer_percentage }}">
                            </div>

                            <div class="form-group">
                                <label for="">{{__('admin.End time')}} <span class="text-danger">*</span></label>
                                <input type="text" name="expired_date" autocomplete="off" class="form-control datepicker" value="{{ $coupon->expired_date }}">
                            </div>

                        <div class="form-group">
                                <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                                <select name="status" id="" class="form-control">
                                    <option {{ $coupon->status == 1 ? 'selected' : '' }} value="1">{{__('admin.Active')}}</option>
                                    <option {{ $coupon->status == 0 ? 'selected' : '' }} value="0">{{__('admin.Inactive')}}</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('admin.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{__('admin.Update')}}</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endforeach


<!-- Modal -->
<div class="modal fade" id="create_coupon_id" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">{{__('admin.Create Coupon')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{ route('influencer.coupon.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">{{__('admin.Coupon Code')}} <span class="text-danger">*</span></label>
                            <input type="text" name="coupon_code" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">{{__('admin.Offer')}}(%) <span class="text-danger">*</span></label>
                            <input type="text" name="offer_percentage" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">{{__('admin.End time')}} <span class="text-danger">*</span></label>
                            <input type="text" name="expired_date" autocomplete="off" class="form-control datepicker">
                        </div>

                       <div class="form-group">
                            <label>{{__('admin.Status')}} <span class="text-danger">*</span></label>
                            <select name="status" id="" class="form-control">
                                <option value="1">{{__('admin.Active')}}</option>
                                <option value="0">{{__('admin.Inactive')}}</option>
                            </select>
                       </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('admin.Close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('admin.Save')}}</button>
            </div>
        </form>
        </div>
    </div>
</div>


<script>
    "use strict"
    function deleteData(id){
        $("#deleteForm").attr("action",'{{ url("influencer/coupon/") }}'+"/"+id)
    }

</script>
@endsection

