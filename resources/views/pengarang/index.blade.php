@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0">Pengarang</h5>
            <small class="text-muted">Manajemen data pengarang</small>
        </div>

        <a href="{{ route('pengarang.create') }}" class="btn btn-primary btn-sm">
            Tambah
        </a>
    </div>
    @if(session('success'))
        <div class="alert alert-success py-2 px-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">

                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th class="text-end" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($pengarang as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->email ?? '-' }}</td>
                            <td>{{ $p->telepon ?? '-' }}</td>
                            <td class="text-end">
                                <a href="{{ route('pengarang.edit', $p->id) }}"
                                   class="btn btn-outline-secondary btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('pengarang.destroy', $p->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Hapus data ini?')">
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

</div>
@endsection