<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Sentinel;
class AdminController extends Controller
{
    public function getAdminLogin(Request $request)
    {
       return view('backend.auth.login');
    }
    public function postAdminLogin(Request $request)
    {
        $messages = [
            'email.required' => 'E-Mail adresinizi giriniz.',
            'password.required' => 'Lütfen şifrenizini giriniz.',
        ];

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',

        ], $messages);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        $login = Sentinel::authenticateAndRemember($credentials);
        if ($login == TRUE) {
            return redirect()->route('admin.getAllProduct');

        } else {

            return redirect()->back();
        }
    
}
}