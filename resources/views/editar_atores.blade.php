<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Professor</title>
  <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
  <form class="cadastro" action="/editar_atores/{{$ator->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$ator->name}}">

    <label for="idade">idade</label>
    <input type="text" name="idade" value="{{$ator->idade}}">

    <label for="nascimento">nascimento</label>
    <input type="text" name="nascimento" value="{{$ator->nascimento}}">

    <input type="submit" value="Alterar">
</form>
</body>
</html>