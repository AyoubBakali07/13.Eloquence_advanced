<?php

namespace Modules\Blog\Database\Seeders;

use Modules\Blog\Models\TagBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TagBlog::factory()->count(10)->create();
    }
}