@extends('influencer.master_layout')
@section('title')
<title>{{ $title }}</title>
@endsection
@section('influencer-content')
      <!-- Main Content -->
      <div class="main-content booking-area">
        <section class="section">
         
          <div class="section-body ">
          <div class=" head-title">
          <h1>{{ $title }}</h1>
</div>
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="">{{__('admin.Booking Id')}}</label>
                                    <input type="text" autocomplete="off" name="booking_id" class="form-control" value="{{ request()->has('booking_id') ? request()->get('booking_id') : '' }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary plus_btn">{{__('admin.Search')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>

          <div class="section-body">
          <div class="content-holder">      @if ($orders->count() > 0)
                    @foreach ($orders as $order)
	  <div class="cards">
          <div class="box" style="background:url(''); no-repeat">
            <img class="img-box" src="{{ asset($order->service->thumbnail_image) }}" alt="">
            <div class="img-title">
              <div class="edit-btns">
              @if ($order->order_status == 'awaiting_for_influencer_approval')
                                                <span class="badge badge-danger">{{__('admin.awaiting for approval')}}</span>
                                            @elseif ($order->order_status == 'approved_by_influencer')
                                                <span class="badge badge-success">{{__('admin.Approved')}}</span>

                                            @elseif ($order->order_status == 'order_decliened_by_influencer')
                                                <span class="badge badge-danger">{{__('admin.Declined by influencer')}}</span>

                                            @elseif ($order->order_status == 'order_decliened_by_client')
                                                <span class="badge badge-danger">{{__('admin.Declined by Client')}}</span>
                                            @elseif ($order->order_status == 'complete')
                                                <span class="badge badge-success">{{__('admin.Complete')}}</span>
                                            @endif
                                        </p>

                                        @if ($order->order_status == 'awaiting_for_influencer_approval')
                                            <a href="javascript:;"  data-toggle="modal" data-target="#approvedOrder-{{ $order->id }}" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> 
                                            <!-- {{__('admin.Approved')}} -->
                                        </a>

                                            <a href="javascript:;" data-toggle="modal" data-target="#declinedOrder-{{ $order->id }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> 
                                            <!-- {{__('admin.Declined')}} -->
                                        </a>
                                        @endif
                <a href="{{ route('influencer.booking-show', $order->order_id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> 
                <!-- {{__('admin.View')}} -->
            </a>
               
             
              </div>
            </div>
          </div>
          <h4>{{ $order->service->title }}<strong> {{__('admin.Price')}} :

{{ currency($order->total_amount - $order->coupon_discount) }}</strong>
        
          </h4>
          <!-- <p>Makeup Wih two Influencers</p>
		  <div class="service_detail">

                
              </div> -->
        </div>
		
		@endforeach @else <div class="col-12 text-center text-danger">
          <h4>{{__('admin.Booking not found!')}}</h4>
        </div> @endif <div class="col-12">
        {{ $orders->links() }}
        </div>
      </div>
            <!-- <div class="row">
                @if ($orders->count() > 0)
                    @foreach ($orders as $order)
                        <div class="col-12">
                            <div class="card service_card order_card 1">
                                <div class="card-body d-flex flex-wrap justify-content-between align-items-center">
                                    <img class="service_image" src="{{ asset($order->service->thumbnail_image) }}" alt="">
                                    <div class="service_detail">
                                        <h4>{{ $order->service->title }}</h4>
                                        <h6>{{__('admin.Price')}} :

                                            {{ currency($order->total_amount - $order->coupon_discount) }}

                                        </h6>
                                        <p>{{__('admin.Booking Id')}} : {{ $order->order_id }}</p>
                                        <p>{{__('admin.Booking Created')}} : {{ $order->created_at->format('h:i A, d-m-Y') }}</p>
                                        <p>{{__('admin.Schedule Date')}} : {{ $order->schedule_time_slot }}, {{ date('d-M-Y', strtotime($order->booking_date)) }}</p>
                                        <p>{{__('admin.Client')}} : {{ $order->client->name }}</p>
                                        <p>{{__('admin.Phone')}} : {{ $order->client->phone }}</p>
                                        <p>{{__('admin.Status')}} :

                                            @if ($order->order_status == 'awaiting_for_influencer_approval')
                                                <span class="badge badge-danger">{{__('admin.awaiting for approval')}}</span>
                                            @elseif ($order->order_status == 'approved_by_influencer')
                                                <span class="badge badge-success">{{__('admin.Approved')}}</span>

                                            @elseif ($order->order_status == 'order_decliened_by_influencer')
                                                <span class="badge badge-danger">{{__('admin.Declined by influencer')}}</span>

                                            @elseif ($order->order_status == 'order_decliened_by_client')
                                                <span class="badge badge-danger">{{__('admin.Declined by Client')}}</span>
                                            @elseif ($order->order_status == 'complete')
                                                <span class="badge badge-success">{{__('admin.Complete')}}</span>
                                            @endif
                                        </p>

                                        @if ($order->order_status == 'awaiting_for_influencer_approval')
                                            <a href="javascript:;"  data-toggle="modal" data-target="#approvedOrder-{{ $order->id }}" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> {{__('admin.Approved')}}</a>

                                            <a href="javascript:;" data-toggle="modal" data-target="#declinedOrder-{{ $order->id }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> {{__('admin.Declined')}}</a>
                                        @endif

                                        <a href="{{ route('influencer.booking-show', $order->order_id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> {{__('admin.View')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center text-danger">
                        <h4>{{__('admin.Booking not found!')}}</h4>
                    </div>
                @endif

                <div class="col-12">
                    {{ $orders->links() }}
                </div>
            </div> -->
          </div>
        </section>
      </div>


      @foreach ($orders as $order)
        <div class="modal fade" tabindex="-1" role="dialog" id="declinedOrder-{{ $order->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">{{__('admin.Booking Declined Confirmation')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>{{__('admin.Are You sure declined this booking')}}</p>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <form action="{{ route('influencer.booking-declined', $order->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('admin.Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('admin.Yes, Declined')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="approvedOrder-{{ $order->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">{{__('admin.Booking Approved Confirmation')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>{{__('admin.Are You sure approved this booking')}}</p>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <form action="{{ route('influencer.booking-approved', $order->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('admin.Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('admin.Yes, Approved')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @endforeach
@endsection
<style>
@import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

.section-body {
    margin: 20px auto;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.head-title a {}
.content-holder {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 19px;
      }

     
      .cards {
        
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
    line-height: 17px;
    margin-bottom: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 97%;
    gap: 30px;
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
        height: 408px;
		cursor:pointer;
      }
.cards .box .img-box {
    display: block;
    width: 100%;
    transition: transform 0.8s ease-in-out;
    background: transparent;
    border-radius: 6px !important;
    padding: 0px !important;
  }

  .cards .box:hover .img-box {
    transform: scale(1.1);
  }
      .img-title {
        align-items: end;
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.77);
    
        padding: 11px 10px 15px;
        width: 100%;
        color: #fff;
        font-size: 11.5px;
        font-family: "Inter", serif;
        background-size: cover;
        display: flex;
        justify-content: center;
      }

      .img-title ul li {
    list-style-type: none;
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
        top: -5px;
        border: var(--stroke-weight-1, 1px) solid var(--color-white-solid, #FFF);
        background: var(--color-black-70, rgba(0, 0, 0, 0.70));
        box-shadow: 0px 2px 10px 0px rgba(120, 120, 170, 0.30);
        height: 20px;
        font-size: 12px;
        font-family: "Inter", serif;
        padding: 5px 5px 0;
      }

      /* Responsive Design */
      /* Tablets */
      @media (max-width: 992px) {
        .sidebar {
          width: 200px;
        }

        .aside {
          margin-left: 200px;
        }

        .cards .box {
          width: calc(50% - 15px);
        }
      }
 
    
        .cards .box {
          width: 100%;
        }
      }

      .card-container {
        width: 100%;
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




      .cards ul {
    display: inline-flex;
    gap: 15px;
}

.cards ul {
    display: inline-flex;
    gap: 15px;
}

.img-title button svg {
    text-shadow: 1px 1px 1px #ccc;
}


.img-title .edit-btns a {
    border-radius: 3.133px;
    border: transparent !important;
    background: transparent !important;
    width: 30px;
    height: 27px;
    padding: 7px 0;
    text-align: center;
    box-shadow: none !important;
}
.card {
    box-shadow: none !important;}
.badge.badge-danger {
    background-color: #fc544b !important;
}
.img-title .edit-btns a i {
    color: #2046DA;
}
.img-title button {
    border-radius: 3.133px;
    border: 0.448px solid #B7B7B7;
    background: #b7b7b7c4;
    width: 30px;
    height:27px;
}

.edit-btns {
    display: flex;
    gap: 7px;
    align-items: center !important;
}

.main-content {
    width: 100%;
    margin: 0 auto;
}

.booking-area .edit-btns span.badge.badge-danger {
    padding: 6px 8px;
    height: 28px !important;
    margin: 11px 0 0;
}

.edit-btns p {
    margin: 0 !important;!i;!;
    display: none;
}
.img-title .edit-btns a i {
    color: #fff !important;
    font-size: 22px;
}
</style>