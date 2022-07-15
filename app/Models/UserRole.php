<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table = 'user_roles';
    protected $primaryKey = 'role_id';
    protected $guarded = [];

    public function users() {
        return $this->hasMany(User::class, 'role_id', 'role_id');
    }
}
