@extends('profile.master_layout')
@section('title')
    <title>{{__('admin.Support Ticket')}}</title>
@endsection
@section('frontend-content')

<style>
     @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

thead.inflanar-table__head {
    background: rgba(96, 54, 174, 0.13);
}
thead.inflanar-table__head th {
    color: #292D32;
    font-family: "Poppins", serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
tbody.inflanar-table__body, tbody.inflanar-table__body p {
    color: #292D32;
    font-family: Poppins;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.inflanar-table__main.inflanar-table__main-v2 .inflanar-table__body tr:nth-child(2n) {
    border: 1px solid #F4F4F4;
    background-color: #F7F3FF;
}
.support-table {
    background: #fff;
    
}
p.inflanar-table__label.inflanar-table__label--active {
    border-radius: 100px;
    border: 1px solid #A693CD;
    background: #EAE5F4;
    padding: 4px 12px;
}

.inflanar-supports {
    padding: 0;
}
.inflanar-table__main {
    border-radius: 0px !important;
    overflow: hidden;
}
.inflanar-table__action {
  
    align-items: center;
    justify-content: center;
    padding: 4px;
    border-radius: 4px;
    border: 1px solid #DCDCDC;
    background: #FFF;
}
a.inflanar-btn { 
    border-radius: 40px;
    background: #EAE5F4;
    padding: 10px 20px;
    color: #292D32;
    font-family: Poppins;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 136%; /* 19.04px */
    letter-spacing: -0.14px;
}
.inflanar-supports__head h4 {
    color: #292D32;
    font-family: Inter;
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: 136%;
    letter-spacing: -0.24px;
}
.inflanar-supports__head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 0;
    padding: 20px;
}
.inflanar-preview__modal .modal-dialog {
    max-width: 600px;
}
.modal {
    left: 74px !important;
  
    }
    .modal-dialog.modal-dialog-centered.inflanar-preview__ticket {
    z-index: 99999;
}
.modal-backdrop.show {
    opacity: 0;
    z-index: 0 !important;
}
</style>

<div class="main-content">
    <section class="section">
     
      <div class="section-body"> 


<!-- Support TIcket  -->
<div class="inflanar-preview__modal modal fade" id="open_ticket" tabindex="-1" aria-labelledby="OpenTicketmodal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered inflanar-preview__ticket">
        <div class="modal-content">
            <div class="modal-header inflanar__modal__header">
                <h4 class="modal-title inflanar-preview__modal-title" id="OpenTicketmodal">{{__('admin.Open New Ticket')}}</h4>
                <button type="button" class="inflanar-preview__modal--close btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-remove"></i></button>
            </div>
            <div class="modal-body inflanar-modal__body">
                <form action="{{ route('user.create-support-ticket') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-12 mg-top-20">
                            <div class="form-group inflanar-form-input">
                                <label>{{__('admin.Subject')}}*</label>
                                <input class="ecom-wc__form-input" type="text" name="subject" placeholder="{{__('admin.Your Subject')}}" >
                            </div>
                        </div>
                        <div class="col-12 mg-top-20">
                            <div class="form-group inflanar-form-input">
                                <label>{{__('admin.Message')}}*</label>
                                <div class="form-group inflanar-form-input">
                                    <textarea placeholder="{{__('admin.Write your message')}}" name="message" id="ckdesc1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mg-top-20">
                            <button type="submit" class="inflanar-btn"><span>{{__('admin.Submit Now')}}</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Support TIcket  -->


<!-- Features -->
  

                <div class="support-table  inflanar-personals__content mg-top-30">
                    <div class="inflanar-supports">
                        <div class="inflanar-supports__head">
                            <h4>{{__('admin.Support Ticket List')}}</h4>
                            <div class="inflanar-supports__buttons">
                                <a href="#" class="inflanar-btn"  data-bs-toggle="modal" data-bs-target="#open_ticket">{{__('admin.Open Ticket')}}
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path id="Vector" d="M10.0003 1.66666C5.40866 1.66666 1.66699 5.40833 1.66699 10C1.66699 14.5917 5.40866 18.3333 10.0003 18.3333C14.592 18.3333 18.3337 14.5917 18.3337 10C18.3337 5.40833 14.592 1.66666 10.0003 1.66666ZM13.3337 10.625H10.6253V13.3333C10.6253 13.675 10.342 13.9583 10.0003 13.9583C9.65866 13.9583 9.37533 13.675 9.37533 13.3333V10.625H6.66699C6.32533 10.625 6.04199 10.3417 6.04199 10C6.04199 9.65833 6.32533 9.375 6.66699 9.375H9.37533V6.66666C9.37533 6.325 9.65866 6.04166 10.0003 6.04166C10.342 6.04166 10.6253 6.325 10.6253 6.66666V9.375H13.3337C13.6753 9.375 13.9587 9.65833 13.9587 10C13.9587 10.3417 13.6753 10.625 13.3337 10.625Z" fill="#292D32"/>
</svg>

                                </a>
                            </div>
                        </div>
                        <div class="inflanar-table p-0">
                            <table id="inflanar-table__order" class="inflanar-table__main inflanar-table__main-v2">
                                <!-- sherah Table Head -->
                                <thead class="inflanar-table__head">
                                    <tr>
                                        <th class="inflanar-table__column-1 inflanar-table__h1">{{__('admin.SN')}}</th>
                                        <th class="inflanar-table__column-2 inflanar-table__h2">{{__('admin.Ticket Info')}}</th>
                                        <th class="inflanar-table__column-3 inflanar-table__h3">{{__('admin.Unread Message')}}</th>
                                        <th class="inflanar-table__column-4 inflanar-table__h4">{{__('admin.Status')}}</th>
                                        <th class="inflanar-table__column-5 inflanar-table__h5">{{__('admin.Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody class="inflanar-table__body">
                                    @foreach ($tickets as $index => $ticket)
                                        <tr>
                                            <td class="inflanar-table__column-1 inflanar-table__data-1">
                                                <div class="inflanar-table__content">
                                                    <p class="inflanar-table__desc">{{ ++$index }}</p>
                                                </div>
                                            </td>
                                            <td class="inflanar-table__column-2 inflanar-table__data-2">
                                                <div class="inflanar-table__content">
                                                    <p class="inflanar-table__desc">{{__('admin.Subject')}}: {{ html_decode($ticket->subject) }}</p>
                                                    <p class="inflanar-table__desc">{{__('admin.Ticket Id')}}: {{ $ticket->ticket_id }}</p>
                                                    <p class="inflanar-table__desc"> {{__('admin.Created')}}: {{ $ticket->created_at->format('h:m A, d-F-Y') }}</p>
                                                </div>
                                            </td>
                                            <td class="inflanar-table__column-3 inflanar-table__data-3">
                                                <div class="inflanar-table__content">
                                                    <p class="inflanar-table__unread">{{ $ticket->unseen_for_user }}</p>
                                                </div>
                                            </td>
                                            <td class="inflanar-table__column-5 inflanar-table__data-5">
                                                <div class="inflanar-table__content">
                                                    @if ($ticket->status == 'pending')
                                                    <p class="inflanar-table__label inflanar-table__label--pending">{{__('admin.Pending')}}</p></p>
                                                    @elseif ($ticket->status == 'in_progress')
                                                    <p class="inflanar-table__label inflanar-table__label--active">{{__('admin.In Progress')}}</p>
                                                    @elseif ($ticket->status == 'closed')
                                                    <p class="inflanar-table__label inflanar-table__label--pending">{{__('admin.Closed')}}</p></p>
                                                    @endif

                                                </div>
                                            </td>



                                            <td class="inflanar-table__column-6 inflanar-table__data-6">
                                                <div class="inflanar-table__status__group">
                                                    <a href="{{ route('user.support-ticket',$ticket->ticket_id) }}" class="inflanar-table__action inflanar-table__action--view">
                                                        <img src="{{ asset('frontend/img/in-table-eye-icon.svg') }}">
                                                      

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="inflanar-supports__bgroup mg-top-40">
                        {{ $tickets->links('custom_pagination') }}
                    </div>
                    <!-- End Pagination -->
                </div>


         
<!-- End Features -->




      </div>



</section>
</div>

@endsection
