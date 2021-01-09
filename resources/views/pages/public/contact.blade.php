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
    <!-- map section -->
		<div id="map"></div>
	<!-- end map section -->
<!-- End page-banner-section -->

<!-- about-section
    ================================================== -->
    <section class="contact-section">
			<div class="container">
				<div class="contact-box">
					<h1>Get in Touch</h1>
					<p>Someone finds it difficult to understand your creative idea? There is a better visualisation. Share your views with us, we’re looking forward to hear from you.</p>
					<form id="contact-form">
						<div class="row">
							<div class="col-md-6">
								<label for="name">Your Name (required)</label>
								<input name="name" id="name" type="text">
							</div>
							<div class="col-md-6">
								<label for="mail">Your Email (required)</label>
								<input name="mail" id="mail" type="text">
							</div>
						</div>
						<label for="tel-number">Your Phone Number</label>
						<input name="tel-number" id="tel-number" type="text">
						<label for="comment">Your Message (required)</label>
						<textarea name="comment" id="comment"></textarea>
						<button type="submit" id="submit_contact">Submit Message</button>
						<div id="msg" class="message"></div>
					</form>
				</div>
			</div>
		</section>
<!-- End about section -->

<!-- footer
================================================== -->
@include('includes.footer')
<!-- End footer -->
@endsection
