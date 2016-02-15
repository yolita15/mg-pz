<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function getView($adminPage = 'admin')
    {
        return view('/admin.' . $adminPage);
    }
}