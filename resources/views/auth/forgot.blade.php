@extends('layouts.app')

@section('content')



    {{-- forgot strt.. --}}


    <div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
           
        @include('message')

        <h5 class="card-title text-center pb-0 fs-4">Forgot to your Account</h5>
        <p class="text-center small">Enter your email to forgot</p>
        </div>

        <form class="row g-3 needs-validation" method="POST" action="{{ url('forgot_post') }}">

         {{ csrf_field() }}

        <div class="col-12">
            <label for="yourUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" name="email" class="form-control" id="yourUsername" value="{{old('email')}}" required>
            <div class="invalid-feedback">Please enter your username.</div>
            </div>
        </div>

        
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Forgot</button>
        </div>
        <div class="col-12">
            <p class="small mb-0">Login Account ? <a href="{{ url('/') }}">Login</a></p>
        </div>
        </form>

    </div>
    </div>

    {{-- Login end.. --}}

              
                            
@endsection