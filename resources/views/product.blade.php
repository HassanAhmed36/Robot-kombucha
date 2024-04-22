@extends('layout.app')
@section('main_section')
    <!-- body -->
    <!-- {{-- section 1 --}} -->
    <div class="position-relative text-white" style="background-color: #0ba1a1;">
        <div class="position-relative" style="z-index: 1;">
            @include('components.navbar')
        </div>
        <div class="overflow-hidden">
            <div class="container">
                <div
                    style="z-index: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('{{ asset('images/home-section-1.png') }}'); opacity: 0.15;">
                </div>
                <div class="row text-white align-items-center py-5 position-relative">
                    <div class="col-lg-1 col-0"></div>
                    <div class="col-lg-10 col-12 text-center py-5"> <!-- Adjusted column width -->
                        <h1 style="font-size: 75px;" class="fw-bold text-uppercase">Shop Product</h1>
                        <h5>Home/Product</h5>
                    </div>
                    <div class="position-absolute d-none d-lg-block" style="left: 60%;">
                        <img src="{{ asset('/images/section-1-image.png') }}" alt="" class="w-50"
                            style="transform: rotate(5deg);">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section 2 -->
    <div class="position-relative py-2" style="background: #324446;">
        <div class="z-3">
            <div class="row w-100 mx-auto d-flex align-items-stretch">
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-1.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6 ">Sustainable and healthy for people & planet</p>
                    </div>
                </div>
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-2.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6 ">Lower in sugar</p>
                    </div>
                </div>
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-3.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6 ">Zero Aspartame</p>
                    </div>
                </div>
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-4.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6 ">All Organic Ingreduents</p>
                    </div>
                </div>
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-5.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6 ">No ARTIFICIAL Artificial Chemicals</p>
                    </div>
                </div>
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-6.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6">Pro-biotic 'Good Gut' Bacteria</p>
                    </div>
                </div>
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-7.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6 ">High in Omega 3's & Antioxidants</p>
                    </div>
                </div>
                <div class="col py-1 ">
                    <div class="border border-2 p-3 text-center rounded-4" style="height: 90%;">
                        <img src="{{ asset('images/section-2/box-8.png') }}" alt="" class="w-50 mb-2">
                        <p class="mt-2 text-white fs-6">Natural Honey Sweetness</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row d-flex justify-content-center justify-content-lg-between">
            @foreach ($products as $product)
                @include('components.card', compact('product'))
            @endforeach

            <!--<div class="col-12 d-flex align-items-center justify-content-center">-->
            <!--    <nav>-->
            <!--        <ul class="pagination justify-content-center" style="background-color: #f2a71b;">-->
            <!--            <li class="page-item disabled">-->
            <!--                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>-->
            <!--            </li>-->
            <!--            <li class="page-item" style="background-color: #f2a71b !important;"><a class="page-link"-->
            <!--                    href="#">1</a>-->
            <!--            </li>-->
            <!--            <li class="page-item" style="background-color: #f2a71b !important;"><a class="page-link"-->
            <!--                    href="#">2</a>-->
            <!--            </li>-->
            <!--            <li class="page-item" style="background-color: #f2a71b !important;"><a class="page-link"-->
            <!--                    href="#">3</a>-->
            <!--            </li>-->
            <!--            <li class="page-item">-->
            <!--                <a class="page-link" href="#">Next</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </nav>-->
            <!--</div>-->
        </div>
    </div>
@endsection
