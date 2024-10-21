<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>

    @php
        $j=0;
    @endphp
    @foreach($num as $i)
        <p>
        @php
            $res = $i**2;
            echo $res;
            $j++;
        @endphp
        </p>
        @if($j==3 && $res >= 1000)      
            @php
                echo "entrou no loop " . $i;

            @endphp  
        @endif   
    
    @endforeach

</body>
</html>