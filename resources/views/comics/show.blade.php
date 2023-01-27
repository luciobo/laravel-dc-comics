@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6 rounded-5 bg-success">
            <h1>{{ $comics->title }} (#{{ $comics->id }})</h1>
            <p class="l">{{ $comics->description }}</p>
            <ul>
                <li class="d-flex justify-content-center"><img class="w-25 py-2" src="{{ $comics->thumb }}"</li>
                <li><strong>Prezzo:</strong> {{ $comics->price }}</li>
                <li><strong>serie:</strong> {{ $comics->series }}</li>
                <li><strong>Immissione In vendita:</strong> {{ $comics->sale_date }}</li>
                <li><strong>Tipologia:</strong> {{ $comics->type }}</li>
                <li><strong>Data creazione:</strong> {{ $comics->created_at }}</li>
                <li><strong>Data ultima modifica:</strong> {{ $comics->updated_at }}</li>
            </ul>
        </div>
    </div>
@endsection
