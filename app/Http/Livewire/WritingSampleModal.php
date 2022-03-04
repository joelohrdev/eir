<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class WritingSampleModal extends ModalComponent
{
    public $student;
    public $first_writing;
    public $value;
    public $trixId;

    protected $rules = [
        'first_writing' => 'required'
    ];

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function mount(Student $student, $value = '')
    {
        $this->value = $value;
        $this->trixId = 'trix-' . uniqid();

        $this->student = $student;
    }

    public function updatedValue($value)
    {
        $this->first_writing = $value;
    }

    public function addFirstWriting()
    {
        $this->validate();

        $this->student->first_writing = $this->first_writing;
        $this->student->save();

        $this->emitTo('single-student', 'firstWritingAdded', 'Writing Sample Added!');
    }

    public function render()
    {
        return view('livewire.writing-sample-modal');
    }
}
