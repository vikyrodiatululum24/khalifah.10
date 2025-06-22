<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    User::factory()->create([
      'name' => 'Admin',
      'email' => 'admin@gmail.com',
      'password' => Hash::make('password'),
      'role' => 'admin'
    ]);
    User::factory(9)->create();
  }
}
