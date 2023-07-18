<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MarineSpecies;

class SpeciesComponent extends Component
{
    use WithPagination;
    
    public function render()
    {
        $species = MarineSpecies::paginate(6);
        return view('livewire.species-component',['species'=>$species])->layout('layouts.base');
    }
}
