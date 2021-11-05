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
        <tr>
            <th>no</td>
            <th>real name</th>  
            <th>hero name</th> 
            <th>element</th>  
            <th>gender</th>  
            <th>power</th>  
            <th>Status</th>  
            <th>Action</th>  
</tr>
            @php $no =1; @endphp
            @foreach ( $hero as $data )
            <tr>
            <td>{{$no++}}</td>
            <td>{{$data->real_name}}</td>
            <td>{{$data->hero_name}}</td>
            <td>{{$data->element}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->power}}</td>

            @if ($data ->power > 100)
                <td>Strongers</td>
            @elseif ($data ->power > 75)
            <td> Strong</td>
            @elseif ($data ->power > 20)
            <td>Weak</td>
            @else 
               <td> Non Super Hero</td>
            @endif
            <td><a href="{{url('hero',$data->id)}} ">Show Hero</a></td>

            @endforeach
</table>
</body>
</html>