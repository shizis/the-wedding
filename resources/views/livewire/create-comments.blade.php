<div class="grid lg:grid-cols-2 justify-items-center gap-4 mt-4">
    <div class="w-full max-w-md h-max max-h-max" x-show="open" x-cloak>
        <form wire:submit="add"
            class="w-full bg-angga-laras-primary/30 backdrop-blur-xs shadow-sm inset-shadow-sm p-4 rounded-lg border border-gray-200">
            @csrf
            <input type="hidden" name="_method" value="POST">
            <label for="name" class="block text-sm">
                <span class="text-black after:ml-0.5 after:text-red-500 after:content-['*'] ...">Nama</span>
                <input type="text" wire:model='name' id="name"
                    class="w-full p-2 bg-angga-laras-primary text-angga-laras-white border rounded-md border-gray-300 focus:outline-angga-laras-button-active shadow-sm mt-1">
            </label>
            @error('name')
                <em class="block text-red-500 text-sm mt-1 italic">{{ $message }}</em>
            @enderror
            <label for="attendance" class="block text-sm mt-4">
                <span class="text-black after:ml-0.5 after:text-red-500 after:content-['*'] ...">Kehadiran
                </span>
                <select wire:model="attendance" name="attendance" id="attendance"
                    class="appearance-none block w-full p-2 mt-1 rounded-md bg-angga-laras-primary text-angga-laras-white border border-gray-300 focus:outline-angga-laras-button-active shadow-sm">
                    <option value="" disabled selected class="text-gray-300">Kehadiran</option>
                    <option value="attend">Hadir</option>
                    <option value="absent">Tidak Hadir</option>
                </select>
            </label>
            @error('attendance')
                <em class="block text-red-500 text-sm mt-1 italic">{{ $message }}</em>
            @enderror
            <label for="message" class="block text-sm mt-4">
                <span class="text-black after:ml-0.5 after:text-red-500 after:content-['*'] ...">Ucapan
                </span>
                <textarea wire:model='message' id="message"
                    class="block w-full p-2 rounded-md bg-angga-laras-primary text-angga-laras-white border border-gray-300 focus:outline-angga-laras-button-active shadow-sm mt-1"></textarea>
            </label>
            @error('message')
                <em class="block text-red-500 text-sm mt-1 italic">{{ $message }}</em>
            @enderror
            <button type="submit"
                class="bg-angga-laras-button-active font-semibold text-angga-laras-black text-sm mt-4 px-6 py-2 rounded-full w-full text-center cursor-pointer hover:bg-angga-laras-button-hover">Kirim</button>
        </form>
    </div>
    <div x-show="open" x-cloak
        class="w-full flex flex-col gap-2 overflow-y-auto overflow-x-hidden max-w-md h-full p-4 max-h-150 bg-angga-laras-primary/30 border border-gray-200 shadow-sm inset-shadow-sm rounded-lg backdrop-blur-xs">
        @foreach ($comments as $comment)
            <div wire:key='{{ $comment->id }}'
                class="p-3 w-full h-max rounded-md bg-angga-laras-primary text-angga-laras-white shadow-sm inset-shadow-sm border border-amber-200">
                <div>
                    <h3 class="text-sm font-bold md:text-base">{{ $comment->name }}&nbsp;
                        @if ($comment->attendance == 'attend')
                            <span
                                class="text-xs font-normal bg-angga-laras-amber text-angga-laras-black rounded-md px-2 py-1">Hadir</span>
                        @elseif($comment->attendance == 'absent')
                            <span
                                class="text-xs font-normal bg-angga-laras-amber text-angga-laras-black rounded-md px-2 py-1">Tidak
                                Hadir</span>
                        @endif
                    </h3>
                    {{-- <p class="text-xs text-amber-300 mt-1" wire:text="dateSQL({{ $comment->created_at }})"></p> --}}
                    <p class="text-sm mt-2">{{ $comment->message }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
