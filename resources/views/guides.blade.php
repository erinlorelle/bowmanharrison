@extends('layouts.master')

@section('content')

    <section class="features-icons bg-light text-center">
        <h1>Guides</h1><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-screen-desktop m-auto text-primary"></i>
                        </div>
                        <h3>Help You Buy</h3>
                        <p class="lead mb-0">
                            <ul style="list-style-type:none">
                                <li>Market Information</li>
                                <li>Expert Advice</li>
                                <li>Properties</li>
                                <li>Mortgage Calculator</li>
                                <li>Request A Consultation</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-layers m-auto text-primary"></i>
                        </div>
                        <h3>Help You Sell</h3>
                        <p class="lead mb-0">
                        <ul style="list-style-type:none">
                            <li>Market Information</li>
                            <li>Expert Advice</li>
                            <li>Home Value Calculator</li>
                            <li>Staging</li>
                            <li>List Your Home</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">

                        <img src="img/key_cropped.jpg" alt="Guides"/>


                        {{--<div class="features-icons-icon d-flex">
                            <i class="icon-check m-auto text-primary"></i>
                        </div>
                        <h3>About The Region</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection