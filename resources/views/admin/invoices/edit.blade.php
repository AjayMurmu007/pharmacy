@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Edit Invoices </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Edit Invoices</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> Invoices </h2>
                        <br>

                        <form  method="POST" action="{{ url('admin/invoices/edit/'. $editRecord->id )}}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Net Total <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="number" name="net_total" class="form-control" required value="{{ $editRecord->net_total}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Invoice Date <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <input type="date" name="invoices_date" class="form-control" required value="{{ $editRecord->invoices_date}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Customer Name <span style="color:red;"> *</span> </label>
                                <div class="col-sm-10">
                                    <select name="customer_id" class="form-control">
                                        <option value="">Select Customer Name</option>

                                        @foreach ($getRecord as $value)
                                            <option {{ ($value -> id == $editRecord -> customer_id) ? 'selected' : '' }} value="{{ $value -> id }}"> {{ $value -> name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Total Amount </label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_amount" value="{{ $editRecord->total_amount}}" class="form-control"> 
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"> Total Discount </label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_discount" value="{{ $editRecord->total_discount}}" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">  </label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary form-control">Update</button>
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