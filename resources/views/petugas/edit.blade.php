@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="mb-4">
        <h5 class="fw-semibold mb-0 text-dark">Edit Petugas</h5>
        <small class="text-muted">Perbarui data petugas</small>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">

            <form action="{{ route('petugas.update',$petugas->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name"
                            value="{{ old('name', $petugas->user->name) }}"
                            class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email"
                            value="{{ old('email', $petugas->user->email) }}"
                            class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">NIP</label>
                        <input type="text" name="nip"
                            value="{{ old('nip', $petugas->nip) }}"
                            class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">No HP</label>
                        <input type="text" name="no_hp"
                            value="{{ old('no_hp', $petugas->no_hp) }}"
                            class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat"
                            class="form-control"
                            rows="3">{{ old('alamat', $petugas->alamat) }}</textarea>
                    </div>

                </div>

                <div class="mt-4 d-flex justify-content-end gap-2">
                    <a href="{{ route('petugas.index') }}" class="btn btn-light px-4">Batal</a>
                    <button class="btn btn-primary px-4">Update</button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection