@extends('layouts.app')

@section('title')
    Change Password
@endsection

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="card bg-warning-subtle border-3 rounded-pill border-warning">
                    <div class="card-body w-75 mx-auto">
                        <form method="post" action="{{route('doregister')}}">
                            @csrf

                            <div class="p-5">
                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="current_password" class="form-label">Current Password</label>
                                        <input type="password" class="form-control bg-secondary-subtle @error('current_password') is-invalid @enderror" id="current_password" name="current_password" placeholder="*****">
                                    </div>
                                    @error('current_password')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="mb-3 mx-1">
                                        <label for="password" class="form-label">New Password</label>
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
                                    <button type="submit" class="btn btn-warning">Change</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


