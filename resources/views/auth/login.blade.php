@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center flex-wrap vh-100 ">
            <div class="col-lg-6 ">
                <div class="card bg-warning-subtle border-3 rounded-pill border-warning ">
                    <div class="card-header bg-warning rounded">
                        <h4 class="card-title text-center">Login</h4>
                    </div>
                    <div class="card-body w-80 mx-auto my-1 p-5">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="post" action="{{route('dologin')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control bg-secondary-subtle" id="email" name="email" value="{{old('email')}}" placeholder="Enter your email address" required>
                            </div>
                            @error('email')
                                    <div class="text-danger text-small">{{ $message }}</div>
                                @enderror
                            <div class="mb-3">
                                <label for="password" class="form-label ">Password</label>
                                <input type="password" class="form-control bg-secondary-subtle" id="password" name="password" value="" placeholder="*****">
                            </div>
                            @error('password')
                                    <div class="text-danger text-small">{{ $message }}</div>
                                @enderror
                            <div class="justify-content-between">
                            <button type="submit" class="btn btn-warning col-12 text-center my-2">Login</button>
                            <div class="text-center">Click&nbsp;<a href="{{route('register')}}"> Here</a> if you don't have an account</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


