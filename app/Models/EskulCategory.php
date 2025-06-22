<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EskulCategory extends Model
{
    use HasFactory;

    public function eskul()
    {
        return $this->hasMany(Eskul::class, 'eskul_category_id');
    }
}

