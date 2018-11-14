<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function mostrarAlunos()
    {
      $alunos = ['Luan','Ana','João','Marcos'];
      $colecao = collect($alunos);
      $colecao = $colecao->sort();
      return view('alunos')->with('alunos', $colecao);
    }
}
