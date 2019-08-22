<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<img src="{{$coinDetail->img}}"/>
{{$coinDetail->name}}
{{$coinDetail->price}}$

<table>
    <thead>
    <th width="50px"> #</th>
    <th width="150px"> History</th>
    <th width="75px"> Date</th>
    </thead>
    @foreach($coinDetail->histories as $detail)
        <tr>
            <td style="text-align: center"> {{$loop->index}}</td>
            <td style="text-align: center"> {{$detail->price}}$</td>
            <td style="text-align: center"> {{$detail->created_at->toDateString()}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>