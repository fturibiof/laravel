<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Adicionar Categoria</title>
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
      <h1>Adicionar Categoria</h1>
      <form action="/categoria/adicionar" method="post">
        @csrf
        <div class="form-control">
          <label for="adicionarCategoria"></label>
          <input type="text" class="form-control" id="adicionarCategoria" name="nome"/>
          <button type="submit" class="btn btn-primary my-3">Enviar</button>
        </div>
      </form>
    </div>
  </body>
</html>
