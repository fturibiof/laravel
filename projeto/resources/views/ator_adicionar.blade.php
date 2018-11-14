<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Adicionar Ator</title>
  </head>
  <body>
    <div class="container m-1">
        @if ($errors->count())
        <div class="alert alert-danger">
        <ul class="list-group" style="list-style-type:none">
          @foreach ($errors->all() as $erro)
          <li>{{$erro}}</li>
          @endforeach
        </ul>
      </div>
        @endif
      <h1>Adicionar Ator</h1>
      <form action="/atores/add" method="post">
        @csrf
        <div class="form-control">
          <label for="primeiroNome">Primeiro nome</label>
          <input type="text" class="form-control" id="primeiroNome" name="primeiro_nome"/>
          <label for="ultimoNome">Último nome</label>
          <input type="text" class="form-control" id="ultimoNome" name="ultimo_nome"/>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </body>
</html>
