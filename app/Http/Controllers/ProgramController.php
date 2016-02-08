<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function program ()
    {
        return view('pages/program');
    }
}