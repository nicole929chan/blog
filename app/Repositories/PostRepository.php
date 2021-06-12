<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    protected $model;

    // DI to initialize Post object
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function getPosts()
    {
        return $this->model->get();
    }

    public function getPostById($id)
    {
        return $this->model->findOrFail($id);
    }
}