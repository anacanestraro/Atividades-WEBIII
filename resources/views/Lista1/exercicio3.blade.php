<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    @if($horasTrabalhadas>50)
        @php 
            $salario = 50 *10;
            $excesso = $horasTrabalhadas - 50;
            $salario += $excesso * 20;
        @endphp
    @else 
        @php 
            $salario = 10*$horasTrabalhadas;
        @endphp
    @endif

    <p>O salário total do funcionário {{$ID}} é {{$salario}} reais e o excedente {{$excesso}} horas.</p>
</body>
</html>