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
<!-- footer
================================================== -->
@include('includes.footer')
<!-- End footer -->
@endsection
