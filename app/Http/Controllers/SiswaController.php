<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = DB::table('siswas')->get();
        return view('siswa/index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new = new Siswa();
        $new->nis = $request->input('nis');
        $new->nama = $request->input('nama' );
        $new->alamat = $request->input('alamat');
        $new->no_telp = $request->input('no_telp');
        $new->asal_sekolah = $request->input('asal_sekolah');
        $new->jurusan = $request->input('jurusan');
        $new->save();

        return redirect('/siswa')->with('status', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa, $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
