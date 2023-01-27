@extends('layouts.app')

@section('content')

    <h1>{{ $comics->title }} (#{{ $comics->id }})</h1>

    <p class="lead">{!! $comics->title !!}</p>
    <ul>
        <li><strong>Descrizione:</strong> {{ $comics->description }}</li>
        <li><strong>Data creazione:</strong> {{ $comics->created_at }}</li>
        <li><strong>Data ultima modifica:</strong> {{ $comics->updated_at }}</li>
    </ul>

@endsection
