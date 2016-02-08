<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function profiles ()
    {
        return view('pages/profiles');
    }
}