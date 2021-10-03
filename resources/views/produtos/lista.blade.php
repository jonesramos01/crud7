<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar novo Produto</title>
</head>
<body>
    
        <table border="1px solid">
            <tr>
                <th>Nome</th>
                <th>Custo</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>    

            <tr>
                <th>{{$produto->nome}}</th>
                <th>{{$produto->custo}}</th>
                <th>{{$produto->preco}}</th>
                <th>{{$produto->quantidade}}</th>
            </tr>
        </table>

        <button>Novo</button>
        <button>Editar</button>
        <button>Excluir</button>
    
        

    
</body>
</html>