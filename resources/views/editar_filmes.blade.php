<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Filme</title>
  <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
  <form class="cadastro" action="/editar_filme/{{$filme->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$filme->name}}">

    <label for="atores">Atores</label>
    <input type="text" name="atores" value="{{$filme->ator}}">

    <input type="submit" value="Alterar">
</form>
</body>
</html>