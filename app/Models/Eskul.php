<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    protected $fillable = [
        'eskul_category_id',
        'name',
        'description',
        'image'
    ];

    public function eskulcategory() {
        return $this->belongsTo(EskulCategory::class, 'eskul_category_id');
    }
}
