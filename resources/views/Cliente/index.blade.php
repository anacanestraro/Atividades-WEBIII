@extends('layouts.main')
@section('title', 'Listar Clientes')
@section('active', 'active')

@section ('content')
    <p>
        <input oninput="filtrarNomes(this.value)" placeholder="Pesquisar Cliente">
    </p>
    <table id="tabelaClientes">
        <tr>
            <th>Nome</th>            
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        @foreach($clientes as $cliente)
            <tr class="cliente">
                <td class="nome">{{$cliente->nome}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->email}}</td>
                <td>
                    <form action="deletarCliente/{{$cliente->id}}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                        @csrf 
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>    

                <td>
                    <a href="editarCliente/{{$cliente->id}}">Editar</a>
                </td>
            </tr>
        @endforeach
            
    </table>
    <script>
       function filtrarNomes(valor) { // recebendo o valor que é colocado no input
        const linhas = document.querySelectorAll("#tabelaClientes .cliente"); // seleciona as linhas da tabela que possuem a classe cliente
        linhas.forEach(linha => {
            const nome = linha.querySelector(".nome").textContent.toLowerCase();
            linha.style.display = nome.includes(valor.toLowerCase()) ? "" : "none";
        });
    }
    </script>
@endsection