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

    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">About Jamie and Tami</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0" style="text-align: left">History</h3>
                    {{--<div class="subheading mb-3">Intelitec Solutions</div>--}}
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
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
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
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

    </section>


@endsection