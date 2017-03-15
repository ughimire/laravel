<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class AdminController extends AdminControllerAbstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return Redirect::to('lara-admin');
    }

    public function showRegister()
    {
        return view('backend.register');
    }

    public function registerAction(Request $request)
    {
        dd($request->all());
        return view('backend.register');
    }
}
