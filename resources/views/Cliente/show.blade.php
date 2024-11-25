<x-app-layout>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100"> Detalhes do cliente</h2>

    <p>Nome:{{$cliente->nome}}</p>
    <p>CPF:{{$cliente->cpf}}</p>
    <p>Telefone:{{$cliente->telefone}}</p>
    <p>E-mail:{{$cliente->email}}</p>
    
    <form action="deletarCliente/{{$cliente->id}}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
        @csrf 
        @method('DELETE')
        <x-primary-button type="submit">Deletar</x-primary-button>
    </form>
    
    <a href="editarCliente/{{$cliente->id}}" >Editar</a>
</x-app-layout>
