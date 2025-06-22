<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $posts = Post::with('comments')->latest()->limit(5)->get();
        // dd($posts);

        return view('dashboard', compact('posts'));
    }
}
