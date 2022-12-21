@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h3><a href="{{ route('comics.create') }}">Aggiungi Comic</a></h3>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2 my-col">
                    <img src="{{ $comic->thumb }}" alt="">
                    <h1>{{ $comic->titolo }}</h1>


                    <button class="btn btn-primary"><a href="{{ route('comics.show', $comic->id) }}">Scopri di
                            più!</a></button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
