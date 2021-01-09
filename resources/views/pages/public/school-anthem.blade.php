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
            <h1>School Anthem</h1>
            <ul class="page-depth">
                <li><a href="/">RFCS</a></li>
                <li><a href="#">School Anthem</a></li>
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
                            <img src="images/anthem.jpg" alt="School Anthem">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="profile-details">
                        <h1>The School Anthem</h1>
                        <div class="line-details">
                            <p>Arise O Right Foundation Children</p>
                            <p>Prepare to work very hard</p>
                            <p>Never allow laziness</p>
                            <p>But try to do your best</p>
                            <p>A dilligent child shall be able to stand</p>
                            <p>Be honest, take away sinful acts</p>
                            <p>And fear God, your creator</p>
                            <p>And He will bless you (Amen)</p>
                        </div>



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
