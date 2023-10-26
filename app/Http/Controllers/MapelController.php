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
        $new = new Mapel();
        $new->kode_mapel = $request->input('nis');
        $new->nama_mapel = $request->input('nama' );
        $new->kode_jurusan = $request->input('alamat');
        $new->nama_jurusanz = $request->input('no_telp');
        $new->asal_sekolah = $request->input('asal_sekolah');
        $new->mapel = $request->input('mapel');
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
        $mapel = Mapel::find($request->input('id'));
        $mapel->kode_mapel = $request->input('nis');
        $mapel->nama_mapel = $request->input('nama_mapel');
        $mapel->tingkat = $request->input('tingkat');
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
    }
}
