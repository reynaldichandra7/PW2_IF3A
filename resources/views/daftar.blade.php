<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pendaftaran Anggota Perpustakaan</title>
</head>
<body>
    <form action="{{ url('/proses-form') }}" method="GET">
    <h2>Form Pendaftaran Anggota Perpustakaan</h2>
    <h2>-------------------------------------</h2>
<p>
    <label>No Anggota</label>
    <input type="text" name="nomor" placeholder="Nomor Anggota"></p>
    </form>

<p>
    <label>Nama</label>
    <input type="text" name="nama" placeholder="Nama..."></p>
    </form>

<p>
    <label>Alamat</label>
    <input type="text" name="alamat" placeholder="Alamat..."></p>
    </form>

<p>
    <label>Jurusan</label>
    <input type="text" name="jurusan" placeholder="Jurusan..."></p>
    </form>

<p>
    <label>Tgl Daftar</label>
    <input type="date" name="tgl" placeholder="Tanggal Daftar..."></p>
    </form>
<p>
    <label>No Telpon</label>
    <input type="text" name="notelp" placeholder="Nomor Telpon..."></p>
    </form>
<p>
    <input type="submit" name="submit" value="DAFTAR"></p>
    <input type="reset" name="reset" value="BATAL"></p>
</body>
</html>