@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Edit Siswa</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('siswa/' . $row->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa*</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $row->nama_siswa }}" placeholder="Inputkan Nama Siswa..." required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir*</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $row->tanggal_lahir }}" placeholder="Inputkan Tanggal Lahir..." required>
                    </div>

                    <div class="mb-3">
                        <label for="id_kelas" class="form-label">Nama Kelas*</label>
                        <select class="form-control" name="id_kelas" id="id_kelas">
                            <option value="">-- Pilih --</option>
                            @foreach($kelass as $kelas)
                                <option value="{{ $kelas->id }}" {{ $row->id_kelas == $kelas->id ? 'selected' : ''}}>{{ $kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('siswa') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
