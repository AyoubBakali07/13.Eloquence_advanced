<?php

// modules/Blog/Database/Factories/CategoryBlogFactory.php

namespace Modules\Blog\Database\Factories;

use Modules\Blog\Models\CategoryBlog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryBlogFactory extends Factory
{
    protected  $model = CategoryBlog::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word,
        ];
    }
}
