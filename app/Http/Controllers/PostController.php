<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::with('user', 'comments')->latest()->get();
    return view('post.index', compact('posts'));
  }

  public function show($slug)
  {
    $post = Post::where('slug', $slug)
      ->with(['user', 'comments.children', 'comments.user'])
      ->firstOrFail();
      // dd($post);
    $relatePost  = Post::where('category_id', $post->category_id)
      ->where('id', '!=', $post->id)
      ->latest()
      ->get();
      // dd($lastPost);

    $lastPost = Post::latest()->limit(10)->get();
    return view('post.show', compact('post', 'lastPost', 'relatePost'));
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'title' => 'required',
      'body' => 'required',
    ]);
    $data['user_id'] = auth()->id();
    $post = Post::create($data);
    return redirect()->route('posts.show', $post);
  }
}
