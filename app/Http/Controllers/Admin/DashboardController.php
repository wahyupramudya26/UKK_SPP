<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\M_Siswa;
use App\M_User;

class DashboardController extends Controller
{
	public function index()
	{
		$karyawan = M_User::all();
		return view('halamanawal',compact('karyawan'));
	}

	public function getDashboard()
	{
		return view('dashboard');
	}
}
