<?php

namespace Database\Seeders;

use App\Models\CourseCategory;
use App\Models\CourseClassType;
use App\Models\CourseMasterclassLevel;
use App\Models\CoursePriceType;
use App\Models\Role;
use App\Models\User;
use Database\Factories\CourseCategoryFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


         \App\Models\Role::factory()->create([
             'role_name' => 'Admin',
             'role_slug' => ucfirst(Str::slug('admin')),
             'role_description' => fake()->text,
         ]);

        \App\Models\Role::factory()->create([
            'role_name' => 'Student',
            'role_slug' => ucfirst(Str::slug('student')),
            'role_description' => fake()->text,
        ]);

        \App\Models\Role::factory()->create([
            'role_name' => 'Instructor',
            'role_slug' => ucfirst(Str::slug('instructor')),
            'role_description' => fake()->text,
        ]);

//
//        $role = new Role();
//        $role->role_name = 'Admin';
//        $role->role_slug = 'admin';
//        $role->role_description = 'can do anything';
//        $role->save();
//
//        $role = new Role();
//        $role->role_name = 'Student';
//        $role->role_slug = 'student';
//        $role->role_description = 'can learning';
//        $role->save();
//
//        $role = new Role();
//        $role->role_name = 'Instructor';
//        $role->role_slug = 'instructor';
//        $role->role_description = 'can teaching';
//        $role->save();

        User::factory()->count(50)->create();
        CourseCategory::factory()->count(20)->create();
        CourseMasterclassLevel::factory()->count(10)->create();
        CoursePriceType::factory()->count(7)->create();
        CourseClassType::factory()->count(10)->create();

    }
}
