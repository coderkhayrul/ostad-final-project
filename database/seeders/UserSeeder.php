<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'role' => 1,
            ],
            [
                'name' => 'Company',
                'email' => 'company@mail.com',
                'password' => Hash::make('password'),
                'role' => 2,
            ],
            [
                'name' => 'Candidate',
                'email' => 'candidate@mail.com',
                'password' => Hash::make('password'),
                'role' => 3,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
