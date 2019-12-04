@extends('layouts.master')

@section('content')

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters" style="color: black; text-decoration: none;">

                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/sullivan.jpg');"></div>

                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    {{--   <h1>The About Page</h1><br><br>--}}
                    <h2><a href="aboutjamietami" style="color:black;text-decoration: none;">Sullivan County</a></h2>
                    <p class="lead mb-0">Something awesome about Sullivan County!</p>
                </div>
            </div>
            <a href="region" style="text-decoration: none;"><div class="row no-gutters" style="color: black;">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bristol.jpg');"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h3>Schools</h3>
                        <p>We are located in Johnson City and serve all surrounding areas, including Washington County, Carter County, Sullivan County and Greene County.</p>
                        <p>We have also worked with many families relocating to North East Tennessee and offer incoming families much needed one on one time to get to know each area of interest and offer expertise on all market areas, so that buyers can make the best decision when choosing their new home in a new area.
                        </p>
                        <p class="lead mb-0">

                        </p><br>
                        <h3 style="color:black;">Hospitals</h3>
                        <p class="lead mb-0">We heal the sick!!!</p>

                    </div>
                </div></a>

        </div>
        <br>
        <br>
    </section>


@endsection