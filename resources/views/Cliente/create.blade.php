<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cliente</title>
</head>
<body>
    <form action="/cadastrarCliente" method="post">
    @csrf
        <p>{{session('mensagem')}}</p>
        Nome: <input type="text" name="nome">
        CPF: <input type="text" name="cpf">
        Telefone: <input type="text" name="telefone">
        E-mail: <input type="text" name="email">
        <input type="submit" value="CADASTRAR">
    </form>

    <a href="read">Listar Clientes</a>
</body>
</html>