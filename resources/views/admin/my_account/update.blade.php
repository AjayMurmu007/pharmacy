@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1> Profile Update </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active"> Profile Update </li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            @include('message')
            
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> Profile Update </h2>
                        <br>

                        <form  method="POST" action="{{ url('admin/my_account') }}" enctype="multipart/form-data">

                            {{ csrf_field() }}


                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Name <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $getrecord->name }}" class="form-control" required>
                                </div>
                            </div>

                            
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> E-Mail <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" value="{{ $getrecord->email }}" class="form-control" required>
                                    <span style="color: red;"> {{ $errors->first('email') }} </span>

                                    
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Profile Image <span style="color:red;"> </span> </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="profile_image">

                                    @if (!empty($getrecord->profile_image))

                                        <img src="{{ $getrecord->getProfileImage() }}" height="100px" width="100px">
                                        
                                    @endif

                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Password <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control">
                                    (Leave blank if you are not changing the password)
                                    <span style="color: red;"> {{ $errors->first('password') }} </span>
                                </div>
                            </div>

                                                        
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">  </label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection