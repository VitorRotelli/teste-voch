<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Colaboradores</title>
    <link rel="shortcut icon" href="https://vochtech.com.br/img/icon-voch.svg" type="image" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="quadrado">
        <h1>Colaboradores</h1>
        <form action="{{ route('colaboradores_cadastro.store') }}" method="POST">
            @csrf
            <div class="inputs-unidades">
                <select name="id_unidade" id="id_unidade">
                    @foreach($unidades as $id => $nome_fantasia)
                    <option value="{{ $nome_fantasia }}">{{ $nome_fantasia }}, {{ $id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="inputs-unidades">
                <select name="cargo_id" id="cargo_id">
                    @foreach($cargos as $id => $cargo)
                    <option value="{{ $cargo }}">{{ $cargo }}, {{ $id }}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="colaborador_id" id="colaborador_id" value="teste">
            <input type="hidden" name="nota_desempenho" id="nota_desempenho" value="N/A">
            <div class="inputs-unidades">
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
            </div>
            <div class="inputs-unidades">
                <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
            </div>
            <div class="inputs-unidades">
                <input type="email" name="mail" id="mail" placeholder="Mail" required>
            </div>
            <div class="inputs-unidades">
                <button type="submit">Cadastrar</button>
            </div>
            <div class="inputs-unidades">
                <a href="javascript:history.back()">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>