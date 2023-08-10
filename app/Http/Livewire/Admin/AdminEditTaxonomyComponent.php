<?php

namespace App\Http\Livewire\Admin;

use App\Models\Taxonomy;
use Livewire\Component;

class AdminEditTaxonomyComponent extends Component
{
    public $kingdome;
    public $phylum; 
    public $class;
    public $order; 
    public $family;
    public $genus; 
    public $species; 
    public $taxonomy_id;

    public function mount($taxonomy_id)
    {
        $notifications = Taxonomy::find($taxonomy_id);
        $this->kingdome = $notifications->kingdome;
        $this->phylum = $notifications->phylum;
        $this->class = $notifications->class;
        $this->order = $notifications->order;
        $this->family = $notifications->family;
        $this->genus = $notifications->genus;
        $this->species = $notifications->species;
    }

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

    public function EditTaxonomy()
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

        $taxonomy = Taxonomy::find($this->taxonomy_id);
        $taxonomy->kingdome = $this->kingdome;
        $taxonomy->phylum = $this->phylum;  
        $taxonomy->class = $this->class;
        $taxonomy->order = $this->order;   
        $taxonomy->family = $this->family;
        $taxonomy->genus = $this->genus;  
        $taxonomy->species = $this->species;  
        $taxonomy->save();
        session()->flash('message','Taxonomy has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-taxonomy-component')->layout('layouts.base');
    }
}
