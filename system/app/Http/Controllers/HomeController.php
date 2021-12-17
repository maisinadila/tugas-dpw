<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;

class HomeController extends Controller{

	function showDashboard()
	{
	return view('dashboard');
	}

	function showKategori()
	{
	return view('category');
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}
}
 