@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-2">
                <h1>{{ $comic->titolo }}</h1>
                <img src="{{ $comic->thumb }}" alt="">
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->price }}</p>
                <p>{{ $comic->type }}</p>
                <p>{{ $comic->series }}</p>
                <p>{{ $comic->sale_date }}</p>
                <p>{{ $comic->artists }}</p>
                <p>{{ $comic->writers }}</p>
            </div>
            <a href="{{ route('comics.index') }}">Torna alla lista</a>
        </div>
    </div>
@endsection
