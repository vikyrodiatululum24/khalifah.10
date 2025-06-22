<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
  public function run(): void
  {
    $tags = ['Laravel', 'PHP', 'Web', 'Tutorial', 'Tips'];
    foreach ($tags as $tag) {
      Tag::create(['name' => $tag, 'slug' => Str::slug($tag)]);
    }
  }
}
