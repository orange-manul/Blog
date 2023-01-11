<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $posts = auth()->user()->likedPosts;
        return view('personal.liked.index', compact('posts'));
    }
}
