@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0 text-dark">Anggota</h5>
            <small class="text-muted">Manajemen data anggota perpustakaan</small>
        </div>

        <a href="{{ route('anggota.create') }}" 
           class="btn btn-primary btn-sm px-3">
            Tambah
        </a>
    </div>

    <!-- CARD -->
    <div class="card border-0 shadow-sm rounded-3">

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr class="text-muted small">
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th class="text-end" style="width: 160px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($anggotas as $a)
                    <tr>

                        <td class="fw-medium text-dark">
                            {{ $a->user->name }}
                        </td>

                        <td class="text-muted">
                            {{ $a->user->email }}
                        </td>

                        <td>
                            {{ $a->nis }}
                        </td>

                        <td>
                            <span class="badge bg-light text-dark border">
                                {{ $a->kelas->nama_kelas }}
                            </span>
                        </td>

                        <td class="text-end">

                            <!-- EDIT -->
                            <a href="{{ route('anggota.edit',$a->id) }}"
                               class="btn btn-sm btn-outline-secondary px-3">
                                Edit
                            </a>

                            <!-- DELETE -->
                            <form action="{{ route('anggota.destroy',$a->id) }}"
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
                        <td colspan="5" class="text-center py-5 text-muted">
                            <div class="mb-2">
                                <i class="fas fa-users fa-2x opacity-50"></i>
                            </div>
                            Belum ada data anggota
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

<style>
.card {
    border-left: 3px solid #4e73df;
}

.table-hover tbody tr:hover {
    background-color: rgba(78, 115, 223, 0.05);
}

.btn {
    border-radius: 6px;
}

.table td, .table th {
    vertical-align: middle;
}

.opacity-50 {
    opacity: 0.5;
}
</style>

@endsection