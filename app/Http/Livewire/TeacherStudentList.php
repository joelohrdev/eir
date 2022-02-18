<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Auth;

class TeacherStudentList extends Component
{
    public function render()
    {
        return view('livewire.teacher-student-list', [
            'students' => Student::where('user_id', '=', Auth::user()->id)->get()
        ]);
    }
}
