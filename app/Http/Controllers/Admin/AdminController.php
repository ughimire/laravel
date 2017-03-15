<?php

namespace App\Http\Controllers\Admin;

use App\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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

        $validator = $this->validator(Input::all());


        if ($validator->fails()) {


            return Redirect::to('admin/register')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(Input::except('Security'));


        } else {

            $this->create(Input::all());
            return Redirect::to('admin/register')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(Input::except('Security'));

        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Login' => 'required|max:255',
            'Security' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return AdminLogin::create([
            'Login' => $data['Login'],
            'Security' => bcrypt($data['Security']),
        ]);
    }
}
