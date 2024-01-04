@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Absensi</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('absensi') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="id_siswa" class="form-label">Nama Siswa*</label>
                        <select class="form-control" name="id_siswa" id="id_siswa">
                            <option value="">-- Pilih --</option>
                            @foreach($siswas as $siswa)
                            <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_absen" class="form-label">Tanggal Absen*</label>
                        <input type="date" class="form-control" id="tanggal_absen" name="tanggal_absen" placeholder="Inputkan Tanggal Absen..." required>
                    </div>
                    <div class="mb-3">
                        <label for="kehadiran" class="form-label">Kehadiran*</label>
                        <select class="form-control" name="kehadiran" id="kehadiran">
                            <option value="">-- Pilih --</option>
                            <option value="hadir">Hadir</option>
                            <option value="izin">Izin</option>
                            <option value="sakit">Sakit</option>
                            <option value="tidak hadir">Alpa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('absensi') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
