<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>
    
<form action="latihan22" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    Kode Barang: <input type="text" name="kode_br" id="kode_br">
    <br>
    Nama: <input type="text" name="nama" id="nama">
    <br>
    Satuan: <input type="text" name="satuan" id="satuan">
    <br>
    Harga Beli: <input type="number" name="harga_beli" id="harga_jual">
    <br>
    Harga Jual: <input type="number" name="harga_jual" id="harga_jual">
    <br><br>
    <input type="submit" value="Simpan" name="simpan" id="simpan">
</form>


</body>
</html>