<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
            <legend> single pembelian</legend>
            <br>
            <strong> {{ $singlepembelian->nama_barang}} </strong><br>
            {{$singlepembelian->nama_suplier}}<hr>
            {{$singlepembelian->qty}}<hr>
            {{$singlepembelian->tgl}}<hr>
    </fieldset>
</body>
</html>