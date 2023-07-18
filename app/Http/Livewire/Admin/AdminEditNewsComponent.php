<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditNewsComponent extends Component
{
    use WithFileUploads; 

    public $title;
    public $Description;
    public $status;  
    public $news_id;

    public function mount($news_id)
    {
        $new = News::find($news_id);
        $this->title = $new->title;
        $this->Description = $new->Description;
        $this->status = $new->status;
        $this->news_id = $new->news_id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'Description' => 'required',       
            'status' => 'required'
        ]);
    }

    public function updatedSpecies()
    {
        $this->validate([
            'title' => 'required',
            'Description' => 'required',       
            'status' => 'required'
        ]);

        $new = News::find($this->news_id);
        $new->title = $this->title;
        $new->Description = $this->Description;
        $new->status = $this->status;
        $new->save();
        session()->flash('message','News has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-news-component')->layout('layouts.base');
    }
}
