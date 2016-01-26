<?php
namespace App\Http\Controllers;

use App\Clas;
use App\MethodOfStudy;
use App\Profile;
use App\User;

class TestController extends Controller
{
    public function getIndex()
    {
        $profile = Profile::find(1)
            ->classes()
            ->create([
            'name' => '1 а'
        ]);
    }
}