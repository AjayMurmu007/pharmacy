@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1> Website Logo Update </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active"> Website Logo Update </li>
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
                        <h2> Website Logo Update </h2>
                        <br>

                        <form  method="POST" action="{{ url('admin/website_logo_update')}}" enctype="multipart/form-data">

                            {{ csrf_field() }}


                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Name <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="website_name" value="{{ $getwebsite->website_name }}" class="form-control" required>
                                </div>
                            </div>

                            
                            
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Website Logo <span style="color:red;"> </span> </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="logo">

                                    @if (!empty($getwebsite->logo))

                                        <img src="{{ $getwebsite->getLogo() }}" height="100px" width="100px">
                                        
                                    @endif

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