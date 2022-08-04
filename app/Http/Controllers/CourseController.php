<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses');
    }
    public function show()
    {
        return view('course.detail');
    }
    public function course()
    {
        return view('course.courseLearning');
    }
}
