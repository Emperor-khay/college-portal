<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index');
    }

    public function edit_profile() {
        $user = Auth::user();
        $department = Department::where('id', '=', $user->department_id)->firstOrFail();
        return view('profile.edit', compact('user', 'department'));
    }

    public function update(Request $request) {
        $user = Auth::user();
        $validatedData = $request->validate([
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id], // Ignore the current user's email,
        ]);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('profile')->with('success', 'Update successful! Profile Information has been changed as requested.');
    }

    public function change_password() {
        $user = Auth::user();
        return view('profile.password', compact('user'));
    }

    public function update_password(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'current_password' => 'required',
        'password' => 'required|min:8|confirmed',
    ]);

    $user = auth()->user();

    // Check if the current password matches
    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }

    // Hash and update the new password
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('profile')->with('success', 'Password successfully updated!');
}

}
