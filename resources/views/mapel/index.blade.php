<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th,
        tr {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Siswa Smk Amaliah</h1>
    <a href="{{ 'siswa/create' }}" style="text-align: center;">Tambah Data</a>
    <br>
    <table>
        <tr>
            <th>NO</th>
            <th>Nis</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Asal Sekolah</th>
            <th>Jurusan</th>
            <th>Option</th>
        </tr>
        <tbody>

            @foreach ($mapel as $items)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $items->nis }}</td>
                    <td>{{ $items->nama }}</td>
                    <td>{{ $items->alamat }}</td>
                    <td>{{ $items->no_telp }}</td>
                    <td>{{ $items->asal_sekolah }}</td>
                    <td>{{ $items->jurusan }}</td>
                    <td><a href="/siswa/edit/{{$items->id 
                    }}">Edit</a></td>
                <tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
