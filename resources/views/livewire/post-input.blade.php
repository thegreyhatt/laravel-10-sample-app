<div class="w-full h-24 p-2 mb-3 bg-gray-200 border rounded-lg">
    <form wire:submit.prevent="submit()">
        <div class="flex gap-3 mb-2">
            <div class="flex items-center justify-center w-10 h-10 bg-gray-300 border border-gray-300 rounded-full">
                <span class="text-xl">{{ Str::substr(auth()->user()->name, 0, 1) }}</span>
            </div>
            <div class="flex-initial w-full h-10 bg-red-300 rounded-full">
                <input wire:model="content" type="text" class="w-full h-10 px-3 rounded-full">
            </div>
        </div>
        <div class="flex justify-end gap-2">
            <button wire:click="submit()" class="w-20 h-8 text-white bg-blue-500 rounded-full">Post</button>
        </div>
    </form>
</div>