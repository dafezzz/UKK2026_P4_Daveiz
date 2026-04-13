@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Kategori</h3>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- DROPDOWN -->
        <div class="mb-3">
            <label>Pilih Kategori</label>
            <select class="form-control" id="kategoriSelect">
                <option value="">-- pilih kategori --</option>

                @php
                    $listKategori = [
                        'Novel','Pelajaran','Sejarah','Teknologi','Sains',
                        'Agama','Biografi','Komik','Ensiklopedia',
                        'Bahasa','Ekonomi','Psikologi'
                    ];
                @endphp

                @foreach($listKategori as $item)
                    <option value="{{ $item }}"
                        {{ $kategori->nama == $item ? 'selected' : '' }}>
                        {{ $item }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- INPUT -->
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text"
                   name="nama"
                   id="namaKategori"
                   class="form-control"
                   value="{{ $kategori->nama }}">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>

<script>
document.getElementById('kategoriSelect').addEventListener('change', function() {
    document.getElementById('namaKategori').value = this.value;
});
</script>

@endsection