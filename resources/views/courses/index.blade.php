@extends('layouts.app')

@section('title')
    Courses
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-warning-subtle">
                <div class="card-header h1 text-center">Recommended Courses</div>

                <div class="card-body">
                    @if ($recommendedCourses->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="bg-warning">Course Name</th>
                                    <th class="bg-warning">Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recommendedCourses as $recommendedCourse)
                                    <tr>
                                        <td class="bg-warning-subtle">{{ $recommendedCourse->name }}</td>
                                        <td class="bg-warning-subtle">{{ $recommendedCourse->level }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No courses available for the selected level.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
