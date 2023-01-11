<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $data = [];
        $data['userCount'] = User::all()->count();
        $data['postCount'] = Post::all()->count();
        $data['categoryCount'] = Category::all()->count();
        $data['tagCount'] = Tag::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
