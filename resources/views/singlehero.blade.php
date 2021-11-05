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

<legend>data hero</legend>
<table>
            <tr>
                <th style ="text-align: left">ID</th>
                <td>:</td>
                <td>{{$singlehero->id}}</td>
            </tr>
             <tr>
                <th style ="text-align: left">Real name</th>
                <td>:</td>
                <td>{{$singlehero->real_name}}</td>
            </tr>
            <tr>
                <th style ="text-align: left">hero name</th>
                <td>:</td>
                <td>{{$singlehero->hero_name}}</td>
            </tr>
            <tr>
                <th style ="text-align: left">element</th>
                <td>:</td>
                <td>{{$singlehero->element}}</td>
            </tr>
            <tr>
                <th style ="text-align: left">gender</th>
                <td>:</td>
                <td>{{$singlehero->gender}}</td>
            </tr>
            <tr>
                <th style ="text-align: left">power</th>
                <td>:</td>
                <td>{{$singlehero->power}}</td>
            </tr>
            <tr>
                <th style ="text-align: left">Status</th>
                <td>:</td>       
                @if ($singlehero->power > 100)
                <td>Strongers</td>
                @elseif ($singlehero->power > 75)
                <td>Strong</td>
                @elseif ($singlehero->power > 20)
                <td>Weak</td>
                @else 
                <td>Non Super Hero</td>
                @endif
            </tr>
</table>
</fieldset>
</body>
</html>
