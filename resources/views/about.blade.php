@extends('layouts.master')

@section('content')

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters" style="color: black; text-decoration: none;">

                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/p3.jpg');"></div>

                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                 {{--   <h1>The About Page</h1><br><br>--}}
                    <h2><a href="aboutjamietami" style="color:black;text-decoration: none;">About Jamie and Tami</a></h2>
                    <p class="lead mb-0">Click to learn more about Jamie and Tami, they're history, experience, and professional qualifications!</p>
                </div>
            </div>
            <a href="region" style="text-decoration: none;"><div class="row no-gutters" style="color: black;">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/houses.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h3>Geographical Areas Served</h3>
                    <p>We are located in Johnson City and serve all surrounding areas, including Washington County, Carter County, Sullivan County and Greene County.</p>
                    <p>We have also worked with many families relocating to North East Tennessee and offer incoming families much needed one on one time to get to know each area of interest and offer expertise on all market areas, so that buyers can make the best decision when choosing their new home in a new area.
                    </p>
                    <p class="lead mb-0">
                        <ul>
                        <li>Johnson City, TN</li>
                        <li>Bristol, TN</li>
                        <li>Kingsport, TN</li>
                    </ul>
                    </p><br>
                    <h3 style="color:black;">About the Region</h3>
                    <p class="lead mb-0">Click to learn more about the TriCities area!</p>

                </div>
                </div></a>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/region2.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                   {{-- <h2>Evidence of expertise</h2>
                    <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                    <h3>Awards and accolades</h3>
                    <h3>Testimonials</h3>
                    <h3>Success stories</h3>
                    <br>
                    <h2>Blog</h2>--}}
                    <a href="contact" style="color: black; text-decoration: none;"><h2>Contact Information</h2></a>
                    <p class="">128 Princeton Rd St #2, Johnson City TN 37601<br>
                        <br>Office: 423-232-0099
                        <br>Tami: 423-737-4079
                        <br>Jamie: 423-329-1342
                    </p>
                    <p class=""><a href = "mailto: bowmanharrisonrealtors@gmail.com">bowmanharrisonrealtors@gmail.com</a></p>
                    <p class="">
                        <a href="#" class="fa fa-facebook"></a><a href="#"> Facebook</a><br />
                        <a href="#" class="fa fa-twitter"></a><a href="#"> Twitter</a><br />
                        <a href="#" class="fa fa-linkedin"></a><a href="#"> LinkedIn</a><br />
                        <a href="#" class="fa fa-pinterest"></a><a href="#"> Pinterest</a><br />
                    </p>
                </div>
                </div>
        </div>
        <br>
        <br>
    </section>


@endsection