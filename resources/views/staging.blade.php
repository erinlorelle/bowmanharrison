@extends('layouts.master')

@section('content')

    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2>Staging Services</h2><br>
            <a href="guides#stage"><h4>Home Staging Guide</h4></a>
            <a href="faq"><h4>FAQs</h4></a>
            <br>
            <br>
            <br>
            <h3>Portfolio</h3>

            <div class="row">
                <div class="column">
                    <a target="_blank" href="img/after1.jpg">
                        <img class="gallery" src="img/before1.jpg" alt="before1" style="width:100%">
                    </a>
                </div>
                <div class="column">
                    <a target="_blank" href="img/after2.jpg">
                        <img class="gallery" src="img/before2.jpg" alt="Forest" style="width:100%">
                    </a>
                </div>
                <div class="column">
                    <a target="_blank" href="img/after2.jpg">
                        <img class="gallery" src="img/before2.jpg" alt="Forest" style="width:100%">
                    </a>
                </div>
            </div>

        </div>
    </section>


@endsection