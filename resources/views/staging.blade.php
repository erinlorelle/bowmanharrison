@extends('layouts.master')

@section('content')

    <script type="text/javascript">
        function setImageVisible(id, visible) {
            var img = document.getElementById(id);
            if (img.style.visibility == 'hidden'){
                img.style.visibility = 'visible';
            }else{
                img.style.visibility = 'hidden';
            }
            //img.style.visibility = (visible ? 'visible' : 'hidden');
        }
    </script>
    {{--
        <header class="staginghead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>Staging</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                </div>
            </div>
        </div>
        </header>
        --}}
        <section class="showcase">
            <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/stage2.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    {{--   <h1>The About Page</h1><br><br>--}}
                    <h2><a href="guides#stage" style="color:black;">Home Staging Guide</a></h2>
                    <p class="lead mb-0">Click to learn more about what staging can do for you!</p>
                    <br>
                    <br>
                    <a href="faq" style="color:black;text-decoration: none;"><h2>FAQs</h2></a>
                    <p class="lead mb-0">View answers to common staging questions!</p>
                </div>
            </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-1 text-white showcase-img" style="background-image: url('img/stage3.jpg');"></div>
                    <div class="col-lg-6 order-lg-2 my-auto showcase-text">
                        {{--   <h1>The About Page</h1><br><br>--}}
                        <h2><a href="faq" style="color:black;">2019 Profile of Home Staging</a></h2>
                        <p class="lead mb-0">Click to learn more about what staging can do for you!</p>
                    </div>
                </div>
            </div>
        </section>
    <section class="testimonials text-center bg-light">
        <div class="container">
            <br>
            <h2>Before and After</h2>
            <h4>Click the images below to see how we can increase your home's value!</h4>
            <div class="row">
            <div class="gallery">
                <div class="parent">
                    <a onclick="setImageVisible('img1', true)">
                    <img class="image1" src="img/before1.jpg" alt="before1" width="600" height="400">
                    <img class="image2" id="img1" src="img/after1.jpg" style="visibility:hidden"/>
                    </a>
                </div>
            </div>
            <div class="gallery">
                <div class="parent">
                    <a onclick="setImageVisible('img2', true)">
                        <img class="image1" src="img/before2.jpg" alt="before1" width="600" height="400">
                        <img class="image2" id="img2" src="img/after2.jpg" style="visibility:hidden"/>
                    </a>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="gallery">
                    <div class="parent">
                        <a onclick="setImageVisible('img3', true)">
                            <img class="image1" src="img/before3.jpg" alt="before1" width="600" height="400">
                            <img class="image2" id="img3" src="img/after3.jpg" style="visibility:hidden"/>
                        </a>
                    </div>
                </div>
                <div class="gallery">
                    <div class="parent">
                        <a onclick="setImageVisible('img4', true)">
                            <img class="image1" src="img/newbeforepic.png" alt="before1" width="600" height="400">
                            <img class="image2" id="img4" src="img/newafterpic.jpeg" style="visibility:hidden"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection