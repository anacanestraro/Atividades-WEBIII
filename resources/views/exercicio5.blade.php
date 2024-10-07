<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 </title>
</head>
<body>
    @if($idade>=5 && $idade<=7)
        <p>Nadador na categoria: Infantil A</p>
    @elseif($idade>=8 && $idade <=11)
        <p>Nadador na categoria: Infantil B</p>
    @elseif($idade>=12 && $idade <=13)
        <p>Nadador na categoria: Juvenil A</p>
    @elseif($idade>=14 && $idade <=17)
        <p>Nadador na categoria: Juvenil B</p>  
    @elseif($idade>=18)
        <p>Nadador na categoria: Adultos</p>   
    @else
        <p>Sem categoria</p>
    @endif
</body>
</html>