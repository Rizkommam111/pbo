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
        <form action="/siswa/store/{{$siswa->id}}" method="POST">
            @csrf
            <label for="fname">NIS</label>
            <input type="number" id="fname" name="nis" placeholder="Your NIS.." value="{{$siswa->nis}}">

            <label for="lname">Nama</label>
            <input type="text" id="lname" name="nama" placeholder="Your Name.." value="{{$siswa->nama}}">
            
            <label for="lname">Alamat</label>
            <input type="text" id="lname" name="alamat" placeholder="Your Alamat.." value="{{$siswa->alamat}}">
            
            <label for="lname">No Telp</label>
            <input type="text" id="lname" name="no_telp" placeholder="Your Number.." value="{{$siswa->no_telp}}">
            
            <label for="lname">Asal Sekolah</label>
            <input type="text" id="lname" name="asal_sekolah" placeholder="Your School.." value="{{$siswa->asal_sekolah}}">
            
            <label for="lname">Jurusan</label>
            <input type="text" id="lname" name="jurusan" placeholder="Your Major.." value="{{$siswa->jurusan}}">
            
            <input type="hidden" value="{{$siswa->id}}">

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
