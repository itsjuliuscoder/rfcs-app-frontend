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
            <h1>News & Events</h1>
            <ul class="page-depth">
                <li><a href="/">RFCS</a></li>
                <li><a href="/executive">News & Events</a></li>
            </ul>
        </div>
    </section>
<!-- End page-banner-section -->
<!--  -->
<section class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-7">

						<div class="blog-box">
							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-1.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Academics</a>
									<h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-2.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Government</a>
									<h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-3.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Design</a>
									<h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-4.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Business</a>
									<h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-5.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Academics</a>
									<h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-6.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Government</a>
									<h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-7.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Design</a>
									<h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<div class="blog-post">
								<a href="single-post.html"><img src="upload/blog/blog-image-8.jpg" alt=""></a>
								<div class="post-content">
									<a class="category" href="#">Business</a>
									<h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a></h2>
									<div class="post-meta date">
										<i class="material-icons">access_time</i> June 13, 2018
									</div>
								</div>
							</div>

							<ul class="page-pagination">
								<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
								<li><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>

						</div>
					</div>

					<div class="col-lg-4 col-md-5">
						<div class="sidebar">
							<div class="search-widget widget">
								<form class="search-form">
									<input type="search" class="search-field" placeholder="Enter keyword...">
									<button type="submit" class="search-submit">
										<i class="material-icons">search</i>
									</button>
								</form>
							</div>
							<div class="ads-widget widget">
								<a href="#">
									<img src="upload/blog/ad-banner.jpg" alt="">
								</a>
							</div>

							<div class="category-widget widget">
								<h2>Categories</h2>
								<ul class="category-list">
									<li><a href="#">Academics</a></li>
									<li><a href="#">Advertisement</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Campus Life</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Government</a></li>
									<li><a href="#">Schools</a></li>
									<li><a href="#">Uncategorized</a></li>
								</ul>
							</div>

							<div class="tags-widget widget">
								<h2>Tags</h2>
								<ul class="tags-list">
									<li><a href="#">codebean</a></li>
									<li><a href="#">course</a></li>
									<li><a href="#">parents</a></li>
									<li><a href="#">schools</a></li>
									<li><a href="#">students</a></li>
									<li><a href="#">teacher</a></li>
									<li><a href="#">theme</a></li>
									<li><a href="#">wordpress</a></li>
								</ul>
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