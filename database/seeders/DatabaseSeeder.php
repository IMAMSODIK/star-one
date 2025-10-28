<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'id' => Str::uuid(),
            'name' => 'Admin',
            'password' => bcrypt('12345'),
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);

        User::create([
            'id' => Str::uuid(),
            'name' => 'Michael Johnson',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 1,
            'email' => 'mikael@gmail.com',
        ]);

        User::create([
            'id' => Str::uuid(),
            'name' => 'Fermin Lopez',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 1,
            'email' => 'fermin@gmail.com',
        ]);

        User::create([
            'id' => Str::uuid(),
            'name' => 'Lamine Yamala',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 1,
            'email' => 'lamine@gmail.com',
        ]);
    }
}
