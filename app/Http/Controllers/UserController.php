<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all()->sortByDesc('id');
        return view('users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FormExampleRequest $request
     * @param User $user
     * @return RedirectResponse
     */

    public function store(FormExampleRequest $request, User $user): RedirectResponse
    {
        $user->name=$request->name;
        $user->email=$request->email;
        $user->age=$request->age;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('success','hello'.$user->name);
        return redirect()->action([PageController::class,'index']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function profile($id)
    {

        $user = DB::table('users')->where('id', $id)->get();
        // dd($customer);
        return view('users.profile', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       // $customer = DB::table('users')->where('customer_id', $customer_id)->get();
        $user = User::findOrFail($user->id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $user->name=$request->name;
        $user->email=$request->email;
        $user->age=$request->age;
        $user->password=$request->password;
        $user->save();

        Session::flash('success','update success!');
        return redirect()->route('users.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->action([UserController::class,'index'])
            ->with('success','delete success!');
    }



}
