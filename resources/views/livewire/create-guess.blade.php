<div class="max-w-screen-lg mx-auto p-4">
    <div class="mb-8 shadow-sm border-gray-200 rounded-lg p-4 bg-amber-300/50">
        <p><strong>NOTE : </strong> Untuk Penulisan "DAN". gunakan tulisan <strong>"dan"</strong> hindari penggunaan
            simbol
            <strong>"&"</strong>.
        </p>
        <p><strong>Contoh Penulisan : </strong><strong>"angga dan laras"</strong> hindari penulisan <strong>"angga &
                laras"</strong>.
        </p>
    </div>
    <div class="w-full">
        @session('success')
            <div class="p-4 bg-green-500/50 rounded-lg mb-2">
                <p>{{ $value }}</p>
            </div>
        @endsession
        <label for="guessInput">Tambah Tamu</label>
        <form wire:submit="add" class="w-full flex gap-2">
            @csrf
            <input id="guessInput" name="guessInput" type="text" wire:model='name' placeholder="Add New Guess"
                class="w-full mt-2 rounded-lg border border-gray-400 p-2 focus:outline-amber-400">
            <button type="submit" id="guessAdd"
                class="cursor-pointer bg-angga-laras-button-active px-6 py-2 mt-2 rounded-lg text-black border-angga-laras-amber border hover:bg-angga-laras-button-hover font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </form>
        @error('name')
            <em class="block text-red-600 text-sm mt-2 italic">{{ $message }}</em>
        @enderror
        <div class="mt-5">
            <label for="searchGuess">Cari Tamu</label>
        </div>
        <form wire:submit="search" class="w-full gap-2 flex" autocomplete="off">
            <input id="searchGuess" name="searchGuess" type="text" wire:model='query'
                class="w-full mt-2 rounded-lg border border-gray-400 p-2 focus:outline-amber-400"
                placeholder="Search Guess">
            <button type="submit" id="guessAdd"
                class="cursor-pointer bg-angga-laras-button-active px-6 py-2 mt-2 rounded-lg text-black border-angga-laras-amber border hover:bg-angga-laras-button-hover font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

            </button>
        </form>
        <p class="my-2">Jumlah Total Tamu : {{ $count }} Tamu</p>
        <div class="overflow-x-scroll touch-auto">
            <table id="guessTableBody" class="w-full border min-w-md border-gray-400 border-collapse">
                <thead>
                    <tr>
                        <th class="p-4 border border-gray-400">Guess List Name</th>
                        <th class="p-4 border border-gray-400">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guess as $gues)
                        <tr wire:key="{{ $gues->id }}" class='border border-gray-400'>
                            <td class="p-4 border border-gray-400">{{ $gues->name }}
                            </td>
                            <td class="p-4 text-center flex flex-row justify-center gap-2">
                                <a id="linkId" href="{{ url("/angga-laras/{$gues->slug}") }}" target="_blank"
                                    class="bg-amber-300 text-sm text-black px-4 py-2 rounded-md hover:bg-amber-400 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                                <form wire:submit="destroy({{ $gues->id }})"
                                    wire:confirm="Anda yakin ingin menghapus Tamu ini?">
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-500 text-sm text-white px-4 py-2 rounded-md hover:bg-red-700 font-semibold cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                                <a data-action="share/whatsapp/share"
                                    href="https://api.whatsapp.com/send?text=Assalamualaikum Warahmatullahi Wabarakatuh.%0a%0aTanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i *{{ $gues->name }}* untuk menghadiri acara kami %0a%0aBerikut link undangan kami, untuk info lengkap dari acara bisa kunjungi:%0a {{ url("/angga-laras/{$gues->slug}") }}%0a%0aMerupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.%0a%0aMohon maaf perihal undangan hanya di bagikan melalui pesan ini.%0a%0aTerima kasih banyak atas perhatiannya.%0a%0aWassalamualaikum Warahmatullahi Wabarakatuh."
                                    class="bg-green-500 px-4 py-2 text-sm rounded-md hover:bg-green-600 text-white font-semibold">
                                    <img src="{{ url('images/assets/WhatsApp_icon.png') }}" alt="whatsapp"
                                        class="size-6 object-fill object-center">
                                </a>
                                <button type="button" data-copy-button data-copy-target="linkId"
                                    class="bg-gray-500 text-sm text-white px-4 py-2 rounded-md hover:bg-gray-700 font-semibold cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mb-5">
            {{ $guess->links('custom-paginate') }}
        </div>
    </div>
</div>
