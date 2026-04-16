@extends('layouts.app')

@section('content')
<div class="container">

<div class="card shadow-sm border-0">
<div class="card-body">

<h5 class="mb-3">Tambah Buku</h5>

<form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="judul" class="form-control mb-2" placeholder="Judul">

<select name="pengarang_id" class="form-control mb-2">
    <option disabled selected>Pilih Pengarang</option>
    @foreach($pengarangs as $p)
        <option value="{{ $p->id }}">{{ $p->nama }}</option>
    @endforeach
</select>

<select name="penerbit_id" class="form-control mb-2">
    <option disabled selected>Pilih Penerbit</option>
    @foreach($penerbits as $p)
        <option value="{{ $p->id }}">{{ $p->nama }}</option>
    @endforeach
</select>

<select name="kategori_id" class="form-control mb-2">
    <option disabled selected>Pilih Kategori</option>
    @foreach($kategoris as $k)
        <option value="{{ $k->id }}">{{ $k->nama }}</option>
    @endforeach
</select>

<select name="rak_id" class="form-control mb-2">
    <option value="" selected>Pilih Rak (Opsional)</option>
    @foreach($raks as $r)
        <option value="{{ $r->id }}">{{ $r->kode_rak }} - {{ $r->nama_rak }}</option>
    @endforeach
</select>

<input type="number" name="stok" class="form-control mb-2" placeholder="Stok">

<input type="file" name="cover" class="form-control mb-3">

<button class="btn btn-primary">Simpan</button>

</form>

</div>
</div>

</div>
@endsection