<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="/warga/store" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Masukan Nama"><br>
        <input type="text" name="nik" placeholder="Masukan Nik"><br>
        <input type="text" name="no_kk" placeholder="Masukan No KK"><br>
        <select name="jenis_kelamin"><br>
            <option value="">Pilih</option>
            <option value="L">Lanang</option>
            <option value="P">Perempuan</option>
        </select><br>
        <textarea name="alamat"rows="10">Alamat Mu Cok</textarea><br>
        <input type="submit" name="submit" value="Save"><br>
    </form>
</body>
</html>