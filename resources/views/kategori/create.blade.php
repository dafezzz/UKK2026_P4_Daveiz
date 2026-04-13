@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Kategori</h3>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf

        <!-- DROPDOWN -->
        <div class="mb-3">
            <label>Pilih Kategori</label>
            <select class="form-control" id="kategoriSelect">
                <option value="">-- pilih kategori --</option>
                <option>Novel</option>
                <option>Pelajaran</option>
                <option>Sejarah</option>
                <option>Teknologi</option>
                <option>Sains</option>
                <option>Agama</option>
                <option>Biografi</option>
                <option>Komik</option>
                <option>Ensiklopedia</option>
                <option>Bahasa</option>
                <option>Ekonomi</option>
                <option>Psikologi</option>
            </select>
        </div>

        <!-- INPUT (AUTO ISI DARI DROPDOWN) -->
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="nama" id="namaKategori" class="form-control" placeholder="atau ketik manual">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>

<script>
document.getElementById('kategoriSelect').addEventListener('change', function() {
    document.getElementById('namaKategori').value = this.value;
});
</script>

@endsection