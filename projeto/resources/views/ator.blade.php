<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Ator</title>
  </head>
  <body class="m-3">
    <h1>{{$ator->primeiro_nome}} {{$ator->ultimo_nome}}</h1>
    <ul>
      @foreach($ator->filmes as $filme)
        <li>{{$filme->titulo}}</li>
      @endforeach
    </ul>
  </body>
</html>
