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
    @if (session('status'))
        <p style="font-size: 20px; color:green">{{session('status')}}</p>
    @endif
    <h1>Data Mapel Smk Amaliah</h1>
    <a href="{{ 'mapel/create' }}" style="text-align: center;">Tambah Data</a>
    <br>
    <table>
        <tr>
            <th>NO</th>
            <th>Kode Mapel</th>
            <th>Nama Mapel</th>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Tingkat</th>
            <th>Action</th>
        </tr>
        <tbody>

            @foreach ($mapel as $items)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $items->kode_mapel }}</td>
                    <td>{{ $items->nama_mapel }}</td>
                    <td>{{ $items->kode_jurusan }}</td>
                    <td>{{ $items->nama_jurusan }}</td>
                    <td>{{ $items->tingkat }}</td>

                    <td><a href="/mapel/edit/{{$items->id 
                    }}">Edit</a>
                    <a href="/mapel/delete/{{$items->id 
                    }}" onclick="return confirm('Are You Sure?')">Delete</a></td>
                <tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
