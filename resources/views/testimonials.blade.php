@extends('layouts.master')

@section('content')

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <h2 class="mb-5" style="text-align: center;">Awards and Accolades</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h4>The Awesome Realtor Award</h4>
                    <div class="subheading mb-3">Award of excellence given bi-annually in Washington Co</div>
                    {{--<div>Computer Science - Web Development Track</div>
                    <p>GPA: 3.23</p>--}}
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Awarded: October 2018</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h4>National Realtor Certificate</h4>
                    <div class="subheading mb-3">Certificate signfiying nationwide acceptance of their accomplishments</div>
                    {{--<div>Computer Science - Web Development Track</div>
                    <p>GPA: 3.23</p>--}}
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">Awarded: July 2019</span>
                </div>
            </div>


        </div>
    </section>


@endsection