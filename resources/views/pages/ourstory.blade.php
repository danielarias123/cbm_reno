@extends('layouts.layout')

@section('title', 'CBM Renovations – Mississauga, Toronto, Burlington &amp; Oakville&#039;s Leading Construction Company')
@section('description', 'CBM Renovations in known and trusted all over the GTA. Contact Us Anytime to Get a Free Quote on Our Services.')
@section('url', 'http://www.cbmreno.ca/ourstory')
@section('type', 'article')

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
	</div>
	<div class = "about-us-bg" style = "background-image:url(/images/our-story-header.jpg);">
		<div class = "about-us-summary" >
			<p class = "testimonial-text" >We are a residential and commercial renovations company servicing the GTA for over 10 years.<br/>
				At CBM Renovations, we take pride in our work and care about your project just as much as you do.
			</p>
			<div class = "see-testimonials-link"><a href = "/testimonials"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;See what our clients have to say</a></div>
		</div>
	</div>
		<!-- What we Believe in Section -->
	<div class="container">
		<div class = "row">
			<div class = "col-sm-12">
				<h1>What We Believe In</h1>
			</div>
		</div>
		<div class = "row">
			<div class = "col-sm-4">
				<div class = "what-we-believe-col">
					<h3>Customer Satisfaction</h3>
					<img src="/images/cust-satisfaction.png" class = "img-responsive what-we-believe-img" />
					<p>With every project that we undertake, we are not satisfied until you are. We aim to not only meet customer expectations, but exceed them.</p>
				</div>
			</div>
			<div class = "col-sm-4">
				<div class = "what-we-believe-col">
					<h3>Integrity</h3>
					<img src="/images/integrity-icon.png" class = "img-responsive what-we-believe-img" />
					<p>We strive to earn the trust and respect of the client with every step of each project. We are licensed, insured and WSIB covered.</p>
				</div>
			</div>
			<div class = "col-sm-4">
				<div class = "what-we-believe-col">
					<h3>Innovation</h3>
					<img src="/images/innovation_icon.png" class = "img-responsive what-we-believe-img" />
					<p>Through our experienced team, we stay committed to meeting industry standards in building methods and safety. </p>
				</div>
			</div>
		</div>
		<!-- End What we Believe in Section -->

		<!-- Our Process Section -->
		<div class="row">
			<div class = "col-sm-12">
				<div class="our-process-container">
					<div class="row">
						<div class = "col-sm-12">
							<h3>Our Process</h3>
							<p>Through our structured process, our expierenced team makes realizing your dream as easy as 3 steps</p>
						</div>
					</div>
					<div class="row" style = "width:95%; margin: 0 auto;">
						<div  class = "process-step-cont">
							<div class = "process-step">
								<div class="step-num">1</div><br/>Consultation
								<div class = "step-desc">We will come by and provide a free no-obligation quote for your project</div>
							</div>
						</div>
						<div class = "process-arrow-cont">
							<div class ="process-step-arrow"><span class="glyphicon glyphicon-chevron-right"></span></div>
						</div>
						<div  class = "process-step-cont">
							<div class = "process-step">
								<div class="step-num">2</div><br/>Planning &amp; Design
								<div class = "step-desc">Closely working with you, we build a design and timeline to suit your needs</div>
							</div>
						</div>
						<div class = "process-arrow-cont">
							<div class ="process-step-arrow"><span class="glyphicon glyphicon-chevron-right"></span></div>
						</div>
						<div class = "process-step-cont">
							<div class = "process-step">
								<div class="step-num">3</div><br/>Project Realization
								<div class = "step-desc">Your project is completed on time and within budget</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Our Process Section -->

		<div class = "row">
			<!-- Get Quote Section -->
			<div class = "col-sm-12">
				<section id = "get-quote-section" class = 'services-get-quote'>
					<h1>The first step is contacting us</h1>
					<a href = "#" id = "our-story-quote-btn"><button class = "hero-shot-btn">Get Started</button></a>
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
		$("#our-story-quote-btn").click(function(e){
			e.preventDefault();
            // Show the Contact Modal
            $('#contactModal').modal();

			// Send mixpanel event
			mixpanel.track("Get Quote", {
				"Source": "Our Story Page"
			});
		});
	});
</script>

@stop
