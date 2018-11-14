<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Marca;

class MarcaController extends Controller
{
    public function exibir()
    {
      $marcas = Marca::all();
      $marcas = $marcas->pluck('nome','logo');//pluck pega so os campos escolhidos

      return $marcas->toJson();
    }

    public function procurarId($id)
    {
      $marca = Marca::find($id);
      return $marca->toJson();
    }

    public function alterarId(Request $request, $id)
    {
      $marca = Marca::find($id);
      $marca->nome = $request->input('nome');
      $marca->save();

      return $marca->toJson();
    }
}
