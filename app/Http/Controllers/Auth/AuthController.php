<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request){
        $payload = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
            'role' => $request->role
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->registerUser('/api/register-account',$payload);
        if($response->failed()){
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/login')->with('success','Success Register Account!');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginStore(Request $request){
        $payload = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->login('/api/login' , $payload);

        if($response->failed()){
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }

        $user = $response->json('data');
        if($user['data']['role'] == true){
            return redirect('/dashboard-admin')->with('success','welcome back!');
        }
        return redirect('/dashboard-user')->with('success','welcome back!');

    }

    public function logout(){

        $baseApi = new BaseApi;
        $response = $baseApi->logout('/api/logout');

        if($response->failed()){
            return redirect()->back();
        }
    }

    public function dashUser(){
        return view('user.dashboard');
    }

    public function dashAdmin(){
        $auth = Auth::user();
        return view('admin.dashboard', compact('auth'));
    }
}
