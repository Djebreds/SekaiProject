<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardInstructorController extends Controller
{
    public function index() {
        return view('instructor.dashboard');
    }
}