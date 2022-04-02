<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\User;
use Livewire\Component;

class CreateWritingSample extends Component
{

    public Student $student;
    public $content;
    public $teachers;
    public $school_code;
    public $body;
    public $selectedTeachers;

    public function mount()
    {
        $this->school_code = \Auth::user()->pluck('school_code')->first();
        $this->teachers = User::where('school_code', $this->school_code)->get();
    }

    public function save()
    {
//        dd($this->selectedTeachers, $this->body);

    }


    public function render()
    {
        return view('livewire.create-writing-sample');
    }
}
