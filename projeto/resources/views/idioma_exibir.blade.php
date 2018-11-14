<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Idioma</title>
  </head>
  <body class="m-3">
    <h1>Idioma</h1>
    <p>{{$idioma->nome}}</p>
    <p>{{$idioma->ultima_atualizacao->format('d/m/Y')}}</p>

    <ul>
      @foreach($idioma->filmes as $filme)
        <li>{{$filme->titulo}}</li>
      @endforeach
    </ul>

  </body>
</html>
