<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="shortcut icon" href="https://vochtech.com.br/img/icon-voch.svg" type="image" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="quadrado" style="width: 60vw;">
        <h1>Ranking <i class="fa-solid fa-star" style="margin-left: 5%;"></i></h1>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Mail</th>
                <th>Unidade</th>
                <th>Cargo</th>
                <th>Nota desempenho</th>
            </tr>
            @foreach ($rankingcolaboradores as $item)
            <tr>
                <td>{{ $item->colaboradores_select_ranking->nome }}</td>
                <td>{{ $item->colaboradores_select_ranking->cpf }}</td>
                <td>{{ $item->colaboradores_select_ranking->mail }}</td>
                <td>{{ $item->colaboradores_select_ranking->id_unidade }}</td>
                <td>{{ $item->cargo_select_ranking->cargo }}</td>
                <td>{{ $item->nota_desempenho }}</td>
            </tr>
            @endforeach
        </table>

        {{ $rankingcolaboradores->links() }}

        <div class="inputs-unidades">
            <a href="/relatorios">Voltar</a>
        </div>
    </div>
</body>

</html>