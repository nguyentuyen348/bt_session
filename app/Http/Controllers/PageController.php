<?php


namespace App\Http\Controllers;


use App\Http\Requests\FormExampleRequest;
use App\Models\Customer;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class PageController
{
    public function index()
    {
        return view('page/index');
    }

    public function register()
    {
        return view('users.create');
    }

    public function login()
    {
        return view('users.login');
    }

    public function isUser(Request $request)
    {


        $email = $request->email;
        $password = $request->password;

        $data = [
            'email' => $email,
            'password' => $password
        ];
        if (Auth::attempt($data)) {
            session()->flash('success', 'hello :P');
            return redirect()->route('page.index');
        } else
            session()->flash('error', 'Account not exits!');
            return redirect()->route('users.login');

        }

    function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('users.login');
    }

}
