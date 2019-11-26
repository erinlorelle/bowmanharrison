@extends('layouts.master')

@section('content')

    <section class="testimonials text-center bg-light">
        <div class="container">

            <h2 class="mb-5">FAQs</h2>
            <section class="faq text-left">

                <div id="accordion">
                    <h3 class="mb-4">Buying Homes</h3>
                    <div class="card mb-2">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Are your homes expensive?
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Our homes are affordable.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Can I get a personalized quote?
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Yes.
                            </div>
                        </div>
                    </div>

                    <h3 class="mb-4 mt-5">Selling Homes</h3>
                    <div class="card mb-2">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                How do I register as a seller?
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Contact us through our phone number and we will get back to you.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                How much does a home cost in Bristol?
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                It depends.
                            </div>
                        </div>
                    </div>


                    <h3 class="mb-4 mt-5">Staging</h3>
                    <div class="card mb-2">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                How do I register as a seller?
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Contact us through our phone number and we will get back to you.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                How much does a home cost in Bristol?
                            </a>
                            <span class="fa fa-2x fa-angle-down faq-drop"></span>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                It depends.
                            </div>
                        </div>
                    </div>
                </div>

        </div>

</section>








@endsection
