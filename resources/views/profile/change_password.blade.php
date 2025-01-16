@extends('profile.master_layout')
@section('title')
    <title>{{__('admin.Change Password')}}</title>
@endsection
@section('frontend-content')


<!-- Features -->
<div class="main-content">
    <section class="section">
      <!-- <div class="section-header">
        <h1>{{__('admin.Dashboard')}}</h1>
      </div> -->

      <div class="section-body"> 
       
      <div class="cus-edit-profile ">
                        <div class=" align-items-center">
                            <div class="inflanar-support">
                                <div class="inflanar-supports__password--form">
                                    <form action="{{ route('user.update-password') }}" method="POST">
                                        @csrf
                                        <div class="form-group inflanar-form-input">
                                            <label>{{__('admin.Current Password')}}*</label>
                                            <input class="inflanar-signin__form-input"  id="password-field" type="password" name="current_password">
                                        </div>
                                        <div class="form-group inflanar-form-input mg-top-20">
                                            <label>{{__('admin.New Password')}}*</label>
                                            <input class="inflanar-signin__form-input" placeholder="" id="password-field" type="password" name="password">
                                        </div>
                                        <div class="form-group inflanar-form-input mg-top-20">
                                            <label>{{__('admin.Confirm Password')}}*</label>
                                            <input class="inflanar-signin__form-input" placeholder="" id="password-field" type="password" name="password_confirmation" >
                                        </div>
                                        <div class="inflanar__item-button--group mg-top-50">
                                            <button class="inflanar-btn" type="submit">{{__('admin.Update Password')}}</button>
                                            <a href="" class="inflanar-btn inflanar-btn__cancel"><span>{{__('admin.Cancel')}}</span></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-12 d-none d-lg-block">
                                <div class="inflanar-signin__welcome inflanar-signin__welcome--password inflanar-bg-cover inflanar-section-shape18">
                                    <img src="{{ asset('frontend/img/in-account-cover.png') }}" alt="#">
                                </div>
                            </div> -->
                        </div>
                    </div>



</div>

</section>
</div>
<style>
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

</style>
@endsection
