<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index', [
            'showResetPasswordLinkModel' => session()->get('showResetPasswordLinkModel', false),
            'token' => session()->get('token', null),
            'email' => session()->get('email', null)
        ]);
    }

    public function passwordResetLink($token){
        session([
            'showResetPasswordLinkModel' => true,
            'token' => $token,
            'email' => $_GET['email']
        ]);
        return redirect()->route('index');
    }
}
