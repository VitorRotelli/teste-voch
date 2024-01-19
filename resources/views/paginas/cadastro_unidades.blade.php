<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar unidades</title>
    <link rel="shortcut icon" href="https://vochtech.com.br/img/icon-voch.svg" type="image" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="quadrado">
        <h1>Cadastrar unidades</h1>
        <form action="{{ route('unidades.store')}}" method="POST">
            <div class="inputs-unidades">
                <input type="text" name="nome_fantasia" id="nome_fantasia" placeholder="Nome fantasia" required>
            </div>
            <div class="inputs-unidades">
                <input type="text" name="razao_social" id="razao_social" placeholder="Razão social" required>
            </div>
            <div class="inputs-unidades">
                <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ" required>
            </div>
            <div class="inputs-unidades">
                <button type="submit">Cadastrar</button>
            </div>
            <div class="inputs-unidades">
            <a href="javascript:history.back()">Voltar</a>
            </div>
        </form>
</body>

</html>