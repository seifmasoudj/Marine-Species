<?php

namespace App\Http\Livewire\Admin;

use App\Models\Taxonomy;
use Livewire\Component;

class AdminAddTaxonomyComponent extends Component
{
    public $kingdome;
    public $phylum; 
    public $class;
    public $order; 
    public $family;
    public $genus; 
    public $species;
   
    public function updated($fields)
    {
        $this->validateOnly($fields,[
        'kingdome' => 'required',      
        'phylum' => 'required',
        'class' => 'required',      
        'order' => 'required',
        'family' => 'required',      
        'genus' => 'required',
        'species' => 'required'    
        ]);
    }

    public function AddTaxonomy()
    {
        $this->validate([
            'kingdome' => 'required',      
            'phylum' => 'required',
            'class' => 'required',      
            'order' => 'required',
            'family' => 'required',      
            'genus' => 'required',
            'species' => 'required'   
        ]);

        $taxonomy = new Taxonomy();
        $taxonomy->kingdome = $this->kingdome;
        $taxonomy->phylum = $this->phylum;  
        $taxonomy->class = $this->class;
        $taxonomy->order = $this->order;   
        $taxonomy->family = $this->family;
        $taxonomy->genus = $this->genus;  
        $taxonomy->species = $this->species;  
        $taxonomy->save();

        session()->flash('message','Notification has been created successful!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-taxonomy-component')->layout('layouts.base');
    }
}
