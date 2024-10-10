@extends('layouts.app')

@section('title')
    Upload Result
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-warning-subtle">
                <div class="card-header bg-warning">
                    <h4 class="card-title text-center">Upload Your Result Course By Course</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('upload.result')}}">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="course_name" class="form-label">Course Name:</label>
                                <input type="text" class="form-control bg-secondary-subtle @error('course_name') is-invalid @enderror" id="course_name" name="course_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="course_code" class="form-label">Course Code:</label>
                                <input type="text" class="form-control bg-secondary-subtle @error('course_code') is-invalid @enderror" id="course_code" name="course_code" required>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level:</label>
                                <select class="form-control bg-secondary-subtle @error('level') is-invalid @enderror" id="level" name="level">
                                    <option value="">Select Level</option>
                                    @for($i = 100; $i <= 500; $i += 100)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester (First/Second):</label>
                                <select class="form-control bg-secondary-subtle @error('semester') is-invalid @enderror" id="semester" name="semester">
                                    <option value="">Select Semester</option>
                                    <option value="First">First</option>
                                    <option value="Second">Second</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="grade" class="form-label">Grade:</label>
                                <select class="form-control bg-secondary-subtle @error('grade') is-invalid @enderror" id="grade" name="grade">
                                    <option value="">Select Grade</option>
                                    @for($letter = 'A'; $letter <= 'F'; $letter++)
                                        <option value="{{ $letter }}">{{ $letter }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Upload Result</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

