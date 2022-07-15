@extends('layouts.base')

@section('page-title')
    Comics
@endsection

@section('page-content')
    <h1>Comics</h1>
    <table>
        <thead>
            <th>#</th>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td><a href="{{route('comics.show', $comic->id)}}">Visualizza</a></td>
                    <td><a href="{{route('comics.update', $comic->id)}}">Modifica</a></td>
                    <td><a href="{{route('comics.destroy', $comic->id)}}">Elimina</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@endsection 