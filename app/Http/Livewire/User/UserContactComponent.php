<?php

namespace App\Http\Livewire\User;

use App\Models\Contact;
use Livewire\Component;

class UserContactComponent extends Component
{
    public $searchTerm;
    
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $contacts = Contact::orderBy('created_at','DESC')->where('name','LIKE',$search)
        ->orwhere('email','LIKE',$search)
        ->orwhere('phone','LIKE',$search)
        ->orwhere('message','LIKE',$search)
        ->orwhere('id','DESC')->paginate(15);
        return view('livewire.user.user-contact-component',['contacts'=>$contacts])->layout('layouts.base');
    }
}
