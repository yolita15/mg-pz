<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function teachers ()
    {
        return view('pages/teachers');
    }
}