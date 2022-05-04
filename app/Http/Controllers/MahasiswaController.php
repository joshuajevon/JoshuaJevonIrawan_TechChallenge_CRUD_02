<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insert(){
        $mahasiswas = Mahasiswa::all();
        return view('insert', ['mahasiswas' => $mahasiswas]);
    }

    public function view(){
        $mahasiswas = Mahasiswa::get();
        return view('view', ['mahasiswas' => $mahasiswas]);
    }

    public function insertMahasiswa(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|numeric',
            'umur' => 'required|numeric|gt:0',
            'tanggal' => 'required',
            'kota' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'umur' => $request->umur,
            'tanggal' => $request->tanggal,
            'kota' => $request->kota,
            'jurusan' => $request->jurusan,
        ]);
        return redirect(route('view'));
    }

    public function updateMahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('update', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|numeric',
            'umur' => 'required|numeric|gt:0',
            'tanggal' => 'required',
            'kota' => 'required',
            'jurusan' => 'required'
        ]);

        $mahasiswa -> update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'umur' => $request->umur,
            'tanggal' => $request->tanggal,
            'kota' => $request->kota,
            'jurusan' => $request->jurusan,
        ]);
        return redirect(route('view'));
    }

    public function delete($id){
        Mahasiswa::destroy($id);
        return redirect(route('view'));
    }
}
