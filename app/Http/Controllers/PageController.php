<?php


namespace App\Http\Controllers;


use App\Http\Requests\FormExampleRequest;
use App\Models\Customer;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Login;

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
        return view('page.login');
    }

    public function isCustomer(FormExampleRequest $request)
    {

        $customers=Customer::all();

        foreach ($customers as $customer)
        if ($request->username===$customer->username && $request->password===$customer->password){

            Session::flash('success','hello'.$customer[0]->username);

            return redirect()->action([\App\Http\Controllers\PageController::class,'index']);
        }
        /*$credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }*/


    }


}
