<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_User;
use Auth;

class AuthController extends Controller
{
	public function getLogin(){
    	return view('Auth.login');
    }

    public function postLogin(Request $request){
    	if (!auth()->attempt(['username'=>$request->username, 'password' => $request->password ])) {
    		return redirect()->back();
    	}

    	return redirect()->route('home');
    }

	public function getRegister(){
    	$role = \App\M_Role::all();
    	return view('Auth.register',['role' => $role]);
    }

    public function postRegister(Request $request){
    	$this->validate($request, [
    		'username' 		=> 'required|min:4|unique:tb_karyawan',
    		'password' 		=> 'required|min:8|confirmed',
    		'nama_karyawan' => 'required|min:4',
    		'id_role' 		=> 'required',
    	]);

    	$user = M_User::create([
    		'username' 		=> $request->username,
    		'password' 		=> bcrypt($request->password),
    		'nama_karyawan' => $request->nama_karyawan,
    		'id_role' 		=> $request->id_role,
    	]);


    	auth()->loginUsingId($user->id);

    	return redirect()->route('home');
    }

    public function logout(){
    	auth()->logout();
    	return redirect()->route('login');
    }
}
