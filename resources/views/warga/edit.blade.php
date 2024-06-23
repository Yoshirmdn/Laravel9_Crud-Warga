<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="/warga/{{$warga->id}}" method="POST">
        @method('put')
        @csrf
        <input type="text" name="nama" placeholder="Masukan Nama" value="{{$warga->nama}}"><br>
        <input type="text" name="nik" placeholder="Masukan Nik" value="{{$warga->nik}}"><br>
        <input type="text" name="no_kk" placeholder="Masukan No KK" value="{{$warga->no_kk}}"><br>
        <select name="jenis_kelamin"><br>
            <option value="">Pilih</option>
            <option value="L"@if($warga->jenis_kelamin == "L")selected @endif>Lanang</option>
            <option value="P"@if($warga->jenis_kelamin == "P")selected @endif>Perempuan</option>
        </select><br>
        <textarea name="alamat"rows="10">{{$warga->alamat}}</textarea><br>
        <input type="submit" name="submit" value="Save"><br>
    </form>
</body>
</html>