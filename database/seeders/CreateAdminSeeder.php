<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAdminSeeder extends Seeder
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
            'name' => 'Hidayat Faturahman',
            'username' => 'fdoang',
            'email' => 'hidayatfaturahman68@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('siskyuwuh2434'),
        ];

        User::create($users);
    }
}
