<!-- header start -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 60px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('honey.cola') }}">Organic Honey Cola Kombucha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('pineapple.mango') }}">Organic Pineapple & Mango
                        Kombucha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('cherry.cola') }}">Organic Cherry Cola Kombucha</a>
                </li>
                <li class="nav-item d-flex gap-2 flex-wrap">
                    <a href="#" class="nav-link text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="nav-link text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="nav-link text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="nav-link text-white"><i class="fas fa-envelope"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- header end -->
