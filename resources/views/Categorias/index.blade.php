@extends('layouts.main')
@section('title', 'Cadastrar Categoria')
@section('active', 'active')

@section ('content')


<h1>Listagem de Categorias</h1>

{{session('mensagem')}}
@if($categorias->isEmpty())
<h3>Nenhuma categoria cadastrada</h3>
@else
<table>
    <thead>
        <tr>
            <th>Nome:</th>
            <th>Descrição:</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)

        <tr>
            <td>{{$categoria->nome}}</td>
            <td>{{$categoria->descricao}}</td>
            <td>
    
                <form action="{{route('Categorias.destroy', $categoria->id)}}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                    @csrf 
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
        
                <a href="{{route('Categorias.update', $categoria->id)}}">Editar</a>
                <a href="{{route('Categorias.show', $categoria->id)}}">Visualizar Detalhes</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection