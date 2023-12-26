<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone_number' => '01911111111',
            'user_type' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        User::create(
        [
            'name' => 'Passenger',
            'email' => 'pass@pass@gmail.com',
            'phone_number' => '01921255555',
            'user_type' => 'passenger',
            'password' => Hash::make('12345678'),
        ]);
    }
}