<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    @foreach($arr as $i)
        @php
            $res = $res + $i;
        @endphp
    @endforeach

    <p>{{$res}}</p>
</body>
</html>