<?php


namespace App\Http\Services\admin;


use App\Models\Post;

class PostsService
{
    public function getPosts()
    {
        return Post::select('title', 'slug', 'content', 'created_at', 'category_id')
            ->paginate(9);
    }

    public function getPostBySlug(string $slug)
    {
        return Post::where('slug', $slug)->first();
    }
}
