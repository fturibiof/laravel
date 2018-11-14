<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Atores</title>

  </head>
  <body class="m-3">
    <h1>Atores</h1>
    <ul>
      @foreach ($atores as $ator)
      <li>{{$ator->primeiro_nome}} {{$ator->ultimo_nome}}</li>
      @endforeach
      {{$atores->links()}}

    </ul>
  </body>
</html>
