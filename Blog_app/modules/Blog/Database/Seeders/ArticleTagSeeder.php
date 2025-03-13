<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\TagBlog;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::all();
        $tags =TagBlog::all();
        // foreach ($articles as $article) {
        //     $randomtag = TagBlog::inRandomOrder()->first();
        //     $article->tags()->attach($randomtag->id);
        // }
        foreach ($articles as $article) {
            // Attach 1-3 random tags to each article
            $randomTags = $tags->random(rand(1, 3))->pluck('id');
            $article->tags()->syncWithoutDetaching($randomTags);
        }
    }
}
