@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Edit Kelas</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('kelas/' . $row->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas*</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ $row->nama_kelas }}" placeholder="Inputkan Nama Kelas..." required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat_kelas" class="form-label">Tingkat Kelas*</label>
                        <select class="form-control" name="tingkat_kelas" id="tingkat_kelas">
                            <option value="">-- Pilih --</option>
                            <option value="1" {{ strcasecmp($row->tingkat_kelas, '1') === 0 ? 'selected' : '' }}>1</option>
                            <option value="2" {{ strcasecmp($row->tingkat_kelas, '2') === 0 ? 'selected' : '' }}>2</option>
                            <option value="3" {{ strcasecmp($row->tingkat_kelas, '3') === 0 ? 'selected' : '' }}>3</option>
                            <option value="4" {{ strcasecmp($row->tingkat_kelas, '4') === 0 ? 'selected' : '' }}>4</option>
                            <option value="5" {{ strcasecmp($row->tingkat_kelas, '5') === 0 ? 'selected' : '' }}>5</option>
                            <option value="6" {{ strcasecmp($row->tingkat_kelas, '6') === 0 ? 'selected' : '' }}>6</option>
                        </select>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('kelas') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
