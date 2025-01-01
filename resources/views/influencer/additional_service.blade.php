@extends('influencer.master_layout')
@section('title')
<title>{{__('admin.Additional Service')}}</title>
@endsection
@section('influencer-content')
      <!-- Main Content -->
       <style>
.head-title h1 {
    color: #080D1C;
    font-size: 21.131px;
    font-family: "Poppins", serif;
    font-weight: 500;
    margin: 0;
    display: block;
}

.head-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 31px;
}
.section-body .head-title a {
    text-decoration: none !important;
    border-radius: 40px;
    background-color: #E0CFFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.15);
    padding: 10px 20px 7px;
    color: #292D32;
    font-family: Poppins;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: 136%;
    letter-spacing: -0.14px;
    display: flex;
    align-items: center;
    gap: 5px;
}

       </style>
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Additional Service')}}</h1>
          </div>

          <div class="section-body">
            <a href="{{ route('influencer.additional-create', $service->id) }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{__('admin.Add New')}}</a>
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>{{__('admin.SN')}}</th>
                                    <th>{{__('admin.Title')}}</th>
                                    <th>{{__('admin.Price')}}</th>
                                    <th>{{__('admin.Action')}}</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($additionals as $index => $additional)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $additional->translate->title }}</td>
                                        <td>
                                            {{ currency($additional->price) }}
                                        </td>

                                        <td>

                                        <a href="{{ route('influencer.additional-edit', ['id' => $additional->id, 'lang_code' => front_lang()] ) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData({{ $additional->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a>

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
        </section>
      </div>


<script>
    "use strict"
    function deleteData(id){
        $("#deleteForm").attr("action",'{{ url("influencer/additional-delete/") }}'+"/"+id)
    }
</script>
@endsection
