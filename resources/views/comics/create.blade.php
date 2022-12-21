@extends('layouts.app')
@section('content')
    <div class="container-fluid d-flex flex-column">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <label for="titolo">Titolo</label>
            <input type="text" name="title" id="titolo">
            <label for="description">Descrizione</label>
            <input type="text-area" name="description" id="description">
            <label for="immagine">immagine</label>
            <input type="text" name="thumb" id="immagine">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price">
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
            <label for="sales_date">Data Vendita</label>
            <input type="text" name="sales_date" id="sales_date">
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type">
            <label for="artists">Artista</label>
            <input type="text" name="artists" id="artists">
            <label for="writers">Scrittore</label>
            <input type="text" name="writers" id="writers">
            <button type="submit">Aggiungi</button>
        </form>
        <form action="{{ route('comics.store') }}" method="POST">
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
@endsection
