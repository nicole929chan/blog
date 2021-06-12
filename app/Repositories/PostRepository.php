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

    /**
     * @return PostRepository
     */
    public function filter(array $filters)
    {
        if ($filters["search"] ?? false) {
           $this->model = $this->model->where('title', 'like', "%{$filters["search"]}%")
                ->orWhere('body', 'like', "%{$filters["search"]}%");

            }
        
        return $this;
    }

    public function getPosts()
    {
        return $this->model->get();
    }

    public function getPost($id)
    {
        return $this->model->findOrFail($id);
    }
}