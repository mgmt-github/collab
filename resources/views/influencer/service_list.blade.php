@extends('influencer.master_layout') @section('title') <title>{{ $title }}</title>
 @endsection @section('influencer-content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    
    
    <div class="section-body">
    <div class=" head-title">
      <h1>{{ $title }}</h1>
      <a href="{{ route('influencer.service.create') }}" class="">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="vuesax/bold/add-circle">
<g id="add-circle">
<path id="Vector" d="M10.0003 1.66663C5.40866 1.66663 1.66699 5.40829 1.66699 9.99996C1.66699 14.5916 5.40866 18.3333 10.0003 18.3333C14.592 18.3333 18.3337 14.5916 18.3337 9.99996C18.3337 5.40829 14.592 1.66663 10.0003 1.66663ZM13.3337 10.625H10.6253V13.3333C10.6253 13.675 10.342 13.9583 10.0003 13.9583C9.65866 13.9583 9.37533 13.675 9.37533 13.3333V10.625H6.66699C6.32533 10.625 6.04199 10.3416 6.04199 9.99996C6.04199 9.65829 6.32533 9.37496 6.66699 9.37496H9.37533V6.66663C9.37533 6.32496 9.65866 6.04163 10.0003 6.04163C10.342 6.04163 10.6253 6.32496 10.6253 6.66663V9.37496H13.3337C13.6753 9.37496 13.9587 9.65829 13.9587 9.99996C13.9587 10.3416 13.6753 10.625 13.3337 10.625Z" fill="#292D32"/>
</g>
</g>
</svg>

        {{__('admin.Add New')}}
      </a>
    </div>
      
      <div class="content-holder"> @if($services->count() > 0) @foreach ($services as $service) 
	  <div class="cards">
          <div class="box" style="background:url(''); no-repeat">
            <img class="img-box" src="{{ asset($service->thumbnail_image) }}" alt="">
            <div class="img-title">
              <div class="edit-btns">
              <a href="{{ route('influencer.service.edit', ['service' => $service->id, 'lang_code' => front_lang()]) }}" class=""> 
                  <i class="fas fa-edit"></i> 
                  <!-- {{__('admin.Edit')}} -->
                </a>
                <a onclick="deleteData({{ $service->id }})" href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="">
                  <i class="fas fa-trash"></i> 
                  <!-- {{__('admin.Remove')}} -->
                </a>
                <a target="_blank" href="{{ route('service', $service->slug) }}" class="">
                  <i class="fas fa-eye"></i> 
                  <!-- {{__('admin.View')}} -->
                </a>
                <a href="{{ route('influencer.additional-service', $service->id) }}" class="">
                  <i class="fas fa-plus"></i> 
                  <!-- {{__('admin.Extra')}} -->
                </a>
                <!-- <button type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                    <path d="M8.52692 13.1016L13.4673 8.16123L12.9206 7.61457L8.52692 12.0083L6.32562 9.80699L5.77896 10.3536L8.52692 13.1016ZM9.64051 17.0348C8.67927 17.0348 7.77552 16.8524 6.92924 16.4875C6.08309 16.1227 5.34701 15.6276 4.72099 15.0022C4.09497 14.3769 3.59942 13.6414 3.23434 12.7959C2.86913 11.9506 2.68652 11.0472 2.68652 10.0858C2.68652 9.12459 2.86894 8.22083 3.23376 7.37455C3.59858 6.5284 4.09368 5.79232 4.71906 5.1663C5.34443 4.54028 6.07987 4.04473 6.92538 3.67965C7.77075 3.31444 8.67412 3.13184 9.63549 3.13184C10.5967 3.13184 11.5005 3.31425 12.3468 3.67907C13.1929 4.0439 13.929 4.53899 14.555 5.16437C15.181 5.78974 15.6766 6.52519 16.0417 7.37069C16.4069 8.21607 16.5895 9.11944 16.5895 10.0808C16.5895 11.042 16.4071 11.9458 16.0422 12.7921C15.6774 13.6382 15.1823 14.3743 14.5569 15.0003C13.9316 15.6263 13.1961 16.1219 12.3506 16.487C11.5052 16.8522 10.6019 17.0348 9.64051 17.0348Z" fill="#4AE771" />
                  </svg>
                </button>
                <button type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                    <path d="M6.46254 15.4583C6.12332 15.4583 5.8401 15.3447 5.61289 15.1175C5.38567 14.8902 5.27207 14.607 5.27207 14.2678V5.14155H4.53516V4.40464H7.48279V3.83777H11.9042V4.40464H14.8519V5.14155H14.115V14.2678C14.115 14.607 14.0014 14.8902 13.7742 15.1175C13.5469 15.3447 13.2637 15.4583 12.9245 15.4583H6.46254ZM8.07803 13.2475H8.81494V6.61536H8.07803V13.2475ZM10.5721 13.2475H11.309V6.61536H10.5721V13.2475Z" fill="#D93030" />
                  </svg>
                </button>
                <button type="button">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </button> -->
              </div>
            </div>
          </div>
          <h4> {{ $service->title }} <strong> 333</strong>
          <!-- {{__('admin.Price')}}: {{ currency($service->price) }} -->
          </h4>
          <p>Makeup Wih two Influencers</p>
		  <div class="service_detail">
                <!-- <h4>{{ $service->title }}</h4>
                <h6>{{__('admin.Price')}} : {{ currency($service->price) }}
                </h6> -->
                <!-- <p>{{__('admin.Category')}} : {{ $service->category->name }}</p> @if ($service->is_featured == 'enable') <p>{{__('admin.Highlight')}} : {{__('admin.Featured')}}
                </p> @endif <p>{{__('admin.Status')}} : @if ($service->is_banned == 'enable') <span class="badge badge-danger">{{__('admin.Banned')}}</span> @elseif ($service->approve_by_admin == 'disable') <span class="badge badge-danger">{{__('admin.Awaiting for approval')}}</span> @else @if ($service->status == 'active') <span class="badge badge-success">{{__('admin.Active')}}</span> @else <span class="badge badge-danger">{{__('admin.Inactive')}}</span> @endif @endif </p>
               -->
               
                
              </div>
        </div>
		
		@endforeach @else <div class="col-12 text-center text-danger">
          <h4>{{__('admin.Service not found!')}}</h4>
        </div> @endif <div class="col-12">
          {{ $services->links() }}
        </div>
      </div>
  </section>
</div>
<script>
  "use strict"

  function deleteData(id) {
    $("#deleteForm").attr("action", '{{ url("influencer/service/") }}' + "/" + id)
  }
</script> @endsection

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