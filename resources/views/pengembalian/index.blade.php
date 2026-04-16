@php
    $layout = auth()->user()->role === 'anggota' ? 'layouts.app-user' : 'layouts.app';
@endphp

@extends($layout)

@section('content')
<div class="container-fluid">

    <!-- HEADER -->
    <div class="mb-4">
        <h5 class="fw-semibold mb-0 text-dark">Pengembalian Buku</h5>
        <small class="text-muted">Ajukan pengembalian buku yang sedang dipinjam</small>
    </div>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success py-2 px-3 small">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger py-2 px-3 small">
            {{ session('error') }}
        </div>
    @endif

    <!-- LIST -->
    <div class="row">
        @forelse($data as $d)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

            <div class="card border-0 shadow-sm rounded-3 h-100 book-card">

                <!-- COVER -->
                <div class="book-cover position-relative">
                    <img src="{{ $d->buku->cover ? asset('storage/'.$d->buku->cover) : 'https://via.placeholder.com/300x200' }}"
                         class="cover-img">

                    <!-- STATUS BADGE -->
                    @if($d->status == 'dipinjam')
                        <span class="badge status-badge bg-primary">Dipinjam</span>
                    @elseif($d->status == 'pengembalian')
                        <span class="badge status-badge bg-warning text-dark">Pending</span>
                    @endif
                </div>

                <!-- BODY -->
                <div class="card-body">

                    <div class="book-title mb-2">
                        {{ $d->buku->judul }}
                    </div>

                    <div class="book-meta">
                        <div><span>Pengarang</span> {{ $d->buku->pengarang->nama ?? '-' }}</div>
                        <div><span>Pinjam</span> {{ $d->tanggal_pinjam }}</div>
                        <div><span>Tempo</span> {{ $d->tanggal_jatuh_tempo ?? '-' }}</div>
                    </div>

                 @php
    $telat = 0;

    if ($d->tanggal_jatuh_tempo && now()->gt($d->tanggal_jatuh_tempo)) {
        $telat = now()->diffInDays($d->tanggal_jatuh_tempo);
    }
           @endphp

                    @if($telat > 0 && $d->status == 'dipinjam')
                        <div class="late-box mt-3">
                            Terlambat {{ $telat }} hari
                        </div>
                    @endif

                </div>

                <!-- FOOTER -->
                <div class="card-footer bg-white border-0 pt-0">

                    @if($d->status == 'dipinjam')

                        @php
                            $routePengembalian = auth()->user()->role === 'anggota'
                                ? route('pengembalian.user.store', $d->id)
                                : route('pengembalian.store', $d->id);
                        @endphp

                        <form action="{{ $routePengembalian }}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm w-100">
                                Ajukan Pengembalian
                            </button>
                        </form>

                    @else
                        <button class="btn btn-secondary btn-sm w-100" disabled>
                            Menunggu Konfirmasi
                        </button>
                    @endif

                </div>

            </div>

        </div>
        @empty
        <div class="col-12 text-center py-5 text-muted">
            <i class="fas fa-box-open fa-2x mb-2 opacity-50"></i>
            <div>Tidak ada buku yang bisa dikembalikan</div>
        </div>
        @endforelse
    </div>

</div>

<style>

/* CARD */
.book-card {
    border-left: 3px solid #4e73df;
    transition: all 0.2s ease;
}
.book-card:hover {
    transform: translateY(-5px);
}

/* COVER */
.book-cover {
    padding: 12px 12px 0;
}
.cover-img {
    width: 100%;
    height: 190px;
    object-fit: cover;
    border-radius: 12px;
}

/* STATUS */
.status-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 0.7rem;
    padding: 5px 8px;
}

/* TITLE */
.book-title {
    font-size: 1rem;
    font-weight: 600;
    color: #2d3748;
}

/* META */
.book-meta {
    font-size: 0.85rem;
    color: #6c757d;
    line-height: 1.7;
}
.book-meta span {
    display: inline-block;
    width: 85px;
    font-weight: 600;
    color: #495057;
}

/* TELAT */
.late-box {
    background: #fee2e2;
    color: #991b1b;
    padding: 7px 12px;
    border-radius: 6px;
    font-size: 0.78rem;
    font-weight: 500;
}

/* BUTTON */
.btn {
    border-radius: 6px;
    font-size: 0.85rem;
}

</style>

@endsection