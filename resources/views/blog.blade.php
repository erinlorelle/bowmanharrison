@extends('layouts.master')

@section('content')
    <header class="bloghead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>This is a Blog</h1>
                    <h2>Keep up to date with trends and tips!</h2>
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
                <div class="post-preview">
                    <a href="post.html" style="color:black;">
                        <h2 style="font-weight: bold">
                            Selling a house. Magic or myth?
                        </h2>
                        <h5 style="color: dimgrey;">
                            <em>Tips on selling buying a mansion for ten bucks</em>
                        </h5>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Bugs Bunny</a>
                        on September 24, 2019</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html" style="color:black;">
                        <h2>
                            My house won't sell.  Is it because it's a dump?
                        </h2>
                        <h5 style="color: dimgrey;">
                            <em>Staging services can improve your home's appeal and may help it sell quicker.  Removing the sofa from your porch is a start.</em>
                        </h5>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Pig Pen</a>
                        on September 18, 2019</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html" style="color:black;">
                        <h2>
                            Being evicted five times will not prevent you from buying a home
                        </h2>
                        <h5 style="color: dimgrey;">
                            <em>We think it's best to prepare for buying a home, starting with improving your credit.</em>
                        </h5>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Slim Pickins</a>
                        on August 24, 2019</p>
                </div>
                <hr>
            </div>
        </div>

    </div>
@endsection