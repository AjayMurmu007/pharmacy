@extends('admin.layouts.app')

@section('content')



<div class="pagetitle">
    <h1>Supplier List</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Suppliers</li>
      </ol>
    </nav>
</div><!-- End Page Title -->


<section class="section">
    <div class="row">
        <div class="col-lg-12">

            @include('message')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('admin/suppliers/add')}}" class="btn btn-primary"> Add New Supplier</a>
                    </h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Supplier Name</th>
                                <th scope="col">Supplier Email</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($getRecord as $value)
                                                       
                            <tr>
                                <td scope="row"> {{ $value->id; }} </th>
                                <td> {{ $value->suppliers_name; }} </td>
                                <td> {{ $value->suppliers_email; }} </td>
                                <td> {{ $value->contact_number; }} </td>
                                <td> {{ $value->address; }} </td>
                                <td> {{ date('d-m-Y H:i:s A', strtotime($value->created_at)) }} </td>
                                <td>
                                    <a href="{{url('admin/suppliers/edit/'.$value->id)}}" class="btn btn-success"> <i class="bi bi-pencil-square"> </i> </a>
                                    <a href="{{url('admin/suppliers/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ?')"> <i class="bi bi-trash"> </i> </a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>









  
@endsection