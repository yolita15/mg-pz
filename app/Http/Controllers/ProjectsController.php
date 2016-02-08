<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function projects ()
    {
        return view('pages/projects');
    }
}