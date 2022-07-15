<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInstructor extends Model
{
    use HasFactory;
    protected $table = 'course_instructors';
    protected $primaryKey = 'instructor_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'picture',
        'phone',
        'status',
        'role_id',
    ];

    public function course_classes() {
        return $this->hasMany(CourseClass::class, 'instructor_id', 'instructor_id');
    }
    public function course_certificates() {
        return $this->belongsTo(CourseCertificate::class, 'instructor_id', 'instructor_id');
    }
}
