<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Untuk Support Hash
use Illuminate\Support\Facades\Hash;
// Untuk Support String
use Illuminate\Support\Str;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            'name' => 'Siska Leontyne',
            'username' => 'siskuy',
            'email' => 'siskyuwuh2434@gmail.com',
            'role' => 'customer',
            'password' => Hash::make('password'),
        ];

        User::create($users);
    }
}
