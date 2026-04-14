@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0 text-dark">Petugas</h5>
            <small class="text-muted">Manajemen data petugas</small>
        </div>

        <a href="{{ route('petugas.create') }}" 
           class="btn btn-primary btn-sm px-3">
            Tambah
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success py-2 px-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-3">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr class="text-muted small">
                        <th style="width: 60px;">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIP</th>
                        <th>No HP</th>
                        <th class="text-end" style="width: 170px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($petugas as $p)
                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td class="fw-medium text-dark">
                            {{ $p->user->name }}
                        </td>

                        <td class="text-muted">
                            {{ $p->user->email }}
                        </td>

                        <td>{{ $p->nip }}</td>

                        <td>{{ $p->no_hp ?? '-' }}</td>

                        <td class="text-end">

                            <a href="{{ route('petugas.edit',$p->id) }}"
                               class="btn btn-sm btn-outline-secondary px-3">
                                Edit
                            </a>

                            <form action="{{ route('petugas.destroy',$p->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button 
                                    class="btn btn-sm btn-outline-danger px-3"
                                    onclick="return confirm('Hapus data ini?')">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <div class="mb-2">
                                <i class="fas fa-user-tie fa-2x opacity-50"></i>
                            </div>
                            Belum ada data petugas
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

<style>
.card { border-left: 3px solid #4e73df; }
.table-hover tbody tr:hover { background-color: rgba(78, 115, 223, 0.05); }
.btn { border-radius: 6px; }
.table td, .table th { vertical-align: middle; }
.opacity-50 { opacity: 0.5; }
</style>

@endsection