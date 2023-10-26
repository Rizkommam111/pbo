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

        $validated = $request->validate([
            'nis' => 'required|unique:siswas|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'asal_sekolah' => 'required',
            'jurusan' => 'required'
        ]);

        $new = new Siswa();
        $new->nis = $request->nis;
        $new->nama = $request->nama;
        $new->alamat = $request->alamat;
        $new->no_telp = $request->no_telp;
        $new->asal_sekolah = $request->asal_sekolah;
        $new->jurusan = $request->jurusan;
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
        $siswa = Siswa::find($id);
        return view('siswa/edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa = Siswa::find($request->input('id'));
        $siswa->kode_siswa = $request->input('nis');
        $siswa->nama_siswa = $request->input('nama_siswa');
        $siswa->tingkat = $request->input('tingkat');
        $siswa->update();
        return redirect('/siswa')->with('status', 'Data Berhasil Di Hapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $data = Siswa::findOrFail($id);
        $data->delete();
        return redirect('siswa');
    }
}
