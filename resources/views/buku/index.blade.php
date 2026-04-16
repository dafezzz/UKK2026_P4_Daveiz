@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-semibold mb-0 text-dark">Buku</h5>
            <small class="text-muted">Kelola data buku</small>
        </div>

        <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm px-3">
            Tambah
        </a>
    </div>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success py-2 px-3">
            {{ session('success') }}
        </div>
    @endif

    <!-- LIST -->
    <div class="row">
        @forelse($bukus as $b)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

            <div class="card border-0 shadow-sm rounded-3 h-100 book-card">

                <!-- COVER -->
                <div class="position-relative book-cover">
                    <img src="{{ $b->cover ? asset('storage/'.$b->cover) : 'https://via.placeholder.com/300x200' }}"
                         class="w-100 cover-img">

                    <!-- STATUS -->
                    <span class="badge position-absolute top-0 end-0 m-2 
                        {{ $b->stok > 0 ? 'bg-success' : 'bg-secondary' }}">
                        {{ $b->stok > 0 ? 'Tersedia' : 'Habis' }}
                    </span>
                </div>

                <!-- BODY -->
                <div class="card-body">

                    <!-- JUDUL -->
                    <div class="book-title mb-2" title="{{ $b->judul }}">
                        {{ $b->judul }}
                    </div>

                    <!-- DETAIL -->
                    <div class="book-meta">
                        <div><span>Pengarang</span> {{ $b->pengarang->nama ?? '-' }}</div>
                        <div><span>Penerbit</span> {{ $b->penerbit->nama ?? '-' }}</div>
                        <div><span>Kategori</span> {{ $b->kategori->nama ?? '-' }}</div>
                        @if($b->rak)
                        <div><span>Rak</span> {{ $b->rak->kode_rak }} ({{ $b->rak->nama_rak }})</div>
                        @endif
                    </div>

                    <!-- STOK -->
                    <div class="mt-3">
                        <span class="badge bg-light text-dark border">
                            Stok: {{ $b->stok }}
                        </span>
                    </div>

                </div>

                <!-- FOOTER -->
                <div class="card-footer bg-white border-0 pt-0">

                    <div class="d-flex gap-2">

                        <!-- EDIT -->
                        <a href="{{ route('buku.edit',$b->id) }}"
                           class="btn btn-outline-primary btn-sm w-100">
                            Edit
                        </a>

                        <!-- DELETE -->
                        <form action="{{ route('buku.destroy',$b->id) }}" method="POST" class="w-100"
                              onsubmit="return confirm('Yakin hapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm w-100">
                                Hapus
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </div>
        @empty
        <div class="col-12 text-center py-5 text-muted">
            <div class="mb-2">
                <i class="fas fa-book fa-2x opacity-50"></i>
            </div>
            Belum ada data buku
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
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.2s ease;
}

.book-card:hover .cover-img {
    transform: scale(1.03);
}

/* TITLE */
.book-title {
    font-size: 0.95rem;
    font-weight: 600;
    color: #2d3748;
    line-height: 1.4;
}

/* META */
.book-meta {
    font-size: 0.82rem;
    color: #6c757d;
    line-height: 1.6;
}

.book-meta span {
    display: inline-block;
    width: 75px;
    font-weight: 600;
    color: #495057;
}

/* BUTTON */
.btn {
    border-radius: 6px;
    font-size: 0.85rem;
}

/* BADGE */
.badge {
    font-weight: 500;
    font-size: 0.72rem;
}

</style>

@endsection