@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Add Medicines </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Add Medicines</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> Medicine </h2>
                        <br>

                       @include('admin.medicines.form')

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection