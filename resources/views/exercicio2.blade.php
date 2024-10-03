<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    @foreach($nums as $num)
        @if($num%2==0)
            <p>Par</p>
        @else
            <p>Ímpar</p>
        @endif
    @endforeach
</body>
</html>