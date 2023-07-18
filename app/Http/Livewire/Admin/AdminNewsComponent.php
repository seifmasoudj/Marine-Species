<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class AdminNewsComponent extends Component
{
    use WithPagination;
    
    public function deleteNews($id)
    {
        $new = News::find($id);
        $new->delete();
        session()->flash('message','News has been deleted successfully!');
    }
    
    public function render()
    {
        $news = News::orderBy('created_at','DESC')->get()->take(10);
        return view('livewire.admin.admin-news-component',['news'=>$news])->layout('layouts.base');
    }
}
