<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentHomeController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function courses()
    {
        return view('student.courses');
    }

    public function contact()
    {
        return view('student.contact');
    }

    public function about()
    {
        return view('student.about');
    }
}
