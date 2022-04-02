<?php

namespace App\Http\Livewire;

use App\Models\SampleOne;
use App\Models\SampleTwo;
use App\Models\Student;
use Livewire\Component;

class SingleStudent extends Component
{
    public $student;
    public $wordCountOne;
    public $wordCountTwo;
    public $wordCount;
    public $sampleOne;
    public $sampleTwo;

    public function mount(Student $student)
    {
        $this->student = $student;

        $this->wordCountOne = str_word_count(strip_tags(SampleOne::where('student_id', $student->id)->pluck('body')));
        $this->wordCountTwo = str_word_count(strip_tags(SampleTwo::where('student_id', $student->id)->pluck('body')));
        $this->wordCount = $this->wordCountOne + $this->wordCountTwo;

        $this->sampleOne = SampleOne::where('student_id', $student->id)->first();
        $this->sampleTwo = SampleTwo::where('student_id', $student->id)->first();
    }

    public function render()
    {
        return view('livewire.single-student');
    }
}
