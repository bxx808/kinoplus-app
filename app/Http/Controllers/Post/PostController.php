<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostStoreRequest;
use App\Services\Post\PostStoreServices;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected PostStoreServices $postStoreServices;

    public function __construct(PostStoreServices $postStoreServices)
    {
        $this->postStoreServices = $postStoreServices;
    }


    public function store(PostStoreRequest $request)
    {
        $data = $request->validated();
        $this->postStoreServices->execute($data);
        return redirect()->route('posts.index');
    }
}
