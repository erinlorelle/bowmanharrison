@extends('layouts.master')

@section('content')

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5"><a href="properties" style="color:white;">Buy</a>&nbsp&#9679&nbsp<a href="contact" style="color:white;">Sell</a>&nbsp&#9679&nbsp<a href="staging" style="color:white;">Stage</a></h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="MLS, City, Address..." style="opacity: 0.5;">
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary" style="background:red; border:red;">Search!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <a href="properties">
                    <div class="features-icons-icon d-flex">
                       {{-- <i class="icon-screen-desktop m-auto text-primary"></i>--}}
                        <img class="m-auto" src="img/house2-icon.png" width="145" height="145" alt="">
                    </div>
                    </a>
                    <br>
                    <br>
                    <h3>Properties</h3>
                    <p class="lead mb-0">Search properties including recently added listings!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <a href="staging">
                        <div class="features-icons-icon d-flex">
                            <img class="m-auto" src="img/table3.png" width="145" height="145" alt="">
                        </div>
                    </a>
                    <br>
                    <br>
                    <h3>Staging</h3>
                    <p class="lead mb-0">Check out our staging services!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <a href="region">
                            <div class="features-icons-icon d-flex">
                                <img class="m-auto" src="img/city2.png" width="145" height="145" alt="">
                            </div>
                        </a>
                        <br>
                        <br>
                    <h3>About The Region</h3>
                    <p class="lead mb-0">New to the area?  Learn more about the TriCities region!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">
        <a href="featured" style="text-decoration: none;"><div class="row no-gutters" style="color:black;">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/house2.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Featured Listings</h2>
                <p class="lead mb-0">View the latest trending properties for a better home! These properties are our most viewed and sought after Properties.</p>
            </div>
        </div></a>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/stage1.png');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>What We Do</h2>
                <p class="lead mb-0">Our goals are tailored to both buyers and sellers of real estate property.  We ensure every family, pet owner, and hard working customer finds the perfect roof to thrive under.  Bowman Harrison works diligently to provide a profitable platform for marketing homes at optimal returns.</p>
                <br>
                <a class="phonehover" href="tel:423-232-0099"><i class="fa fa-2x fa-phone">&nbsp423-232-0099</i></a>

            </div>
        </div>
        <a href="region" style="text-decoration: none; color:black;"><div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/region.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>About The Region</h2>
                <p class="lead mb-0">Johnson city is a historic culmination of innovation, brilliance, kindness, and southern culture.  The city offers plentiful events, high level education, delicious food, and beautiful housing.  Services offered range from outdoor parks,  backwoods, cultural centers, and a university.</p>
            </div>
            </div></a>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
                    <h5>Margaret E.</h5>
                    <p class="font-weight-light mb-0">"Bowman Harrison are the Best!  Thanks so much guys!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"Jamie and Tami are fantastic!  They did a great job staging my home and it sold a lot quicker than expected!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                    <h5>Connie W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making home buying easy!"</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
