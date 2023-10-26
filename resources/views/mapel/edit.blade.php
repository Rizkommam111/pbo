<!DOCTYPE html>
<html>
<style>
    input[type=text],
    input[type=number],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>

    <h3>Form Tambah Data mapel</h3>

    <div>
        <form action="/mapel/update/{{ $mapel->id }}" method="POST">
            @csrf
            <label for="fname">Kode Mapel</label>
            <input type="number" id="fname" name="kode_mapel" placeholder="Your Kode Mapel" value="{{ $mapel->kode_mapel }}">
            @error('kode_mapel')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Nama Mapel</label>
            <input type="text" id="lname" name="nama_mapel" placeholder="Your Name Mapel"
                value="{{ $mapel->nama_mapel }}">
            @error('nama_mapel')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Kode Jurusan</label>
            <input type="text" id="lname" name="kode_jurusan" placeholder="Your Kode Jurusan"
                value="{{ $mapel->kode_jurusan }}">
            @error('kode_jurusan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Nama Jurusan</label>
            <input type="text" id="lname" name="nama_jurusan" placeholder="Your Nama Jurusan."
                value="{{ $mapel->nama_jurusan }}">
            @error('nama_jurusan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Tingkat</label>
            <input type="text" id="lname" name="tingkat" placeholder="Your Nama Jurusan."
                value="{{ $mapel->tingkat }}">
            @error('tingkat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <input type="hidden" name="id" value="{{ $mapel->id }}">

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
