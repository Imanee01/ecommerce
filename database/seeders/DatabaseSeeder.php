<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    { 
      
        // \App\Models\User::factory(10)->create();
        Product::factory(10)->create();
        Category::factory(5)->create();
        Comment::factory(5)->create();

    }
}
