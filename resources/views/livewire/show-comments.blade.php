<div x-show="open" x-cloak
    class="w-full flex flex-col gap-2 overflow-y-auto overflow-x-hidden max-w-md h-full p-4 max-h-150 bg-gray-100/10 border border-gray-200 shadow-sm inset-shadow-sm rounded-lg backdrop-blur-sm">
    @foreach ($comments as $comment)
        <div wire:key='{{ $comment->id }}'
            class="p-3 w-full h-max rounded-md backdrop-blur-xs shadow-sm inset-shadow-sm border border-rose-200">
            <div>
                <h3 class="font-bold text-base">{{ $comment->name }}</h3>
                <p class="text-xs text-gray-600 mt-1">11 april 2025</p>
                <p class="text-sm mt-2">{{ $comment->message }}</p>
            </div>
        </div>
    @endforeach
</div>
