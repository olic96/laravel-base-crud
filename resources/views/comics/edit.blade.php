@extends('layouts.base')

@section('page-title')
    Modifica {{$comic->title}}
@endsection

@section('page-content')
    <h1>Modifica {{$comic->title}}</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="comic-title">Titolo</label>
            <input type="text" name="title" value="{{$comic->title}}">
        </div>

        <div>
            <label for="comic-description">Descrizione</label>
            <textarea name="description">{{$comic->description}}</textarea>
        </div>

        <div>
            <label for="comic-thumb">Poster</label>
            <input type="text" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div>
            <label for="comic-price">Prezzo</label>
            <input type="number" name="price" value="{{$comic->price}}">
        </div>

        <div>
            <label for="comic-series">Serie</label>
            <input type="text" name="series" value="{{$comic->series}}">
        </div>

        <div>
            <label for="comic-sale-date">Data di Vendita</label>
            <input type="date" name="sale_date" value="{{$comic->sale_date}}">
        </div>

        <div>
            <label for="comic-type">Tipologia</label>
            <input type="text" name="type" value="{{$comic->type}}">
        </div>
        <button>Modifica</button>
    </form>
    <a href="{{route('comics.index')}}">Indietro</a>
@endsection 