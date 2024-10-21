@extends('layouts.main')
@section('title', 'Cadastrar Cliente')
@section('active', 'active')

@section ('content')
<form action="/cadastrarCliente" method="post">
    @csrf
        <p>{{session('mensagem')}}</p>
        Nome: <input type="text" name="nome">
        CPF: <input type="text" name="cpf">
        Telefone: <input type="text" name="telefone">
        E-mail: <input type="text" name="email">
        <input type="submit" value="CADASTRAR">
    </form>

    <a href="listarCliente">Listar Clientes</a>
@endsection 