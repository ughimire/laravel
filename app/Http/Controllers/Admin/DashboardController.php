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

        $adminList = AdminLogin::paginate($this->default_data_per_page);


        $admin['admins'] = $adminList;

        return view('backend.dashboard', $admin);


    }
}
