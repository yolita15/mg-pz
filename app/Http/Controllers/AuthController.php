<?php
namespace App\Http\Controllers;

use Auth;

class AuthController extends Controller
{
    public function getLogin() {
        return view('auth.login');
    }

    public function postLogin(\Illuminate\Http\Request $request) {
        if(Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'type' => 'admin'
        ])) {
            return redirect ('admin');
        }


        if(Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'type' => 'teacher'
        ])) {
            return redirect ('educator/account');
        }

        if(Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'type' => 'student'
        ])) {
            return redirect ('stu');
        }


        return redirect('login')->with('message', [
            'type' => 'danger',
            'message' => 'Грешно потребителско име или парола!'
        ]);
    }

    public function getLogout() {
        Auth::logout();

        return redirect('login');
    }


}