@extends('layouts.master')

@section('content')

<section class="features-icons bg-light text-center">

    <div class="container">
        <h1>Contact Us</h1><br>
        <h2>Bowman Harrison Realty</h2>
        <h5><a href = "mailto: bowmanharrisonrealtors@gmail.com">bowmanharrisonrealtors@gmail.com</a></h5><br>
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    {{--<div class="features-icons-icon d-flex">
                        <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>--}}
                    <h3>Jamie Bowman</h3>
                    <p class="lead mb-0">
                    <ul style="list-style-type:none">
                        <li>Affiliate Broker</li>
                        <li><img src="../assets/img/icons/envelope.png" alt=""> jamie.bowman@cryeleike.com</li>
                        <li><img src="../assets/img/icons/phone-call.png" alt=""> 423-329-1342</li>

                    </ul>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <figure>
                        <img src="img/jamietami.jpg" class="img-fluid" alt="Jamie Bowman and Tami Harrison">
                        <figcaption><em>Jamie Bowman and Tami Harrison</em></figcaption>
                    </figure>
                    {{--<div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>About The Region</h3>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>--}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    {{--<div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>--}}
                    <h3>Tami Harrison</h3>
                    <p class="lead mb-0">
                    <ul style="list-style-type:none">
                        <li>Affiliate Broker</li>
                        <li><img src="../assets/img/icons/envelope.png" alt=""> tami.harrison@cryeleike.com</li>
                        <li><img src="../assets/img/icons/phone-call.png" alt=""> 423-737-4079</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container" style="text-align: left;">
        <form action="action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" placeholder="Email..">

            <label for="phone">Phone (optional)</label>
            <input type="text" id="phone" name="phone" placeholder="Phone number..">

            <label for="city">City</label>
            <select id="city" name="city">
                <option value="johnsoncity">Johnson City</option>
                <option value="bristol">Bristol</option>
                <option value="kingsport">Kingsport</option>
                <option value="other">Other</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Type your request.." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
        <br>
        <br>
    </div>


    <h3>Testimonials, Awards, Accolades</h3>
    <a href="testimonials"><img class="img-fluid rounded-circle mb-3" width="200" height="200" src="img/awards.png" alt=""></a>

    <br>
</section>


@endsection