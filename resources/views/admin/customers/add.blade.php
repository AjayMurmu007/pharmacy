@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Add Customers </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Add Customers</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> Customer </h2>
                        <br>

                        <form  method="POST" action="{{ url('admin/customers/add')}}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Name <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Contact Number <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="number" name="contact_number" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Address </label>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control"> </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Doctor Name <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="doctor_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Doctor Address </label>
                                <div class="col-sm-10">
                                    <textarea name="doctor_address" class="form-control"> </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">  </label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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