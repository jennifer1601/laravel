<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AuthController extends Controller
{
    //
    
    public function register(Request $request){
        $u =User::create([
            'email'=>$request->email,
            'name'=>$request->full_name,
            'password'=>bcrypt($request->password),
            'rolesid'=>1
        ]);
        return redirect('/admin/login');
    }
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/admin/managepost');
        }else{
            return redirect('/admin/login');
        }
    }
}
