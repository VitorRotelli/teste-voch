<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades</title>
    <link rel="shortcut icon" href="https://vochtech.com.br/img/icon-voch.svg" type="image" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="quadrado" style="width: 60vw;">
        <h1>Unidades <i class="fa-solid fa-user" style="margin-left: 5%;"></i></h1>
        <table border="1">
            <tr>
                <th>ID da Unidade</th>
                <th>Nome da Unidade</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Total de Colaboradores</th>
            </tr>
            @foreach ($contagemPorUnidade as $item)
            <tr>
                <td>{{ $item->id_unidade }}</td>
                <td>{{ $item->unidade->nome_fantasia }}</td>
                <td>{{ $item->unidade->razao_social }}</td>
                <td>{{ $item->unidade->cnpj }}</td>
                <td>{{ $item->total }}</td>
            </tr>
            @endforeach
        </table>

        {{ $contagemPorUnidade->links() }}

        <div class="inputs-unidades">
            <a href="/relatorios">Voltar</a>
        </div>
    </div>

</body>

</html>