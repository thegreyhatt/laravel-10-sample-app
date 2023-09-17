<div class="mt-3">
    @foreach ($posts as $post)
       @livewire('post', ['post' => $post], key($post->id))
    @endforeach
</div>
