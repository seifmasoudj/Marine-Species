<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsPDF extends Controller
{
    public function contactPdf()
    {
        $contact = Contact::get();

        $data = [
            'contacts' => $contact
        ];

        $pdf = PDF::loadView('contactsPDF', $data);

        return $pdf->stream('Contact.pdf');
    }
}
