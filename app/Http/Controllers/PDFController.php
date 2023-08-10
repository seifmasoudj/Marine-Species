<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\MarineSpecies;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $marines = MarineSpecies::get();

        $data = [
            'species' => $marines
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->stream('Species.pdf');
    }
}