<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Modules\Blog\Models\Category;
use Modules\Blog\Models\CategoryBlog;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CategoryBlog::factory()->count(20)->create();
    }
}