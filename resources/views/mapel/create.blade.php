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
    .alert{
        color: red;
    }
</style>

<body>


    <div>
        <!-- /resources/views/post/create.blade.php -->

        <h1>Form Tambah Data Siswa</h1>



        <!-- Create Post Form -->
        <form action="/mapel/store" method="POST">
            @csrf
            <label for="fname">Kode Mapel</label>
            <input type="number" id="fname" name="kode_mapel" placeholder="Your kode mapel..">
            @error('kode_mapel')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Nama Mapel</label>
            <input type="text" id="lname" name="nama_mapel" placeholder="Your Nama Mapel..">
            @error('nama_mapel')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Kode Jurusan</label>
            <input type="text" id="lname" name="kode_jurusan" placeholder="Your Kode Jurusan..">
            @error('kode_jurusan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Nama Jurusan</label>
            <input type="text" id="lname" name="nama_jurusan" placeholder="Your Nama Jurusan..">
            @error('nama_jurusan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="lname">Tingkat</label>
            <input type="text" id="lname" name="tingkat" placeholder="Your Nama Jurusan..">
            @error('tingkat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror



            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
