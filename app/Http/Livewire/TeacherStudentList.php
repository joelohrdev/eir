<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Auth;
use Livewire\WithPagination;

class TeacherStudentList extends Component
{
    use WithPagination;

    public $student;

    protected $listeners = ['firstWritingAdded'];

    public function mount(Student $student)
    {
        $this->student = $student;
    }

    public function firstWritingAdded()
    {
        $this->student->refesh();
    }

    public function render()
    {
        return view('livewire.teacher-student-list', [
            'students' => Student::where('teacher_code', '=', Auth::user()->code)->paginate(10)
        ]);
    }
}
