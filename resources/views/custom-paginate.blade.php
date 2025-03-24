<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between py-4">
            <span>
                @if ($paginator->onFirstPage())
                    <span class="bg-amber-400 text-black/50 px-4 py-2 rounded-md ">Previous</span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
                        class="cursor-pointer bg-amber-300 text-black px-4 py-2 rounded-md">Previous</button>
                @endif
            </span>

            <span>
                @if ($paginator->onLastPage())
                    <span class="bg-amber-400 text-black/50 px-4 py-2 rounded-md ">Next</span>
                @else
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                        class="cursor-pointer bg-amber-300 text-black px-4 py-2 rounded-md">Next</button>
                @endif
            </span>
        </nav>
    @endif
</div>
