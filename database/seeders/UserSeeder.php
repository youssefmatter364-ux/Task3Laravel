<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Youssef',
            'email' => 'youssef@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Amira',
            'email' => 'amira@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Abdo',
            'email' => 'abdo@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Mohamed',
            'email' => 'mohamed@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}