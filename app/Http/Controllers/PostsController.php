<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $postRepo;

    // DI to initialize PostRepository object
    public function __construct(PostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        $posts = $this->postRepo->getPosts()->load(['category', 'author']);
        
        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = $this->postRepo->getPost($id);

        return view('post', ['post' => $post]);
    }
}
