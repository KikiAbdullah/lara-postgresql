<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID TRANSAKSI</th>
                <th>TANGGAL</th>
                <th>ID BARANGS</th>
                <th>NAMA BARANG</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $data_transaksi)
            <tr>
                <td></td>
                <td>{{ $data_transaksi->id_transaksis }}</td>
                <td>{{ $data_transaksi->tanggal_transaksi }}</td>
                <td>{{ $data_transaksi->id_barangs }}</td>
                <td>{{ $data_transaksi->nama_barang }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>

</html>