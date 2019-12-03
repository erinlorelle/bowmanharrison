@extends('layouts.master')

@section('content')
    <header class="regionhead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 style="color:white;">About the Region</h1>
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

                <h2>
                    About the counties we serve
                </h2>
                <hr>
                <img src="img/etennessee.gif"  alt="Counties" class="img-fluid" usemap="#countymap">

                <map name="countymap">
                    <area shape="circle" coords="525,105,30" alt="Greene" href="greene">
                    <area shape="circle" coords="510,48,22" alt="Hawkins" href="hawkins">
                    <area shape="circle" coords="620,30,22" alt="Sullivan" href="sullivan">
                    <area shape="circle" coords="588,78,30" alt="Washington" href="washington">
                    <area shape="circle" coords="598,113,20" alt="Unicoi" href="unicoi">
                    <area shape="circle" coords="650,78,28" alt="Carter" href="carter">
                    <area shape="circle" coords="695,42,40" alt="Johnson" href="johnson">
                </map>

                <hr>
                <div class="post-preview">
                        <h2 style="font-weight: bold">
                            History of the TriCities
                        </h2>
                        <p>The TriCities region includes Bristol, Johnson City, and Kingsport, TN located in Northeast Tennessee. </p>
                </div>
                <hr>
                <div class="post-preview">
                        <h2>
                            Annual Events
                        </h2>
                        <ul>
                            <li>Appalachian Fair - August</li>
                            <li>Rob Con - June</li>
                            <li>The Tri-Cities Christmas Market - November</li>
                            <li>Appalachian Fair - August</li>
                            <li>Speedway in Lights - November - January</li>
                        </ul>
                </div>
                <hr>
                <div class="post-preview">
                        <h2>
                            Hospitals
                        </h2>
                        <ul>
                            <li>Bristol Regional Medical Center - Bristol, TN</li>
                            <li>Holston Medical Group - Bristol, TN</li>
                            <li>Franklin Woods Community Hospital - Johnson City, TN</li>
                            <li>Indian Path Hospital - Kingsport, TN</li>
                            <li>Holston Valley Medical Center - Kingsport, TN</li>
                            <li>Johnson City Medical Center - Johnson City, TN</li>
                            <li>James H. Quillen VA Medical Center - Johnson City, TN</li>
                        </ul>
                </div>
                <hr>
                <div class="post-preview">
                        <h2>
                            Colleges
                        </h2>
                        <ul>
                            <li>East Tennessee State University - Johnson City, TN</li>
                            <li>King University - Bristol, TN</li>
                            <li>Milligan College - Milligan College, TN</li>
                            <li>Tusculum College - Tusculum, TN</li>
                            <li>Northeast State Community College - Blountville, TN</li>
                        </ul>
                </div>


            </div>
        </div>
<br>
<br>
    </div>
@endsection