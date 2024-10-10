@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100 align-items-center">
        <div class="col-md-6">
            <div class="card bg-warning-subtle border-3 rounded-pill border-warning text-center p-5">
                <a href="{{ route('edit.profile') }}" class="my-3 btn btn-warning fs-3 mx-md-5">
                    <div class=" ">
                        Change Profille Information
                    </div>
                </a>

                <a href="{{ route('change.password') }}" class="my-3 btn btn-warning fs-3 mx-md-5">
                    <div class="">
                        Change Password
                    </div>
                </a>

                <a href="" class="my-3 btn btn-warning fs-3 mx-md-5">
                    <div class="">
                        Deactivate Account
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection
