<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
  public function run(): void
  {
    $posts = Post::all();
    $users = User::all();
    foreach ($posts as $post) {
      foreach (range(1, 3) as $i) {
        $comment = Comment::create([
          'post_id' => $post->id,
          'user_id' => $users->random()->id,
          'body' => 'Komentar ke-' . $i . ' untuk post ' . $post->id,
        ]);
        // Nested comment
        if ($i == 1) {
          Comment::create([
            'post_id' => $post->id,
            'user_id' => $users->random()->id,
            'body' => 'Balasan untuk komentar ke-1',
            'parent_id' => $comment->id,
          ]);
        }
      }
    }
  }
}
