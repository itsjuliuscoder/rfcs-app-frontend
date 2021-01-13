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
            <a href="https://forms.gle/wgJ7XMQAjumRM9Wq8" target="_blank" class="btn btn-lg btn-success pt-2">Join Now!</a>
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
                <div class="col-lg-6 text-center">
                    <div class="article-content">
                        <i class="fa fa-group"></i>
                        <h2>Reconnect with Old Friends</h2>
                        <p>RFCS Alumni brings together all graduates and old students of the school and makes you recall old memories by meeting your old classmates and friends.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="article-content">
                        <i class="fa fa-envelope"></i>
                        <h2>Invitations to Reunion and Social Functions</h2>
                        <p>The Alumni body occassionally organize social functions and reunion and as a member, you would get an official invitation to participate and network with members of the community. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="article-content">
                        <i class="fa fa-handshake-o"></i>
                        <h2>Global Professional Network</h2>
                        <p>Members of our Alumni Community are scattered across the globe. Becoming a member will give you access to build an international professional network.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="article-content">
                        <i class="fa fa-briefcase"></i>
                        <h2>Career & Business Mentorship</h2>
                        <p>Becoming a member of the alumni community, also gives you access to career and business mentorship from our old students that are already working professionals and experts in their individual fields.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="article-content">
                        <i class="fa fa-building"></i>
                        <h2>25% Off Tuition Fees for Your Children</h2>
                        <p>When you become a full member of the Alumni community, you will get a 25% discount off the tuition fees of your children all through their stay in the school.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="article-content">
                        <i class="fa fa-usd"></i>
                        <h2>Refferal Bonuses</h2>
                        <p>Referring RFCS to your friends or colleagues to enroll their children offers exciting bonus for you as a member of the community.</p><br>
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
