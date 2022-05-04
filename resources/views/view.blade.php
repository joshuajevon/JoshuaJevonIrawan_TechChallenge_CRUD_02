<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/view.css">
</head>
<body>

    <h1>Lihat Data Mahasiswa</h1>

    <form class="insert" action="{{route('insert')}}" method="get">
        <button class="btn btn-primary" type="submit">Insert Mahasiswa</button>
    </form>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Umur</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Kota</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <th scope="row">{{ $mahasiswa->id }}</th>
                    <td>
                        {{$mahasiswa->nama}}
                    </td>
                    <td>
                        {{$mahasiswa->nim}}
                    </td>
                    <td>
                        {{$mahasiswa->umur}}
                    </td>
                    <td>
                        {{$mahasiswa->tanggal}}
                    </td>
                    <td>
                        {{$mahasiswa->kota}}
                    </td>
                    <td>
                        {{$mahasiswa->jurusan}}
                    </td>
                    <td >
                        <a href="{{route('updateMahasiswa', ['id'=>$mahasiswa->id])}}"><button type="submit" class="btn btn-success">Update</button></a>

                        <form action="{{route('delete', ['id' => $mahasiswa->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
