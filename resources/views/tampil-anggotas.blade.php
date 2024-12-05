<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan Data Anggota Perpustakaan</title>
</head>
<body>
    <div class="container">
        <h3 class="mb-3">DATA ANGGOTA KLINIK</h3>
        <h3>==============================</h3>
        <table border="1" cellpadding="10">
            <tr>
                <th>NO ANGGOTA</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>Jurusan</th>
            </tr>
            <div class="row">
                <div class="m-auto">
                    @forelse ($anggotas as $anggota)
                        <tr>
                            <td>{{ $anggota->no_anggota }}</td>
                            <td>{{ $anggota->nama }}</td>
                            <td>{{ $anggota->alamat }}</td>
                            <td>{{ $anggota->jurusan }}</td>
                        </tr>
                    @empty
                        <div class="alert alert-dark d-line-block">TIDAK ADA DATA</div>
                    @endforelse
                </div>
            </div>
        </table>
    </div>
</body>
</html>