<?php

namespace Database\Seeders;

use App\Models\Article;
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
        Article::create([
            'title' => 'In suscipit pariatur cupiditate sequi.',
            'content' => 'Nulla molestiae repudiandae omnis sunt. Aperiam dolor tempore natus rerum distinctio illum. Fugiat quia corrupti sunt voluptate id. Quis fugit quis id eaque sit odio. Laudantium velit enim iste blanditiis dolorem exercitationem. Illo autem optio est.',
            'category_id' => 5,
            'user_id' => 1,  
        ]);
        
    }
}
