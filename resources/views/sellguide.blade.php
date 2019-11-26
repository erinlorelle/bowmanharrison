@extends('layouts.master')

@section('content')
    <header class="sellguidehead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>Home Selling Guide</h1>
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
                            <img class="img-fluid" src="img/stage1.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-left">
                                        <h4 style="text-align: center;color: darkslategrey;">Steps</h4>
                                        <br>
                                        <ol style="font-weight: bold;">
                                            <li>Interview your realtor and see what they will do for you.</li>
                                            <ul>
                                                <li>They will come to your home to assess it and should have Comps available for you to view.</li>
                                                <li>Discuss price; the realtor will furnish recommendations on selling your home.</li>
                                                <li>Check to see if your agent offers Home Staging services to help you sell your home faster.</li>
                                            </ul>
                                            <li>Once you choose your real estate agent the listing packet will be signed at that time in order to move forward.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Two Row -->
                    <div class="row justify-content-center no-gutters">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="img/pro.jpg" alt="">
                        </div>
                        <div class="col-lg-6 order-lg-first">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-right">
                                        <br>
                                        <ol style="font-weight: bold; text-align: left;" start="3">
                                            <li>Ask your agent if they have a professional photographer to take pictures.</li>
                                            <ul>
                                                <li>Do so after your home is staged, if you choose to stage (recommended).</li>
                                                <li>Agent will make an appointment for pictures.</li>
                                            </ul>
                                            <li>Agent will put the home online after pictures are received with showing instructions.</li>
                                            <li>Home goes live on MLS and all social media networks for optimal advertising.</li>
                                            <li>The sign and Supra key box will be placed for access to property.</li>
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
                                        <ol style="font-weight: bold;" start="7">
                                            <li>Agent will monitor all showings and correspond with other agents for feedback.</li>
                                            <li>Agent will negotiate all offers with sellers and buyers agent.</li>
                                            <li>Once an agreement is reached, we send all paperwork for signatures and bind the contract.</li>
                                            <li>Agent will keep all communication open with buyers agent throughout the process and keep up with timelines.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Four Row -->
                    <div class="row justify-content-center no-gutters">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="img/sold.jpg" alt="">
                        </div>
                        <div class="col-lg-6 order-lg-first">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-right">
                                        <br>
                                        <ol style="font-weight: bold; text-align: left;" start="11">
                                            <li>Once buyers have secured any inspections they wish to do, the realtor helps to negotiate until agreement is reached and all needed repairs are done.</li>
                                            <li>Get seller to closing day!</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection