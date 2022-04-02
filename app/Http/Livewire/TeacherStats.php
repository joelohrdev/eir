<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\SampleOne;
use App\Models\SampleTwo;
use App\Models\Student;
use Livewire\Component;
use Auth;

class TeacherStats extends Component
{
    public $studentCount;
    public $writingCount;
    public $writingOneCount;
    public $writingTwoCount;
    public $noteCount;

    protected $listeners = [
        'refreshComponent' => 'mount'
    ];

    public function mount()
    {
        $this->studentCount = Student::where('teacher_code', '=', Auth::user()->code)->count();

        $this->writingOneCount = SampleOne::where('user_id', Auth::user()->id)->count();
        $this->writingTwoCount = SampleTwo::where('user_id', Auth::user()->id)->count();
        $this->writingCount = $this->writingOneCount + $this->writingTwoCount;

        $this->noteCount = Note::where('user_id', '=', Auth::user()->id)->count();
    }

    public function render()
    {
        return view('livewire.teacher-stats');
    }
}
