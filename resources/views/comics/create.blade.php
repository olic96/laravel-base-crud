@extends('layouts.base')

@section('page-title')
    Nuovo Comic
@endsection

@section('page-content')
    <h1>Nuovo Comic</h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div>
            <label for="comic-title">Titolo</label>
            <input type="text" name="title">
        </div>

        <div>
            <label for="comic-description">Descrizione</label>
            <textarea name="description"></textarea>
        </div>

        <div>
            <label for="comic-thumb">Poster</label>
            <input type="text" name="thumb">
        </div>

        <div>
            <label for="comic-price">Prezzo</label>
            <input type="number" name="price">
        </div>

        <div>
            <label for="comic-series">Serie</label>
            <input type="text" name="series">
        </div>

        <div>
            <label for="comic-sale-date">Data di Vendita</label>
            <input type="date" name="sale_date">
        </div>

        <div>
            <label for="comic-type">Tipologia</label>
            <input type="text" name="type">
        </div>
        <button>Aggiungi</button>
    </form>
@endsection 