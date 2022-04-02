<?php

namespace App\Http\Livewire;

use App\Models\SampleTwo;
use App\Models\Student;
use Livewire\Component;

class WritingSampleTwo extends Component
{
    public $sampleOne;
    public $student;
    public $studentId;
    public $body;

    public function mount(Student $student)
    {
        $this->studentId = $student->id;
    }

    protected $rules = [
        'body' => 'required'
    ];

    public function save()
    {
        $this->validate();

        $sample = SampleTwo::create([
            'user_id' => auth()->id(),
            'student_id' => $this->studentId,
            'body' => $this->body,
        ]);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.writing-sample-two');
    }
}
