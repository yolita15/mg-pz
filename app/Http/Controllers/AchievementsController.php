<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AchievementsController extends Controller
{
    public function achievements ()
    {
        return view('pages/achievements');
    }
}