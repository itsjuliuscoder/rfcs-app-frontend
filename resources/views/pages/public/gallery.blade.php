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
        <h1>School Gallery</h1>
        <ul class="page-depth">
            <li><a href="/">Home</a></li>
            <li><a href="/gallery">Gallery</a></li>
        </ul>
    </div>
</section>
<!-- End page-banner-section -->
<!-- portfolio-section
================================================== -->
<section class="portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">
                    <div class="filter-widget widget">
                        <h2>Filter Controls</h2>
                        <ul class="filter">
                            <li><a class="active" href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".campus">School Pictures</a></li>
                            <li><a href="#" data-filter=".university">Graduations</a></li>
                            <li><a href="#" data-filter=".students">Events</a></li>
                            <li><a href="#" data-filter=".travelling">Others</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="portfolio-box iso-call">

                    <div class="project-post university">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-1.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Spring Events and Courses</a></h2>
                                <span>Nature of University</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post students">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-2.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Southeastern Art</a></h2>
                                <span>Students Learning</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post travelling">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-3.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Beauty of Bucknell</a></h2>
                                <span>Travelling with Teachers</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post students">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-4.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Close-up Hand and Exam</a></h2>
                                <span>Students Learning</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post campus">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-5.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">2018 Faculty Biennial</a></h2>
                                <span>Campus Images</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post travelling">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-6.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Juried Student Exhibition</a></h2>
                                <span>Travelling with Teachers</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post university">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-7.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Students Looking Resource</a></h2>
                                <span>Nature of University</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post students">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-8.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Spring Events and Courses</a></h2>
                                <span>Students Learning</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-post campus">
                        <div class="inner-project">
                            <div class="image-holder">
                                <img src="upload/portfolio/portfolio-image-9.jpg" alt="">
                                <a href="single-project.html">
                                    <i class="material-icons">arrow_forward</i>
                                </a>
                            </div>
                            <div class="content-holder">
                                <h2><a href="single-project.html">Access to Photography</a></h2>
                                <span>Campus Images</span>
                            </div>
                        </div>
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
