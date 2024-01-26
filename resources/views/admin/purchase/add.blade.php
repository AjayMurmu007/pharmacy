@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Add Purchase </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Add Purchase</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> Purchase </h2>
                        <br>

                        <form  method="POST" action="{{ url('admin/purchases/add')}}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Supplier Name <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <select name="suppliers_id" class="form-control">
                                        <option value=""> Select Suppliers Name</option>
                                        @foreach ($getsupplier as $value)
                                        <option value="{{ $value->id }}"> {{ $value->suppliers_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Invoices ID <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <select name="invoices_id" class="form-control">
                                        <option value=""> Select Invoices ID</option> getinvoice
                                        @foreach ($getinvoice as $value)
                                        <option value="{{ $value->id }}"> {{ $value->id }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Voucher Number <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="voucher_number" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Purchase Date <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="date" name="purchase_date" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Total Amount <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_amount" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Payment Status <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <select name="payment_status" class="form-control">
                                        <option value=""> Payment Status </option>
                                        <option value="1"> Pending </option>
                                        <option value="2"> Accept </option>
                                        <option value="3"> Cancel </option>

                                    </select>
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