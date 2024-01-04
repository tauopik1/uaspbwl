<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $rows = Absensi::with('siswa')->get();
        return view('absensi.index', compact('rows'));

    }

    public function create()
    {
        $siswas = Siswa::select('id', 'nama_siswa')->get();

        return view('absensi.create', compact('siswas'));
    }

    public function store(Request $request)
    {

        // Simpan data
        Absensi::create([
            'id_siswa' => $request->id_siswa,
            'tanggal_absen' => $request->tanggal_absen,
            'kehadiran' => $request->kehadiran
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('absensi');
    }

    public function edit(string $id)
    {
        $row = Absensi::findOrFail($id);
        $siswas = Siswa::select('id', 'nama_siswa')->get();

        return view('absensi.edit', compact('row', 'siswas'));
    }

    public function update(Request $request, string $id)
    {
        $row = Absensi::findOrFail($id);
        $row->update([
            'id_siswa' => $request->id_siswa,
            'tanggal_absen' => $request->tanggal_absen,
            'kehadiran' => $request->kehadiran
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('absensi');
    }

    public function destroy(string $id)
    {
        $row = Absensi::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('absensi');
    }
}
