<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Editar Categoria</title>
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
      <h1>Editar Categoria</h1>
      <form action="/categoria/editar/{{$categoria->categoria_id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-control">
          <label for="editarCategoria"></label>
          <input type="text" class="form-control" id="editarCategoria" name="nome" value="{{$categoria->nome}}"/>
          <button type="submit" class="btn btn-primary my-3">Enviar</button>
        </div>
      </form>
    </div>
  </body>
</html>
