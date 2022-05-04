<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <h1>Perbarui Data Mahasiswa</h1>
    <form action="{{route('update' , ['id'=>$mahasiswa->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" value="{{ $mahasiswa->nama}}" placeholder="Masukkan Nama">

            @error('nama')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input name= "nim" type="number" class="form-control" id="nim" value="{{ $mahasiswa->nim }}" placeholder="Masukkan NIM">

            @error('nim')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input name= "umur" type="number" class="form-control" id="umur" value="{{ $mahasiswa->umur }}" placeholder="Masukkan Umur">

            @error('umur')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Lahir</label>
            <input name= "tanggal" type="date" class="form-control" id="tanggal" value="{{ $mahasiswa->tanggal }}">

            @error('tanggal')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota Kelahiran</label>
            <input name= "kota" type="text" class="form-control" id="kota" value="{{ $mahasiswa->kota }}" placeholder="Masukkan Kota Kelahiran">

            @error('kota')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input name= "jurusan" type="text" class="form-control" id="jurusan" value="{{$mahasiswa->jurusan}}" placeholder="Masukkan Jurusan Kuliah">

            @error('jurusan')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>


</body>
</html>
