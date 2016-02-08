<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function history ()
    {
        return view('pages/history');
    }
}