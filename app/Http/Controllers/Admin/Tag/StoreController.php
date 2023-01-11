<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use JetBrains\PhpStorm\NoReturn;

class StoreController extends Controller
{
    #[NoReturn] public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);
        return redirect()->route('admin.tag.index');

    }
}
