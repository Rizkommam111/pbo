<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = DB::table('jurusans')->get();
        return view('jurusan/index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new = new Jurusan();
        $new->kode_jurusan = $request->input('kode_jurusan');
        $new->nama_jurusan = $request->input('nama_jurusan' );
        $new->tingkat = $request->input('tingkat');
        $new->save();

        return redirect('/siswa')->with('status', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jurusan = Jurusan::find($id);
        return view('jurusan/edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jurusan = Jurusan::find($request->input('id'));
        $jurusan->kode_jurusan = $request->input('kode_jurusan');
        $jurusan->nama_jurusan = $request->input('nama_jurusan');
        $jurusan->tingkat = $request->input('tingkat');
        $jurusan->update();
        return redirect('/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
