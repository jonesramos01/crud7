<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar novo Produto</title>
</head>
<body>
    <form action="{{route ('registrar_produto')}}" method="POST">
        @csrf
        <label for="">Nome</label> </br>
        <input type="text" name="nome"> </br>
        <label for="">Custo</label> </br>
        <input type="text" name="custo"> </br>
        <label for="">Preço</label> </br>
        <input type="text" name="preco"> </br>
        <label for="">Quantidade</label> </br>
        <input type="text" name="quantidade"> </br>
        <button>Enviar</button>
    </form>
</body>
</html>