<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\EskulCategory;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function index() {
        $categories = EskulCategory::with('eskul')->get();
        $eskuls = Eskul::all();
        // dd($categories);
        return view('eskul', compact('categories', 'eskuls'));
    }
}
