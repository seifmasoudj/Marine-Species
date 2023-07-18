<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\MarineSpecies;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddSpeciesComponent extends Component
{
    use WithFileUploads;
    
    public $regularName;
    public $ScientificName;
    public $Description;
    public $details;
    public $images;   
    public $status;
    public $kingdome;
    public $phylum;
    public $class;  
    public $orders;
    public $family;
    public $genus;  
    public $species; 

    public function mount()
    {
        $this->status = 'health';
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
        'regularName' => 'required',
        'ScientificName' => 'required',
        'Description' => 'required', 
        'details' => 'required', 
        'kingdome' => 'required',
        'phylum' => 'required',   
        'class' => 'required',     
        'orders' => 'required',
        'family' => 'required',
        'genus' => 'required',
        'species' => 'required',      
        'status' => 'required',
        'images' => 'required'
        ]);
    }

    public function AddSpecies()
    {
        $this->validate([
            'regularName' => 'required',
            'ScientificName' => 'required',
            'Description' => 'required',
            'details' => 'required', 
            'kingdome' => 'required',
            'phylum' => 'required',   
            'class' => 'required',    
            'orders' => 'required',
            'family' => 'required',
            'genus' => 'required',
            'species' => 'required',
            'status' => 'required',       
            'images' => 'required'
        ]);

        $specie = new MarineSpecies();
        $specie->regularName = $this->regularName;
        $specie->ScientificName = $this->ScientificName;
        $specie->Description = $this->Description;
        $specie->details = $this->details;
        $specie->kingdome = $this->kingdome;
        $specie->phylum = $this->phylum;
        $specie->class = $this->class; 
        $specie->orders = $this->orders;
        $specie->family = $this->family;
        $specie->genus = $this->genus;     
        $specie->species = $this->species;  
        $specie->status = $this->status;        
        $imageName = Carbon::now()->timestamp. '.' .$this->images->extension();
        $this->images->storeAs('species',$imageName);
        $specie->images =  $imageName;
        $specie->save();

        session()->flash('message','Species has been created successful!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-species-component')->layout('layouts.base');
    }
}
