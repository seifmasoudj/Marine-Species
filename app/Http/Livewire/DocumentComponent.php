<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DocumentComponent extends Component
{
    public function render()
    {
        return view('livewire.document-component')->layout('layouts.base');
    }
}
