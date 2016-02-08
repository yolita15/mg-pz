<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function school ()
    {
        return view('pages/school');
    }
}