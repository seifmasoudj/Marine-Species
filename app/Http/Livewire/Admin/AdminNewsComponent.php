<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class AdminNewsComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    
    public function deleteNews($id)
    {
        $new = News::find($id);
        $new->delete();
        session()->flash('message','News has been deleted successfully!');
    }
    
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $news = News::orderBy('created_at','DESC')->where('title','LIKE',$search)
        ->orwhere('status','LIKE',$search)
        ->orwhere('id','DESC')->paginate(5);
        return view('livewire.admin.admin-news-component',['news'=>$news])->layout('layouts.base');
    }
}