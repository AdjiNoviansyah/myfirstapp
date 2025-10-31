<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert beberapa user untuk testing
        User::create([
            'user' => 'admin',
            'password' => '12345',
        ]);

        User::create([
            'user' => 'root',
            'password' => 'root',
        ]);

        User::create([
            'user' => 'dev',
            'password' => 'developer',
        ]);
    }
}