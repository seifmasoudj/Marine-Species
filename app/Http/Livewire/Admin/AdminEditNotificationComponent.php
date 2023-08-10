<?php

namespace App\Http\Livewire\Admin;

use App\Models\notification;
use Livewire\Component;

class AdminEditNotificationComponent extends Component
{
    public $text;
    public $status;  
    public $notification_id;

    public function mount($notification_id)
    {
        $notifications = notification::find($notification_id);
        $this->text = $notifications->text;
        $this->status = $notifications->status;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'text' => 'required',      
            'status' => 'required'
        ]);
    }

    public function updateNotification()
    {
        $this->validate([
            'text' => 'required',      
            'status' => 'required'
        ]);

        $notifications = notification::find($this->notification_id);
        $notifications->text = $this->text;
        $notifications->status = $this->status;
        $notifications->save();
        session()->flash('message','Notification has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-notification-component')->layout('layouts.base');
    }
}
