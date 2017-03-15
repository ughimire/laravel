<?php

namespace App\Http\Controllers\Admin;


use App\AdminLogin;
use Illuminate\Support\Facades\Auth;

class DashboardController extends AdminControllerAbstract
{

    public function __construct()
    {

        parent::__construct();
    }

    public function dashboard()
    {

        $status = Auth::guard('admin');


        if ($status != true) {


            return Redirect::to('lara-admin');


        } else {

            $adminList = AdminLogin::paginate(3);


            $admin['admins'] = $adminList;

            return view('backend.dashboard', $admin);

        }


    }
}
