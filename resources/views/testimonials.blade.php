@extends('layouts.master')

@section('content')

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-4.jpg" alt="">
                        <h5>Lauren S.</h5>
                        <p class="font-weight-light mb-0">"Jamie and Tami are really professional!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-5.jpg" alt="">
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Bowman Harrison did a fantasic job staging our home.  They also helped us find a smaller home more suitable for our needs!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-6.jpg" alt="">
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks, Jamie, for helping us buy our first home!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="container">
            <div class="w-100">
                <h2 class="mb-5" style="text-align: center;">Awards and Accolades</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h4>Northeast Tennessee Association of Realtors</h4>
                        <div class="subheading mb-3">Both Jamie Bowman and Tami Harrison are members </div>
                        {{--<div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>--}}
                    </div>
                    <div class="resume-date text-md-right">
                        <p>Awarded: July 2019</p>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h4>National Realtor Certificate</h4>
                        <div class="subheading mb-3">Certificate signifying nationwide acceptance of their accomplishments</div>
                        {{--<div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>--}}
                    </div>
                    <div class="resume-date text-md-right">
                        <p>Awarded: July 2019</p>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h4>National Realtor Certificate</h4>
                        <div class="subheading mb-3">Certificate signifying nationwide acceptance of their accomplishments</div>
                        {{--<div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>--}}
                    </div>
                    <div class="resume-date text-md-right">
                        <p>Awarded: July 2019</p>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h4>Crye-Leike Realtors</h4>
                        <div class="subheading mb-3">Both Jamie and Tami are affiliate brokers working for Crye-Leike</div>
                        {{--<div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>--}}
                    </div>
                    <div class="resume-date text-md-right">
                        <p>Awarded: July 2019</p>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h4>Certification of Relocation Specialists</h4>
                        <div class="subheading mb-3">Both Jamie and Tami are certified through LeadingRE</div>
                        {{--<div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>--}}
                    </div>
                    <div class="resume-date text-md-right">
                        <p>Awarded: July 2019</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection