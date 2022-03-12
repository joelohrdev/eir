<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput;
use Livewire\Component;
use Filament\Forms\Components\RichEditor;

class CreateWritingSample extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public Student $student;
    public $content;

    public function mount() : void
    {
        $this->form->fill([
            'content' => $this->student->content
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            CheckboxList::make('Teachers', 'teachers')
                ->options([
                    'tailwind' => 'TailwindCSS',
                    'alpine' => 'Alpine.js',
                    'laravel' => 'Laravel',
                    'livewire' => 'Laravel Livewire',
                ])
                ->columns(2),
            RichEditor::make('Writing Sample', 'content')
                ->disableAllToolbarButtons()
                ->enableToolbarButtons([
                    'bold',
                    'bulletList',
                    'italic',
                ])

        ];
    }

    public function render()
    {
        return view('livewire.create-writing-sample');
    }
}
