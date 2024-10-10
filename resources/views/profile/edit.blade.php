@extends('layouts.app')

@section('title')
    Edit Profile
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-md-7">
                <div class="card bg-warning-subtle border-3 rounded-pill border-warning">
                    <div class="card-body w-75 mx-auto">
                        <form method="post" action="{{route('update.profile')}}">
                            @csrf
                            <div class="d-block d-lg-flex mt-5 justify-content-between">
                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="firstname" class="form-label">Firstname</label>
                                        <input type="firstname" class="form-control bg-secondary-subtle @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{$user->firstname}}" placeholder="Enter your firstname" required>
                                    </div>
                                    @error('firstname')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="lastname" class="form-label">Lastname</label>
                                        <input type="lastname" class="form-control bg-secondary-subtle @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{$user->lastname}}" placeholder="Enter your lastname" required>
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
                                        <input type="email" class="form-control bg-secondary-subtle @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}" placeholder="Enter your email" required>
                                    </div>
                                    @error('email')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="department" class="form-label">Department</label>
                                        <input type="department" class="form-control bg-secondary-subtle" id="department" name="department" value="{{ $department->name }}" disabled>
                                    </div>
                                    @error('email')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group text-center mb-3">
                                <div>
                                    <button type="submit" class="btn btn-warning">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


