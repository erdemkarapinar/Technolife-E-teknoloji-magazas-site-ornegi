<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Sentinel;
class UserController extends Controller
{
    public function getRegister(Request $request)
    {
        return view('backend.auth.register');
    }
    public function postRegister(Request $request)
    {
        $credentials = [
         'first_name'    => $request->first_name,
         'last_name'    => $request->last_name,
         'email'    => $request->email,
         'password' => $request->password, 
     ];

     $user = Sentinel::register($credentials);
     return redirect()->back();

    }
    public function getLogin(Request $request)
    {
        return view('backend.auth.login');
    }
    public function postLogin(Request $request)
    {
        $enter = [
            'Username' => $request->Username,
            'password' => $request->password,
        ];
        $make = Sentinel::register($enter);
        return redirect()->back();
    }
}
