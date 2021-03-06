@extends('layouts.master')

@section('content')

    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Featured Listings</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
                <div class="form-row">
                    <div class="col-12 col-md-9 mb-2 mb-md-0">
                        <input type="email" class="form-control form-control-lg" placeholder="MLS, City, Address...">
                    </div>
                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary" style="background:red; border:red;">Search!</button>
                    </div>
                </div>
            </form>
        </div>
    </section>



    <!-- Properties Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <br>
            <br>
            <a href="#" style="color: black; text-decoration: none;">
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/house.jpeg');"></div>

                    <div class="col-lg-6 my-auto showcase-text">
                        <strong style="font-size: x-large">123 Main Street, Johnson City, TN 37604</strong>
                        <p class="lead mb-0" style="color:red;"><strong>$200,000</strong></p>
                        <p class="lead mb-0">2 bds | 1 ba | 2000 sqft | .75 acres</p>
                    </div>
                </div>
            </a>
            <br>
            <a href="#" style="color: black; text-decoration: none;">
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/house.jpeg');"></div>

                    <div class="col-lg-6 my-auto showcase-text">
                        <strong style="font-size: x-large">123 Main Street, Johnson City, TN 37604</strong>
                        <p class="lead mb-0" style="color:red;"><strong>$200,000</strong></p>
                        <p class="lead mb-0">2 bds | 1 ba | 2000 sqft | .75 acres</p>
                    </div>
                </div>
            </a>
            <br>
            <a href="#" style="color: black; text-decoration: none;">
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/house.jpeg');"></div>

                    <div class="col-lg-6 my-auto showcase-text">
                        <strong style="font-size: x-large">123 Main Street, Johnson City, TN 37604</strong>
                        <p class="lead mb-0" style="color:red;"><strong>$200,000</strong></p>
                        <p class="lead mb-0">2 bds | 1 ba | 2000 sqft | .75 acres</p>
                    </div>
                </div>
            </a>

        </div>
        <br>
        <br>
    </section>

@endsection