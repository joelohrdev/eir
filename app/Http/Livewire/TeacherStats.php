<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class TeacherStats extends Component
{
    public $completionPercentage;
    public $studentCount;
    public $writingCount;
    public $noteCount;

    public function mount()
    {
        $this->studentCount = Student::where('user_id', '=', \Auth::user()->id)->count();
    }

    public function render()
    {
        return view('livewire.teacher-stats');
    }
}
