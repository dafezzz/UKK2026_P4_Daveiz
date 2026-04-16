@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0 text-dark">Persetujuan Peminjaman</h5>
            <small class="text-muted">Kelola pengajuan & pengembalian buku</small>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success py-2 px-3 small">
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
                        <th>Nama</th>
                        <th>Buku</th>
                        <th>Status</th>
                        <th class="text-center" style="width:240px;">Aksi</th>
                    </tr>
                </thead>

                <!-- BODY -->
                <tbody>
                @forelse($data as $d)
                <tr>

                    <td class="text-muted">{{ $loop->iteration }}</td>

                    <td class="fw-medium text-dark">
                        {{ $d->user->name }}
                    </td>

                    <td>
                        <div class="fw-medium text-dark">
                            {{ $d->buku->judul }}
                        </div>
                        <small class="text-muted">
                            {{ $d->buku->pengarang->nama ?? '-' }}
                        </small>
                    </td>

                    <!-- STATUS -->
                    <td>
                        <span class="status-badge {{ $d->status }}">
                            {{ ucfirst($d->status) }}
                        </span>
                    </td>

                    <!-- AKSI (FIX TENGAH) -->
                    <td>
                        <div class="d-flex justify-content-center align-items-center gap-2">

                            @if($d->status == 'pending')

                                <form action="{{ route('approval.approve',$d->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-success btn-sm px-3">
                                        Setujui
                                    </button>
                                </form>

                                <form action="{{ route('approval.reject',$d->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm px-3">
                                        Tolak
                                    </button>
                                </form>

                            @endif

                            @if($d->status == 'pengembalian')
                                <button 
                                    class="btn btn-primary btn-sm px-3 btn-konfirmasi"
                                    data-id="{{ $d->id }}">
                                    Konfirmasi
                                </button>
                            @endif

                        </div>
                    </td>

                </tr>

                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">
                        <div class="mb-2">
                            <i class="fas fa-inbox fa-2x opacity-50"></i>
                        </div>
                        Tidak ada pengajuan
                    </td>
                </tr>
                @endforelse

                </tbody>
            </table>
        </div>

    </div>

</div>

<!-- MODAL DENDA -->
<div class="modal fade" id="modalDenda">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow rounded-3">

      <div class="modal-header border-0">
        <h6 class="modal-title fw-semibold">⚠️ Denda Keterlambatan</h6>
      </div>

      <div class="modal-body pt-0">
        <div class="bg-light rounded p-3 small">
            <div class="mb-1">
                📅 Terlambat: <strong id="hari" class="text-danger"></strong> hari
            </div>
            <div>
                💰 Denda: <strong id="denda" class="text-danger"></strong>
            </div>
            <div class="mt-2 text-muted">
                Rp 5.000 per hari
            </div>
        </div>
      </div>

      <div class="modal-footer border-0">
        <button class="btn btn-light btn-sm px-3" data-bs-dismiss="modal">
            Batal
        </button>

        <form method="POST" id="formSelesai">
            @csrf
            <input type="hidden" name="hari_terlambat" id="inputHari">
            <input type="hidden" name="jumlah_denda" id="inputDenda">
            <button type="submit" class="btn btn-success btn-sm px-3">
                Bayar & Selesai
            </button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- JS -->
<script>
document.querySelectorAll('.btn-konfirmasi').forEach(btn => {
    btn.addEventListener('click', function(){

        let id = this.dataset.id;

        fetch(`/approval/${id}/konfirmasi`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(res => {

            if(res.success && !res.has_denda){
                Swal.fire('Sukses', 'Pengembalian selesai tanpa denda', 'success')
                    .then(() => location.reload());
            }else if(res.has_denda){
                // Ada denda - tampilkan modal
                document.getElementById('hari').innerText = res.hari_terlambat;
                document.getElementById('denda').innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(res.jumlah_denda);
                
                // Set input values
                document.getElementById('inputHari').value = res.hari_terlambat;
                document.getElementById('inputDenda').value = res.jumlah_denda;

                document.getElementById('formSelesai').action = `/approval/${res.peminjaman_id}/selesai`;

                new bootstrap.Modal(document.getElementById('modalDenda')).show();
            }

        })
        .catch(err => {
            Swal.fire('Error', 'Terjadi kesalahan', 'error');
            console.error(err);
        });

    });
});
</script>


<style>

/* ROW */
.table tbody tr {
    transition: all 0.15s ease;
}
.table tbody tr:hover {
    background: rgba(0,0,0,0.02);
}

/* STATUS */
.status-badge {
    padding: 5px 10px;
    border-radius: 6px;
    font-size: 0.75rem;
    font-weight: 500;
}

.status-badge.pending { background: #fff3cd; color: #856404; }
.status-badge.dipinjam { background: #dbeafe; color: #1e40af; }
.status-badge.pengembalian { background: #e0f2fe; color: #0369a1; }
.status-badge.selesai { background: #dcfce7; color: #166534; }
.status-badge.ditolak { background: #fee2e2; color: #991b1b; }

/* BUTTON */
.btn {
    border-radius: 6px;
}

</style>

@endsection