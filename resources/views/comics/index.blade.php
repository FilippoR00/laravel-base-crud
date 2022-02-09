@extends('layout.base')

@section('pageContent')
    
    
    <h1 class="my-3 text-center">Tabella Fumetti</h1>
    <div class="text-center">
        <a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">Aggiungi fumetto</button></a>
    </div>
    <table class="table my-4 border">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td><a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">Apri</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
@endsection 