<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    public function index()
    {
        
        return view('authentication.login', [
            'title'         => 'Login'
        ]);
    }
    public function login(Request $request)
    {
        $validateData = $request->validate([
            'username'         => 'required',
            'password'          => 'required'
        ]);

        
        
        $dataUser = User::where('name', $request->username)->first();
        if($dataUser){
            if(Hash::check($request->password, $dataUser->password)){
                $request->session()->put('dataUser', $dataUser);
                switch($dataUser->group) {
                    case('admin'):
                        return "admin ";
                        break;
                    case('hr'):
                        return "hr ";
                        break;
                    case('employee'):
                        return redirect()->intended('/');
                        break;
                    default:
                        $msg = 'Something went wrong.';
                }
                 
         

                return redirect()->intended('/');
            }else{
                return back()->with('loginError', 'Login Failed!');
            }
        }else{
            $request->session()->put('isAdmin','0');
        }
        return $validateData;
        
    }


}
