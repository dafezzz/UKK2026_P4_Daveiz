@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h5 class="mb-4 fw-semibold">Tambah Pengarang</h5>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('pengarang.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" name="telepon" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ route('pengarang.index') }}" class="btn btn-light btn-sm">Batal</a>

            </form>

        </div>
    </div>

</div>
@endsection