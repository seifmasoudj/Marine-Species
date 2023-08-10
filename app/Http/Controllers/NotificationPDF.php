<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\notification;
use Illuminate\Http\Request;

class NotificationPDF extends Controller
{
    public function notificationPdf()
    {
        $notification = notification::get();

        $data = [
            'notifications' => $notification
        ];

        $pdf = PDF::loadView('notificationPDF', $data);

        return $pdf->stream('Notification.pdf');
    }
}
