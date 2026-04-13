@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0 text-dark">Pengarang</h5>
            <small class="text-muted">Manajemen data pengarang buku</small>
        </div>

        <a href="{{ route('pengarang.create') }}" 
           class="btn btn-primary btn-sm px-3">
            Tambah
        </a>
    </div>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm py-2 px-3">
            {{ session('success') }}
        </div>
    @endif

    <!-- CARD -->
    <div class="card border-0 shadow-sm rounded-3">

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr class="text-muted small">
                        <th style="width: 60px;">No</th>
                        <th>Nama Pengarang</th>
                        <th class="text-end" style="width: 160px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($pengarang as $p)
                    <tr>

                        <td class="text-muted">
                            {{ $loop->iteration }}
                        </td>

                        <td class="fw-medium text-dark">
                            {{ $p->nama }}
                        </td>

                        <td class="text-end">

                            <!-- EDIT -->
                            <a href="{{ route('pengarang.edit', $p->id) }}"
                               class="btn btn-sm btn-outline-secondary px-3">
                                Edit
                            </a>

                            <!-- DELETE -->
                            <form action="{{ route('pengarang.destroy', $p->id) }}"
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
                        <td colspan="3" class="text-center py-5 text-muted">
                            <div class="mb-2">
                                <i class="fas fa-book-open fa-2x opacity-50"></i>
                            </div>
                            Belum ada data pengarang
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

<style>
/* =========================
   PREMIUM TOUCH (SUBTLE)
========================= */

/* Card biar ada aksen elegan */
.card {
    border-left: 3px solid #4e73df;
}

/* Hover row lebih smooth */
.table-hover tbody tr:hover {
    background-color: rgba(78, 115, 223, 0.05);
}

/* Button lebih halus */
.btn {
    border-radius: 6px;
}

/* Typography lebih rapi */
.table td, .table th {
    vertical-align: middle;
}

/* Icon empty state */
.opacity-50 {
    opacity: 0.5;
}
</style>

@endsection