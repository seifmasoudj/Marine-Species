<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use PDF;

class newsPDF extends Controller
{
    public function generateNewsPdf()
    {
        $marine = News::get();

        $data = [
            'news' => $marine
        ];

        $pdf = PDF::loadView('newsPDF', $data);

        return $pdf->stream('news.pdf');
    }
}
