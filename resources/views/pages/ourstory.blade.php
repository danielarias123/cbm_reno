@extends('layouts.layout')

@section('content')

<!-- Mixpanel Tracking -->
<script type="text/javascript">
mixpanel.track("Our Story Page View");
</script>

<section id = 'our-story' class = "webpage-section">
	<div class = 'container'>
		<div class = "row">
			<div class = 'col-sm-12'>
				<h1 class = "pages-header">Our Story</h1>
			</div>
		</div>
		<div class = "row">
			<div class = 'col-sm-12'>
				<div class = "about-us-summary">
					<p class = "testimonial-text" >We are a residential and commercial renovations company servicing the GTA for over 20 years.<br/>
						At CBM Renovations, we take pride in our work and care about your project just as much as you do.
					</p>
					<div class = "see-testimonials-link"><a href = "/testimonials"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;See what our clients have to say</a></div>
				</div>
			</div>
		</div>
		<!-- What we Believe in Section -->
		<div class = "row">
			<div class = "col-sm-12">
				<h1>What We Believe In</h1>
			</div>
		</div>
		<div class = "row">
			<div class = "col-sm-4">
				<h3>Customer Satisfaction</h3>
			</div>
			<div class = "col-sm-4">
				<h3>Integrity</h3>
			</div>
			<div class = "col-sm-4">
				<h3>Customer Satisfaction</h3>
			</div>
		</div>
		<!-- End What we Believe in Section -->
		<div class = "row">
			<!-- Get Quote Section -->
			<div class = "col-sm-12">
				<section id = "get-quote-section" class = 'services-get-quote'>
					<h1>The first step is contacting us</h1>
					<a href = "/contact-us" id = "our-story-quote-btn"><button class = "hero-shot-btn">Get Started</button></a>
				</section>
			</div>
			<!-- End Get Quote Section -->
		</div>
	</div>
</section>

<!-- Logos Section -->
@include('includes.logos')
<!-- End Logos Section -->


<!-- Site Wide Footer -->
@include('includes.footer')

<script type="text/javascript">
	$(document).ready(function(){

		// Mixpanel Tracking
		$("#our-story-quote-btn").click(function(){
			// Send mixpanel event
			mixpanel.track("Get Quote", {
				"Source": "Our Story Page"
			});
		});
	});
</script>

@stop