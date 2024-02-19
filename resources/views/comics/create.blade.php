@extends('layout.app')

@section('content')
    <h1 class="text-center fw-bold mt-3">AGGIUNGI UN NUOVO FUMETTO</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="content my-3">

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label> 
                <input type="text" class="form-control" id="title" name="title"> 
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label> 
                <input type="text" class="form-control" id="description" name="description"> 
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label> 
                <input type="text" class="form-control" id="thumb" name="thumb"> 
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>  
                <input type="text" class="form-control" id="price" name="price"> 
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sales_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" id="sales_date" name="sales_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo di fumetto</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
    </div>
@endsection
