<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function exibir()
    {
      $categorias=Categoria::orderBy('nome')->paginate(3);
      return view('categoria')->with('categorias', $categorias);
    }
    public function novo()
    {
      return view('categoria_adicionar');
    }

    public function adicionar(Request $request)
    {
      //valida se o valor enviado satisfaz certas condicoes e ja solta erro se nao der
      $request->validate([
        'nome' => 'unique:categoria|max:200|required'
      ]);

      $categoria = Categoria::create([
        'nome'=>$request->input('nome')
      ]);
      $categoria->save();

      return redirect('/categoria');
    }

    public function editar($id)
    {
      $categoria = Categoria::find($id);
      return view('categoria_editar')->with('categoria', $categoria);
    }
    public function putCategoria(Request $request, $id)
    {
      $request->validate([
        'nome' => 'required|min:2|max:20|unique:categoria'
      ]);
      $categoria=Categoria::find($id);
      $categoria->nome = $request->input('nome');
      $categoria->save();
      return(redirect('/categoria'));

    }
    public function excluir($id)
    {
      $categoria = Categoria::find($id);
      return view('categoria_excluir')->with('categoria', $categoria);
    }

    public function deleteCategoria($id)
    {
      $categoria=Categoria::find($id);
      $categoria->delete();
      return redirect('/categoria');
    }
}
