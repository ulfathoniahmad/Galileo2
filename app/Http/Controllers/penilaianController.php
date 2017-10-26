<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\penilaian;
use Session;

class penilaianController extends Controller
{
	public function index(Request $request)
	{
		$penilaian = penilaian::all();
		return view('penilaian/index',['penilaian' => $penilaian]);
	}
	public function create()
	{
		return view('penilaian/create');
	}
	public function store(Request $request)
	{
		$penilaian 			= new penilaian;
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 1;
		$penilaian->j_1     = $request->j_1;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 2;
		$penilaian->j_2     = $request->j_2;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 3;
		$penilaian->j_3     = $request->j_3;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 4;
		$penilaian->j_4     = $request->j_4;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 5;
		$penilaian->j_5     = $request->j_5;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 6;
		$penilaian->j_6     = $request->j_6;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 7;
		$penilaian->j_7     = $request->j_7;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 8;
		$penilaian->j_8     = $request->j_8;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 9;
		$penilaian->j_9     = $request->j_9;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 10;
		$penilaian->j_10     = $request->j_10;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 11;
		$penilaian->j_11     = $request->j_11;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 12;
		$penilaian->j_12     = $request->j_12;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 13;
		$penilaian->j_13     = $request->j_13;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 14;
		$penilaian->j_14     = $request->j_14;
		// $penilaian->save();
		$penilaian->kode    = $request->kode;
		$penilaian->no 		= 15;
		$penilaian->j_15     = $request->j_15;
		// $penilaian->save();
		
		// $penilaian->j_2        = $request->j_2;
		// $penilaian->j_3        = $request->j_3;
		// $penilaian->j_4        = $request->j_4;
		// $penilaian->j_5        = $request->j_5;
		// $penilaian->j_6        = $request->j_6;
		// $penilaian->j_7        = $request->j_7;
		// $penilaian->j_8        = $request->j_8;
		// $penilaian->j_9        = $request->j_9;
		// $penilaian->j_10        = $request->j_10;
		// $penilaian->j_11        = $request->j_11;
		// $penilaian->j_12        = $request->j_12;
		// $penilaian->j_13        = $request->j_13;
		// $penilaian->j_14        = $request->j_14;
		// $penilaian->j_15        = $request->j_15;

		dd($penilaian);
		$penilaian           = new penilaian;
		


		// $test->save();
		return redirect('test');
	}
}
