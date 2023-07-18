<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MarineSpecies;
use PDF;

class AdminSpeciesComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    
    public function deleteSpecies($id)
    {
        $specie = MarineSpecies::find($id);
        $specie->delete();
        session()->flash('message','Species has been deleted successfully!');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $species = MarineSpecies::orderBy('created_at','DESC')->where('regularName','LIKE',$search)
                ->orwhere('ScientificName','LIKE',$search)
                ->orwhere('status','LIKE',$search)
                ->orwhere('kingdome','LIKE',$search)
                ->orwhere('phylum','LIKE',$search)
                ->orwhere('class','LIKE',$search)
                ->orwhere('orders','LIKE',$search)
                ->orwhere('family','LIKE',$search)
                ->orwhere('genus','LIKE',$search)
                ->orwhere('species','LIKE',$search)
                ->orwhere('id','DESC')->paginate(10);
        return view('livewire.admin.admin-species-component',['species'=>$species])->layout('layouts.base');
    }
}
