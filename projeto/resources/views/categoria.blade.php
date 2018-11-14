<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Categorias</title>
  </head>
  <body class="m-2">
    <h1>Lista de categorias</h1>
    <div class="my-3">
      <h3> <a href="/categoria/adicionar">Adicionar Categoria</a> </h3>
    </div>
    <ul class='list-group'>
      @foreach ($categorias as $categoria)

          <li class="list-group-item py-1">
            <div class="row">
              <div class="col-2">
                {{$categoria->nome}}
              </div>
            <div class="col-2">
            <a href="/categoria/editar/{{$categoria->categoria_id}}"><button class="btn btn-primary" type="button">Editar</button></a>
            </div>
            <div class="col-2">
            <a href="/categoria/excluir/{{$categoria->categoria_id}}"><button class="btn btn-danger" type="button">Excluir</button></a>
            </div>
        </div>
      </li>
        <!-- <div class="col"> -->
          <!-- <li class="list-group-item py-1"> <a href="/categoria/editar/{{$categoria->categoria_id}}"><button class="btn btn-primary" type="button">Editar</button></a>  </li>
        </div>
        <div class="col">
          <li class="list-group-item py-1"> <a href="/categoria/excluir/{{$categoria->categoria_id}}"><button class="btn btn-danger" type="button">Excluir</button></a>  </li>
        </div> -->
      </div>
      @endforeach
    </ul>
    {{$categorias->links()}}
  </body>
</html>
