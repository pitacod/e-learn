<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();
         Category::insert([
            ['nom' => 'DEveloppement'],
            ['nom' => 'Design'],
            ['nom' => 'Business'],
            ['nom' => 'Marketing'],
            ['nom' => 'Arts&Music'],
         ]
        
        );
        Instructor::factory(10)->create();
         Course::factory(100)->create();
         

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
