<div class="max-w-screen-lg mx-auto p-4">
    <div class="mt-10 w-full">
        <form wire:submit="add" class="w-full">
            @csrf
            <label for="guessInput" class="block">Tambah Tamu</label>
            <input id="guessInput" name="guessInput" type="text" wire:model='name'
                class="w-full mt-2 rounded-lg border border-gray-400 p-2 focus:outline-amber-400">
            @error('name')
                <em class="block text-red-600 text-sm mt-2 italic">{{ $message }}</em>
            @enderror
            <button type="submit" id="guessAdd"
                class="cursor-pointer bg-angga-laras-button-active px-6 py-2 mt-2 rounded-lg text-black border-angga-laras-amber border hover:bg-angga-laras-button-hover font-semibold">Tambah</button>
        </form>
        <table id="guessTableBody" class="w-full border-collapse border border-gray-400 mt-6">
            <thead>
                <tr>
                    <th class="p-4 border border-gray-400">Guess List Name</th>
                    <th class="p-4 border border-gray-400">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guess as $gues)
                    <tr wire:key="{{ $gues->id }}">
                        <td class="p-4 border border-gray-400">{{ $gues->name }}</td>
                        <td class="p-4 border border-gray-400 text-center flex flex-row justify-center gap-4">
                            <a id="linkId" href="{{ url("/angga-laras/{$gues->slug}") }}"
                                class="bg-blue-500 text-sm text-white px-4 py-2 rounded-md hover:bg-blue-700 font-semibold">View</a>
                            <form wire:submit="destroy({{ $gues->id }})"
                                wire:confirm="Anda yakin ingin menghapus Tamu ini?">
                                @csrf
                                <button type="submit"
                                    class="bg-red-500 text-sm text-white px-4 py-2 rounded-md hover:bg-red-700 font-semibold cursor-pointer">Delete</button>
                            </form>
                            <button type="button" data-copy-button data-copy-target="linkId"
                                class="bg-green-500 text-sm text-white px-4 py-2 rounded-md hover:bg-green-700 font-semibold cursor-pointer">Copy
                                Link</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
