<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'user_id' => '',
            'email' => 'admin@vros.co.id',
            'join_date' => '',
            'phone_number' => '',
            'status' => '',
            'role_name' => 'Admin',
            'avatar' => '',
            'position' => '',
            'department' => '',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);
    }
}
