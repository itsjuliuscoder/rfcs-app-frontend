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
        <h1>Why Choose Us</h1>
        <ul class="page-depth">
            <li><a href="/">RFCS</a></li>
            <li><a href="/why-choose-rfcs">Why Choose Us</a></li>
        </ul>
    </div>
</section>
<!-- End page-banner-section -->
<section class="about-section">
    <div class="container">
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>Creative Learning</h2>
                        <p>We have moved from conventional education to <b>CREATIVE LEARNING</b></p><br><br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>Child Discovery</h2>
                        <p>Because we believe no two children are the same, we take quality time to discover each child talent and potential, and agreed this with parents</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-university"></i>
                        <h2>Personalized Learning</h2>
                        <p>Learning is tailored in line with identified individual pupil potential.</p><br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-file-text-o"></i>
                        <h2>Developing Global Citizen</h2>
                        <p>School curriculum is developed to take care of emerging trends globally to make our pupils <b>GLOBAL CITIZEN</b> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-article">
            <div class="row">
                <div class="col-lg-6">
                    <div class="article-content">
                        <i class="fa fa-umbrella"></i>
                        <h2>Our Mission</h2>
                        <p>Producing qualitative education through qualified teachers in a conducive environment to guarentee a secured future for our pupils, their parents and the nation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer
================================================== -->
@include('includes.footer')
<!-- End footer -->
@endsection
