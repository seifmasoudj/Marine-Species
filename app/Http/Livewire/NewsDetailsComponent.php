<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsDetailsComponent extends Component
{
    public $title;

    public function mount($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        $new = News::where('title',$this->title)->first();  
        return view('livewire.news-details-component',['new'=>$new])->layout('layouts.base');
    }
}
