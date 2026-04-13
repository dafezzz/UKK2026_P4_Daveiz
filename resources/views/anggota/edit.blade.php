@extends('layouts.app')

@section('content')
<div class="container">

<h3>Edit Anggota</h3>

<form method="POST" action="{{ route('anggota.update',$anggota->id) }}">
@csrf @method('PUT')

<input name="name" value="{{ $anggota->user->name }}" class="form-control mb-2">
<input name="email" value="{{ $anggota->user->email }}" class="form-control mb-2">
<input name="nis" value="{{ $anggota->nis }}" class="form-control mb-2">

<select name="kelas_id" class="form-control mb-2">
    @foreach($kelas as $k)
        <option value="{{ $k->id }}" {{ $anggota->kelas_id == $k->id ? 'selected' : '' }}>
            {{ $k->nama_kelas }}
        </option>
    @endforeach
</select>

<input name="alamat" value="{{ $anggota->alamat }}" class="form-control mb-2">

<button class="btn btn-primary">Update</button>

</form>

</div>
@endsection