@extends('profile.master_layout')
@section('title')
    <title>{{__('admin.Edit Profile')}}</title>
@endsection
@section('frontend-content')

<style>
.cus-edit-profile .inflanar-supports  input {
    border-radius: 8px;
    border: 1px solid #CFCFCF;
    background: #FFF;
    height: 52px;
}
.inflanar-support {
    margin-top: 29px;
    width: 507px;
}
.cus-edit-profile .inflanar-supports  label {
    color: #000 !important;
    font-family: "Poppins", serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.cus-edit-profile {
    border-radius: 10px;
    background: #FFF;
    padding: 25px;
}
.cus-edit-profile h3 {
    color: #000;
    font-family: "Poppins", serif;
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    margin: 0;
}

.cus-edit-profile .inflanar-support h4 {
    color: #000;
    font-family: "Poppins", serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
.cus-edit-profile  p {
    color: #7F7F7F;
    font-family: "Poppins", serif;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: normal;
}
.cus-edit-profile .form-group {
    margin-bottom: 2px;
}
.cus-edit-profile button.inflanar-btn {
    border-radius: 8px;
    background: #6036AE;
    height: 52px;
    color: #FFF;
    font-family: "Poppins", serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
.cus-edit-profile .profile-head button {
    width: 117px;
    height: 52px;
    flex-shrink: 0;
    border-radius: 8px;
    border: 1px solid #6200EA;
    color: #6200EA;
    font-family: Poppins;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    background: #fff;
    line-height: normal;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 12px;
    gap: 12px;
}

.cus-edit-profile .profile-head button svg {
    width: 24px;
}

.cus-edit-profile .profile-head {
    display: flex;
    justify-content: space-between;
    /* align-items: flex-end; */
}
</style>

<!-- Features -->
<div class="main-content">
    <section class="section">
   
      <div class="section-body"> 

             
                <div class="cus-edit-profile inflanar-personals__content ">
                    <div class="profile-head">
                    <div><h3>Account Information</h3>
                    <p>Update your account information</p></div>
                    <button type="button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path id="Vector" d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="#6200EA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_2" d="M16.0399 3.01999L8.15988 10.9C7.85988 11.2 7.55988 11.79 7.49988 12.22L7.06988 15.23C6.90988 16.32 7.67988 17.08 8.76988 16.93L11.7799 16.5C12.1999 16.44 12.7899 16.14 13.0999 15.84L20.9799 7.95999C22.3399 6.59999 22.9799 5.01999 20.9799 3.01999C18.9799 1.01999 17.3999 1.65999 16.0399 3.01999Z" stroke="#6200EA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_3" d="M14.9102 4.14999C15.5802 6.53999 17.4502 8.40999 19.8502 9.08999" stroke="#6200EA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
    
                    Edit</button>
                    </div>
                    <div class="inflanar-support">
                        <h4>Personal Information</h4>
                         <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                             <div class="row">
                                 <div class="col-12">
                                     <div class="form-group inflanar-form-input ">
                                         <label>{{__('admin.Name')}}*</label>
                                         <input class="ecom-wc__form-input" type="text" name="name" placeholder="{{__('admin.Name')}}" value="{{ $user->name }}">
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="form-group inflanar-form-input mg-top-20">
                                         <label>{{__('admin.Email')}}*</label>
                                         <input class="ecom-wc__form-input" type="email" name="email" placeholder="{{__('admin.Email')}}" value="{{ $user->email }}" readonly>
                                     </div>
                                 </div>

                               

                                 <div class="col-12">
                                    <div class="form-group inflanar-form-input mg-top-20">
                                        <label>{{__('admin.phone')}}</label>
                                        <input class="ecom-wc__form-input" type="tel" name="phone" placeholder="{{__('admin.phone')}}" value="{{ $user->phone }}">
                                    </div>
                                </div>

                                 <div class="col-12">
                                    <div class="form-group inflanar-form-input mg-top-20">
                                        <label>{{__('admin.Designation')}}</label>
                                        <input class="ecom-wc__form-input" type="text" name="designation" placeholder="{{__('admin.Designation')}}" value="{{ $user->designation }}">
                                    </div>
                                </div>

                                 <div class="col-12">
                                    <div class="form-group inflanar-form-input mg-top-20">
                                        <label>{{__('admin.Address')}}*</label>
                                        <input class="ecom-wc__form-input" type="text" name="address" placeholder="{{__('admin.Address')}}" value="{{ $user->address }}">
                                    </div>
                                </div>

                             </div>
                              <!-- Submit Button -->
                              <div class="form-group mg-top-40">
                                 <button type="submit" class="inflanar-btn"><span>{{__('admin.Update Profile')}}</span></button>
                             </div>
                         </form>
                    </div>

                 </div>
            </div>



        </div>
        </section>
    </div>

<!-- End Features -->

@endsection
