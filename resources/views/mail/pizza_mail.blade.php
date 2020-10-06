@extends('mail.layouts.app')

@section('content')

    <h1>{{$user -> name}} => {{$action}}</h1>

    <h2>NOME : {{$pizza -> nome}}</h2>
    <h3>Prezzo : €{{$pizza -> prezzo}} </h3>
    <h4>Disponibilà: {{$pizza -> disponibile}} </h4>

  
@endsection