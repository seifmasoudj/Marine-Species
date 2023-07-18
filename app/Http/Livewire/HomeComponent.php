<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MarineSpecies;

class HomeComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $news = News::orderBy('created_at','DESC')->get()->take(10);
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
        ->orwhere('id','DESC')->paginate(4);     
        return view('livewire.home-component',['species'=>$species,'news'=>$news])->layout('layouts.base');
    }
}
