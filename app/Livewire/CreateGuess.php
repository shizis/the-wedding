<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guess;
use Illuminate\Support\Str;
use Livewire\Attributes\Session;
use Livewire\WithPagination;

class CreateGuess extends Component
{
    use WithPagination;

    #[Session(key: 'name')]
    public $name;
    public $slug;
    public $query = '';
    public $count;
    // public $guess = [];

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:2',
                'unique:guesses,name'
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Masukkan Nama Tamu!',
            'name.min' => 'Nama Terlalu Pendek!',
            'name.unique' => 'Nama Sudah Terdaftar!'
        ];
    }

    public function mount()
    {
        $this->count = Guess::select('name')->count();
    }

    public function search()
    {
        $this->resetPage();
    }

    public function add()
    {
        $this->validate();
        $newGuess = [
            'name' => $this->name,
            'slug' => Str::of($this->name)->slug('-')
        ];
        // $same = Guess::where('name', '=', $newGuess['name'])->first();
        Guess::create($newGuess);
        $this->reset('name');
        return back()->with('success', 'Nama Tamu berhasil ditambahkan');
    }

    public function destroy($id)
    {
        Guess::destroy($id);
        $this->redirectIntended('/guess');
    }

    public function render()
    {
        return view('livewire.create-guess', [
            'guess' => Guess::where('name', 'like', '%' . $this->query . '%')->orderByDesc('id')->paginate(15)
        ]);
    }

    public function paginationView()
    {
        return 'custom-paginate';
    }
}
