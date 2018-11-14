<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Excluir Categoria</title>
  </head>
  <body>
    <div class="container m-1">
      <h1>Excluir Categoria</h1>
      <form action="/categoria/excluir/{{$categoria->categoria_id}}" method="post">
        @csrf
        @method('DELETE')
        <div class="form-control">
          <label for="excluirCategoria"></label>
          <input readonly type="text" class="form-control" id="excluirCategoria" name="nome" value="{{$categoria->nome}}"/>
          <button type="submit" class="btn btn-danger my-3" onclick="return confirm('Deseja mesmo excluir?')">Excluir</button>
        </div>
      </form>
    </div>
  </body>
</html>
