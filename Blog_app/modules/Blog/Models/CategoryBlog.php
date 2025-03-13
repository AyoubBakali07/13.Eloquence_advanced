<?php

namespace Modules\Blog\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\Factories\CategoryBlogFactory; // Add this

use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    //
    use HasFactory;
    protected $table = 'categories'; // Add this
    protected $fillable = ['name', 'slug'];

     // Explicit factory definition
     protected static function newFactory()
     {
         return CategoryBlogFactory::new();
     }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
