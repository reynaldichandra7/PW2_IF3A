<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Siswa</title>
</head>
<body>
    <div class="container">
        <h3 class="mb-3">Form Siswa</h3>
        <h3>==============================</h3>
        <table border="1" cellpadding="10">
            <tr>
                <th>NPM</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TELPON</th>
            </tr>
            <div class="row">
                <div class="m-auto">
                    @forelse ($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->npm }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->telpon }}</td>
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