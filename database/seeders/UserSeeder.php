<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;    

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define logic to create 15 records
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => 'test' . $i,
                'email' => 'test@gmail.com' . ($i * 2),
                'password' => bcrypt('qwerty'),

            ]);
        }
    }
}
