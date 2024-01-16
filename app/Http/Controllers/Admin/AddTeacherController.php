<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddTeacherController extends Controller
{
    public function addTeacher(Request $request)
    {
        $validatedData = $request->validate([
            'teacherName' => 'required|max:25',
            'teacherEmail' => 'required|email|unique:users,email', // Validate 'teacherEmail' but map it to 'email' column
            'password' => 'required|min:8',
            'teacherAge' => 'nullable|numeric',
        ]);

        $validatedData['role'] = 'teacher';

        User::create([
            'name' => $validatedData['teacherName'],
            'email' => $validatedData['teacherEmail'], // Use 'teacherEmail' from form, but it'll map to 'email' column
            'password' => Hash::make($validatedData['password']),
            'age' => $validatedData['teacherAge'],
            'role' => $validatedData['role'],
        ]);

        return redirect('/admin/teachers');
    }
}
