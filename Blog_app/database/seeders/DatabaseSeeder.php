<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Blog\Database\Seeders\DatabaseSeederBlog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call([
            RolePermissionSeeder::class,
            DatabaseSeederBlog::class
            // RoleSeeder::class,
            // AdminSeeder::class,
            // CategorySeeder::class,
            // TagSeeder::class,
            // ArticleSeeder::class,
            // ArticleTagSeeder::class,
        ]);
    }
}
