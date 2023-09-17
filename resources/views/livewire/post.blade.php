<div x-data="{ openComments: false }" class="w-full p-2 mb-2 bg-gray-100 border rounded-lg">
    <span class="font-extrabold">{{ $post->author->name }}</span>
    <br>
    <div class="mb-2">
        {{ $post->content }}
        <br>
        <span class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
    </div>
    <hr>
    <button @click="openComments = !openComments" class="text-blue-600">Comments {{ ($post->comments->count())? "(".$post->comments->count().")" : '' }}</button>
    <div x-show="openComments">
        @foreach ($post->comments as $comment)
            <div class="flex gap-2 mb-2">
                <div class="flex items-center justify-center bg-gray-200 rounded-full h-7 w-7">
                    <span class="text-xl">{{ Str::substr($comment->author->name, 0, 1) }}</span>
                </div>
                <div class="w-full p-2 bg-gray-200 rounded-lg">
                    {{ $comment->content }}
                </div>
            </div>
        @endforeach
        <div class="flex gap-2">
            <div class="flex items-center justify-center flex-none bg-gray-200 rounded-full h-7 w-7">
                <span class="text-xl">{{ Str::substr(auth()->user()->name, 0, 1) }}</span>
            </div>
            <input wire:model="comment_content" type="text" class="w-full h-8 px-2 border rounded-full">
            <button wire:click="sendComment()" class="px-4 text-white bg-blue-500 rounded-full">Send</button>
        </div>
    </div>
</div>