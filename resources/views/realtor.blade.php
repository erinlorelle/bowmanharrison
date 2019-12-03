@extends('layouts.master')

@section('content')

    <header class="realtorhead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>Staging for Realtors</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                </div>
            </div>
        </div>
    </header>

    <section class="text-center bg-light pt-4 pb-5">
        <div class="container">
            <section class="faq text-left">

                <div id="accordion">
                    <h3 class="mb-4">We can help you sell your homes faster</h3>
                    <div class="card mb-2">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Services
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Service Option A
                                <br>
                                Service Option B
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Request more information
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <a href="contact">Contact Us</a>
                                <br>
                                <a href="mailto: jamie.bowman@cryeleike.com"><i class="fa fa-envelope">&nbspEmail</i></a>
                                <br>
                                <a href="tel:423-232-0099"><i class="fa fa-phone">&nbsp423-232-0099</i></a>
                            </div>
                        </div>
                    </div>

        </div>
                <br>
                <br>
                <br>
                <br>

    </section>


@endsection