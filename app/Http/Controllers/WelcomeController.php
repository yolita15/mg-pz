<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index ()
    {
        return view('pages/welcome');
    }
}