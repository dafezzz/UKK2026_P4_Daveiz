@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h5 class="mb-3">Tambah Penerbit</h5>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('penerbit.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Kota</label>
                    <input type="text" name="kota" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <button class="btn btn-primary btn-sm">Simpan</button>
            </form>

        </div>
    </div>

</div>
@endsection