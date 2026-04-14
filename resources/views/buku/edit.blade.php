@extends('layouts.app')

@section('content')
<div class="container">

<div class="card shadow-sm border-0">
<div class="card-body">

<h5 class="mb-3">Edit Buku</h5>

<form action="{{ route('buku.update',$buku->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="judul" value="{{ $buku->judul }}" class="form-control mb-2">

<select name="pengarang_id" class="form-control mb-2">
    @foreach($pengarangs as $p)
        <option value="{{ $p->id }}" {{ $buku->pengarang_id == $p->id ? 'selected' : '' }}>
            {{ $p->nama }}
        </option>
    @endforeach
</select>

<select name="penerbit_id" class="form-control mb-2">
    @foreach($penerbits as $p)
        <option value="{{ $p->id }}" {{ $buku->penerbit_id == $p->id ? 'selected' : '' }}>
            {{ $p->nama }}
        </option>
    @endforeach
</select>

<select name="kategori_id" class="form-control mb-2">
    @foreach($kategoris as $k)
        <option value="{{ $k->id }}" {{ $buku->kategori_id == $k->id ? 'selected' : '' }}>
            {{ $k->nama }}
        </option>
    @endforeach
</select>

<input type="number" name="stok" value="{{ $buku->stok }}" class="form-control mb-2">

<input type="file" name="cover" class="form-control mb-3">

<button class="btn btn-primary">Update</button>

</form>

</div>
</div>

</div>
@endsection