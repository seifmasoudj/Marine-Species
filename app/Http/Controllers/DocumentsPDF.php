<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentsPDF extends Controller
{
    public function documentPDF()
    {
        $document = Document::get();

        $data = [
            'documents' => $document
        ];

        $pdf = PDF::loadView('documentsPDF', $data);

        return $pdf->stream('Document.pdf');
    }
}
