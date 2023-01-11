<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
     public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     {
         $categories = Category::all();
         $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }
}
