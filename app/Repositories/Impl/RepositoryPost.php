<?php


namespace App\Repositories\Impl;


use App\Models\Post;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\PostRepositoryInterface;

class RepositoryPost extends EloquentRepository implements PostRepositoryInterface
{

    public function getModel()
    {
        return Post::class;
    }
}
