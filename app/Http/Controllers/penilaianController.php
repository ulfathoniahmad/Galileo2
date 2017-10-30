<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\siswa;
use App\pelajaran;
use App\Model\penilaian;
use App\Model\kode_soal;
use App\Model\nilai_siswa;
use App\Model\detail_nilai;


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
		$pelajaran = pelajaran::all();

		return view('penilaian/create',['pelajaran' => $pelajaran]);
	}
	public function check_kode(){

		$siswa = siswa::all();
		$penilaian = DB::table('penilaian')
		->groupBy('kode')
		->get();
		return view('penilaian/check',['penilaian' => $penilaian,'siswa'=>$siswa]);	
	}

	public function store(Request $request)
	{
		$penilaian1 = penilaian::where('kode', 'LIKE', $request->kode)->paginate(1);
		
		if ($penilaian1->count()>0) {
			dd(2);
			return redirect()->back()->with('alert', 'Kode Soal Sudah Ada!');

		}else{
			$kode_soal 					= new kode_soal;
			$kode_soal->kode    		= $request->kode;
			$kode_soal->id_pelajaran	= $request->pelajaran;
			$kode_soal->save();

			for ($i=1; $i<=10; $i++) { 
				$penilaian 				= new penilaian;
				$penilaian->kode    	= $request->kode;
				$penilaian->no 			= $i;
				$penilaian->jawaban     = $request->{"j_".$i};//pembuatan dynamic name
				$penilaian->save();
			}
		}
		return redirect('test');
	}
	public function checking(Request $request){
		//deklarasi variabel
		$benar 		= 0;
		$salah 		= 0;
		$detail_nilai = detail_nilai::all();
		dd($detail_nilai,"2");
		for ($i=1; $i<=10; $i++) { 
			//deklarasi variabel
			${"benar".$i} = 0;
			${"salah".$i} = 0;

			//pembuatan variabel jawaban 1 - 10
			${"jawaban".$i} = $request->{"j_".$i};

			// pembuatan variabel checking 1 - 10
			${"checking".$i} = DB::table('penilaian')
			->select('jawaban')
			->where([
				['kode','=',$request->kode],
				['No','=',$i]
			])
			// penangkapan nilai dari kolom jawaban di tabel penilaian
			->value('jawaban');

			if (${"jawaban".$i} == ${"checking".$i}) {
				$benar +=1;
				${"benar".$i} +=1;
			}else{
				$salah +=1;
				${"salah".$i} +=1;
			}

			${"checking_benar".$i} = DB::table('penilaian')
			->select('jawaban_benar')
			->where([
				['kode','=',$request->kode],
				['No','=',$i]
			])
			->value('jawaban_benar');

			${"checking_salah".$i} = DB::table('penilaian')
			->select('jawaban_benar')
			->where([
				['kode','=',$request->kode],
				['No','=',$i]
			])
			->value('jawaban_salah');


			${"skor_benar".$i} = ${"checking_benar".$i}+${"benar".$i};
			${"skor_salah".$i} = ${"checking_salah".$i}+${"salah".$i};
			
			DB::table('penilaian')
			->where([
				['kode','=',$request->kode],
				['No','=',$i]
			])
			->update([
				['jawaban_benar'=> ${"skor_benar".$i}],
				['jawaban_salah'=> ${"skor_salah".$i}]
			]);
		}



		return view('penilaian/index');
	}


}
