<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create multiple users
        DB::table('users')->insert([
            [
                'username' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'created_at' => date('y-m-d'),
            ],
            [
                'username' => 'user@gmail.com',
                'password' => bcrypt('user123'), // password
                'created_at' => date('y-m-d'),
            ],
            [
                'username' => 'user2@gmail.com',
                'password' => bcrypt('user123'), // password
                'created_at' => date('y-m-d'),
            ]
            ]);
    }
}
