<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user) {
            Category::factory(2)->create(['created_by' => $user->id]);
            Tag::factory(2)->create(['created_by' => $user->id]);
            Product::factory(5)->create(['created_by' => $user->id]);
            Media::factory(3)->create(['created_by' => $user->id]);
        });
    }
}
