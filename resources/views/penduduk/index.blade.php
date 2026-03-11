<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Data Penduduk</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        .actions { margin-bottom: 20px; display: flex; gap: 10px; }
        .search-box { flex-grow: 1; }
    </style>
</head>
<body>

    <h2>Data Penduduk</h2>

    <div class="actions">
        <form action="{{ route('penduduk.index') }}" method="GET" class="search-box">
            <input type="text" name="search" placeholder="Cari nama atau pekerjaan..." value="{{ request('search') }}">
            <button type="submit">Cari</button>
            <a href="{{ route('penduduk.index') }}"><button type="button">Reset</button></a>
        </form>

        <div>
            <a href="{{ route('penduduk.export.csv') }}"><button>Export CSV</button></a>
            <a href="{{ route('penduduk.export.excel') }}"><button>Export XLSX</button></a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penduduks as $penduduk)
                <tr>
                    <td>{{ $penduduk->nama }}</td>
                    <td>{{ $penduduk->usia }}</td>
                    <td>{{ $penduduk->alamat }}</td>
                    <td>{{ $penduduk->pekerjaan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Tidak ada data ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>