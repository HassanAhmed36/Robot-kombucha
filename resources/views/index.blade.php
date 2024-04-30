@extends('layout.app')
@section('main_section')
    <!-- body -->
    <!-- {{-- section 1 --}} -->
    <div class="position-relative text-white"
        style="background-color: #0ba1a1; width: 100vw !important; overflow-x: hidden !important;">
        <div
            style="z-index:0.5;position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('images/home-section-1.png'); opacity: 0.15;">
        </div>
        <div>
            @include('components.navbar')
        </div>
        <div class="container pt-lg-3 mt-lg-3 pt-0 mt-0" style="width: 100vw !important; overflow-x: hidden !important;">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 order-lg-2 order-1 text-lg-start text-center">
                    <style>
                        @media screen and (max-width: 768px) {
                            #main-heading {
                                font-size: 40px !important;
                            }
                            .main-section-img {
                                height: 30vh !important;
                            }
                          .fisrt-p , .second-p{
                          	font-size:10px !important;
                          }
                            
                        }
                       @media screen and (min-width: 768px) {
                          .fisrt-p {
                          	font-size:25px !important;
                          }
                         .second-p {
                          	font-size:20px !important;
                          }
                         
                         
                            
                        }
                    </style>
                    <div class="">
                        <h1 class="fw-bold" style="font-size: 75px" id="main-heading">ROBOT Kombucha
                        </h1>
                    </div>
                    <div class="fs-5 d-lg-block d-md-block d-sm-block d-none">
                        <p class="fw-semibold fisrt-p">3 exciting organic flavors including Award-Winning Organic Honey Cola
                            Kombucha, Organic Cherry Cola Kombucha and Organic Tropical Pineapple & Mango Kombucha</p>
                    </div>
                    <div class="fs-5 d-lg-block d-md-block d-sm-block d-none">
                        <p class="second-p">Hand-crafted using the finest organic ingredients - including wild organic honey, natural organic
                            kombucha, and original organic cola flavours such as organic lemon, organic orange and organic
                            cola nut.</p>
                    </div>
                    <div class=" position-relative d-lg-block d-md-block d-sm-block d-none">
                        <a href="{{ route('product') }}" class="btn px-5 rounded-5 text-white"
                            style="background-color: #F2A71B;padding:15px, 40px, 10px, 40px">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1 order-2">
                    <div class="text-center position-relative mt-lg-5 mt-0">
                        <div class="position-absolute" style="left: 0%; z-index: 1;">
                            <img src="{{ asset('/images/star-bg.svg') }}" alt="" style="width: 80%;">
                        </div>
                        <img src="{{ asset('images/home-section-image.png') }}" alt=""
                            class="img-fluid main-section-img d-lg-block d-md-block d-sm-block d-none" style="position: relative; z-index: 2; width:100rem; ">
                      <img src="{{ asset('images/section-1-image.png') }}" alt=""
                            class="img-fluid main-section-img d-lg-none d-md-none d-sm-none d-block" style="position: relative; z-index: 2; width:100rem; ">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1 order-2  d-lg-none d-md-none d-sm-none d-block">
                    <div class="fs-5 text-center">
                        <p class="fw-semibold fs-4">3 exciting organic flavors including Award-Winning Organic Honey Cola
                            Kombucha, Organic Cherry Cola Kombucha and Organic Tropical Pineapple & Mango Kombucha</p>
                    </div>
                    <div class="fs-5 text-center">
                        <p>Hand-crafted using the finest organic ingredients - including wild organic honey, natural organic
                            kombucha, and original organic cola flavours such as organic lemon, organic orange and organic
                            cola nut.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- {{-- section 2 --}} -->
    <div class="position-relative py-2" style="background: #324446;">
        <div
            style="z-index:0.5;position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('images/home-section-1.png'); opacity: 0.2;">
        </div>
        <div class="z-3 ">
            @include('components.bullet')
            <div class="mt-3 container">
                <div class="row w-100 align-items-center">
                    <div class="col-12 col-lg-4 text-white">
                        <h2 class="fw-bold fs-1 mb-2">Organic Honey Kombucha Cola Infusion</h2>
                        <h5>ROBOT Kombucha takes the classic cola flavor to new heights by infusing it with the richness
                            of
                            organic honey. This unique twist brings a hint of sweetness and depth to each sip, making it
                            a
                            truly
                            irresistible beverage.</h5>
                        <h2 class="my-2">Sustainable and healthy for people and planet:</h2>
                        <p>Say goodbye to the artificial additives and excessive sugars found in traditional cola
                            drinks.
                            ROBOT
                            Kombucha is carefully crafted with premium, all-natural ingredients to provide you with a
                            healthier
                            alternative. It is low in calories, free from high fructose corn syrup, and packed with
                            beneficial
                            probiotics and antioxidants.</p>
                        <button class="btn w-100 rounded-4 " style="background: #41f2c0">Learn more</button>
                    </div>
                    <div class="col-12 col-lg-8">
                        <img src="{{ asset('images/section-2/section-2-bottle.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- {{-- section 3 --}} -->
    <div class="position-relative py-3" style="background-color: #f32c00;">
        <div
            style="z-index:0.5;position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('images/home-section-1.png'); opacity: 0.2;">
        </div>
        <div class="row container text-white align-items-center ">
            <div class="col-lg-8 col-12">
                <img src="{{ asset('images/section-3/section-3-bottle.png') }}" alt="" class="img-fluid ">
            </div>
            <div class="col-lg-4 col-12">
                <h2>Organic Pineapple & Mango Kombucha</h2>
                <p>ROBOT brings you the refreshing and delicious combination of tropical exotic fruits with this organic
                    pineapple and
                    mango kombucha. The zesty and rich sunny flavours combine with the hand-made organic kombucha etc.
                </p>
                <h3>Healthier Ingredients, Healthier You:</h3>
                <p>Say goodbye to the artificial additives and excessive sugars found in traditional cola drinks. ROBOT
                    Kombucha is
                    carefully crafted with premium, all-natural ingredients to provide you with a healthier alternative.
                    It is low in
                    calories, free from high fructose corn syrup, and packed with beneficial probiotics and
                    antioxidants.</p>
                <button class="btn w-100 rounded-4 " style="background: #41f2c0">Learn more</button>

            </div>
        </div>
    </div>

    <!-- section 4 -->
    <div class="position-relative py-3" style="background-color: #d93b75;">
        <div
            style="z-index:0.5;position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('images/home-section-1.png'); opacity: 0.2;">
        </div>
        <div class="mt-3 container">
            <div class="row w-100 align-items-center">
                <div class="col-lg-4 col-12 text-white">
                    <h2 class="fw-bold fs-1 mb-2">Organic Cherry Cola Kombucha</h2>
                    <h5>ROBOT Kombucha takes the classic cola recipe to new heights by infusing it with wild organic
                        Honey. This unique
                        twist brings a hint of sharp sweetness and depth to every sip, making it a truly irresistible
                        and delicious
                        beverage.</h5>
                    <h2 class="my-2">Sustainable and healthy for people and planet:</h2>
                    <p>Say goodbye to the artificial additives and excessive sugars found in traditional cola drinks.
                        ROBOT Kombucha is
                        carefully crafted with premium, all-natural ingredients to provide you with a healthier
                        alternative. It is low
                        in calories, free from high fructose corn syrup, and packed with beneficial probiotics and
                        antioxidants.</p>
                    <button class="btn w-100 rounded-4" style="background: #f2a71b">Learn more</button>
                </div>

                <div class="col-lg-8 col-12">
                    <img src="{{ asset('/images/section-4-bottle.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- section 5 -->
    <div class="position-relative py-3" style="background-color: #ff7a01;">
        <div class="mt-3 container">
            <div class="row w-100 align-items-center">
                <div class="col-lg-4 col-12 order-1  justify-content-end text-white" style="text-align: right;">
                    <div>
                        <h2>The Science</h2>
                        <h4>Unlocking the Science Behind Kombucha Fermentation</h4>
                        <p>Kombucha fermentation is a fascinating process that involves the breakdown of sucrose by
                            yeast
                            cells into fructose and
                            glucose. These sugars are then metabolized into ethanol, which undergoes oxidation by acetic
                            acid bacteria (AAB) to
                            produce acetic acid. This transformation not only lowers the pH of Kombucha but also adds to
                            its
                            distinctive sour taste.</p>
                    </div>
                    <div>
                        <h2>Understanding the Role of AAB and Yeast in Kombucha Fermentation</h2>
                        <p>Studying the AAB and yeast present in the Kombucha starter culture is key to unraveling the
                            secrets of the fermentation
                            process.</p>
                        <p>By characterizing these microorganisms, we can gain valuable insights into the production of
                            metabolites, such as
                            organic acids, which are known for their potential health benefits and contribute to the
                            sensory properties of Kombucha.
                            In this review, we explore the latest advancements in isolating, enumerating, and
                            identifying AAB and yeast in Kombucha,
                            using both conventional phenotypic and modern genetic identification techniques.</p>
                        <p>
                            The aim is to shed light on the microbial diversity of this beloved beverage.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 order-2  d-flex flex-column align-items-center  flex-column ">
                    <img src="{{ asset('/images/section-5/bottle-1.png') }}" alt="" class="img-fluid"
                        style="transform: rotate(10deg); width: 48%; z-index: 3;">
                    <img src="{{ asset('/images/section-5/bottle-2.png') }}" alt="" class="img-fluid"
                        style="transform: rotate(-10deg); width: 35%; z-index: 2;">
                    <img src="{{ asset('/images/section-5/bottle-3.png') }}" alt="" class="img-fluid"
                        style="transform: rotate(10deg); width: 35%; z-index: 1;">
                </div>
                <div class="col-lg-4 col-12 order-3  text-white">
                    <h2>A Journey Through Time and Culture: The Origins of Kombucha</h2>
                    <p>Kombucha, a traditional fermented sparkling tea, has been enjoyed in China since approximately
                        220 B.C. This drink is
                        cherished for its delightful combination of slightly sweet and acidic flavors, as well as its
                        perceived health-promoting
                        properties.</p>
                    <p>Historical records indicate that Dr. Kombu introduced fermented tea to Japan around 414 A.D.,
                        where it was reputedly
                        used to alleviate digestive ailments. The name "Kombucha" itself is derived from "Dr. Kombu,"
                        while "cha" refers to tea
                        in Japanese.</p>
                    <p>From there, Kombucha made its way to Russia as "Tea Kvass," gaining popularity due to its
                        purported beneficial effects
                        on metabolic diseases, hemorrhoids, and rheumatism. During World War II, Kombucha found its way
                        to Western Europe and
                        North Africa.</p>
                    <p>Today, Kombucha production has become a global phenomenon, with commercial varieties available in
                        a range of flavors.
                        Additionally, the popularity of Kombucha has led to the creation of small-scale home-brewed
                        products, often found at
                        farmer's markets and within local communities.</p>
                    <h2>Embark on a Flavorful and Healthy Journey with Kombucha</h2>
                    <h4>Discover the fascinating science behind Kombucha fermentation, unravel the secrets of its
                        microbial diversity, and join
                        the millions around the world who enjoy this refreshing and health-promoting beverage.</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- section 6 -->
    <div class="text-white" style="background-color: #255874; min-height: 105vh;">
        <div class="container pt-5 position-relative">
            <div class="text-center">
                <h1 style="font-size: 80px; font-weight: 700; letter-spacing: -4px;">Sustainable and Ethical Choices
                </h1>
            </div>
            <div class="text-center" style="font-size: 36px; font-weight: 600">
                <p>At ROBOT Kombucha, we firmly believe in sustainability and making responsible choices.</p>
            </div>
            <div class="text-center w-75 mx-auto" style="font-size: 24px; font-weight: 400">
                <p>Our commitment to using organic ingredients ensures that you are nourishing your body while
                    supporting
                    eco-friendly farming practices. We also prioritize eco-conscious packaging, using materials that are
                    recyclable and minimizing our environmental impact.</p>
            </div>
            <div class="text-center" style="font-size: 36px; font-weight: 600">
                <p>Versatile and Convenient</p>
            </div>
            <div class="text-center w-75 mx-auto">
                <p>ROBOT Kombucha is the perfect companion for any occasion. Whether you're enjoying it on its own,
                    using it
                    as a mixer for your favorite cocktails, or incorporating it into refreshing mocktails, the
                    possibilities
                    are endless. Its portable and convenient packaging allows you to enjoy the goodness of kombucha
                    wherever
                    you go.</p>
            </div>
        </div>
        <div class="mt-5 pt-5 position-relative mx-auto">
            <div class="container  d-none d-lg-block ">
                <div class="text-center d-flex justify-content-center align-baseline ">
                    <img src="{{ asset('images/section-6/bottle-3.png') }}" alt=""
                        class="img-fluid position-absolute "
                        style="transform: rotate(-30deg); z-index: 1; width: 15%; margin-top: 50px; left: 32%">
                    <img src="{{ asset('images/section-6/bottle-2.png') }}" alt=""
                        class="img-fluid position-absolute "
                        style="transform: rotate(-15deg); z-index: 2; width: 20%; margin-top: -18px; left: 35%;">
                    <img src="{{ asset('images/section-6/bottle-1.png') }}" alt=""
                        class="img-fluid position-absolute "
                        style="transform: rotate(5deg); z-index: 3; width: 28%; margin-top: -50px; left: 40%;">
                </div>
            </div>
        </div>
    </div>

    @include('components.news-letter')
    @include('components.contact-us')
@endsection
