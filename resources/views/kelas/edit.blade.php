@extends('layouts.app')

@section('content')
<div class="container">

    <h4>Edit Kelas</h4>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Kelas</label>
                    <input type="text" name="nama_kelas"
                           class="form-control @error('nama_kelas') is-invalid @enderror"
                           value="{{ old('nama_kelas', $kelas->nama_kelas) }}">

                    @error('nama_kelas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection