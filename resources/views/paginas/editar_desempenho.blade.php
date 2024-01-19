<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho</title>
    <link rel="shortcut icon" href="https://vochtech.com.br/img/icon-voch.svg" type="image" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="quadrado">
        <h1>Desempenho</h1>
        <form action="{{ route('atualizar_desempenho') }}" method="POST">
            @csrf
            <div class="inputs-unidades">
                <select name="colaborador_id" id="colaborador_id">
                    @foreach($colaboradores as $id)
                    <option value="{{ $id }}">{{ $id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="inputs-unidades">
                <select name="nota_desempenho" id="nota_desempenho">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="inputs-unidades">
                <button type="submit">Enviar</button>
            </div>
            <div class="inputs-unidades">
            <a href="javascript:history.back()">Voltar</a>
            </div>
        </form>
    </div>

</body>

</html>