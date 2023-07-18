<?php

namespace App\Http\Livewire;

use App\Models\MarineSpecies;
use Livewire\Component;

class SpeciesDetailsComponent extends Component
{
    public $regularName;

    public function mount($regularName)
    {
        $this->regularName = $regularName;
    }

    public function render()
    {
        $specie = MarineSpecies::where('regularName',$this->regularName)->first();  
        return view('livewire.species-details-component',['specie'=>$specie])->layout('layouts.base');
    }
}
