@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Tambah Pengarang</h3>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('pengarang.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Pengarang</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('pengarang.index') }}" class="btn btn-secondary">Kembali</a>
            </form>

        </div>
    </div>

</div>
@endsection