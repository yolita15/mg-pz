<?php

namespace App\Http\Controllers\Stu;

use App\StudentMark;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class StuController extends Controller
{
    public function getView($stuPage = 'stu')
    {
        $user = Auth::user();
        $marks = StudentMark::where('student_id', $user->id)->get();

        return view('stu.' . $stuPage, [
            'user' => $user,
            'marks' => $marks,
        ]);
    }
}