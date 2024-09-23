<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\course;
use App\Models\course_module;
use Illuminate\Support\Facades\Password;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'Administrator',
            "display_name" => "admn",
            'email' => 'admin.aizubair@skiff.com',
            'password' => '$2y$12$xf6DKSqxs.nh7EVMVrvVJetWezzY6gcpr5/6.GIkyi/yxOScKDVqe', //password
            "email_verified_at" => today(),
            // faker phone number
            "phone" => fake()->phoneNumber(),
            //make a facker image by name for 'profile_photo_url' field;
            'profile_photo_url' => 'https://picsum.photos/seed/picsum/200',
            "status" => 1,
            // "profile_photo_url" => "https://picsum.photos/seed/1/200",
        ]);
        // \App\Models\Course::factory(10)->create();
        // \App\Models\course_module::factory(10)->create();
        // \App\Models\moduleContent::faker(100)->create();
    }
}
