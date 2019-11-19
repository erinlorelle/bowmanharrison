@extends('layouts.master')

@section('content')
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Selling</h2>
            <div class="row">
                <div class="col-lg-4">
                    <a href="guides#sell" style="color:black;"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/sellingguide.jpeg" alt="">
                        <h5>Guides</h5>
                       {{-- <p class="font-weight-light mb-0"></p>--}}
                    </div> </a>
                </div>

                <div class="col-lg-4">
                    <a href="#" style="color:black;"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/market.jpg" alt="">
                        <h5>Market Info</h5>
                        {{--<p class="font-weight-light mb-0"></p>--}}
                        </div></a>
                </div>
                <div class="col-lg-4">
                    <a href="staging" style="color:black;"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="img/staging3.jpg" alt="">
                        <h5>Staging Benefits</h5>
                        {{--<p class="font-weight-light mb-0"></p>--}}
                        </div></a>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="text-align: center;">
        <h3>Free Comprehensive Market Analysis</h3>
        <h5>Complete the form below</h5>
    </div>

    <div class="container">
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
@endsection