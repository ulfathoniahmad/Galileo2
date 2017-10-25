<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\penilaian;

class penilaianController extends Controller
{
    public function index(Request $request)
	{
		$penilaian = penilaian::all();
		return view('penilaian/index',['penilaian' => $penilaian]);
	}
}
