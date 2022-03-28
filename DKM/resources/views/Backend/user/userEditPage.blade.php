@extends('Backend.Layouts.master')
@section('headerFooter')
<style>
    .error {
        color: tomato;
    }

    .form-control.error {
        border-color: tomato;
    }

</style>
<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row clearfix g-3">
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="row g-3 row-deck">
                    <div class="col-md-6 col-lg-6 col-xl-12  flex-column">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center flex-fill">
                                    <span
                                        class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i
                                            class="icofont-users-alt-2 fs-5"></i></span>
                                    <div class="d-flex flex-column ps-3  flex-fill">
                                        <h6 class="fw-bold mb-0 fs-4">User Edit</h6>
                                        <span class="text-muted">You Can Edit Your Profile</span>
                                    </div>
                                    <i class="icofont-chart-bar-graph fs-3 text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix g-3">
            <div class="col-xl-12 col-lg-12 col-md-12 flex-column">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Add User</h6>
                                <a href="{{route('user.view')}}" class="btn bg-success float-right text-white">View User
                                    List</a>
                            </div>
                            <div class="card-body">
                                <div class="col-8">
                                    {{-- {{route('user.update')}} --}}
                                    <form action="{{ route('user.update',$editData->id) }}" id="formValidate"
                                        method="POST" class="alert alert-primary p-3 mb-0 w-100">
                                        @csrf
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="m-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input name="image" class="form-control" type="file" id="showImage"
                                                placeholder="Enter Your Image">
                                            <span
                                                class="error">{{ ($errors->has('image'))?($errors->first('image')):""}}</span>
                                        </div>
                                        <style>
                                            .liveImg {
                                                width: 250px;
                                                height: 200px;
                                                border: 1px dashed #000;
                                                margin-left: 16px;
                                            }
                                        </style>
                                        <img id="iMg"
                                            src="{{(!empty($data->image))?asset('img/'.$data->image):asset('img/no_img.png')}}"
                                            class="liveImg" alt="{{(!empty($data->image))?asset('img/'.$data->image):asset('img/no_img.png')}}">
                                </div>
                                <div class="m-3">
                                    <label for="name" class="form-label">Min. 6 Characters</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter Username"
                                        name="name" id="name" value="{{$editData->name}}" data-parsley-minlength="6">
                                    <span class="error">{{ ($errors->has('name'))?($errors->first('name')):""}}</span>
                                </div>
                                <div class="m-3">
                                    <label for="email" class="form-label">Between 8-30 Characters</label>
                                    <input type="email" class="form-control form-control-lg"
                                        value="{{$editData->email}}" placeholder="Enter E-mail Address" name="email"
                                        data-parsley-range="[8,30]" id="email">
                                    <span class="error">{{ ($errors->has('email'))?($errors->first('email')):""}}</span>
                                </div>
                                <div class="m-3">
                                    <label for="mobile" class="form-label">Between 8-30 Characters</label>
                                    <input type="number" class="form-control form-control-lg"
                                        value="{{$editData->mobile}}" placeholder="Enter Phone Number" name="mobile"
                                        data-parsley-range="[8,30]" id="mobile">
                                    <span
                                        class="error">{{ ($errors->has('mobile'))?($errors->first('mobile')):""}}</span>
                                </div>
                                <div class="m-3">
                                    <label for="address" class="form-label">Max. Length 30 Characters</label>
                                    <input type="text" class="form-control form-control-lg"
                                        value="{{$editData->address}}" placeholder="Enter Present Address"
                                        name="address" id="address">
                                    <span
                                        class="error">{{ ($errors->has('address'))?($errors->first('address')):""}}</span>
                                </div>
                                <div class="m-3">
                                    <label for="gender" class="form-label">Select Your Gender</label>
                                    <select class="form-control-lg form-select" name="gender" id="gender">
                                        <option {{($editData->gender == "Mail")?"selected":""}} value="Mail">Mail
                                        </option>
                                        <option {{($editData->gender == "Fe-mail")?"selected":""}} value="Fe-mail">
                                            Fe-mail</option>
                                    </select>
                                </div>
                                <div class="m-3">
                                    <label for="userType" class="form-label">Select Your Roll</label>
                                    <select class="form-control-lg form-select" name="userType" id="userType">
                                        <option {{($editData->userType == "Admin")?"selected":""}} value="Admin">Admin
                                        </option>
                                        <option {{($editData->userType == "DB Manager")?"selected":""}}
                                            value="DB Manager">DB Manager</option>
                                        <option {{($editData->userType == "Normal User")?"selected":""}}
                                            value="Normal User">Normal User</option>
                                    </select>
                                    <span
                                        class="error">{{ ($errors->has('userType'))?($errors->first('userType')):""}}</span>
                                </div>
                                <div class="mx-3">
                                    <input type="submit" class="btn btn-success btn-sm" value="Update User">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Row End -->
</div>
</div>
<script src="{{ asset('Backend/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('Backend/jquery-validation/Latest files on jsDelivr CDN/jquery.validate.min.js')}}"></script>
<script>
    $('#formValidate').validate({
        ignore: [],
        rules: {
            userType: {
                required: true,
            },
            name: {
                required: true,
                minlength: 6,
            },
            email: {
                required: true,
                email: true,
                minlength: 8,
                maxlength: 30,
            },
            mobile: {
                required: true,
                minlength: 8,
                maxlength: 30,
            },
            address: {
                required: true,
                maxlength: 30,
            },
            Pass2: {
                required: true,
                equalTo: '#Pass1',
            }
        },
        messages: {
            userType: "Please Select User Role",
            name: "Please Enter User Name",
            email: {
                required: "Please Enter Email Address",
                email: "Enter Valid Email Address",
                minlength: "Password Will be minimum 8 characters or number",
                maxlength: "Password Will be maximum 30 characters or number",
            },
            Pass1: {
                required: "Please Enter Password",
                minlength: "Password Will be minimum 6 characters or number",
            },
            Pass2: {
                required: 'Please Enter Confirm Password',
                equalTo: 'Confirm Password Does not match',
            },
        },
    })

</script>
@endsection
