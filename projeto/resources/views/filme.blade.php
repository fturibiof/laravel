<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Filme</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @if($filme)
    <h1>{{$filme}}</h1>
    @else
    <h1>Filme não encontrado</h1>
    @endif
  </body>
</html>
