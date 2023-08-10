<?php

namespace App\Http\Livewire\Admin;

use App\Models\Taxonomy;
use Livewire\Component;

class AdminTaxonomyComponent extends Component
{
    public $searchTerm;

    public function deleteTaxonomies($id)
    {
        $taxonomy = Taxonomy::find($id);
        $taxonomy->delete();
        session()->flash('message','Taxonomy has been deleted successfully!');
    }
    
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $taxonomies = Taxonomy::orderBy('created_at','DESC')->where('kingdome','LIKE',$search)
        ->orwhere('phylum','LIKE',$search)
        ->orwhere('class','LIKE',$search)
        ->orwhere('order','LIKE',$search)
        ->orwhere('family','LIKE',$search)
        ->orwhere('genus','LIKE',$search)
        ->orwhere('species','LIKE',$search)
        ->orwhere('id','DESC')->paginate(5);
        return view('livewire.admin.admin-taxonomy-component',['taxonomies'=>$taxonomies])->layout('layouts.base');
    }
}
