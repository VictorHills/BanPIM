<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'created_by' => User::factory(),
            'size' => $this->faker->word(),
            'weight' => $this->faker->word(),
            'views' => $this->faker->randomNumber(),
            'downloads' => $this->faker->randomNumber(),
            'sku_id' => $this->faker->unique()->word,
            'color' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => Carbon::now(),

            'category_id' => Category::factory(),
            'tag_id' => Tag::factory(),
        ];
    }
}
