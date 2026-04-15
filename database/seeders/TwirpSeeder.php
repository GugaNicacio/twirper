<?php

namespace Database\Seeders;

use App\Models\User;//adicionar manualmente se não dá Bo//
use App\Models\Twirp;//adicionar//
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TwirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a few sample users if they don't exist
        $users = User::count() < 3
				    ? collect([
				        User::create([
				            'name' => 'Alice Developer',
				            'email' => 'alice@example.com',
				            'password' => bcrypt('password'),
				        ]),
				        User::create([
				            'name' => 'Bob Builder',
				            'email' => 'bob@example.com',
				            'password' => bcrypt('password'),
				        ]),
				        User::create([
				            'name' => 'Charlie Coder',
				            'email' => 'charlie@example.com',
				            'password' => bcrypt('password'),
				        ]),
				    ])
				    : User::take(3)->get();

        // Sample chirps
        $twirps = [
            'Just discovered Laravel - where has this been all my life? 🚀',
            'Building something cool with Chirper today!',
            'Laravel\'s Eloquent ORM is pure magic ✨',
            'Deployed my first app with Laravel Cloud. So smooth!',
            'Who else is loving Blade components?',
            'Friday deploys with Laravel? No problem! 😎',
        ];

        // Create chirps for random users
        foreach ($twirps as $message) {
            $users->random()->twirps()->create([
                'message' => $message,
                'created_at' => now()->subMinutes(rand(5, 1440)),
            ]);
        }

    }
}
