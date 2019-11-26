@extends('layouts.master')

@section('content')
    <header class="guidehead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>Guides</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                </div>
            </div>
        </div>
    </header>

    <section class="testimonials text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="buyguide" style="color:black;"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="img/buy.jpg" alt="">
                            <h5>Home Buying Guide</h5>
                             <p class="font-weight-light mb-0">Click here for tips for buying your home.</p>
                        </div> </a>
                </div>

                <div class="col-lg-4">
                    <a href="sellguide" style="color:black;"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="img/sellingguide.jpeg" alt="">
                            <h5>Home Selling Guide</h5>
                            <p class="font-weight-light mb-0">Click here for tips for selling your home quickly.</p>
                        </div></a>
                </div>
                <div class="col-lg-4">
                    <a href="stagingguide" style="color:black;"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="img/staging3.jpg" alt="">
                            <h5>Home Staging Guide</h5>
                            <p class="font-weight-light mb-0">Click here to get learn more about our services and to get tips for preparing your home to sell.</p>
                        </div></a>
                </div>
            </div>
        </div>
    </section>
@endsection