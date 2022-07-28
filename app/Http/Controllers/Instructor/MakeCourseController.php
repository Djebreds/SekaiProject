<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MakeCourseController extends Controller
{
    public function index()
    {
        return view('instructor.makeCourse');
    }
    // public function course()
    // {
    //     return view('instructor.myCourse');
    // }
}
