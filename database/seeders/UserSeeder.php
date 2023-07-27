<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Eren',
                'email' => 'eren@gmail.com',
                'password' => bcrypt('11111111')
            ],
            [
                'name' => 'Armin',
                'email' => 'armin@gmail.com',
                'password' => bcrypt('11111111')
            ]
        ];

        User::insert($user);
    }
}
