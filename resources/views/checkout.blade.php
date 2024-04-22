@extends('layout.app')
@section('main_section')
    <!-- body -->
    <!-- {{-- section 1 --}} -->
    <div class="position-relative text-white" style="background-color: #0ba1a1;">
        <div>
            @include('components.navbar')
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-2 order-lg-1 ">
                <div class="my-5">
                    <h2 class="mb-2">Shoping Details</h2>
                    <p>Colin Anderson</p>
                    <p>St. Marry 128 street, New Town, Paris</p>
                    <p>Contact Number: +12345678898</p>
                    <p>Email: colinanderson@email.com</p>
                </div>
                <div class="mb-5">
                    <h2 class="mb-3">Payment Details</h2>
                    <h3 class="mb-2">Select Payment method</h3>
                    <div class="rounded-2 mb-3 border d-flex justify-content-between align-items-center py-2 px-3 w-75">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Paypal
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end ">
                            <img src="{{ asset('images/paypal.svg') }}" alt="" class="w-50">
                        </div>
                    </div>
                    <div class="rounded-2 mb-3 border d-flex justify-content-between align-items-center py-2 px-3 w-75">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Creadit card
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end ">
                            <img src="{{ asset('images/card.svg') }}" alt="" class="w-50">
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h2 class="mb-2">Card Details</h2>
                    <form action="" class="my-3 row">
                        <div class="col-12 mb-3">
                            <label for="" class="form-label text-uppercase">PayPal Email</label>
                            <input type="text" class="form-control rounded-3" placeholder="Enter Paypal Email">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="" class="form-label text-uppercase">Card Number</label>
                            <input type="text" class="form-control rounded-3" placeholder="Enter Card Number">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label text-uppercase">Type Password</label>
                            <input type="text" class="form-control rounded-3" placeholder="*******">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label text-uppercase ">Card Expiry bg-danger date</label>
                            <input type="text" class="form-control rounded-3" placeholder="Enter Paypal Email">
                        </div>
                        <div class="col-12 mb-3">
                            <button class="btn w-100 rounded-4 text-white" style="background-color: #F2A71B;">PAY
                                NOW</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-1 order-lg-2  bg-light  p-3">
                <div class="my-5">
                    <h2>Your Order</h2>
                    <hr>
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="row align-items-center mb-3">
                            <div class="col-6 d-flex justify-content-between gap-3">
                                <div class="w-25 p-1 rounded-3 "
                                    style="background: linear-gradient(135deg, #13C5C5 0%, #324446 100%);">
                                    <img src="{{ asset('images/product-card-1.png') }}" alt=""
                                        class="img-fluid w-100">
                                </div>
                                <h4>Organic pineapple cola flavour</h4>
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end align-items-center gap-2">
                                    <input type="number" class="form-control" value="1" style="width: 35%;">
                                    <h4 class="mt-1">$19 USD</h4>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
