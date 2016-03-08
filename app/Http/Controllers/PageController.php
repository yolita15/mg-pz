<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function getView($page = 'welcome')
    {
        return view('pages.' . $page);
    }
}