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
                <td>
                    <div>
                        <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">Apri</button></a>
                    </div>
                    <div class="my-2">
                        <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteBox{{$comic->id}}">
                            Elimina
                        </button>
                        <div class="modal fade" id="deleteBox{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteBoxLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteBoxLabel">Conferma l'eliminazione</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare il fumetto? Il fumetto verrà eliminato per sempre.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                                        <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
    
@endsection 