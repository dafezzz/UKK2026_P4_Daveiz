@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0">Penerbit</h5>
            <small class="text-muted">Manajemen data penerbit</small>
        </div>

        <a href="{{ route('penerbit.create') }}" class="btn btn-primary btn-sm">
            Tambah
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success py-2 px-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th style="width:60px">No</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Kota</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($penerbits as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="fw-medium">{{ $p->nama }}</td>
                        <td>{{ $p->kode }}</td>
                        <td>{{ $p->kota ?? '-' }}</td>

                        <td class="text-end">
                            <a href="{{ route('penerbit.edit',$p->id) }}"
                               class="btn btn-outline-secondary btn-sm">Edit</a>

                            <form action="{{ route('penerbit.destroy',$p->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Hapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Belum ada data
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>
@endsection