@extends('layouts.master')

@section('content')
    <header class="buyguidehead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>Home Buying Guide</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                </div>
            </div>
        </div>
    </header>
    <br>
    <br>


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div id="buy" class="post-preview">

                    {{--<h2 style="text-align: center;">
                        Home Buying Guide
                    </h2>--}}
                    <h3 style="color: dimgrey; text-align: center;">
                        Home Sales are all about the Details!
                    </h3>
                    <br>
                    <hr>
                    <br>
                </div>

            </div>
        </div>

        <!-- Steps Section -->
        <section id="projects" class="projects-section bg-light">
            <div class="container">

                <!-- Project One Row -->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="img/loan.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 style="text-align: center; color: darkslategrey;">Steps</h4>
                                    <br>
                                    <ol style="font-weight: bold;">
                                        <li>Find a lender and get a pre-approval letter.</li>
                                        <li>Choose a real estate agent and tell them the amount your approved for loan so we can start the searching process.</li>
                                        <li>Start viewing homes in the areas you're interested in living and price range.</li>
                                        <li>When you find a home you want to put an offer on, we will negotiate your offer with listing agent.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="img/inspection.jpg" alt="">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <br>
                                    <ol style="font-weight: bold; text-align: left;" start="5">
                                        <li>When you find a home you want to put an offer on, we will negotiate your offer with listing agent.</li>
                                        <br>
                                        <ul style="color:darkslategrey;">
                                            <li>You will have 3 days to get your earnest money check to your agent so they can put in the office escrow account that will be held until closing day.</li>
                                            <li>You have 14 days to get all inspections done unless you need an extension. We will supply a list of reputable and insured inspectors that you may choose from or pick your own.</li>
                                            <ul>
                                                <li>Some of the inspections you may want to get are home, termite and radon!!!!</li>
                                            </ul>
                                        </ul>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Three Row -->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="img/negotation.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <ol style="font-weight: bold;" start="6">
                                        <li>Once the inspection reports are in, we can discuss how you want to proceed and talk about any concerns you may have.</li>
                                        <ul>
                                            <li>We negotiate repairs with a repair amendment.</li>
                                        </ul>
                                        <li>Once an agreement is reached we then send contract to lender to start the loan process.</li>
                                        <li>We coordinate with the title co. and lender to make sure our closing takes place on time with no problems.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Four Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="img/closing.jpg" alt="">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <br>
                                    <ol style="font-weight: bold; text-align: left;" start="9">
                                        <li>When you find a home you want to put an offer on, we will negotiate your offer with listing agent.</li>
                                        <br>
                                        <ul style="color:darkslategrey;">
                                            <li>We stay on top of the timelines and keep communication open with all parties as to the progress.</li>
                                            <li>We will do the final walk through inspection the day before closing to be sure property is the same condition as last seen.</li>
                                            <li>Go to closing.</li>
                                            <li>Sign all papers and receive the keys to your new home!</li>
                                        </ul>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>




        <br>
        <br>
        <br>
        <br>
    </div>
@endsection