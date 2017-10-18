<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pelajaran;
use Illuminate\Http\Request;
use Session;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pelajaran = Pelajaran::where('Pelajaran', 'LIKE', "%$keyword%")
				->orWhere('Kelas', 'LIKE', "%$keyword%")
				->orWhere('Jurusan', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $pelajaran = Pelajaran::paginate($perPage);
        }

        return view('pelajaran.index', compact('pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pelajaran.create');
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
        
        $requestData = $request->all();
        
        Pelajaran::create($requestData);

        Session::flash('flash_message', 'Pelajaran added!');

        return redirect('pelajaran');
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
        $pelajaran = Pelajaran::findOrFail($id);

        return view('pelajaran.show', compact('pelajaran'));
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
        $pelajaran = Pelajaran::findOrFail($id);

        return view('pelajaran.edit', compact('pelajaran'));
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
        
        $pelajaran = Pelajaran::findOrFail($id);
        $pelajaran->update($requestData);

        Session::flash('flash_message', 'Pelajaran updated!');

        return redirect('pelajaran');
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
        Pelajaran::destroy($id);

        Session::flash('flash_message', 'Pelajaran deleted!');

        return redirect('pelajaran');
    }
}
