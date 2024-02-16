@extends('layout.app')

@section('content')
    <div class="blue-banner">
        <div class="smaller-content">
            <img src="{{ $comic['thumb'] }}" alt="Comic cover">
        </div>
    </div>
    <div class="smaller-content bg-white-content">
        <h2>{{ $comic['title'] }}</h2>
        <div class="green-banner">
            <div class="price">
                <div class="price-us"><span>U.S. Price: </span>{{ $comic['price'] }}</div>
                <div class="price-availability">Available</div>
            </div>
            <div class="availability">Check Availability</div>
        </div>
        <p>{{ $comic['description'] }}</p>
    </div>
    <div class="gray-bg">
        <div class="smaller-content">
                <div class="row">
                    <div class="col">
                        <div class="content p-0 m-0">
                            <h4>Talent</h4>
                            <div class="specs">
                                <div>Art By:</div>
                                <div class="artist">Ganni, Paolo, Piero, Valeria, Giulia, Vanessa, Matteo</div>
                            </div>
                            <div class="specs">
                                <div>Written By:</div>
                                <div class="artist">Ganni, Paolo, Piero, Valeria, Giulia, Vanessa, Matteo</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content p-0 m-0">
                            <h4>Specs</h4>
                            <div class="specs">
                                <div>Series:</div>
                                <div class="artist">{{ $comic['series']}}</div>
                            </div>
                            <div class="specs">
                                <div>U.S. Price:</div>
                                <div class="artist">{{ $comic['price']}}</div>
                            </div>
                            <div class="specs">
                                <div>On Sale Date:</div>
                                <div class="artist">{{ $comic['sale_date']}}</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
