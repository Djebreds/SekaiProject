<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'role_id',
        'is_email_verified'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function authorizeRole($roles)
    {
        if ($this->hasAnyRole($roles))
            return true;

        abort(401, 'This action is unauthorized');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($role->hasRole($role))
                    return true;
            }
        } else {
            if ($this->hasRole($roles))
                return true;
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('role_name', $role)->first()) {
            return true;
        }
        return false;
    }

    // relationship
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function course_enrolls()
    {
        return $this->hasMany(CourseEnroll::class, 'user_id', 'id');
    }
}
