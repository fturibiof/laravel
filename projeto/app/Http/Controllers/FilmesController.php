<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmesController extends Controller
{
    public function procurarFilmeId($id)
    {
      // $filmes = [
      //   1 => "Toy Story",
      //   2 => "Procurando Nemo",
      //   3 => "Avatar",
      //   4 => "Star Wars: Episódio V",
      //   5 => "Up",
      //   6 => "Mary e Max"
      // ];
      $filme="";
      $filme = Filme::find($id);
      // return $filmes[$id];
      // if (count($filmes)>=$id) {
      //   $filme = $filmes[$id];
      // }
      return view('filme')->with('filme', $filme->titulo);
    }
    public function procurarFilmeNome($nome)
    {
      $filmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
      ];
      for ($i=1; $i < count($filmes); $i++) {
        if ($filmes[$i]==$nome) {
          return "$i -> $filmes[$i]";
        }
      }
      return "Não foram encontrados resultados";
    }

    public function mostrarFilmes()
    {
      $filmes = Filme::all();
      // $filmes = Filme::orderBy('titulo', 'desc')->get();
      // $filmes = Filme::where('titulo', '=', 'VOLCANO TEXAS')->or('titulo', '=', 'ACE GOLDFINGER')->get(); Or não funciona
      // $filmes = Filme::where('titulo', 'like', '%NA%')
      // ->orderBy('titulo')
      // ->get();

      return view('filmes')->with('filmes',$filmes);
    }

    public function adicionarFilme($filme)
    {
      $filmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
      ];

      $filmes[] = $filme;

      return view('filmeAdicionado')->with('filmes', $filmes);
    }
}
