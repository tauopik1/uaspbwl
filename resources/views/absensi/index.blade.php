    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
            
        <!-- Konten Anda -->
        <script>
            @if(session('alert-success'))
                alert('{{ session('alert-success') }}');
            @endif
        </script>


        <strong><h3>Data Absensi</h3></strong>
        <a href="{{ url('absensi/create') }}" class="btn btn-primary mb-3 float-end"><i class="bi bi-plus"></i> Tambah Baru</a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tanggal Absen</th>
                <th scope="col">Kehadiran</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $absensi)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $absensi->siswa->nama_siswa }}</td>
                <td>{{ $absensi->siswa->kelas->nama_kelas }}</td>
                <td>{{ \Carbon\Carbon::parse($absensi->tanggal_absen)->format('d/m/Y') }}</td>
                <td>{{ $absensi->kehadiran }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('absensi/edit/' . $absensi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('absensi/' . $absensi->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Data Ini ?');">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
    @endsection