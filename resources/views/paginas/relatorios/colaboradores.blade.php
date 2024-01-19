<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaboradores</title>
    <link rel="shortcut icon" href="https://vochtech.com.br/img/icon-voch.svg" type="image" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="quadrado" style="width: 50vw;">
        <h1>Colaboradores <i class="fa-solid fa-user" style="margin-left: 5%;"></i></h1>
        <table border="1">
            <tr>
                <th>ID da Unidade</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
            </tr>
            @foreach ($colaboradores as $colaborador)
            <tr>
                <td>{{ $colaborador->id_unidade }}</td>
                <td>{{ $colaborador->nome }}</td>
                <td>{{ $colaborador->cpf }}</td>
                <td>{{ $colaborador->mail }}</td>
            </tr>
            @endforeach
        </table>

        {{ $colaboradores->links() }}

        <div class="inputs-unidades">
                <a href="/relatorios">Voltar</a>
            </div>
    </div>

</body>

</html>