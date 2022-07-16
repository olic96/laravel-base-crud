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
                     <td>
                        <a href="{{route('comics.show', $comic->id)}}">Visualizza</a>
                        <a href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button>Elimina</button>
                        </form>
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>    
    <a href="{{route('comics.create')}}">Aggiungi</a>
@endsection 