@extends('layouts.app')

@section('title')
    Result
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-warning-subtle">

                <div class="card-header bg-warning"><h1>First Year</h1></div>
                <div class="card-body"><p>First Semester</p></div>
                <div class="card-body">
                    @if($first_first->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($first_first as $result1)
                                    <tr>
                                        <td>{{ $result1->course_name }}</td>
                                        <td>{{ $result1->course_code }}</td>
                                        <td>{{ $result1->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">First Year First Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>

                {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                <div class="card-body"><p>Second Semester</p></div>
                <div class="card-body">
                    @if($first_second->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($first_second as $result2)
                                    <tr>
                                        <td>{{ $result2->course_name }}</td>
                                        <td>{{ $result2->course_code }}</td>
                                        <td>{{ $result2->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">First Year Second Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>

                <div class="card-header bg-warning"><h1>Second Year</h1></div>
                <div class="card-body"><p>First Semester</p></div>
                <div class="card-body">
                    @if($second_first->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($second_first as $result3)
                                    <tr>
                                        <td>{{ $result3->course_name }}</td>
                                        <td>{{ $result3->course_code }}</td>
                                        <td>{{ $result3->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">First Year First Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>

                {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                <div class="card-body"><p>Second Semester</p></div>
                <div class="card-body">
                    @if($second_second->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($second_second as $result4)
                                    <tr>
                                        <td>{{ $result4->course_name }}</td>
                                        <td>{{ $result4->course_code }}</td>
                                        <td>{{ $result4->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">Second Year Second Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>

                <div class="card-header bg-warning"><h1>Third Year</h1></div>
                <div class="card-body"><p>First Semester</p></div>
                <div class="card-body">
                    @if($third_first->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($third_first as $result5)
                                    <tr>
                                        <td>{{ $result5->course_name }}</td>
                                        <td>{{ $result5->course_code }}</td>
                                        <td>{{ $result5->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">Third Year First Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>

                {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                <div class="card-body"><p>Second Semester</p></div>
                <div class="card-body">
                    @if($third_second->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($third_second as $result6)
                                    <tr>
                                        <td>{{ $result6->course_name }}</td>
                                        <td>{{ $result6->course_code }}</td>
                                        <td>{{ $result6->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">Third Year Second Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>
                <div class="card-header bg-warning"><h1>Fourth Year</h1></div>
                <div class="card-body"><p>First Semester</p></div>
                <div class="card-body">
                    @if($fourth_first->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fourth_first as $result7)
                                    <tr>
                                        <td>{{ $result7->course_name }}</td>
                                        <td>{{ $result7->course_code }}</td>
                                        <td>{{ $result7->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">Fourth Year First Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>
                {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                <div class="card-body"><p>Second Semester</p></div>
                <div class="card-body">
                    @if($fourth_second->count() > 0)
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fourth_second as $result8)
                                    <tr>
                                        <td>{{ $result8->course_name }}</td>
                                        <td>{{ $result8->course_code }}</td>
                                        <td>{{ $result8->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-danger">Fourth Year Second Semester Result Has Not Been Uploaded</p>
                    @endif
                </div>
                @if($fifth_first->count() > 0)
                <div class="card-header bg-warning"><h1>Fifth Year</h1></div>
                <div class="card-body"><p>First Semester</p></div>
                <div class="card-body">
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fifth_first as $result9)
                                    <tr>
                                        <td>{{ $result9->course_name }}</td>
                                        <td>{{ $result9->course_code }}</td>
                                        <td>{{ $result9->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                {{-- <div class="card-header"><h1>Fourth Year</h1></div> --}}
                @if($fifth_second->count() > 0)
                <div class="card-body"><p>Second Semester</p></div>
                <div class="card-body">
                    {{-- <div class="card-header"><h1>First Year</h1></div> --}}
                    {{-- <div class=""><h3>First Semester</h1></div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fifth_second as $result10)
                                    <tr>
                                        <td>{{ $result10->course_name }}</td>
                                        <td>{{ $result10->course_code }}</td>
                                        <td>{{ $result10->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
        </div>
    </div>
</div>

@endsection
