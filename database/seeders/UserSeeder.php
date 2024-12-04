<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'r_id' => 1,
            'full_name' => 'Admin',
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'image' => 'admin.jpg',
            'token' => 'admin',
            'status' => 1,
            'designation' => 'Admin'
        ]);
    }
}
