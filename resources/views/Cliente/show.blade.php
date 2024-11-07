@extends('layouts.main')
@section('title', 'Mostrar Clientes')
@section('active', 'active')

@section ('content')

<h1>Detalhes do cliente</h1>
<p>Nome:{{$cliente->nome}}</p>
<p>CPF:{{$cliente->cpf}}</p>
<p>Telefone:{{$cliente->telefone}}</p>
<p>E-mail:{{$cliente->email}}</p>

<form action="deletarCliente/{{$cliente->id}}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
    @csrf 
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>

<a href="editarCliente/{{$cliente->id}}" >Editar</a>
@endsection 