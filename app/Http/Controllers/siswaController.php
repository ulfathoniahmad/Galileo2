<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\siswa;
use App\Model\detail_nilai;
use App\pelajaran;
use Illuminate\Http\Request;
use Session;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $siswa = siswa::all();
        return view('siswa/index',['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $siswa                  = new siswa;
        $siswa->Nama            = $request->nama;
        $siswa->SekolahAsal     = $request->sekolahAsal;
        $siswa->Kelas           =$request->kelas;
        $siswa->Alamat          =$request->alamat;
        $siswa->JenisKelamin    =$request->kelamin;
        $siswa->Prestasi        =$request->prestasi;
        $siswa->OrangTua        =$request->orangTua;
        $siswa->Contact         =$request->contact;
        $siswa->save();


        $idSiswa = DB::table('siswas')
        ->select('id_siswa')
        ->where([
            ['Nama','=',$request->nama],
            ['Alamat','=',$request->alamat]
        ])
        ->value('id_siswa');

        $pelajaran = pelajaran::all();
        foreach ($pelajaran as $pelajaran) {
            $detail_nilai                 = new detail_nilai;
            $detail_nilai->id_pelajaran   = $pelajaran->id;
            $detail_nilai->id_siswa       = $idSiswa;
            $detail_nilai->save();
        }


        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $siswa = siswa::findOrFail($id);

        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);

        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();
        
        $siswa = siswa::findOrFail($id);
        $siswa->update($requestData);

        Session::flash('flash_message', 'siswa updated!');
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        siswa::destroy($id);

        Session::flash('flash_message', 'siswa deleted!');

        return redirect('siswa');
    }
}
