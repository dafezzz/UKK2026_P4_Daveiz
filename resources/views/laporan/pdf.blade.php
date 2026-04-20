<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Perpustakaan</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #222;
        }
        h2 {
            margin: 0 0 6px;
            text-align: center;
        }
        .meta {
            margin-bottom: 12px;
        }
        .section-title {
            margin: 16px 0 6px;
            font-weight: bold;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #555;
            padding: 5px;
            vertical-align: top;
        }
        th {
            background: #f2f2f2;
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
    <h2>{{ ($exportType ?? 'all') === 'denda' ? 'LAPORAN DENDA' : 'LAPORAN PERPUSTAKAAN' }}</h2>

    <div class="meta">
        <div>Periode: {{ $startDate->format('d-m-Y') }} s/d {{ $endDate->format('d-m-Y') }}</div>
        <div>Tanggal Cetak: {{ $printedAt->format('d-m-Y H:i:s') }}</div>
    </div>

    @if(($exportType ?? 'all') === 'denda')
        <div class="section-title">Riwayat Denda</div>
        <table>
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 25%;">Nama User</th>
                    <th style="width: 30%;">Judul Buku</th>
                    <th style="width: 12%;">Hari Terlambat</th>
                    <th style="width: 13%;">Status</th>
                    <th style="width: 15%;">Jumlah Denda</th>
                </tr>
            </thead>
            <tbody>
                @forelse($denda as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ optional($item->peminjaman?->user)->name ?? '-' }}</td>
                        <td>{{ optional($item->peminjaman?->buku)->judul ?? '-' }}</td>
                        <td>{{ $item->hari_terlambat ?? 0 }} hari</td>
                        <td>{{ $item->status ? ucfirst(str_replace('_', ' ', $item->status)) : '-' }}</td>
                        <td class="text-right">Rp {{ number_format((int) ($item->jumlah_denda ?? 0), 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Tidak ada data denda pada periode ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @else
        <div class="section-title">Data Peminjaman</div>
        <table>
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 25%;">Nama User</th>
                    <th style="width: 30%;">Judul Buku</th>
                    <th style="width: 20%;">Tanggal Pinjam</th>
                    <th style="width: 20%;">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($peminjaman as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user?->name ?? '-' }}</td>
                        <td>{{ $item->buku?->judul ?? '-' }}</td>
                        <td>{{ $item->tanggal_pinjam ? \Illuminate\Support\Carbon::parse($item->tanggal_pinjam)->format('d-m-Y') : '-' }}</td>
                        <td>{{ ucfirst($item->status ?? '-') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data peminjaman pada periode ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="section-title">Data Pengembalian</div>
        <table>
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 27%;">Nama User</th>
                    <th style="width: 33%;">Judul Buku</th>
                    <th style="width: 15%;">Tanggal Pengembalian</th>
                    <th style="width: 20%;">Denda</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pengembalian as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ optional($item->peminjaman?->user)->name ?? '-' }}</td>
                        <td>{{ optional($item->peminjaman?->buku)->judul ?? '-' }}</td>
                        <td>{{ $item->tanggal_pengembalian ? \Illuminate\Support\Carbon::parse($item->tanggal_pengembalian)->format('d-m-Y') : '-' }}</td>
                        <td class="text-right">Rp {{ number_format((int) ($item->denda ?? 0), 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data pengembalian pada periode ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @endif

    <div class="section-title text-right">
        Total Pemasukan Denda: Rp {{ number_format((int) $totalDenda, 0, ',', '.') }}
    </div>
</body>
</html>
