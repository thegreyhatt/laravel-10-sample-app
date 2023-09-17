<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class PostsContainer extends Component
{
    public $posts;

    public function render()
    {
        return view('livewire.posts-container');
    }

    public function mount()
    {
        $this->posts = Post::with('author')->latest()->get();
    }

    #[On('post-added')] 
    public function refreshPosts()
    {
        $this->mount();
    }
}
