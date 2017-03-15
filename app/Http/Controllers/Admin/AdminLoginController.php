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

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


        $this->middleware('admin', ['except' => 'logout']);
    }


    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function username()
    {
        return 'Login';
    }

    public function loginCheck1(Request $request)
    {

        //dd($request->all());
        //$this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.


        /*  if ($this->hasTooManyLoginAttempts($request)) {
              $this->fireLockoutEvent($request);

              return $this->sendLockoutResponse($request);
          }*/


        $status = $this->guard()->attempt(
            $request->only($this->username(), 'Security'), $request->has('remember')
        );


        if ($status) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function loginCheck(Request $request)
    {


// validate the info, create rules for the inputs
        $rules = array(
            'Login' => 'required', // make sure the email is an actual email
            'Security' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);


// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('lara-admin')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(Input::except('Security')); // send back the input (not the password) so that we can repopulate the form
        } else {


            // create our user data for the authentication
            $userdata = array(
                'Login' => Input::get('Login'),
                //'password' => bcrypt(Input::get('Security'))
                'password' => (Input::get('Security'))
            );


            if (Auth::guard('admin')->attempt($userdata)) {


                echo Auth::guard('admin')->check();


                return (Redirect::to('admin/dashboard'));

            } else {

                // validation not successful, send back to form
                return Redirect::to('lara-admin');

            }


        }
    }


}
