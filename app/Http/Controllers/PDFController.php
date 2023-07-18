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
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'species' => $marines
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->stream('MarineSpecies.pdf');
    }
}