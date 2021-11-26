<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showDashboard()
	{
	return view('dashboard');
	}

	function showKategori()
	{
	return view('category');
	}

}
 