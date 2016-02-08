<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function gallery ()
    {
        return view('pages/gallery');
    }
}