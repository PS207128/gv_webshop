<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            
            'name' => 'Webmedewerker',
            'email' => 'medewerker@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('test123'),
            'is_admin' => true
        ]);
    }
}
