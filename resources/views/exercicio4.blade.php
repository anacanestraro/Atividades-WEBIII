<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    @if($indice==0.3)
        <p>Indústrias do primeiro grupo suspender atividades.</p>
    @elseif($indice==0.4)
        <p>Indústrias do primeiro e segundo grupo suspender atividades.</p>
    @elseif($indice>=0.5)
        <p>Todas os grupos de indústrias suspender atividades.</p>
    @else
        <p>Indice aceitável</p>
    @endif

</body>
</html>