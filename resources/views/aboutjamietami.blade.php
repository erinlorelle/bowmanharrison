@extends('layouts.master')

@section('content')

    {{--<section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">About Jamie and Tami</h2>
            <p class="lead mb-0">Learn more about Jamie and Tami, they're history, experience, and professional qualifications!</p>
            <figure style="float:right">
                <img src="img/p2.jpg" width="400" height="475" alt="Jamie Bowman and Tami Harrison">
                <figcaption><em>Jamie Bowman and Tami Harrison</em></figcaption>
            </figure>


            <h3>History</h3>

                <img src="img/allthree.jpg" width="500" height="475" alt="Jamie Bowman and Tami Harrison" style="float:left">


            <h3>Professional Qualifications</h3>
            <h3>Experience</h3>
        </div>
    </section>--}}


    <header class="jamiehead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>About Jamie and Tami</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                </div>
            </div>
        </div>
    </header>

    <section class="testimonials text-center bg-light">
        <div class="container">

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content" style="text-align: left;">
                    <h3 class="mb-0" style="text-align: left">History</h3>
                    {{--<div class="subheading mb-3">Intelitec Solutions</div>--}}
                    <p>Tami and Jamie are a mother/daughter team with professional experience in real estate buying, selling and staging.</p>

                    <p>We have helped many families achieve their home ownership dreams through strategically navigating buyers and sellers through the entire process.</p>

                    <p>Your time is precious and you need a team that you can easily communicate with and has real life experience in all facets of the real estate market.</p>
                </div>
                <div class="resume-date text-md-right">
                   {{-- <span class="text-primary">March 2013 - Present</span>--}}
                    <figure>
                        <img src="img/jamietami.jpg" width="200" height="175" alt="Jamie Bowman and Tami Harrison">
                        <figcaption style="text-align: center"><em>Jamie Bowman and Tami Harrison</em></figcaption>
                    </figure>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <figure>
                        <img src="img/allthree.jpg" width="200" height="155" alt="Jamie Bowman and Tami Harrison">
                        <figcaption><em>Jamie Bowman and Tami Harrison Family</em></figcaption>
                    </figure>
                    {{--<h3 class="mb-0">Experience</h3>--}}
                   {{-- <div class="subheading mb-3">Intelitec Solutions</div>--}}
                    {{--<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>--}}
                </div>
                <div class="resume-date text-md-right">
                    <h3 class="mb-0">Experience</h3>
                    {{-- <div class="subheading mb-3">Intelitec Solutions</div>--}}
                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>

                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0" style="text-align: left">Qualifications</h3>
                    {{--<div class="subheading mb-3">Intelitec Solutions</div>--}}
                    <p style="text-align: left;">We are both members of the Northeast Tennessee Association of Realtors and are affiliate brokers working for Crye-Leike Realtors. We also hold certification of relocation specialists through LeadingRE.</p>
                </div>
                <div class="resume-date text-md-right">
                    {{-- <span class="text-primary">March 2013 - Present</span>--}}
                    <figure>
                        <img src="img/jamie-tami.jpg" width="200" height="145" alt="Jamie Bowman and Tami Harrison">
                        <figcaption style="text-align: center"><em>Jamie Bowman and Tami Harrison</em></figcaption>
                    </figure>
                </div>
            </div>

        </div>
        <h3>Testimonials, Awards, Accolades</h3>
        <a href="testimonials"><img class="img-fluid rounded-circle mb-3" width="200" height="200" src="img/awards.png" alt=""></a>

    </section>


@endsection