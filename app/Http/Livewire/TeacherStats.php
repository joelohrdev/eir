<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Student;
use Livewire\Component;
use Auth;

class TeacherStats extends Component
{
    public $studentCount;
    public $writingCount;
    public $noteCount;

    protected $listeners = [
        'refreshComponent' => 'mount'
    ];

    public function mount()
    {
        $this->studentCount = Student::where('user_id', '=', Auth::user()->id)->count();
        $this->writingCount = Student::where('user_id', '=', Auth::user()->id)->where('first_writing', '<>', '')->count();
        $this->noteCount = Note::where('user_id', '=', Auth::user()->id)->count();
    }

    public function render()
    {
        return view('livewire.teacher-stats');
    }
}
