<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class SingleStudent extends Component
{
    public $student;
    public $showWritingModel = false;
    public $content = '';

    protected $rules = [
        'content' => 'required'
    ];

    protected $listeners = ['firstWritingAdded'];

    public function mount(Student $student)
    {
        $this->student = $student;
        $this->content = $student->content;
    }

    public function firstWritingAdded()
    {
        $this->student->refresh();
    }

    public function editSampleOne()
    {
        $this->showWritingModel = true;
    }

    public function addSampleOne()
    {
        $this->validate();

        $this->student->update([
            'first_writing' => $this->content
        ]);

    }

    public function render()
    {
        return view('livewire.single-student');
    }
}
