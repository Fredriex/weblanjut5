<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Barang</title>
</head>
<body>
<a href="latihan21"><button>Tambah</button></a>
<br><br>
<table border="1">
    <thead>
        <th>kode</th>
        <th>Nama</th>
        <th>Satuan</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
    </thead>
    @foreach($hasil as $data)       
    <tr>    
        <td>{{$data->kode_br}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->satuan}}</td>
        <td>{{$data->harga_beli}}</td>    
        <td>{{$data->harga_jual}}</td>
    </tr>
    @endforeach 
</table>








</body>
</html>