@extends('layouts.master')

@section('content')

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/p3.jpg');"></div>

                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h1>The About Page</h1><br><br>
                    <h2><a href="aboutjamietami">About Jamie and Tami</a></h2>
                    <p class="lead mb-0">Learn more about Jamie and Tami, they're history, experience, and professional qualifications!</p>


                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/houses.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Geographical Areas Served</h2>
                    <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>

                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/region2.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Evidence of expertise</h2>
                    <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                    <h3>Awards and accolades</h3>
                    <h3>Testimonials</h3>
                    <h3>Success stories</h3>
                    <br>
                    <h2>Blog</h2>
                    <h2>Contact Information</h2>
                    <p class=""><img src="../assets/img/icons/location.png" alt="">Street Address City, State, Zip<br /><img src="../assets/img/icons/phone-call.png" alt="">Phone</p>
                    <p class=""><img src="../assets/img/icons/envelope.png" alt="">Email</p>
                    <p class="">
                        <a href="#" class="fa fa-facebook"></a><a href="#"> Facebook</a><br />
                        <a href="#" class="fa fa-twitter"></a><a href="#"> Twitter</a><br />
                        <a href="#" class="fa fa-linkedin"></a><a href="#"> LinkedIn</a><br />
                        <a href="#" class="fa fa-pinterest"></a><a href="#"> Pinterest</a><br />
                    </p>
                </div>
            </div>
        </div>
    </section>


@endsection