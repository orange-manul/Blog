<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class EditController extends Controller
{
    public function __invoke(Comment $comment): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        return view('personal.comment.edit', compact('comment'));
    }
}
