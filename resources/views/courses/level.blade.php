@extends('layouts.app')

@section('title')
    Enter Level
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-warning-subtle">
                    <div class="card-header bg-warning">
                        <h4 class="card-title text-center">What level are you in (in figures)</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('courses.check')}}">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="level" class="form-label">Level:</label>
                                    <select class="form-control bg-secondary-subtle @error('level') is-invalid @enderror" id="level" name="level">
                                        <option value="">Select Level</option>
                                        @for($i = 100; $i <= 500; $i += 100)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Check Courses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


