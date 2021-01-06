<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormExampleRequest;
use App\Http\Requests\LoginBackendExampleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('backend.login');
    }

    public function login(LoginBackendExampleRequest $request)
    {
        $username = $request->user;
        $password = $request->Password;

        if ($username == 'admin@gmail.com' && $password == '12345'){
            Session::put('login', true);
            return view('backend.welcome');
        }else {

            $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng';
            $request->session()->flash('login-fail', $message);
            return redirect()->route('show.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('show.login');

    }
}
