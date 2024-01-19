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
                <input type="text" id="filtroColaborador" placeholder="Digite para filtrar">
            </div>
            <div class="inputs-unidades">
                <select name="colaborador_id" id="colaborador_id">
                    <option value="">Escolha...</option>
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
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#filtroColaborador').on('input', function() {
                filtrarOpcoes();
            });

            function filtrarOpcoes() {
                var filtro = $('#filtroColaborador').val().toUpperCase();
                var select = $('#colaborador_id');

                $('option', select).each(function() {
                    var opcaoTexto = $(this).text().toUpperCase();
                    if (opcaoTexto.indexOf(filtro) > -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>
</body>

</html>