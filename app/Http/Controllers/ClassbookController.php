<?php

namespace App\Http\Controllers;

use App\User;

class ClassbookController extends Controller
{
    public function classbook()
    {
        return view('pages/classbook');
    }

    public function getIndex()
    {
        User::create([
            'username' => 'admin',
            'password' => 'admin',
            'first_name' => 'Админ',
            'last_name' => 'Админ',
            'type' => 'admin',
        ]);

    }
}