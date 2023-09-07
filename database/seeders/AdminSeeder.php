<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import the User model
use App\Models\Role;


class AdminSeeder extends Seeder
{
    public function run()
    {
        // Create the admin role if it doesn't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create the admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin_password'), // Replace with the actual password
            'role_id' => $adminRole->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
