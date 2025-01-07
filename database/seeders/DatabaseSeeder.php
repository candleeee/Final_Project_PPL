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
        // Seed roles
        Role::updateOrInsert(
            ['role' => 'admin'],
            ['created_at' => now(), 'updated_at' => now()]
        );

        Role::updateOrInsert(
            ['role' => 'pasien'],
            ['created_at' => now(), 'updated_at' => now()]
        );

        // Seed users
        User::updateOrInsert(
            ['email' => 'admin@gmail.com'],
            [
                'name'      => 'Admin',
                'password'  => bcrypt('1234'),
                'role_id'   => Role::where('role', 'admin')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        User::updateOrInsert(
            ['email' => 'robert@gmail.com'],
            [
                'name'      => 'Robert Davis Chaniago',
                'password'  => bcrypt('1234'),
                'role_id'   => Role::where('role', 'pasien')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        User::updateOrInsert(
            ['email' => 'mujiyono@gmail.com'],
            [
                'name'      => 'Mujiyono',
                'password'  => bcrypt('1234'),
                'role_id'   => Role::where('role', 'pasien')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
