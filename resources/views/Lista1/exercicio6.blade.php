<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    @for($i=100;$i<=200;$i++)
        @if($i%2!=0)
            <p>{{$i}} </p>
        @endif
    @endfor
</body>
</html>