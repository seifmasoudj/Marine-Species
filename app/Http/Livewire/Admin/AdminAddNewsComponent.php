<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddNewsComponent extends Component
{
    use WithFileUploads;
    
    public $title;
    public $Descriptions;
    public $status; 
   
    public function mount()
    {
        $this->status = 'active';
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
        'title' => 'required',
        'Descriptions' => 'required',       
        'status' => 'required',
        ]);
    }

    public function AddNews()
    {
        $this->validate([
            'title' => 'required',
            'Descriptions' => 'required',      
            'status' => 'required',
        ]);

        $new = new News();
        $new->title = $this->title;
        $new->Descriptions = $this->Descriptions;
        $new->status = $this->status;   
        $new->save();

        session()->flash('message','News has been created successful!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-news-component')->layout('layouts.base');
    }
}
