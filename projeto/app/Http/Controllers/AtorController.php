<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class AtorController extends Controller
{
    public function show()
    {
      // $atores = Ator::all();
      // Dois filtros
      // $atores = Ator::where('ultimo_nome','like','%r%')
      //   ->orWhere('ultimo_nome','like','%z%')
      //   ->orderBy('primeiro_nome')
      //   ->paginate(10);
      // $atores = Ator::filmes()->where('idioma_id', '=', '1')->paginate(5);

      // Ordem aleatoria
      // $atores = Ator::inRandomOrder()->paginate(4);

      // id maior que 100 ou letra 't' no nome
      $atores = Ator::where('ator_id','>','100')
      ->orWhere('primeiro_nome', 'like', '%t%')
      ->paginate(20);


      return view('atores')->with('atores', $atores);
    }

    public function index($id)
    {
      $ator = Ator::find($id);

      return view('ator')->with('ator', $ator);

    }

    public function novo()
    {
      return view('ator_adicionar');
    }
    public function adicionar(Request $request)
    {
      $request->validate([
        'primeiro_nome'=>'min:2'
      ]);
      $ator = Ator::create([
        'primeiro_nome'=>$request->input('primeiro_nome'),
        'ultimo_nome'=>$request->input('ultimo_nome'),
      ]);
      $ator->save();

      return redirect('/atores');
    }
}
