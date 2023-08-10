<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\MarineSpecies;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditSpeciesComponent extends Component
{
    use WithFileUploads; 

    public $regularName;
    public $ScientificName;
    public $Description; 
    public $details; 
    public $status;
    public $images;
    public $newimage;
    public $kingdome;
    public $phylum;
    public $class; 
    public $orders;
    public $family;
    public $genus;
    public $category; 
    public $species;
    public $specie_id;

    public function mount($specie_id)
    {
        $species = MarineSpecies::find($specie_id);
        $this->regularName = $species->regularName;
        $this->ScientificName = $species->ScientificName;
        $this->Description = $species->Description;
        $this->details = $species->details;
        $this->status = $species->status;
        $this->images = $species->image;
        $this->newimage = $species->newimage;
        $this->kingdome = $species->kingdome;
        $this->phylum = $species->phylum;
        $this->class = $species->class;
        $this->orders = $species->orders;
        $this->family = $species->family;
        $this->genus = $species->genus;
        $this->species = $species->species;
        $this->category = $species->category;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'regularName' => 'required',
            'ScientificName' => 'required',
            'Description' => 'required',
            'details' => 'required',
            'status' => 'required',
            'kingdome' => 'required',
            'phylum' => 'required',
            'class' => 'required',
            'orders' => 'required',
            'family' => 'required',
            'genus' => 'required',
            'species' => 'required',
            'category' => 'required'
        ]);
    }

    public function UpdateSpecies()
    {
        $this->validate([
            'regularName' => 'required',
            'ScientificName' => 'required',
            'Description' => 'required',
            'details' => 'required',
            'status' => 'required',
            'kingdome' => 'required',
            'phylum' => 'required',
            'class' => 'required',
            'orders' => 'required',
            'family' => 'required',
            'genus' => 'required',
            'species' => 'required',
            'category' => 'required'
        ]);

        $species = MarineSpecies::find($this->specie_id);
        $species->regularName = $this->regularName;
        $species->ScientificName = $this->ScientificName;
        $species->Description = $this->Description;
        $species->details = $this->details;
        $species->status = $this->status;
        $species->kingdome = $this->kingdome;
        $species->phylum = $this->phylum;
        $species->class = $this->class;
        $species->orders = $this->orders;
        $species->family = $this->family;
        $species->genus = $this->genus;
        $species->species = $this->species;
        $species->category = $this->category;  
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('NewSpecies',$imageName);
            $species->images =  $imageName;
        }
        $species->save();
        session()->flash('message','Species has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-species-component')->layout('layouts.base');
    }
}
