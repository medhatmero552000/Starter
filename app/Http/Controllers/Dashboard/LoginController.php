<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }
    public function postlogin(AdminLoginRequest $request)
    {
        $remember_me = $request->has('remember') ? true : false;
        if (auth()->guard('admin')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $remember_me)) {
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('error','هناك خطأ فى البيانات المدخلة');
        }
}
