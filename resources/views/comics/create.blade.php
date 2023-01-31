@extends('layouts.app')

@section('content')
    <div class="text-center">

        <h1 class="py-5">Nuovo Comic</h1>

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                {{-- qui la rotta per ocllegare il form al comic controller  --}}
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text"
                            class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                            name="title">

                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @elseif(old('title'))
                            {{-- altrimenti se c'è un valore old per title, mostra un valid-feedback --}}
                            <div class="valid-feedback">
                                Ottimo lavoro!
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="text" class="form-control" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" step=".01" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">serie</label>
                        <input type="text" class="form-control" name="series">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data prima vendita</label>
                        <input type="date" class="form-control" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipologia</label>
                        <input type="text" class="form-control" name="type">
                    </div>
                    <button class="btn btn-primary" type="submit">Aggiungi Comics</button>
                </form>
            </div>
        </div>
    </div>
@endsection
