@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Support Ticket') }}</title>
@endsection
@section('frontend-content')




    <!-- Features -->
    <div class="main-content section-body">
        <!-- <div class=" head-title">
                    <h1>{{ __('admin.Support Ticket') }}</h1>
                   
                     
                  </div> -->
        <section class="section">

            <div class="section-body">

                <div class="inflanar-support">
                    <div class="inflanar-supports__detail">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="inflanar-supports__single">
                                    <div class="inflanar-supports__head">
                                        <div class="inflanar-supports__buttons">
                                            <a href="{{ route('user.support-tickets') }}" class="inflanar-btn"><i
                                                    class="fa-solid fa-left-long"></i> {{ __('admin.Go Back') }}</a>
                                        </div>
                                    </div>

                                    @foreach ($messages as $message)
                                        @if ($message->admin_id == 0)
                                            <div class="inflanar-supports__single-reply mg-top-20">
                                                <div class="inflanar-supports__notice inflanar-supports__notice--v2">
                                                    <div class="inflanar-supports__notice--head">
                                                        <div class="inflanar-supports__notice--hcontent">
                                                            <h4 class="inflanar-supports__ntitle">{{ $ticket->user->name }}
                                                                <span>({{ __('admin.Me') }})</span>
                                                            </h4>
                                                        </div>
                                                        <div class="inflanar-supports__ntime">
                                                            <span>{{ $message->created_at->diffForHumans() }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="inflanar-supports__nmain">
                                                        <p class="inflanar-supports__nfield">
                                                            {!! html_decode(clean(nl2br($message->message))) !!}
                                                        </p>

                                                        @if ($message->documents)
                                                            <div class="gallery">
                                                                @foreach ($message->documents as $document)
                                                                    <a href="{{ route('download-file', $document->file_name) }}"
                                                                        class="upload_photo"><i class="fas fa-link"></i>
                                                                        {{ $document->file_name }}</a>
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Reply -->
                                        @else
                                            <div class="inflanar-supports__notice inflanar-supports__notice--v2 mg-top-20">
                                                <div class="inflanar-supports__notice--head">
                                                    <div class="inflanar-supports__notice--hcontent">
                                                        <h4 class="inflanar-supports__ntitle">
                                                            {{ $message->admin ? $message->admin->name : '' }}
                                                            <span>({{ __('admin.Administrator') }})</span>
                                                        </h4>

                                                    </div>
                                                    <div class="inflanar-supports__ntime">
                                                        <span>{{ $message->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                                <div class="inflanar-supports__nmain">
                                                    <p class="inflanar-supports__nfield">{!! html_decode(clean(nl2br($message->message))) !!}</p>

                                                    @if ($message->documents)
                                                        <div class="gallery">
                                                            @foreach ($message->documents as $document)
                                                                <a href="{{ route('download-file', $document->file_name) }}"
                                                                    class="upload_photo"><i class="fas fa-link"></i>
                                                                    {{ $document->file_name }}</a>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                @if ($ticket->status != 'closed')
                                    <div class="inflanar-supports__single mg-top-30">
                                        <div class="inflanar-supports__form">
                                            <form action="{{ route('user.send-ticket-message') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                                                <div class="form-group">
                                                    <textarea class="ecom-wc__form-input" name="message" placeholder="{{ __('admin.Write your message') }}"></textarea>
                                                </div>
                                                <div class="form-group mg-top-30">
                                                    <div class="inflanar-form-file">
                                                        <input class="d-none" id="support-file-input" type="file"
                                                            name="documents[]" multiple onchange="updateFileName()">
                                                        <label
                                                            for="support-file-input">{{ __('admin.Choose file') }}</label>
                                                        <span id="file-name">{{ __('admin.Maximum file size 2MB') }}</span>
                                                    </div>
                                                </div>
                                                <div class="form-group mg-top-30">
                                                    <button type="submit"
                                                        class="inflanar-btn"><span>{{ __('admin.Submit Now') }}</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif


                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="inflanar-supports__tickets">
                                    <h4 class="inflanar-supports__info">{{ __('admin.Ticket Information') }}</h4>
                                    <div class="inflanar-table__content">
                                        <p class="inflanar-table__desc"><strong> {{ __('admin.Subject') }}: </strong>
                                            {{ html_decode($ticket->subject) }}</p>
                                        <p class="inflanar-table__desc"><strong>{{ __('admin.Ticket Id') }}:</strong>
                                            {{ $ticket->ticket_id }}</p>
                                        <p class="inflanar-table__desc"> <strong>{{ __('admin.Created') }}:</strong>
                                            {{ $ticket->created_at->format('h:m A, d-F-Y') }}</p>
                                    </div>
                                    <div class="inflanar-supports__status">
                                        <h4 class="inflanar-supports__status--title">{{ __('admin.Status') }}</h4>
                                        @if ($ticket->status == 'pending')
                                            <p class="inflanar-table__label inflanar-table__label--pending">
                                                {{ __('admin.Pending') }}</p>
                                            </p>
                                        @elseif ($ticket->status == 'in_progress')
                                            <p class="inflanar-table__label inflanar-table__label--active">
                                                {{ __('admin.In Progress') }}</p>
                                        @elseif ($ticket->status == 'closed')
                                            <p class="inflanar-table__label inflanar-table__label--pending">
                                                {{ __('admin.Closed') }}</p>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

        </section>
    </div>
    <!-- End Features -->
    <script>
        function updateFileName() {
            var input = document.getElementById('support-file-input');
            var fileNameDisplay = document.getElementById('file-name');

            if (input.files.length > 0) {
                var fileNames = Array.from(input.files).map(file => file.name).join(', ');
                fileNameDisplay.textContent = fileNames;
            } else {
                fileNameDisplay.textContent = "{{ __('admin.Maximum file size 2MB') }}";
            }
        }
    </script>
@endsection
