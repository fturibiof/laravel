@extends('layouts.app')

@section('content')

  <ul>
    @foreach($noticias as $noticia)
      <li>
        <img src="{{$noticia['multimedia'][0]['url']?? ''}}" alt="">
        <p><b>Titulo: {{$noticia['title']}}</b></p>
        <p>Autor: {{$noticia['byline']}}</p>
        <p><a href="{{$noticia['url']}}"> {{$noticia['url']}}</a></p>
      </li>
    @endforeach
  </ul>

@endsection
