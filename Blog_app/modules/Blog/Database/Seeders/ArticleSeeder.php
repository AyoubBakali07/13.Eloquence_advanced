<?php

namespace Modules\Blog\Database\Seeders;

use Modules\Blog\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Article::factory()->count(10)->create();
        $article = Article::create([
            'title' => 'Admin',
            'content' => 'admin@gmail.com',
            'user_id' => 1,
            'category_id' => 1,
            
            ]);
    }
}