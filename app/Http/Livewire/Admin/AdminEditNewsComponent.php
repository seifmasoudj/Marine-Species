<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;

class AdminEditNewsComponent extends Component
{
    public $title;
    public $Descriptions;
    public $status;  
    public $new_id;

    public function mount($new_id)
    {
        $news = News::find($new_id);
        $this->title = $news->title;
        $this->Descriptions = $news->Descriptions;
        $this->status = $news->status;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required|max:255|min:8|unique:news',
            'Descriptions' => 'required|min:8',        
            'status' => 'required'
        ]);
    }

    public function updateNews()
    {
        $this->validate([
            'title' => 'required|max:255|min:8|unique:news',
            'Descriptions' => 'required|min:8',         
            'status' => 'required'
        ]);

        $news = News::find($this->new_id);
        $news->title = $this->title;
        $news->Descriptions = $this->Descriptions;
        $news->status = $this->status;
        $news->save();
        session()->flash('message','News has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-news-component')->layout('layouts.base');
    }
}
