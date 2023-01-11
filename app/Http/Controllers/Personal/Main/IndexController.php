<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(Post $post): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $likedUser = auth()->user()->likedPosts;
        $comment = auth()->user()->comments;
        return view('personal.main.index', compact('likedUser', 'comment'));
    }
}
