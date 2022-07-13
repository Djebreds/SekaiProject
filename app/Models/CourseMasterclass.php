<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMasterclass extends Model
{
    use HasFactory;
    protected $table = 'course_masterclasses';
    protected $primaryKey = 'masterclass_id';

    public function course_categories() {
        return $this->belongsTo(CourseCategory::class);
    }
    public function course_class_types() {
        return $this->belongsTo(CourseClassType::class);
    }
    public function course_class_prices() {
        return $this->belongsTo(CoursePriceType::class);
    }
    public function course_masterclass_levels() {
        return $this->belongsTo(CourseMasterclassLevel::class);
    }
    public function course_classes() {
        return $this->hasMany(CourseClass::class, 'masterclass_id', 'masterclass_id');
    }
    public function course_curriculum_sections() {
        return $this->hasMany(CourseCurriculumSection::class, 'masterclass_id', 'masterclass_id');
    }
}
