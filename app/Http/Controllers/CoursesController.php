<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function survey(Request $request)
{
    return view('courses.level');
}

    public function courses(Request $request)
{
    $request->validate([
        'level' => 'required|numeric',
    ]);
    $user = Auth::user();
    $departmentId = $user->department_id;
    $level = $request->input('level');

    $recommendedCourses = Courses::where('department_id', $departmentId)
     ->where('level', $level)
     ->get();


    return view('courses.index', compact('recommendedCourses'));
}

}
