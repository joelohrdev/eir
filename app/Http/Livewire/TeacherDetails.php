<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\TeacherInfo;

class TeacherDetails extends Component
{
    public $email;

    public function mount()
    {
        $this->email = Auth::user()->email;
    }

    public function render()
    {
        return view('livewire.teacher-details', [
            'details' => TeacherInfo::where('email', '=', $this->email)->get()
        ]);
    }
}
