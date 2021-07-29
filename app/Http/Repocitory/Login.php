<?php


use App\Http\Requests\FormExampleRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class Login
{
    public function checkLogin(Customer $customer, FormExampleRequest $request)
    {
        if ($request->username==$customer->username && $request->password==$customer->password){

            Session::flash('success','hello'.$customer->username);
            return redirect()->action([\App\Http\Controllers\PageController::class,'index']);
        }
    }
}
