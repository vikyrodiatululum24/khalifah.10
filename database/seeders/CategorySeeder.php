<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\EskulCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  public function run(): void
  {
    $categories = ['Teknologi', 'Pendidikan', 'Olahraga', 'Seni', 'Sains'];
    foreach ($categories as $cat) {
      Category::create(['name' => $cat, 'slug' => Str::slug($cat)]);
      EskulCategory::create(['name' => $cat]);
    }
  }
}
