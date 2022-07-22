<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardStudentController extends Controller
{
    public function index() {
        return view('student.dashboard');
    }

}
