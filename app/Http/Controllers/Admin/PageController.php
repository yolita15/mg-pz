<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getView($adminPage = 'admin')
    {
        return view('admin.' . $adminPage);
    }
}