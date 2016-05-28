@extends('layouts.layout')

@section('title', 'Home Renovation &amp; Remodeling Services Mississauga, Oakville, Toronto, Burlington &amp; Milton')
@section('description', 'CBM Renovations is leading general contractor having 20 years of experience in home renovation , remodeling &amp; construction serving Mississauga, Oakville, Toronto, Burlington and Milton Areas in Canada.')
@section('url', 'http://www.cbmreno.ca')
@section('type', 'website')



@section('content')
<!-- Mixpanel Tracking -->
<script type="text/javascript">
mixpanel.track("Home Page View");
</script>

<section id = "home">
    <div class="parallax">

    	<!-- Back Layer (Slow Scroll)-->
	  	<div class="parallax-layer parallax-layer-back">
	  		<!-- Hero Shot Image Section -->
	  		<div id = "hero-shot-bg" style="background-image: url(/images/room-hero-shot.jpg);"></div>
	  		<!-- End Hero Shot Image Section -->

	  		<!-- Trusted Renovators Image Section -->
	  		<div id = "trusted-renovators-bg" style="background-image: url(/images/main-contractors.jpg);" class="hidden-sm"></div>
	  		<!-- End Trusted Renovators Image Section -->

	  	</div>
	  	<!-- End Back Layer -->


	  	<!-- Front Layer (Normal Scroll)-->
	  	<div class="parallax-layer parallax-layer-base">

	  		<!-- Hero Shot Text Section -->
	    	<section id = "hero-title">
	    		<!-- love where you live -->
	    		Bring your <span>dream</span> home closer<br />to <span>reality</span><br/>
	    		<a href = "#" id = "hero-quote-btn"><button class = "hero-shot-btn">Get a Free Quote</button></a>
	    	</section>
	    	<!-- End Hero Text Shot Section -->

	    	<!-- What We Do Section -->
	    	<section id = "what-we-do-section">
				<div class = "container">
					<div class = "row">
						<div class = "col-sm-12">
							<h1>What We Do</h1>
						</div>
					</div>
					<div class = "row">
						<div class = "col-sm-4">
							<div class = "what-we-do-col">
								<h3>Residential</h3>
									<img src="/images/residential-logo.png" class = "img-responsive what-we-do-img">
								<div class = "what-we-do-text">
									Delivering exceptional home renovation services for custom homes, bathroom and kitchen renovations, basement finishing, additions &amp; much more.
								</div>
							</div>
						</div>
						<div class = "col-sm-4">
							<div class = "what-we-do-col">
								<h3>Commercial</h3>
								<img src="/images/commercial-logo.png" class = "img-responsive what-we-do-img">
								<div class = "what-we-do-text">
									High performance commercial renovation solutions specializing in remodelling, interior design, and restaurant/shop renovations.
								</div>
							</div>
						</div>
						<div class = "col-sm-4">
							<div class = "what-we-do-col">
								<h3>General Construction</h3>
								<img src="/images/gen-construction-logo.png" class = "img-responsive what-we-do-img">
								<div class = "what-we-do-text">
									General purpose construction specialists in demolition, additions, painting, framing, ceilings, carpentry &amp; more.
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End What We Do Section -->

			<!-- Section Specialize In -->
			<section id = "specialize-section">
				<div class = "container">
					<div class = "row specialize-row">
						<div class = "col-sm-6" style = "text-align:center;">
							<h1>What We Offer</h1>
							<div class = "what-we-do-text">We offer contracting services for the entire home. Be it a small bathroom renovation or an entire home remodel, we have the knowledge and experience to get the job done.</div><br/>
							<a href = '/ourservices'><span id = "view-services-text">VIEW ALL OUR SERVICES</span></a><br/>.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.
						</div>
						<div class = "col-sm-6">
							<a href='/ourservices#bathroom-service'>
								<div class = "specialize-bg" style="background-image: url(/images/main-bathroom.jpg);">
									<div class = "specialize-text"><h2>Bathrooms</h2></div>
								</div>
							</a>
						</div>
					</div>
					<div class = "row specialize-row">
						<div class = "col-sm-6">
							<a href='/ourservices#kitchen-service'>
								<div class = "specialize-bg" style="background-image: url(/images/main-kitchen.jpg);">
									<div class = "specialize-text"><h2>Kitchens</h2></div>
								</div>
							</a>
						</div>
						<div class = "col-sm-6">
							<a href='/ourservices#basement-service'>
								<div class = "specialize-bg" style="background-image: url(/images/main-basement.jpg);">
									<div class = "specialize-text"><h2>Basements</h2></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Section Specialize In -->

			<!-- Section Trusted Renovators -->
			<section id = "trusted-renovators-section">
				<span>Trusted</span> Contractors<br /> in the <span>GTA</span> for over <span>10 years</span><br />
                <div class="city">
                    Oakville &middot; Mississauga &middot; Burlington &middot; Milton &middot; Toronto &middot; Hamilton
                </div>
				<a href = '/ourstory'><span id = "view-story-text">CHECK OUT OUR STORY</span></a>
			</section>
			<!-- End Section Trusted Renovators -->


			<!-- Recent Projects Section -->
			<section id = "recent-projects-section">
				<div class = "container">
					<div class = "row">
						<h1>Recent Projects</h1>
					</div>
					<div class = "row">
						<!-- Start Carousel -->
						<div id="projectsCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">

							<div class="carousel-inner" role="listbox">
							    <div class="item active">
							    	<div class = "col-sm-4">
							    		<img src="/images/basement-1.png" class = "img-responsive recent-project-img">
							    	</div>
							    	<div class = "col-sm-4 hidden-xs">
							    		<img src="/images/kitchen-3.png" class = "img-responsive recent-project-img">
							    	</div>
							    	<div class = "col-sm-4 hidden-xs">
							    		<img src="/images/bathroom-3.png" class = "img-responsive recent-project-img">
							    	</div>
							    </div>

							    <div class="item">
							      	<div class = "col-sm-4">
							    		<img src="/images/basement-3.png" class = "img-responsive recent-project-img">
							    	</div>
							    	<div class = "col-sm-4 hidden-xs">
							    		<img src="/images/kitchen-1.png" class = "img-responsive recent-project-img">
							    	</div>
							    	<div class = "col-sm-4 hidden-xs">
							    		<img src="/images/basement-7.png" class = "img-responsive recent-project-img">
							    	</div>
							    </div>
							</div>

						</div>
						<!-- End Carousel -->
					</div>
				</div>
			</section>
			<!-- End Recent Projects Section -->
			<!-- Get Quote Section -->
			<section id = "get-quote-section">
				<div class = "container">
					<h1>Contact our renovation experts today to convert ideas into cozy homes.</h1>
					<a href = "#" id="home-bottom-quote-btn"><button class = "hero-shot-btn">Book Your Free Consultation</button></a>
				</div>
			</section>
			<!-- End Get Quote Section -->

			<!-- Logos Section -->
			@include('includes.logos')
			<!-- End Logos Section -->

			<!-- Site Wide Footer -->
			@include('includes.footer')
	  	</div>
	  	<!-- End Front Layer -->


	</div>
