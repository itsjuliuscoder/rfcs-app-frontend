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
        <h1>School Management</h1>
        <ul class="page-depth">
            <li><a href="/">RFCS</a></li>
            <li><a href="/management">School Management</a></li>
        </ul>
    </div>
</section>
<!-- End page-banner-section -->
<!--  -->
<section class="teachers-section">
    <div class="container">
        <div class="teachers-box">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="images/admin-1.jpg" alt="" class="img-fluid" style="height: 350px !important;">
                            <div class="hover-post">
                                <h2>Abigael Olajumoke</h2>
                                <span>Executive Director/Proprietress</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="images/admin-2.jpg" alt="" class="img-fluid" style="height: 350px !important;">
                            <div class="hover-post">
                                <h2>Simeon Olajumoke</h2>
                                <span>Executive Director/Proprietor</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="images/admin-3.jpg" alt="" class="img-fluid" style="height: 350px !important;">
                            <div class="hover-post">
                                <h2>Christy</h2>
                                <span>Head Teacher/Supervisor</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teacher-post">
                        <a href="single-teacher.html">
                            <img src="images/admin-4.jpg" alt="" style="height: 350px !important;">
                            <div class="hover-post">
                                <h2>Odunukwe </h2>
                                <span>Head Teacher/Supervisor</span>
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
                                <h2>Julius Olajumoke</h2>
                                <span>Director of Technology</span>
                            </div>
                        </a>
                    </div>
                </div>
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
