@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="mb-4">
        <h5 class="fw-semibold mb-0">Tambah Anggota</h5>
        <small class="text-muted">Input data anggota baru</small>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">

            <form action="{{ route('anggota.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" name="nis" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kelas</label>
                        <select name="kelas_id" class="form-control">
                            @foreach($kelas as $k)
                            <option value="{{ $k->id }}">
                                {{ $k->tingkat }} {{ $k->jurusan }} {{ $k->nama_kelas }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
                    </div>

                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('anggota.index') }}" class="btn btn-light btn-sm">Batal</a>
                    <button class="btn btn-primary btn-sm px-4">Simpan</button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection