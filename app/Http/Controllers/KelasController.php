<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.all', [
            'title'=> 'Kelas',
            'kelas'=> Kelas::all(),
        ]);
    }

    public function show($kelas)
    {
        return view('kelas.detail', [
            'title'=> 'detail-kelas',
            'kelas' => Kelas::find($kelas),
        ]);
    }

    public function create()
    {
        return view('kelas.create', [
            'title'=> 'create-kelas',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        $result = Kelas::create($request->all());

        if($result){
            return redirect()->route('kelas.all')->with('success', 'Data kelas berhasil disimpan');
        }
    }

    public function destroy(Kelas $kelas)
    {
        $result = Kelas::destroy($kelas->id);

        if($result){
            return redirect()->route('kelas.all')->with('success', 'Data kelas berhasil dihapus');
        }
    }

    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', [
            'title'=> 'edit-kelas',
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        $result = Kelas::where('id', $kelas->id)->update([
            'nama' => $request->nama,
        ]);

        if($result){
            return redirect()->route('kelas.all')->with('success', 'Data kelas berhasil diubah');
        }
    }
}
