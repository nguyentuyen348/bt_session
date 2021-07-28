<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $customers= Customer::all()->sortByDesc('customers_id');
        return view('customers.list',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FormExampleRequest $request
     * @param Customer $customer
     * @return RedirectResponse
     */




    public function store(FormExampleRequest $request, Customer $customer): RedirectResponse
    {
        $customer->username=$request->username;
        $customer->email=$request->email;
        $customer->age=$request->age;
        $customer->password=$request->password;
        $customer->save();

        Session::flash('success','helle'.$customer->username);
        return redirect()->action([PageController::class,'index']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function profile($customer_id)
    {

        $customer = DB::table('customers')->where('customer_id', $customer_id)->get();
        // dd($customer);
        return view('customers.profile', compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
       // $customer = DB::table('customers')->where('customer_id', $customer_id)->get();
        $customer = Customer::findOrFail($customer->customer_id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->username=$request->username;
        $customer->email=$request->email;
        $customer->age=$request->age;
        $customer->password=$request->password;
        $customer->save();

        Session::flash('success','update success!');
        return redirect()->route('customers.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($customer_id)
    {
        $customer=Customer::findOrFail($customer_id);
        $customer->delete();
        return redirect()->action([CustomerController::class,'index'])
            ->with('success','delete success!');
    }
}
