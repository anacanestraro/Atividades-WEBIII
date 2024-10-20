<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <title>Document</title>

</head>
<body>
    <p>
        <input oninput="w3.filterHTML('#tabelaClientes', '.cliente', this.value)" placeholder="Pesquisar Cliente">
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
                <td>{{$cliente->nome}}</td>
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
</body>
</html>