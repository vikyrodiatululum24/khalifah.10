<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'body',
    'user_id',
    'category_id',
    'slug',
    'image',
  ];

  protected $casts = [
    'image' => 'array',
  ];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }

  protected static function boot()
  {
    parent::boot();
    static::creating(function ($post) {
      $post->slug = Str::slug($post->title);
    });
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
