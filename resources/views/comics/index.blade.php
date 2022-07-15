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
                    <td><button>Visualizza</button></td>
                    <td><button>Modifica</button></td>
                    <td><button>Elimina</button></td>
                </tr>
            @endforeach
        </tbody>
        
    </table>    
@endsection 