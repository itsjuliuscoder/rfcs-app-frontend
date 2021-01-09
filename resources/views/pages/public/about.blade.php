@extends('layouts.public')

@section('title')
    {{ $title }}
@endsection

@section('header')
<!-- Header
================================================== -->
    @include('includes.header')
<!-- End Header -->
@endsection
@section('content')
<!-- page-banner-section
    ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>About Us</h1>
            <ul class="page-depth">
                <li><a href="/">RFCS</a></li>
                <li><a href="/about">About Us</a></li>
            </ul>
        </div>
    </section>
<!-- End page-banner-section -->

<!-- about-section
    ================================================== -->
<section class="about-section">
    <div class="container">
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://res.cloudinary.com/afrihowdigitalfiles/image/upload/v1610211997/rfcs/banner_vbqptn.jpg" class="img-fluid" style="height: 440px;" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>About Us</h2>
                        <p>Right Foundation Children School, a bilingual nursery and primary school was established in year 2000 to provide nursery and basic education to children from ages 2 years(tender class) to 12 years(grade 6). The school is blessed with season professional teachers under the leadership of Mrs. Abigael Olajumoke a graduate of University of Lagos with Bachelor in Education(Guidance and Counselling)/Economics.</p>

                        <a class="text-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <div class="article-content right-align">
                        <i class="fa fa-university"></i>
                        <h2>Our Vision</h2>
                        <p>To be the preferred education institution.</p>
                        <a class="text-link" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="upload/about/about2.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/bg28   .jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-umbrella"></i>
                        <h2>Our Mission</h2>
                        <p>Producing qualitative education through qualified teachers in a conducive environment to guarentee a secured future for our pupils, their parents and the nation.</p>
                        <a class="text-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about section -->

<!-- statistic-section
    ================================================== -->
<section class="statistic-section">
    <div class="container">
        <div class="statistic-box">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="statistic-post">
                        <span class="timer" data-from="0" data-to="350"></span>
                        <p>Graduated <br>Pupils </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="statistic-post">
                        <span class="timer" data-from="0" data-to="20"></span>
                        <p>Years<br> Experience</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="statistic-post">
                        <span class="timer" data-from="0" data-to="23"></span><br>
                        <p>Dedicated <br>Staffs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End statistic section -->

<!-- clients-section
    ================================================== -->
<section class="clients-section">
    <div class="container">
        <div class="clients-box">
            <h1>Our Partners</h1>
            <!-- <p>Sed vehicula consectetur rutrum</p> -->
            <ul class="clients-list">
                <li>
                    <img src="images/partners/fidelity.jpg" alt="Fidelity Bank">
                    <a href="#"><span>Honeydew</span></a>
                </li>
                <li>
                    <img src="images/partners/napps-logo.jpg" alt="NAPPS">
                    <a href="#"><span>Madison</span></a>
                </li>
                <!-- <li>
                    <img src="images/clients/logo-client-3.png" alt="">
                    <a href="#"><span>Everlane</span></a>
                </li>
                <li>
                    <img src="images/clients/logo-client-4.png" alt="">
                    <a href="#"><span>Henderson</span></a>
                </li>
                <li>
                    <img src="images/clients/logo-client-5.png" alt="">
                    <a href="#"><span>Andersen</span></a>
                </li> -->
            </ul>
        </div>
    </div>
</section>
<!-- End clients section -->


<!-- footer
================================================== -->
@include('includes.footer')
<!-- End footer -->
@endsection
