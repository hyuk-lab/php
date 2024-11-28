<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Atores</title>
  <link rel="stylesheet" href="/css/Lista.css">
</head>
<body> 
  @if(empty($atores) || count($atores) == 0)
    <h3>Nenhum cadastro encontrado.</h3>      
  @else
  <table>
    <tr>
      <th>Nome</th>
      <th>idade</th>
      <th>nascimento</th>
    </tr>
    @foreach ($atores as $ator)
        <tr>
          <td>{{$ator->name}}</td>
          <td>{{$ator->idade}}</td>
          <td>{{$ator->nascimento}}</td>
          <td>
            <form method="POST" action="/deletar_ator/{{$ator->id}}" style="display:inline-block;">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="Excluir" class="btn-delete">
            </form>

            <a href="/editar_ator/{{$ator->id}}" class="btn-edit">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif
  <a href="/" class="btn-back">Voltar para a Página Inicial</a>
</body>
</html>