
@extends('layouts.app')

@section('content')
    

    {{-- Login strt.. --}}

    <div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">

            @include('message')

            
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
        <p class="text-center small">Enter your email & password to login</p>
        </div>

        <form class="row g-3 needs-validation" method="POST" action="{{'login_post'}}">

            {{ csrf_field() }}

        <div class="col-12">
            <label class="form-label">Username</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" name="email" class="form-control"  required value="{{old('email')}}">
            <div class="invalid-feedback">Please enter your email.</div>
            </div>
        </div>

        <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            <div class="invalid-feedback">Please enter your password!</div>
        </div>

        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" value="true">
            <label class="form-check-label">Remember me</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Login</button>
        </div>
        <div class="col-12">
            <p class="small mb-0">forgot password? <a href="{{ url('forgot') }}">Forgot account</a></p>
        </div>
        </form>

    </div>
    </div>

    {{-- Login end.. --}}

              
@endsection