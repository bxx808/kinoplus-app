<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\TagStoreRequest;
use App\Models\Tag;


class TagController extends Controller
{
    public function store(TagStoreRequest $request)
    {
        $data = $request->validated();
        Tag::create($data);
        return redirect()->route('tags.index');
    }
}
