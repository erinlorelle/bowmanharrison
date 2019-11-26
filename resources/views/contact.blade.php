@extends('layouts.master')

@section('content')

    <section class="features-icons bg-light text-center">

        <div class="container">
            <h1>Contact Us</h1><br>
            <h2>Bowman Harrison Realty</h2>
            <h4><img src="../assets/img/icons/location.png" alt=""> 128 Princetonj Rd. St #2 Johnson City, TN 37601</h4>
            <h4><img src="../assets/img/icons/phone-call.png" alt=""> 423-232-0099</h4>
            <h4><a href = "mailto: bowmanharrisonrealtors@gmail.com">bowmanharrisonrealtors@gmail.com</a></h4><br>
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        {{--<div class="features-icons-icon d-flex">
                            <i class="icon-screen-desktop m-auto text-primary"></i>
                        </div>--}}
                        <h3>Jamie Bowman</h3>
                        <p class="lead mb-0">
                        <ul style="list-style-type:none">
                            <li>Affiliate Broker</li>
                            <li><img src="../assets/img/icons/envelope.png" alt=""> jamie.bowman@cryeleike.com</li>
                            <li><img src="../assets/img/icons/phone-call.png" alt=""> 423-329-1342</li>

                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <figure>
                            <img src="img/jamietami.jpg" width="400" height="375" alt="Jamie Bowman and Tami Harrison">
                            <figcaption><em>Jamie Bowman and Tami Harrison</em></figcaption>
                        </figure>
                        {{--<div class="features-icons-icon d-flex">
                            <i class="icon-check m-auto text-primary"></i>
                        </div>
                        <h3>About The Region</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        {{--<div class="features-icons-icon d-flex">
                            <i class="icon-layers m-auto text-primary"></i>
                        </div>--}}
                        <h3>Tami Harrison</h3>
                        <p class="lead mb-0">
                        <ul style="list-style-type:none">
                            <li>Affiliate Broker</li>
                            <li><img src="../assets/img/icons/envelope.png" alt=""> tami.harrison@cryeleike.com</li>
                            <li><img src="../assets/img/icons/phone-call.png" alt=""> 423-737-4079</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h3>Testimonials, Awards, Accolades</h3>
        <a href="testimonials"><img class="img-fluid rounded-circle mb-3" width="200" height="200" src="img/awards.png" alt=""></a>

        <br>
        <br>
    </section>


@endsection