<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Database\Factories\TagBlogFactory;

class TagBlog extends Model
{
    //
    use HasFactory ;
    protected $table ='tags';
    // protected $table ='tag_blogs';
    protected $fillable = ['name', 'slug'];
    protected static function newFactory()
    {
        return TagBlogFactory::new();
    }

    public function articles(){
        return $this->belongsToMany(Article::class,
        'article_tag', // Pivot table
        'tag_id',      // Current model foreign key
        'article_id' )->withTimestamps(); //
    }
    
}
