<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File-Upload File atau Dokument</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pN1yT2bRjXh0JMhjY6W+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>
        <form action="{{ url('file-upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_gambar" class="form-label">Nama Gambar</label>
            <input type="text" class="form-control" id="nama_gambar" name="nama_gambar" value="{{ old('nama_gambar') }}">
        </div>
            @error('nama_gambar')
                <div class="text-danger">{{ $massage }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="gambar_file" class="form-label">Gambar Profile</label>
            <input type="file" class="form-control" id="gambar_profile" name="gambar_profile">
            @error('gambar_profile')
                <div class="text-danger">{{ $massage }}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-2">Upload</button>
        </form>
</body>
</html>