<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function store(Request $request, Post $post)
  {
    // dd($request, $post);
    $data = $request->validate([
      'body' => 'required',
      'parent_id' => 'nullable|exists:comments,id',
    ]);
    $data['user_id'] = auth()->id();
    $data['post_id'] = $post->id;
    Comment::create($data);
    return back();
  }
}
