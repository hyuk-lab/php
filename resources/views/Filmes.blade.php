<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Filmes</title>
  <link rel="stylesheet" href="/css/Lista.css">
</head>
<body> 
  @if(empty($filmes) || count($filmes) == 0)
    <h3>Nenhum cadastro encontrado</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Genero</th>
      <th>Ano</th>
    </tr>
    @foreach ($filmes as $filme)
        <tr>
          <td>{{$filme->name}}</td>
          <td>{{$filme->idade}}</td>
          <td>
            <form method="POST" action="/deletar_filme/{{$filme->id}}" style="display:inline-block;">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete" class="btn-delete">
            </form>

            <a href="/editar_filme/{{$filme->id}}" class="btn-edit">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif
  <a href="/" class="btn-back">Voltar para a Página Inicial</a>
</body>
</html>