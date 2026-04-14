@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between mb-4">
        <h5 class="fw-semibold">Kelas</h5>
        <a href="{{ route('kelas.create') }}" class="btn btn-primary btn-sm">Tambah</a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Tingkat</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kelas as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->tingkat }}</td>
                        <td>{{ $k->jurusan }}</td>
                        <td>{{ $k->nama_kelas }}</td>
                        <td class="text-end">
                            <a href="{{ route('kelas.edit',$k->id) }}" class="btn btn-outline-secondary btn-sm">Edit</a>

                            <form action="{{ route('kelas.destroy',$k->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">Belum ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection