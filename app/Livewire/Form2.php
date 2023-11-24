<?php

namespace App\Livewire;

use App\Resources\Form as FormResource;
use Livewire\Component;

class Form2 extends Component
{
    public FormResource $form;

    public function mount()
    {
        $this->form = new FormResource();
    }
}
