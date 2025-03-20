<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guess;
use Illuminate\Support\Str;
use Livewire\Attributes\Session;

class CreateGuess extends Component
{
    #[Session(key: 'name')]
    public $name;
    public $slug;
    public $guess = [];

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
        $this->guess = Guess::all()->sortByDesc('id');
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
        $this->reset();
        $this->redirectIntended('/guess');
    }

    public function destroy($id)
    {
        Guess::destroy($id);
        $this->redirectIntended('/guess');
    }

    public function render()
    {
        return view('livewire.create-guess');
    }
}
