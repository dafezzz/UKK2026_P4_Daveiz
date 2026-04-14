@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h5 class="mb-4">Tambah Kelas</h5>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('kelas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Tingkat</label>
                    <select name="tingkat" class="form-control">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control">
                </div>

                <button class="btn btn-primary btn-sm">Simpan</button>
            </form>

        </div>
    </div>

</div>
@endsection