<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    function index(){
        $kampus = "Universitas MDP";
        $mahasiswas = Mahasiswa::all();
        // dump($mahasiswas);
        return view('mahasiswa.index')
            ->with('mahasiswas', $mahasiswas)
            ->with('kampus', $kampus);
    }

    function create(){
        $mahasiswa = new Mahasiswa; // objek $mahasiswa
        $mahasiswa->npm = "2024250003"; // property npm
        $mahasiswa->nama = "Diva"; // property nama
        $mahasiswa->tempat_lahir = "Palembang"; // property tempat_lahir
        $mahasiswa->tanggal_lahir = "2000-01-01"; // property tanggal_lahir
        $mahasiswa->save(); // simpan ke dalam tabel mahasiswas
        dump($mahasiswa);
    }

    function update(){
        $mahasiswa = Mahasiswa::where("npm", "2024250001")->first(); // cari data yang ada di tabel mahasiswas berdasarkan npm = 2024250001

        $mahasiswa->nama = "Umar"; // awalnya ahmad, diganti umar
        $mahasiswa->tempat_lahir = "Lampung"; // awalnya palembang, diganti lampung
        $mahasiswa->save(); // simpan perubahan data mahasiswa 
        dump($mahasiswa);
    }

    function delete(){
        $mahasiswa = Mahasiswa::where("npm", "2024250001")->first();
        $mahasiswa->delete(); // hapus data mahasiswa berdasarkan npm = 2024250001
        dump($mahasiswa);
    }
}
