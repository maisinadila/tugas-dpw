<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserStoreRequest;
use Auth;

class AuthController extends Controller
{
	function showLogin(){
	return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			$user = Auth::user();
			if($user->level == 1) return redirect('dashboard/admin')->with('success', 'Login Berhasil');
			if($user->level == 0) return redirect('dashboard/pengguna')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
		
	}

	
	function logout(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return redirect('login');
	}

	function registration(){

	}

	function forgotPassword(){

	}
}