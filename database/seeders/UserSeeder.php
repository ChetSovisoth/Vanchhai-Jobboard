<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            [
                "name"=> "admin",
                "email"=> "admin@jobboard.com",
                "phone"=> "0123456789",
                "role"=> "admin",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Yean Daralongta",
                "email"=> "daralongta@gmail.com",
                "phone"=> "0883456789",
                "role"=> "employer",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Say Vanchhai",
                "email"=> "vanchhai@gmail.com",
                "phone"=> "0873456789",
                "role"=> "seeker",
                "password"=> Hash::make("123456789"),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
