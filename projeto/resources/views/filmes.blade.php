@extends('layouts.app')
@section('content')
    <h1>Todos os filmes</h1>
    <ul>
      @foreach ($filmes as $filme)
      <li>{{$filme->titulo}} ( {{$filme->idioma->nome}} )</li>
      @endforeach
    </ul>
@endsection
