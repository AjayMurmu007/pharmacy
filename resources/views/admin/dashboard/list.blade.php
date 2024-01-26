@extends('admin.layouts.app')

@section('content')
    
  

  

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Customers </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <a href="{{url('admin/customers')}}">
                      <div class="ps-3">
                        <h6> {{ $TotalCustomer }} </h6>                  
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card revenue-card"> 

                <div class="card-body">
                  <h5 class="card-title">Medicines</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <a href="{{ url('admin/medicines') }}">
                      <div class="ps-3">
                        <h6> {{ $TotalMedicines }}</h6>
                        
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-3">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Medicines Stock</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-archive"></i>
                    </div>
                    <a href="{{url('admin/medicines_stock')}}">
                      <div class="ps-3">
                        <h6> {{ $TotalMedicinesStock }} </h6>
                      </div>
                    </a>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-3">

              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Supplier </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-archive"></i>
                    </div>
                    <a href="{{url('admin/suppliers')}}">
                      <div class="ps-3">
                        <h6> {{ $TotalSupplier }} </h6>
                      </div>
                    </a>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


             <!-- Customers Card -->
             <div class="col-xxl-4 col-md-3">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Invoices </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <a href="{{url('admin/invoices')}}">
                      <div class="ps-3">
                        <h6> {{ $Totalinvoices }} </h6>
                      </div>
                    </a>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-3">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Purchases </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <a href="{{url('admin/purchases')}}">
                      <div class="ps-3">
                        <h6> {{ $Totalpurchases }} </h6>
                      </div>
                    </a>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->



          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

         

        </div><!-- End Right side columns -->

      </div>
    </section>

  

  
@endsection
  