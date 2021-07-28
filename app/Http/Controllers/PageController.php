<?php


namespace App\Http\Controllers;


use App\Http\Requests\FormExampleRequest;
use App\Models\Customer;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use LoginRepocitory;

class PageController
{
    public function index()
    {
        return view('page/index');
    }


    public function register()
    {
        return view('customers.create');
    }

    public function login()
    {
        return view('customers/login');
    }

    public function isCustomer(Customer $customer, FormExampleRequest $request)
    {

        if ($request->username==$customer->username && $request->password==$customer->password){

            Session::flash('success','hello'.$customer->username);
            return redirect()->action([\App\Http\Controllers\PageController::class,'index']);
        }
    }


}
