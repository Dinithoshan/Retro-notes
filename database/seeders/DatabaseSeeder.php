<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'id' => 2,
        //     'name' => 'test User',
        //     'email' => 'test@example.com',
        //     'password'=> bcrypt('test123'),
        //     'is_admin'=>true,
        // ]);

        Note::factory(100)->create();

        // Category::factory()->count(10)->create();
        
    }

}