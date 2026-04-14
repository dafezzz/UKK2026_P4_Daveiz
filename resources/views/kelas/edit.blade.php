@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h5 class="mb-4">Edit Kelas</h5>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('kelas.update',$kelas->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>Tingkat</label>
                    <input type="text" name="tingkat" class="form-control" value="{{ $kelas->tingkat }}">
                </div>

                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="{{ $kelas->jurusan }}">
                </div>

                <div class="mb-3">
                    <label>Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}">
                </div>

                <button class="btn btn-primary btn-sm">Update</button>
            </form>

        </div>
    </div>

</div>
@endsection