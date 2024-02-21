<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Ikbal Hossain",
            // 'role_types_id' => '1',
            'email' => "ikbalhossain125@gmail.com",
            'password' => Hash::make('admin125'),
        ]);
        DB::table('users')->insert([
            'name' => "Md Alauddin",
            // 'role_types_id' => '2',
            'email' => "alauddin@gmail.com",
            'password' => Hash::make('admin125'),
        ]);
    }
}
