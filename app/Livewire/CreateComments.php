<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Livewire\Attributes\Rule;
use Illuminate\Support\Carbon;

class CreateComments extends Component
{
    public $comments = [];
    #[Rule('required', message: 'Nama Harus di Isi!')]
    public $name;
    #[Rule('required', message: 'Pilih Kehadiran')]
    public $attendance = '';
    #[Rule('required', message: 'Ucapan Harus di Isi')]
    public $message;

    public function mount()
    {
        $this->comments = Comment::all()->sortByDesc('id');
        $this->attendance;
    }

    public function dateSQL($date)
    {
        return Carbon::createFromFormat('d-M-Y', $date, 'Asia/Jakarta')->format('Y-m-d');
    }

    public function add()
    {
        $this->validate();

        $newComment = [
            'name' => $this->name,
            'attendance' => $this->attendance,
            'message' => $this->message
        ];

        Comment::create($newComment);
        $this->reset('name', 'attendance', 'message');
        $this->redirectIntended();
    }

    public function render()
    {
        return view('livewire.create-comments');
    }
}
