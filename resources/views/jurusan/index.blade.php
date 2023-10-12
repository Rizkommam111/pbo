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
    <h1>Data Jurusan Smk Amaliah</h1>
    <a href="{{ 'jurusan/create' }}" style="text-align: center;">Tambah Data</a>
    <br>
    <table>
        <tr>
            <th>NO</th>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Tingkat</th>
        </tr>
        <tbody>

            @foreach ($jurusan as $items)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $items->kode_jurusan }}</td>
                    <td>{{ $items->nama_jurusan }}</td>
                    <td>{{ $items->tingkat }}</td>
                    <td><a href="/jurusan/edit/{{$items->id 
                    }}">Edit</a></td>
                <tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
