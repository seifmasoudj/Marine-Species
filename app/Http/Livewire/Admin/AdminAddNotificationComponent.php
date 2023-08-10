<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\notification;

class AdminAddNotificationComponent extends Component
{
    public $text;
    public $status; 
   
    public function mount()
    {
        $this->status = 'active';
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
        'text' => 'required',      
        'status' => 'required'
        ]);
    }

    public function AddNotification()
    {
        $this->validate([
        'text' => 'required|min:8|unique:notifications',      
        'status' => 'required'
        ]);

        $notification = new notification();
        $notification->text = $this->text;
        $notification->status = $this->status;   
        $notification->save();

        session()->flash('message','Notification has been created successful!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-notification-component')->layout('layouts.base');
    }
}
