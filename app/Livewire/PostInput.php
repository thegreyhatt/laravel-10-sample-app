<?php

namespace App\Livewire;

use Livewire\Component;

class PostInput extends Component
{
    public $content;

    public function render()
    {
        return view('livewire.post-input');
    }

    public function submit()
    {
        $this->validate([
            'content' => 'required|min:3',
        ]);

        auth()->user()->posts()->create([
            'content' => $this->content,
        ]);

        // $new_post = new Post();
        // $new_post->content = $this->content;
        // $new_post->author_id = auth()->user()->id;
        // $new_post->save();

        $this->content = '';

        $this->dispatch('post-added');
    }
}
