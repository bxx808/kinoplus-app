<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_to_tags', 'tag_id', 'post_id');
    }
}
