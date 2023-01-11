<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPost = Post::withCount('likedUser')->orderBy('liked_user_count', 'DESC')->get()->take(4);
        return view('post.index', compact('posts', 'randomPosts', 'likedPost'));
    }
}
