@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h5 class="mb-4 fw-semibold">Edit Pengarang</h5>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('pengarang.update', $pengarang->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control"
                           value="{{ $pengarang->nama }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ $pengarang->email }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" name="telepon" class="form-control"
                           value="{{ $pengarang->telepon }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control">{{ $pengarang->alamat }}</textarea>
                </div>

                <button class="btn btn-primary btn-sm">Update</button>
                <a href="{{ route('pengarang.index') }}" class="btn btn-light btn-sm">Batal</a>

            </form>

        </div>
    </div>

</div>
@endsection