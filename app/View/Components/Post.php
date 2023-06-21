<?php

namespace App\View\Components;

use App\Models\PostModel;
use Illuminate\View\Component;

class Post extends Component
{
    public Post $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('components.post');
    }
}

