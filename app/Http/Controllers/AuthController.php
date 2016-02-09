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
            'password' => $request->input('password')
        ])) {
            return redirect('dashboard');
        }

        return redirect('login')->with('message', [
            'type' => 'danger',
            'message' => 'Невалидни данни за вход.'
        ]);
    }

    public function getLogout() {
        Auth::logout();

        return redirect('login');
    }
}