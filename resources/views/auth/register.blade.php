@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-warning-subtle border-3 rounded-pill border-warning">
                    <div class="card-header bg-warning rounded">
                        <h4 class="card-title text-center ">Register</h4>
                    </div>
                    <div class="card-body w-75 mx-auto">
                        <form method="post" action="{{route('doregister')}}">
                            @csrf
                            <div class="d-block d-lg-flex mt-5 justify-content-between">
                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="firstname" class="form-label">Firstname</label>
                                        <input type="firstname" class="form-control bg-secondary-subtle @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{old('firstname')}}" placeholder="Enter your firstname" required>
                                    </div>
                                    @error('firstname')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="lastname" class="form-label">Lastname</label>
                                        <input type="lastname" class="form-control bg-secondary-subtle @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{old('lastname')}}" placeholder="Enter your lastname" required>
                                    </div>
                                    @error('lastname')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-block d-lg-flex justify-content-between">
                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control bg-secondary-subtle @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="Enter your email" required>
                                    </div>
                                    @error('email')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="department" class="form-label">Department:</label>
                                        <select class="form-control bg-secondary-subtle  @error('password') is-invalid @enderror" id="department" name="department">
                                            <option value="">Select Department</option>
                                            @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block d-lg-flex justify-content-between">
                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control bg-secondary-subtle @error('password') is-invalid @enderror" id="password" name="password" placeholder="*****">
                                    </div>
                                    @error('password')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="password-confirm" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control bg-secondary-subtle" id="password-confirm" name="password_confirmation" placeholder="*****" required>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group text-center mb-3">
                                <div>
                                    <button type="submit" class="btn btn-warning">Register</button>
                                </div>
                            </div>
                        </form>
                        <div class="card-body text-center mb-1">
                            <a href="/login">already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


