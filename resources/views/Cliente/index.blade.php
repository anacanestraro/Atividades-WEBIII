<x-app-layout>
    <div class="dark:text-gray-500">
    <div class="row">
        <div class="col-11 mt-3">
            <input oninput="filtrarNomes(this.value)" class="form-control" placeholder="Pesquisar Cliente">
        </div>
    </div>

    <p>{{session('mensagem')}}</p>
    
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
                    <a href="editarCliente/{{$cliente->id}}" >Editar</a>
                </td>
                
                <td>
                    <a href="mostrarCliente/{{$cliente->id}}">Visualizar Detalhes</a>
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
    </div>
</x-app-layout>