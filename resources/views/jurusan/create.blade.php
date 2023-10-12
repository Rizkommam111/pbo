<!DOCTYPE html>
<html>
<style>
    input[type=text], input[type=number],
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

    <h3>Form Tambah Data Siswa</h3>

    <div>
        <form action="/jurusan/store" method="POST">
            @csrf
            <label for="fname">Kode Jurusan</label>
            <input type="text" id="fname" name="kode_jurusan" placeholder="Kode Jurusan..">

            <label for="lname">Nama Jurusan</label>
            <input type="text" id="lname" name="nama_jurusan" placeholder="Nama Jurusan..">
            
            <label for="lname">Tingkat</label>
            <input type="text" id="lname" name="tingkat" placeholder="Tingkat..">
            
            


            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
