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
    public $status;
    public $images;
    public $species_id;

    public function mount($species_id)
    {
        $specie = MarineSpecies::find($species_id);
        $this->regularName = $specie->name;
        $this->ScientificName = $specie->ScientificName;
        $this->Description = $specie->Description;
        $this->status = $specie->status;
        $this->images = $specie->image;
        $this->species_id = $specie->species_id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'regularName' => 'required',
            'ScientificName' => 'required',
            'Description' => 'required',
            'status' => 'required',
            'images' => 'required|mimes:jpeg,png',
        ]);
    }

    public function updatedNews()
    {
        $this->validate([
            'regularName' => 'required',
            'ScientificName' => 'required',
            'Description' => 'required',
            'status' => 'required',
            'images' => 'required|mimes:jpeg,png',
        ]);

        $specie = MarineSpecies::find($this->species_id);
        $specie->regularName = $this->regularName;
        $specie->ScientificName = $this->ScientificName;
        $specie->Description = $this->Description;
        $specie->status = $this->status;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('species',$imageName);
            $specie->images =  $imageName;
        }
        $specie->save();
        session()->flash('message','Species has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-species-component')->layout('layouts.base');
    }
}
