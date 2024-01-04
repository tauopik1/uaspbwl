<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $rows = Siswa::with('kelas')->get();

        return view('siswa.index', compact('rows'));
    }

    public function create()
    {
        $kelass = Kelas::select('id','nama_kelas')->get();
        return view('siswa.create', compact( 'kelass'));
    }

    public function store(Request $request)
    {
        // Simpan data
        Siswa::create([
            'id_kelas' => $request->id_kelas,
            'nama_siswa' => $request->nama_siswa,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('siswa');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Siswa::find($id);
        $kelass = Kelas::select( 'id','nama_kelas')->get();
        return view('siswa.edit', compact('row', 'kelass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Siswa::findOrFail($id);
        $row->update([
            'id_kelas' => $request->id_kelas,
            'nama_siswa' => $request->nama_siswa,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Siswa::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('siswa');
    }
}
