@extends('layouts.master')

@section('content')



    <section class="testimonials text-center bg-light">

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

        <div class="container">

            <h1>Staging Services</h1><br>
            <a href="guides#stage"><h4>Home Staging Guide</h4></a>
            <a href="faq"><h4>FAQs</h4></a>
            <br>

            <h3>Click the images below to see how we can increase your home's value!</h3>
            <br>
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
                            <img class="image1" src="img/before4.jpg" alt="before1" width="600" height="400">
                            <img class="image2" id="img4" src="img/after4.jpg" style="visibility:hidden"/>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </section>


@endsection