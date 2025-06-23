<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
  public function run(): void
  {
    $users = User::all();
    $categories = Category::all();
    $tags = Tag::all();
    foreach (range(1, 10) as $i) {
      $title = 'Post ke-' . $i;
      $post = Post::create([
        'title' => $title,
        'body' => 'Ini content ' . $title . 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quam eaque a consectetur ipsum. Alias neque libero ab ducimus eum temporibus voluptatum perspiciatis quod! Labore nostrum dolorem odio, nisi fuga cupiditate ut delectus illo, explicabo itaque placeat doloremque voluptatem expedita ratione fugit, esse exercitationem sed alias ullam tempora corrupti praesentium.',
        'user_id' => $users->random()->id,
        'category_id' => $categories->random()->id,
        'slug' => Str::slug($title),
        'image' => null
      ]);
      $post->tags()->attach($tags->random(rand(1, 3)));
    }
  }
}
