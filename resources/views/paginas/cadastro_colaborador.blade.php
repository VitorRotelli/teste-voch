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
                    <option value="{{ $id }}">{{ $nome_fantasia }}, {{ $id }}</option>
                    @endforeach
                </select>
            </div>
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
        </form>
    </div>
</body>

</html>
<!-- <div class="inputs-unidades">
    <select name="" id="id_cargo">
        @foreach($cargos as $id => $cargo)
        <option value="{{ $id }}">{{ $cargo }}, {{ $id }}</option>
        @endforeach
    </select>
</div> -->