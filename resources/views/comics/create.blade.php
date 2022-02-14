@extends('layout.base')

@section('pageContent')
    <h1 class="my-3 text-center">Aggiungi un fumetto</h1>
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo..." value="{{old("title")}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6" placeholder="Inserisci la descrizione...">{{old("description")}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Copertina:</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci la copertina..." value="{{old("thumb")}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="number" step="0.01" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo..." value="{{old("price")}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie:</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie..." value="{{old("series")}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data:</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci la data nel formato AAAA/MM/GG..." value="{{old("sale_date")}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <select class="custom-select form-control text-secondary @error('type') is-invalid @enderror" id="type" name="type">
                <option value="comic book" {{old("type") == "comic book" ? "selected" : null}}>comic book</option>
                <option value="graphic novel" {{old("type") == "graphic novel" ? "selected" : null}}>graphic novel</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection 