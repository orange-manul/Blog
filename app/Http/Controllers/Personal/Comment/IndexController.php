<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $comments = auth()->user()->comments;
        return view('personal.comment.index', compact('comments'));
    }
}
