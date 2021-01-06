<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(FormExampleRequest $request)
    {
        $username = $request->user;
        $password = $request->Password;

        if ($username == 'admin@gmail.com' && $password == '12345'){
//            $request->session()->push('login', true);
            return view('welcome');
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
