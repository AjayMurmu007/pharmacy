@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1> Medicines Stock </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active"> Medicines Stock</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> Medicines </h2>
                        <br>

                        <form  method="POST" action="{{ url('admin/medicines_stock/add')}}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Medicine Name <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <select name="medicines_id" class="form-control" required>
                                        <option value=""> Select Medicine Name</option>

                                        @foreach ($getRecord as $value)
                                            <option value="{{ $value -> id }}"> {{ $value -> name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Batch ID <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="batch_id" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Batch ID <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="date" name="expiry_date" class="form-control" required>
                                </div>
                            </div>

                           

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Quantity <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="quatity" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> MRP <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="mrp" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Rate <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="rate" class="form-control" required>
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