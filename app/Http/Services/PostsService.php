<?php

namespace App\Http\Services;

use App\Models\Post;

class PostsService
{
    public function getPosts()
    {
        return Post::select('title', 'slug', 'content', 'created_at', 'category_id')
            ->with('category')
            ->paginate(9);
    }

}
