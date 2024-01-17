<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $courses = Course::all();
        return view('login', compact('courses'));
    }

    public function postRegister(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
        ]);

        // Set the default role to 'student'
        $validatedData['role'] = 'student';

        // Create a new user with the default role
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phone' => $validatedData['phone'],
            'role' => $validatedData['role'],
        ]);
        return redirect('/')->with('success','Login Now');
    }

    public function login(Request $request)
    {
        // Validate the login data
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();

            // Check the role of the authenticated user
            if ($user->role === 'teacher') {
                return redirect('teacher/course');
            } elseif ($user->role === 'superadmin') {
                return redirect('admin/dashboard');
            }
            elseif ($user->role === 'student') {
                return redirect()->route('index');
            }
        }

        // If authentication fails, redirect back with an error message
        return redirect('/')->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/')->with(['success' => 'Logout Successfull']);
    }
}
