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


        <strong><h3>Data Kelas</h3></strong>
        <a href="{{ url('kelas/create') }}" class="btn btn-primary mb-3 float-end"><i class="bi bi-plus"></i> Tambah Baru</a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Tingkat Kelas</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $kelas)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $kelas->nama_kelas }}</td>
                <td>{{ $kelas->tingkat_kelas }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('kelas/edit/' . $kelas->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('kelas/' . $kelas->id) }}" method="post">
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