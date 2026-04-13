@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Pengarang</h3>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('pengarang.update', $pengarang->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Pengarang</label>
                    <input type="text" name="nama" value="{{ $pengarang->nama }}" class="form-control">
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="{{ route('pengarang.index') }}" class="btn btn-secondary">Kembali</a>
            </form>

        </div>
    </div>

</div>
@endsection