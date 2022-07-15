<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCurriculum extends Model
{
    use HasFactory;
    protected $table = 'course_curriculums';
    protected $primaryKey = 'curriculum_id';
    protected $guarded = [];

    public function course_curriculum_sections() {
        return $this->belongsTo(CourseCurriculumSection::class, 'curriculum_section_id', 'curriculum_sectino_id');
    }
    public function course_comments() {
        return $this->hasMany(CourseComment::class)->whereNull('parent_id');
    }

}
