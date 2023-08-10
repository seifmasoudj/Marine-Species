<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public $searchTerm;

    public function deleteContact($id)
    {
        $category = Contact::find($id);
        $category->delete();
        session()->flash('message','Contact has been deleted successfully!');
    }
    
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $contacts = Contact::orderBy('created_at','DESC')->where('name','LIKE',$search)
        ->orwhere('email','LIKE',$search)
        ->orwhere('phone','LIKE',$search)
        ->orwhere('message','LIKE',$search)
        ->orwhere('id','DESC')->paginate(15);
        return view('livewire.admin.admin-contact-component',['contacts'=>$contacts])->layout('layouts.base');
    }
}
