@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0 text-dark">Rak Buku</h5>
            <small class="text-muted">Kelola lokasi penyimpanan buku</small>
        </div>
        <button class="btn btn-primary btn-sm px-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
            Tambah Rak
        </button>
    </div>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success py-2 px-3">
            {{ session('success') }}
        </div>
    @endif

    <!-- CARD -->
    <div class="card border-0 shadow-sm rounded-3">

        <div class="table-responsive">
            <table class="table align-middle mb-0">

                <!-- HEADER -->
                <thead class="table-light">
                    <tr class="text-muted small">
                        <th style="width:60px;">No</th>
                        <th>Kode Rak</th>
                        <th>Nama Rak</th>
                        <th>Keterangan</th>
                        <th class="text-center" style="width:120px;">Aksi</th>
                    </tr>
                </thead>

                <!-- BODY -->
                <tbody>
                @forelse($raks as $r)
                <tr>

                    <td class="text-muted">{{ $loop->iteration }}</td>

                    <td class="fw-medium text-dark">
                        {{ $r->kode_rak }}
                    </td>

                    <td>
                        {{ $r->nama_rak }}
                    </td>

                    <td>
                        <small class="text-muted">{{ $r->keterangan ?? '-' }}</small>
                    </td>

                    <!-- AKSI -->
                    <td>
                        <div class="d-flex justify-content-center gap-2">

                            <!-- EDIT -->
                            <button class="btn btn-outline-primary btn-sm"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalEdit{{ $r->id }}"
                                title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>

                            <!-- DELETE -->
                            <form action="{{ route('rak.destroy',$r->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus rak ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>

                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">
                        <div class="mb-2">
                            <i class="fas fa-inbox fa-2x opacity-50"></i>
                        </div>
                        Belum ada rak
                    </td>
                </tr>
                @endforelse

                </tbody>
            </table>
        </div>

    </div>

</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow rounded-3">

      <div class="modal-header border-0">
        <h6 class="modal-title fw-semibold">Tambah Rak Buku</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="{{ route('rak.store') }}" method="POST">
      @csrf

      <div class="modal-body">

        <input type="text" name="kode_rak" class="form-control mb-2" placeholder="Kode Rak (cth: R01, A1)" required>

        <input type="text" name="nama_rak" class="form-control mb-2" placeholder="Nama Rak (cth: Rak Utama)" required>

        <textarea name="keterangan" class="form-control mb-2" placeholder="Keterangan (Opsional)" rows="3"></textarea>

      </div>

      <div class="modal-footer border-0">
        <button type="button" class="btn btn-light btn-sm px-3" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary btn-sm px-3">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>

<!-- MODAL EDIT -->
@foreach($raks as $r)
<div class="modal fade" id="modalEdit{{ $r->id }}" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow rounded-3">

      <div class="modal-header border-0">
        <h6 class="modal-title fw-semibold">Edit Rak Buku</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="{{ route('rak.update', $r->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="modal-body">

        <input type="text" name="kode_rak" value="{{ $r->kode_rak }}" class="form-control mb-2" placeholder="Kode Rak" required>

        <input type="text" name="nama_rak" value="{{ $r->nama_rak }}" class="form-control mb-2" placeholder="Nama Rak" required>

        <textarea name="keterangan" class="form-control mb-2" placeholder="Keterangan" rows="3">{{ $r->keterangan }}</textarea>

      </div>

      <div class="modal-footer border-0">
        <button type="button" class="btn btn-light btn-sm px-3" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
      </div>

      </form>

    </div>
  </div>
</div>
@endforeach

<style>
.table tbody tr:hover {
    background: rgba(0,0,0,0.02);
}
</style>

@endsection
