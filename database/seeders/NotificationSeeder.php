<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        // Create or fetch a user
        $user = User::first() ?? User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'role' => 1, // Matches UserAuth controller
        ]);

        Notification::create([
            'title' => 'New Research Published',
            'message' => 'A new research paper has been published!',
            'type' => 'info',
            'read' => false,
            'user_id' => $user->id,
        ]);

        Notification::create([
            'title' => 'Subscription Alert',
            'message' => 'Your subscription is about to expire.',
            'type' => 'warning',
            'read' => false,
            'user_id' => $user->id,
        ]);

        Notification::create([
            'title' => 'Profile Updated',
            'message' => 'Your profile was updated successfully.',
            'type' => 'success',
            'read' => true,
            'user_id' => $user->id,
        ]);
    }
}