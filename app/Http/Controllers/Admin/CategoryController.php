<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class CategoryController extends AdminControllerAbstract
{


    public function __construct()
    {
        parent::__construct();
    }

    public function listAction()
    {

        $status = Auth::guard('admin');


        if ($status != true) {

            return Redirect::to('lara-admin');


        } else {

            $categoryList = Category::paginate($this->default_data_per_page);


            $category['categories'] = $categoryList;

            return view('backend.category-list', $category);

        }

    }

    public function addAction()
    {

        return view('backend.category-form');

    }


}
