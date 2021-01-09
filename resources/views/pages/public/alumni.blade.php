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
<div class="alumni-banner">
    <div class="container text-center">
        <h2>RFCS Alumni Community</h2>
        <p>Become a part of our RFCS Alumni Community. Register now and reconnect with old friends in our community</p>
        <a href="#" class="btn btn-lg btn-success pt-2">Join Now!</a>
    </div>
</div>
<!-- page-banner-section
================================================== -->
<section class="page-banner-section">
    <div class="container text-center mb-3">
        <div class="page-depth">
            <h1>RFCS Alumni</h1>
            <p>RFCS Alumni Community founded by the <b>CLASS OF 07/08</b> to pursue common interest for both past and future graduates of the school. This community of old students helps to recall old memories, create new ones and help each other in career development through mentorship and networking.</p>
        </div>
    </div><br><br>
</section>
<!-- End page-banner-section -->
<!-- portfolio-section
================================================== -->
<section class="about-section" style="background-color:#fff;">
    <div class="container">
        <!-- founding members -->
        <div class="teachers-box mt-3">
            <div class="text-left alumni-hd">
                <h2 style="font-weight: 500; font-size: 32px;">Founding Members</h2>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher4.jpg" alt="">
                            <div class="hover-post">
                                <h2>Ifeanyi Obi</h2>
                                <span>CLASS OF '08</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher6.jpg" alt="">
                            <div class="hover-post">
                                <h2>Oluchi Nsiegbe</h2>
                                <span>CLASS OF '08</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher7.jpg" alt="">
                            <div class="hover-post">
                                <h2>Maduabuchi Okorie</h2>
                                <span>CLASS OF '08</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher5.jpg" alt="">
                            <div class="hover-post">
                                <h2>Sarah Fayemi</h2>
                                <span>CLASS OF '08</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher1.jpg" alt="">
                            <div class="hover-post">
                                <h2>Ebuka Agukwe</h2>
                                <span>CLASS OF '08</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher3.jpg" alt="">
                            <div class="hover-post">
                                <h2>Joy Akpan</h2>
                                <span>CLASS OF '08</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher2.jpg" alt="">
                            <div class="hover-post">
                                <h2>Julius Olajumoke</h2>
                                <span>CLASS OF '08</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="upload/teachers/teacher8.jpg" alt="">
                            <div class="hover-post">
                                <h2>Olivia Barham</h2>
                                <span>Communication</span>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
        </div><br><br>
        <!--/ end of founding members -->
        <div>
            <h2 style="font-weight: 500; font-size: 32px;">Why Join RFCS Alumni Community</h2>
        </div><br>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>About Us</h2>
                        <p>Right Foundation Children School, a bilingual nursery and primary school was established in year 2000 to provide provideprovideprovide provide</p>

                        <a class="text-link" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>About Us</h2>
                        <p>Right Foundation Children School, a bilingual nursery and primary school was established in year 2000 to provide provideprovideprovide provide</p>

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
                        <p>Right Foundation Children School, a bilingual nursery and primary school was established in year 2000 to provide provideprovideprovide provide</p>
                        <a class="text-link" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>About Us</h2>
                        <p>Right Foundation Children School, a bilingual nursery and primary school was established in year 2000 to provide provideprovideprovide provide</p>

                        <a class="text-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>About Us</h2>
                        <p>Right Foundation Children School, a bilingual nursery and primary school was established in year 2000 to provide provideprovideprovide provide</p>

                        <a class="text-link" href="#">Read More</a>
                    </div>
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
<!-- End portfolio section -->

<!-- footer
================================================== -->
@include('includes.footer')
<!-- End footer -->
@endsection
