@extends('layouts.main')
@section('title', 'Listar Clientes')
@section('active', 'active')

@section ('content')
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
@endsection