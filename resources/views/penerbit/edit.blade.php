@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h5 class="mb-3">Edit Penerbit</h5>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('penerbit.update',$penerbit->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control"
                        value="{{ $penerbit->nama }}">
                </div>

                <div class="mb-3">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control"
                        value="{{ $penerbit->kode }}">
                </div>

                <div class="mb-3">
                    <label>Kota</label>
                    <input type="text" name="kota" class="form-control"
                        value="{{ $penerbit->kota }}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control">{{ $penerbit->alamat }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control"
                        value="{{ $penerbit->telepon }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ $penerbit->email }}">
                </div>

                <button class="btn btn-primary btn-sm">Update</button>
            </form>

        </div>
    </div>

</div>
@endsection