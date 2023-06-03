<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;
use Illuminate\Support\Facades\Auth;
use Exception;

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
            'role' => $request->role,
            'no_kk' => $request->no_kk
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->registerUser('/api/register-account',$payload);
        
        if($response->failed()){
            $errors = $response->json('data');
            // dd($errors);
            return redirect()->back()->with(['errors' => $errors]);
        }

        return redirect('/login')->with('success','Success Register Account!');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginStore1(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try{
            $baseApi = new BaseApi;
            $response = $baseApi->login('/api/login', $request->all());
           
            // dd($result);
            if($response->failed()){
                $errors = $response->json('data');
                dd($response);
                return redirect()->back()->with(['errors' => $errors]);
            }
            $data = $response->json('data');
            
            return redirect()->route('dash-user')->with(['user' => $data['user']]);
        }catch(Exception $error){
            return redirect()->back()->with(['errors' => $error]);
        }

        
     
        
        
        // if($response->failed()){
        //     $errors = $response->json('data');
        //     return redirect()->back()->with(['errors' => $errors]);
        // }

       
        
      
    }


    public function loginStore(Request $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['name'] =  $user->name;
            return redirect('/table- ');
            //return BaseController::sendResponse($success, 'User login successfully.');
        } else{ 
            //return BaseController::sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
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
