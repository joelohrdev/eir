<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class WritingSampleModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.writing-sample-modal');
    }
}
