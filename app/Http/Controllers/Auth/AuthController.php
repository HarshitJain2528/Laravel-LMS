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
    /**
     * Display the login form with available courses.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm(){

        $courses = Course::all();
        return view('login', compact('courses'));
    }

    /**
     * Process user registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
        ]);

        $validatedData['role'] = 'student';

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phone' => $validatedData['phone'],
            'role' => $validatedData['role'],
        ]);

        return redirect('/')->with('success', 'Login Now');
    }

    /**
     * Process user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'teacher') {
                return redirect('teacher/course');
            } elseif ($user->role === 'superadmin') {
                return redirect('admin/dashboard');
            } elseif ($user->role === 'student') {
                return redirect()->route('index');
            }
        }

        return redirect('/')->with('error', 'Invalid credentials.');
    }

    /**
     * Logout the authenticated user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/')->with(['success' => 'Logout Successful']);
    }
}
