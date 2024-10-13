<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;

// DatabaseSeeder.php
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create a specific user
        User::factory()->create([
            'name' => 'aref',
            'email' => 'aref@gmail.com',
            'password' => Hash::make('Ahmad'),
        ]);

        // Create 10 varied contacts using the ContactFactory
        Contact::factory()->create([
            'name' => 'Ahmad',
            'email' => 'Ahmade@gmail.com',
            'phone' => '1234567890',
            'message' => 'Custom message',
        ]);
    }
}

