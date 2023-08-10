<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;

class UsersPDF extends Controller
{
    public function usersPdf()
    {
        $user = User::get();

        $data = [
            'users' => $user
        ];

        $pdf = PDF::loadView('UsersPDF', $data);

        return $pdf->stream('Users.pdf');
    }
}
