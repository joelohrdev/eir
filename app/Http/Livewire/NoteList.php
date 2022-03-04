<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteList extends Component
{
    public function render()
    {
        return view('livewire.note-list', [
            'notes' => Note::where('user_id', \Auth::user()->id)->get()
        ]);
    }
}
