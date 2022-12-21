@extends('layouts.app')

@section('content')
    <div class="container-fluid ">


        <div class="card">
            <h1>{{ $comic->titolo }}</h1>
            <img src="{{ $comic->thumb }}" alt="">
            <p>{{ $comic->description }}</p>
            <p>{{ $comic->price }}</p>
            <p>{{ $comic->type }}</p>
            <p>{{ $comic->series }}</p>
            <p>{{ $comic->sale_date }}</p>
            <p>{{ $comic->artists }}</p>
            <p>{{ $comic->writers }}</p>
            <button class="btn btn-primary"> <a href="{{ route('comics.index') }}">Torna alla lista</a></button>
        </div>


    </div>
@endsection
