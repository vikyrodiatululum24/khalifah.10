<?php

namespace Database\Seeders;

use App\Models\Eskul;
use App\Models\EskulCategory;
use Illuminate\Database\Seeder;

class EskulSeeder extends Seeder
{
  public function run(): void
  {
    $categories = EskulCategory::all();
    foreach (range(1, 5) as $i) {
      Eskul::create([
        'name' => 'Eskul ' . $i,
        'description' => 'Deskripsi Eskul ' . $i . 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit eius ratione eum accusamus vel odit. Inventore ut voluptatum eos expedita praesentium atque voluptates hic dolor, sequi veritatis deleniti illum a alias dignissimos quis, odio necessitatibus ipsa soluta cumque. Quo eum incidunt similique porro quibusdam dolore delectus eveniet doloribus accusantium culpa?',
        'image' => null,
        'eskul_category_id' => $categories->random()->id,
      ]);
    }
  }
}
