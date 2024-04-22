@extends('layout.app')
@section('main_section')
    <!-- {{-- section 1 --}} -->
    <div class="position-relative text-white" style="background-color: #0ba1a1;">
        <div>
            @include('components.navbar')
        </div>
    </div>
    <!-- section 2 -->
    <div class="container col-10">
        <div class="mx-auto my-3 py-5">
            <div class="row my-5">
                <div class="col-lg-4 col-12">
                    <div class="row rounded-3" style="background-color: #324446;">
                        <div class="col-12 p-5 text-center">
                            <img src="{{ asset($product->images->first()->image_path) }}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 ps-4 mt-4">
                    <h4 class="" style="color: #324446;">ROBOT Kombucha</h4>
                    <h1 class="fw-bold" style="color: #324446;">{{ $product->name }}</h1>
                    <div class="my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#f2a71b"
                                d="M12 2l2.772 7.514H22l-6.786 5.422 2.772 7.514L12 17.428l-7.986 5.022 2.772-7.514L2 9.514h6.228z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#f2a71b"
                                d="M12 2l2.772 7.514H22l-6.786 5.422 2.772 7.514L12 17.428l-7.986 5.022 2.772-7.514L2 9.514h6.228z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#f2a71b"
                                d="M12 2l2.772 7.514H22l-6.786 5.422 2.772 7.514L12 17.428l-7.986 5.022 2.772-7.514L2 9.514h6.228z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#f2a71b"
                                d="M12 2l2.772 7.514H22l-6.786 5.422 2.772 7.514L12 17.428l-7.986 5.022 2.772-7.514L2 9.514h6.228z" />
                        </svg>
                        (4.9 Rating)

                    </div>
                    <div class="my-2">
                        <h4 style="color: #324446;"><span
                                class="text-light-emphasis  text-decoration-line-through me-2">$24.99</span><span>{{ $product->price }}</span>
                        </h4>
                    </div>
                    <div class="mt-4">
                        <button class="btn rounded-4 px-4 mb-3  me-3"
                            style="border:1px solid #324446; background-color: #F2A71B;">8 can pack</button>
                        <button class="btn rounded-4 px-34 mb-3 me-3"
                            style="border:1px solid #324446; background-color: #F2A71B;">For a shop</button>
                        <button class="btn rounded-4 px-4 mb-3  me-3"
                            style="border:1px solid #324446; background-color: #F2A71B;">For a wholesaler</button>
                        <button class="btn rounded-4 px-4 mb-3  me-3"
                            style="border:1px solid #324446; background-color: #F2A71B;">For a retail group</button>
                        <button class="btn rounded-4 px-4 mb-3  me-3"
                            style="border:1px solid #324446; background-color: #F2A71B;">for on/off trade</button>
                    </div>
                    <p class="mt-5">{!! $product->description !!}
                    </p>
                    <div class="mt-5">
                        <a href="{{ route('checkout') }}" class="btn rounded-4 px-3 me-3"
                            style="border:1px solid #324446; background-color: #41F2C0;"><i
                                class="fa-solid fa-cart-shopping me-1"></i> ADD
                            TO
                            CART</a>
                        <button class="btn rounded-4 px-3 me-3" style="border:1px solid #324446;">BUY NOW</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" py-5" style="border-bottom :1px solid #324446">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="border-bottom: 1px solid #324446;">
                <li class="nav-item me-3" role="presentation">
                    <button class="nav-link text-black  active" id="description-tab" data-bs-toggle="tab"
                        data-bs-target="#description" type="button" role="tab" aria-controls="description"
                        aria-selected="true">Description</button>
                </li>
                <li class="nav-item me-3" role="presentation">
                    <button class="nav-link text-black " id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                        type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                </li>
                <li class="nav-item me-3" role="presentation">
                    <button class="nav-link text-black " id="product-tab" data-bs-toggle="tab" data-bs-target="#product"
                        type="button" role="tab" aria-controls="product" aria-selected="false">Product</button>
                </li>
                <li class="nav-item me-3" role="presentation">
                    <button class="nav-link text-black " id="image-tab" data-bs-toggle="tab" data-bs-target="#image"
                        type="button" role="tab" aria-controls="image" aria-selected="false">Image</button>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    <div class="row py-3">
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0   text-center">
                            <img src="{{ asset($product->images->first()->image_path) }}" alt=""
                                class="w-25 img-fluid ">
                        </div>
                        <div class="col-lg-8 col-12">
                            <p>
                                {{ $product->description }}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    Review content goes here.
                </div>
                <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
                    Product content goes here.
                </div>
                <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                    <div class="row">
                        @foreach ($product->images as $image)
                            <div class="col-3">
                                <img src="{{ asset($image->image_path) }}" alt="" class="img-fluid w-25">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 ">
            <h1 class="text-bold">You maybe interested</h1>
            <div class="mt-3">
                <div class="row mx-auto">
                    @for ($i = 1; $i <= 3; $i++)
                        @include('components.card')
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
