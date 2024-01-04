@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Kelas</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('kelas') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas*</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Inputkan Nama Kelas..." required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat_kelas" class="form-label">Tingkat Kelas*</label>
                        <select class="form-control" name="tingkat_kelas" id="tingkat_kelas">
                            <option value="">-- Pilih --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('kelas') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
