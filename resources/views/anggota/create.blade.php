@extends('layouts.app')

@section('content')
<div class="container">

<h3>Tambah Anggota</h3>

<form method="POST" action="{{ route('anggota.store') }}">
@csrf

<input name="name" placeholder="Nama" class="form-control mb-2">
<input name="email" placeholder="Email" class="form-control mb-2">
<input name="nis" placeholder="NIS" class="form-control mb-2">

<select name="kelas_id" class="form-control mb-2">
    @foreach($kelas as $k)
        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
    @endforeach
</select>

<input name="alamat" placeholder="Alamat" class="form-control mb-2">

<button class="btn btn-success">Simpan</button>

</form>

</div>
@endsection