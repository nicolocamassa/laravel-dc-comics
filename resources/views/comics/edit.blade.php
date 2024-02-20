@extends('layout.app')

@section('content')
    <h1 class="text-center fw-bold mt-3">MODIFICA UN FUMETTO</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="content my-3">

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label> 
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $comic->title }}" > 
                @error('title')
	                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label> 
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ $comic->description }}"> 
                @error('description')
	                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label> 
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ $comic->thumb }}"> 
                @error('thumb')
	                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>  
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $comic->price }}"> 
                @error('price')
	                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ $comic->series }}">
                @error('series')
	                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sales_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control @error('sales_date') is-invalid @enderror" id="sales_date" name="sales_date" value="{{ $comic->sales_date }}">
                @error('sales_date')
	                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo di fumetto</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ $comic->type }}">
                @error('type')
	                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
    </div>
@endsection
