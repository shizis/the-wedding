<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class ShowComments extends Component
{

    public function mount(Comment $comment) {}
    public function render()
    {
        return view('livewire.show-comments', [
            'comments' => Comment::all()
        ]);
    }
}
