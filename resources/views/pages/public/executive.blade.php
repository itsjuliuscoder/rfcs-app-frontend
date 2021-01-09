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
            <h1>Abigael O. OLAJUMOKE</h1>
            <ul class="page-depth">
                <li><a href="/">RFCS</a></li>
                <li><a href="/executive">Executive Welcome Note</a></li>
                <li><a href="#">Abigael O. OLAJUMOKE</a></li>
            </ul>
        </div>
    </section>
<!-- End page-banner-section -->
<!--  -->
<section class="teachers-section">
    <div class="container">
        <div class="teachers-box">
            <div class="row">
                <div class="col-lg-6">
                    <div class="profile-image">
                        <div class="image-holder">
                            <img src="images/admin-1.JPG" alt="School Executive">
                        </div>
                        <ul class="social-links">
                            <li><a href="https://web.facebook.com/adesola.yemisi.988" target="_blank" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="profile-details">
                        <h1>Abigael O. OLAJUMOKE</h1>
                        <p>A Professional Guidance/Counsellor and a graduate from University of Lagos B.Ed in (Guidance & Counselling/Economics).</p>

                        <div class="line-details">
                            <div class="detail-item">
                                <div class="icon-holder">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="detail-content">
                                    <h2>Postal Address:</h2>
                                    <span>58/59, Alhaji Animashaun Street, Ijeshatedo, Surulere, Lagos, Nigeria.</span>
                                </div>
                            </div>
                        </div>

                        <div class="line-details">
                            <div class="detail-item">
                                <div class="icon-holder">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="detail-content">
                                    <h2>Email:</h2>
                                    <a href="#">oabigael@derightschools.com.ng</a>
                                </div>
                            </div>
                        </div>

                        <div class="line-details">
                            <div class="row">
                                <div class="detail-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <div class="detail-content">
                                        <h2>Phone:</h2>
                                        <span>+234 8034331199</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="teacher-content">
                <h1>Welcome Note</h1>
                <p>Thank you for taking your time to visit our website.</p>
                <p>For over twenty years Right Foundation has been in the forefront in the provision of qualitative education in Surulere, Lagos Nigeria. Academic, moral, spiritual and personal development of our pupils is our focus.</p>
                <!-- <div class="row">
                    <div class="col-lg-7">
                        <div class="skills-box">
                            <h1>Skills</h1>
                            <div class="skill-line">
                                <span class="fill-text">Development 90%</span>
                                <span class="fill-box" style="width: 90%"></span>
                            </div>
                            <div class="skill-line">
                                <span class="fill-text">Design 80%</span>
                                <span class="fill-box" style="width: 80%"></span>
                            </div>
                            <div class="skill-line">
                                <span class="fill-text">Marketing 70%</span>
                                <span class="fill-box" style="width: 70%"></span>
                            </div>
                            <div class="skill-line">
                                <span class="fill-text">WordPress &amp; PHP 54%</span>
                                <span class="fill-box" style="width: 54%"></span>
                            </div>
                            <div class="skill-line">
                                <span class="fill-text">After Effects 94%</span>
                                <span class="fill-box" style="width: 94%"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <form class="contact-form">
                            <h1>Send a message</h1>

                            <input name="name" id="name" type="text" placeholder="Name*">
                            <input name="mail" id="mail" type="text" placeholder="E-mail*">
                            <textarea name="comment" id="comment" placeholder="Message"></textarea>
                            <button type="submit" id="submit_contact">Submit Message</button>
                        </form>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
</section>
<!--/  -->
<!-- footer
================================================== -->
@include('includes.footer')
<!-- End footer -->
@endsection
