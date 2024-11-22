<x-app-layout>

<form action="/cadastrarCliente" method="post">
    @csrf
    <p>{{session('mensagem')}}</p>
    <div>

        <x-input-label for="nome" :value="__('Nome')" />
        <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autolcomplete="nome"/>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    CPF: <input type="text" name="cpf">
        Telefone: <input type="text" name="telefone">
        E-mail: <input type="text" name="email">
        <input type="submit" value="CADASTRAR"  >
    </form>

    <a href="listarCliente" class="nav-link secondary-color" >Listar Clientes</a>

</x-app-layout>
