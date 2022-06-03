<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prodis = Prodi::all();
        return view('prodi.index')->with('prodis', $prodis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fakultas = Fakultas::all();
        return view('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. validasi input data kosong
        $validateData = $request->validate([
            'nama_prodi'  => 'required',
            'fakultas_id' => 'required',
            'foto'        => 'required|file|image|max:500000'
        ]);

        // ambil extensi png / jpg / gif 
        $ext = $request->foto->getClientOriginalExtension();
        // ubah nama file 
        $rename_file = "foto-".time().".".$ext; // nama file : foto-1234567.jpg 
        // upload file ke dalam folder public
        $request->foto->storeAs('public', $rename_file);

        // 2. simpan
        $prodi = new Prodi();
        $prodi->nama_prodi  = $validateData['nama_prodi'];
        $prodi->fakultas_id = $validateData['fakultas_id'];
        $prodi->foto        = $rename_file;

        $prodi->save(); // simpan ke tabel prodis
        return redirect()->route('prodi.index'); // redirect ke prodi.index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
        return view('prodi.show')->with('prodi', $prodi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        //
        $fakultas = Fakultas::all();
        return view('prodi.edit')->with('prodi', $prodi)->with('fakultas', $fakultas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        // 1. validasi input data kosong
        $validateData = $request->validate([
            'nama_prodi'  => 'required',
            'fakultas_id' => 'required',
            'foto'        => 'required|file|image|max:500000'
        ]);
        // ambil extensi png / jpg / gif 
        $ext = $request->foto->getClientOriginalExtension();
        // ubah nama file 
        $rename_file = "foto-".time().".".$ext; // nama file : foto-1234567.jpg 
        // upload file ke dalam folder public
        $request->foto->storeAs('public', $rename_file);

        // 2. simpan perubahan
        $prodi = Prodi::find($prodi->id);
        $prodi->nama_prodi  = $validateData['nama_prodi'];
        $prodi->fakultas_id = $validateData['fakultas_id'];
        $prodi->foto        = $rename_file;
        $prodi->save();

        $request->session()->flash('info', "Data prodi berhasil diubah");
        return redirect()->route('prodi.index'); // redirect ke prodi.index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        //
        $prodi->delete();
        return redirect()->route('prodi.index')->with("info", "Prodi $prodi->nama_prodi berhasil dihapus");
    }
}
