<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index() {
        return view('result.upload');
    }

    public function upload(Request $request) {
        // return view('result.view');
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required',
            'level' => 'required|numeric',
            'semester' => 'required',
            'grade' => 'required',
        ]);
        $user = Auth::user();
        $result = new Result();
        $result->user_id = $user->id;
        $result->course_name = $request->input('course_name');
        $result->course_code = $request->input('course_code');
        $result->level = $request->input('level');
        $result->semester = $request->input('semester');
        $result->grade = $request->input('grade');
        $result->save();

        return redirect('/upload_result')->with('success', 'Result for ' .$result->course_code. 'has been uploaded successfully');

    }
    public function result() {
        $user = Auth::user();
        $user_id = $user -> id;
        $first_first = Result::where('level', 100)->where('semester', 'First')->where('user_id', $user_id)->get();
        $first_second = Result::where('level', 100)->where('semester', 'Second')->where('user_id', $user_id)->get();
        $second_first = Result::where('level', 200)->where('semester', 'First')->where('user_id', $user_id)->get();
        $second_second = Result::where('level', 200)->where('semester', 'Second')->where('user_id', $user_id)->get();
        $third_first = Result::where('level', 300)->where('semester', 'First')->where('user_id', $user_id)->get();
        $third_second = Result::where('level', 300)->where('semester', 'Second')->where('user_id', $user_id)->get();
        $fourth_first = Result::where('level', 400)->where('semester', 'First')->where('user_id', $user_id)->get();
        $fourth_second = Result::where('level', 400)->where('semester', 'Second')->where('user_id', $user_id)->get();
        $fifth_first = Result::where('level', 500)->where('semester', 'First')->where('user_id', $user_id)->get();
        $fifth_second = Result::where('level', 500)->where('semester', 'Second')->where('user_id', $user_id)->get();


        return view('result.view', compact(
            'first_first',
            'first_second',
            'second_first',
            'second_second',
            'third_first',
            'third_second',
            'fourth_first',
            'fourth_second',
            'fifth_first',
            'fifth_second'
            )
        );
    }
}
