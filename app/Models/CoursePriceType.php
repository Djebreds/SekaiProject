<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePriceType extends Model
{
    use HasFactory;
    protected $table = 'course_class_prices';
    protected $primaryKey = 'price_type_id';
    protected $guarded = [];

    public function course_masterclasses() {
        return $this->hasMany(CourseMasterclass::class, 'price_type_id', 'price_type_id');
    }
}
