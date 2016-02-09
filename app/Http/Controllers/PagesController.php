<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getView($page = 'welcome')
    {
        return view('pages.' . $page);
    }
}