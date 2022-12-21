@extends('layouts.app')
@section('content')
    <h1 class="text-center">Inserisci nuovo Comic</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{ route('comics.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" required>
                </div>

                <div class="mb-3">
                    <label for="sales_date" class="form-label">Data vendita</label>
                    <input type="text" class="form-control" id="sales_date" name="sales_date" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" aria-describedby="cookingHelp"
                        required>

                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artista</label>
                    <input type="text" class="form-control" id="artists" name="artists" required>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittore</label>
                    <input type="text" class="form-control" id="writers" name="writers" required>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
