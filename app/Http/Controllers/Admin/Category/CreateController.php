<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class CreateController extends Controller
{
    #[NoReturn] public function __invoke()
    {
        return view('admin.category.create');
    }
}
