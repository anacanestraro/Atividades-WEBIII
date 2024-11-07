@extends('layouts.main')
@section('title', 'Cadastrar Categoria')
@section('active', 'active')

@section ('content')

<form action="{{route('Categorias.store')}}" method="post">
    @csrf
        <p>{{session('mensagem')}}</p>
        <p>Nome: <input type="text" name="nome"></p> 
        <p>Descrição: <textarea name="descricao"></textarea></p> 
        <input type="submit" value="CADASTRAR">
    </form>

@endsection