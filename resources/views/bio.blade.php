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
<legend>biodata</legend>
<table>
            @if($nama == null)
            silahkan isi biodata anda 
            @elseif($nama != null)
             <tr>
                <th style ="text-align: left">Nama</th>
                <td>:</td>
                <td>{{$nama}}</td>
            </tr>
            @endif
            @if($alamat != null)
            <tr>
                <th style ="text-align: left">alamat</th>
                <td>:</td>
                <td>{{$alamat}}</td>
            </tr>
            @endif
            @if($jenis != null)
            <tr>
                <th style ="text-align: left">jenis kelamin</th>
                <td>:</td>
                <td>{{$jenis}}</td>
            </tr>
            @endif
            @if($tb != null)
            <tr>
                <th style ="text-align: left">tb</th>
                <td>:</td>
                <td>{{$tb}}</td>
            </tr>
            @endif
            @if($bb != null)
            <tr>
                <th style ="text-align: left">bb</th>
                <td>:</td>
                <td>{{$bb}}</td>
            </tr>
@endif
</table>
</fieldset> 
</body>
</html>