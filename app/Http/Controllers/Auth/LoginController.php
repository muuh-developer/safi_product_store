<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
   

    use AuthenticatesUsers;

   
    
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function login(Request $request){

        $credentials=$request->validate([
          'email'=>'required|email',
           'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
          
            $user_role=Auth::user()->role;

            switch($user_role){
                case 1:
                    return view('layouts/manager/manager');
                    break;
                
                    case 2:
                        return view('layouts/agent/agent');
                    break;

                    case 3:
                        return view('layouts/customer/customer');
                    break;

            }



        }
    }



}
