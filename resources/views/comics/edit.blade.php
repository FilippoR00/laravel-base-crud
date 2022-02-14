@extends('layout.base')

@section('pageContent')
    <h1 class="my-3 text-center">Modifica un fumetto</h1>
    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old("title") ?? $comic->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6">{{old("description") ?? $comic->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Copertina:</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old("thumb") ?? $comic->thumb}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old("price") ?? $comic->price}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie:</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old("series") ?? $comic->series}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data:</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old("sale_date") ?? $comic->sale_date}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <select class="custom-select form-control text-secondary @error('type') is-invalid @enderror" id="type" name="type">
                @php
                    $selected = old("type") ?? $comic->type;
                @endphp
                <option value="comic book" {{$selected == "comic book" ? "selected" : ""}}>comic book</option>
                <option value="graphic novel" {{$selected == "graphic novel" ? "selected" : ""}}>graphic novel</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection 