@extends('layout.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-title')
    <h1>{{$comic->title}}</h1>
    <div>
        {{$comic->description}}
    </div>
    <h3>{{$comic->price}}</h3>
    <a href="{{route('comics.index')}}">Indietro</a>
@endsection