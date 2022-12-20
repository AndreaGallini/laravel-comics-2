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
    </div>
@endsection