</section>

<script type="text/javascript">
	$(document).ready(function(){

		$(".parallax").scroll(function(){

			// Make the hero shot text fade away on scroll
		    $("#hero-title").css("opacity", 1 - $(this).scrollTop() / 240);

		    if($("#what-we-do-section").offset().top < 0){

		    	$( "#nav-header").css({
		    		'border-bottom':'1px solid #666',
		    		'color':'#b5b5b5',
		    		'background': 'rgba(51,51,51,'+Math.abs($("#what-we-do-section").offset().top/20)+')'
		    	});

		    	$("#main-navbar a").css({
		    		'color':'#b5b5b5'
		    	});
		    }else{
		    	$( "#nav-header").css({'background': 'rgba(51,51,51,0.2)',
		    		'border-bottom':'none',
		    		'color':"#fff"});

		    	$("#main-navbar a").css({
		    		'color':'#fff'
		    	});
		    }
		});

		// Mixpanel Tracking
		$("#hero-quote-btn").click(function(e){
            e.preventDefault();
            // Show the Contact Modal
            $('#contactModal').modal();

			// Send mixpanel event
			mixpanel.track("Get Quote", {
				"Source": "Hero Shot"
			});
		});

		$("#home-bottom-quote-btn").click(function(e){
            e.preventDefault();
            // Show the Contact Modal
            $('#contactModal').modal();
			// Send mixpanel event
			mixpanel.track("Get Quote", {
				"Source": "Bottom Homepage"
			});
		});
	});
</script>
@stop
