<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            
        ]);

        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test1@email.com',
            'password' => bcrypt('password'),

        ]);

        
        User::factory()->create([
            'name' => 'Joy Dhar',
            'email' => 'joy@admin.com',
            'password' => bcrypt('abc123'),

        ]);

        // call the TemplateSeeder
        $this->call(TemplateSeeder::class);


    }
}
