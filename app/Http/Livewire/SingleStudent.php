<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class SingleStudent extends Component
{
    public $student;

    protected $listeners = ['firstWritingAdded'];

    public function mount(Student $student)
    {
        $this->student = $student;
    }

    public function firstWritingAdded()
    {
        $this->student->refresh();
    }

    public function render()
    {
        return view('livewire.single-student');
    }
}
