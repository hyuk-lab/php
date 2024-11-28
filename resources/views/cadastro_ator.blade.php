<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Professor</title>
    <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
<form class="cadastro" action="/criar_ator" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="idade">idade</label>
        <input type="text" name="idade">

        <label for="nascimento">Nacimento</label>
        <input type="text" name="nascimento">

        <input type="submit" value="Salvar">

        <a href="/" class="btn-back">Voltar para a Página Inicial</a>
        
    </form>
</body>
</html>