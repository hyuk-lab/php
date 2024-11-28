<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filmes</title>
    <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
<form class="cadastro" action="/criar_filmes" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" required>

        
        <label for="genero">genero</label>
        <input type="text" name="genero" required>

        <label for="ator">atores</label>
        <select name="ator" id="ator" required>
            <option value="">Selecione um ator</option>
            @foreach($atores as $ator)
                <option value="{{ $ator->id }}">{{ $ator->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Salvar">

        <a href="/" class="btn-back">Voltar para a Página Inicial</a>

    </form>
</body>
</html>