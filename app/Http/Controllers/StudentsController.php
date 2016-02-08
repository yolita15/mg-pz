<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function students ()
    {
        return view('pages/students');
    }
}