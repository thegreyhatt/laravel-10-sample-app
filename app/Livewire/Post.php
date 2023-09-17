<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $post, $comment_content;

    public function render()
    {
        return view('livewire.post');
    }

    public function mount(ModelsPost $post)
    {
        $this->post = $post;
    }

    // send comment
    public function sendComment()
    {
        $this->validate([
            'comment_content' => 'required',
        ]);

        $this->post->comments()->create([
            'content' => $this->comment_content,
            'author_id' => auth()->user()->id,
        ]);

        $this->comment_content = '';
        $this->post = $this->post->fresh();
    }
}
