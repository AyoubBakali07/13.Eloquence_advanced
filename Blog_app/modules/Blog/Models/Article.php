<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\Factories\ArticleFactory;
use modules\Blog\Models\CategoryBlog;

class Article extends Model
{
  //
  use HasFactory;


  protected $fillable = ['title','user_id', 'content', 'category_id', 'slug'];
  // protected $table ='article_tag';
  protected $table ='articles';

  public function user(){
    return $this->belongsTo(User::class);
  }
  public function category()
  {
    return $this->belongsTo(CategoryBlog::class, 'category_id');
  }
  public function tags()
  {
    return $this->belongsToMany(TagBlog::class,
            'article_tag', // Pivot table
            'article_id',   // Current model foreign key
            'tag_id' )->withTimestamps(); //
  }

  public function comments()
  {
    return $this->morphMany(Comment::class, 'commentable');
  }
  protected static function newFactory()
  {
    return ArticleFactory::new();
  }
}
