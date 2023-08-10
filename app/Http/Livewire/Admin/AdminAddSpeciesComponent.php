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
    public $category; 

    public function mount()
    {
        $this->status = 'Available';
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
        'regularName' => 'required|unique:marinespecies',
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
        'images' => 'required|mimes:jpg,jpeg,bmp,png',
        'category' => 'required',
        ]);
    }

    public function AddSpecies()
    {
        $this->validate([
            'regularName' => 'required|unique:marinespecies',
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
            'images' => 'required|mimes:jpg,jpeg,bmp,png',
            'category' => 'required',
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
        $specie->category = $this->category;  
        $imageName = Carbon::now()->timestamp. '.' .$this->images->extension();
        $this->images->storeAs('NewSpecies',$imageName);
        $specie->images =  $imageName;
        $specie->save();

        session()->flash('message','Species has been created successful!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-species-component')->layout('layouts.base');
    }
}
