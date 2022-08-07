<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use App\Models\CourseClass;
use App\Models\CourseClassType;
use App\Models\CourseMasterclass;
use App\Models\CourseMasterclassLevel;
use App\Models\CoursePriceType;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $masterclasses = CourseMasterclass::with('course_class_prices')->paginate(8);
        $categories = CourseCategory::get();
        $price_types = CoursePriceType::get();
        $class_types = CourseClassType::get();
        $masterclass_levels = CourseMasterclassLevel::get();
        return view('courses', compact('masterclasses', 'categories', 'price_types', 'class_types', 'masterclass_levels'));
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
