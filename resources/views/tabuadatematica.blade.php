<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Temática</title>
</head>
<body>
    @for($i=0; $i< 11;$i++)
        @php
            $res = 2 * $i;
        @endphp
        <p>2 x {{$i}} = {{$res}}
            @for($j=0;$j<$res;$j++)
                <img src="./img/lexie.png" height="50px" width="50px" alt="LOGO">
            @endfor
        </p>
    @endfor
</body>
</html>