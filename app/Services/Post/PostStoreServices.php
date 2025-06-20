<?php

namespace App\Services\Post;

use App\Models\Post;

class PostStoreServices
{

    public function execute(array $data)
    {
        $post = Post::create([
            'name' => $data['name'],
            'header' => $data['header'],
            'category_id' => $data['category_id'],
            'actors' => $data['actors'],
            'content' => $data['content'],
            'image' => $data['image'],
            'video' => $data['video'],
        ]);
        $post->tag()->attach($data['tag']);
    }
}
