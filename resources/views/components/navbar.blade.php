<!-- header start -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent; box-shadow: rgba(100, 100, 111, 0.076) 0px 7px 29px 0px;">
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
                <li class="nav-item me-4 fs-6">
                    <a class="nav-link text-white" href="{{ route('honey.cola') }}">Honey Cola</a>
                </li>
                <li class="nav-item me-4 fs-6">
                    <a class="nav-link text-white" href="{{ route('pineapple.mango') }}">Pineapple & Mango</a>
                </li>
                <li class="nav-item me-4 fs-6">
                    <a class="nav-link text-white" href="{{ route('cherry.cola') }}">Cherry Cola</a>
                </li>
                <li class="nav-item me-4 fs-6">
                    <a class="nav-link text-white" href="{{ route('science') }}">The Science</a>
                </li>
                <li class="nav-item me-4 fs-6 mt-1">
                    <a class="nav-link bg-white text-black rounded-4 px-4 py-1" href="{{ route('contact') }}">Contact
                        us</a>
                </li>
                <li class="nav-item d-flex gap-2 flex-wrap">
                    <a href="#" class="nav-link text-white"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/ROBORTkombucha" target="_blank" class="nav-link text-white"><i
                            class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="nav-link text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="nav-link text-white"><i class="fas fa-envelope"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- header end -->
