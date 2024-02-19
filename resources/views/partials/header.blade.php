<header>
        <div class="top_line">
            <div class="content">
                <ul class="text-white list-unstyled text-uppercase d-flex justify-content-end">
                    <li class="me-5">DC POWER COMICS<sup><small>sm</small></sup><span class="ms-3">VISA</span><sup><small>©</small></sup></li>
                    <li>ADDITIONAL DC SITES</li>
                </ul>
            </div>
        </div>
        <div class="bottom_line">
            <div class="content d-flex justify-content-between align-items-center">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Comics logo">
                <ul class="d-flex list-unstyled fs-5">
                    <li class="me-4 fw-bold"><a href="{{ route('home') }}">COMICS</a></li>
                    <li class="me-4 fw-bold"><a href="{{ route('comics.create') }}">AGGIUNGI</a></li>
                    <li class="me-4 fw-bold"><a href="">RIMUOVI</a></li>
                </ul>
                <input type="text" name="search" id="search" placeholder="Search">
            </div>
        </div>
</header>