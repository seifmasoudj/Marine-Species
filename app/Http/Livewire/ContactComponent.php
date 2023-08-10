<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|min:8|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:13|min:10',
            'message' => 'required|min:15',
        ]);
    }
    
    public function storeContact()
    {
        $this->validate([
            'name' => 'required|min:8|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:13|min:10',
            'message' => 'required|min:15',
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message','Contact has been created successfully!');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
