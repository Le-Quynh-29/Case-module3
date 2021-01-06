<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginExampleRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(){
        return view('frontend.login');
    }

    public function showRegister()
    {
        return view('frontend.login');
    }

    public function storeRegister(Request $request)
    {
//        dd($request);
        $user = new Customer();
        $user->user = $request->input('user');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->password);
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect()->route("showLogin");
    }

    public function login(Request $request)
    {
        $data = [

            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        //dd(Auth::guard('customer'));

        if (Auth::guard('customer')->attempt($data)) {
            //dd(111);
            return redirect()->route("shop");
        }
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }


}
