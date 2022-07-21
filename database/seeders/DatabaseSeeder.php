<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $role = new Role();
        $role->role_name = 'Admin';
        $role->role_slug = 'admin';
        $role->role_description = 'can do anything';
        $role->save();

        $role = new Role();
        $role->role_name = 'Student';
        $role->role_slug = 'student';
        $role->role_description = 'can learning';
        $role->save();

        $role = new Role();
        $role->role_name = 'Instructor';
        $role->role_slug = 'instructor';
        $role->role_description = 'can teaching';
        $role->save();

        User::factory()->count(20)->create();
    }
}
