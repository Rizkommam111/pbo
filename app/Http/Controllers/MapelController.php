<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = DB::table('mapels')->get();
        return view('mapel/index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapel/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mapel' => 'required|string',
            'nama_mapel' => 'required|string',
            'kode_jurusan' => 'required|string',
            'nama_jurusan' => 'required|string',
            'tingkat' => 'required|string'
            
        ],
        [
            'kode_mapel' => 'Data kode mapel Harus Di ISI!!!',
            'nama_mapel' => 'Data nama mapel Harus Di ISI!!!',
            'kode_jurusan' => 'Data kode jurusan Harus Di ISI!!!',
            'nama_jurusan' => 'Data nama jurusan Harus Di ISI!!!',
            'tingkat' => 'required|string'
            
        ]);
        $new = new Mapel();
        $new->kode_mapel = $request->kode_mapel;
        $new->nama_mapel = $request->nama_jurusan;
        $new->kode_jurusan = $request->kode_jurusan;
        $new->nama_jurusan = $request->nama_jurusan;
        $new->tingkat = $request->tingkat;
        
        $new->save();

        return redirect('/mapel')->with('status', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel, $id)
    {
        $mapel = Mapel::find($id);
        return view('mapel/edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mapel $mapel)
    {
        $request->validate([
            'kode_mapel' => 'required|string',
            'nama_mapel' => 'required|string',
            'kode_jurusan' => 'required|string',
            'nama_jurusan' => 'required|string',
            'tingkat' => 'required|string'
        ],
        [
            'kode_mapel' => 'Data kode mapel Harus Di ISI!!!',
            'nama_mapel' => 'Data nama mapel Harus Di ISI!!!',
            'kode_jurusan' => 'Data kode jurusan Harus Di ISI!!!',
            'nama_jurusan' => 'Data nama jurusan Harus Di ISI!!!',
            'tingkat' => 'Data nama jurusan Harus Di ISI!!!',
        ]);
        $mapel = Mapel::find($request->input('id'));
        $mapel->kode_mapel = $request->kode_mapel;
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->kode_jurusan = $request->kode_jurusan;
        $mapel->nama_jurusan = $request->nama_jurusan;
        $mapel->tingkat = $request->tingkat;
        $mapel->update();
        return redirect('/mapel')->with('status', 'Data Berhasil Di Hapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect('mapel');
    }
}
