@extends('layouts.layout')

@section('title', 'Mississauga, Toronto, Burlington &amp; Oakville Custom Home Renovations &amp; Remodelling | CBM Renovations')
@section('description', 'CBM Renovations in known and trusted all over the GTA. Contact Us Anytime to Get a Free Quote on Our Services.')
@section('url', 'http://www.cbmreno.ca/ourservices')
@section('type', 'article')

@section('content')

<!-- Mixpanel Tracking -->
<script type="text/javascript">
mixpanel.track("Our Services Page View");
</script>

<section id = 'our-services' class = "webpage-section">
	<div class = "container">
		<div class = "row">
			<div class = 'col-sm-12'>
				<h1 class = "pages-header">Our Services</h1>
			</div>
		</div>
		<div style = ' border-top:1px solid #777; margin-top:40px;'></div>
		<div class = 'row'>
			<div class = 'col-sm-4'>
				<p class = 'our-services-overview-text'>
					CBM Renovations specializes in both residential and commercial projects. Our aim is to revolutionize the way the construction industry works by integrating technological advancements, expertise and experience.
				</p>
			</div>
			<div class = 'col-sm-8 hidden-xs'>
				<div class = 'our-services-banner' style = "background-image:url(/images/services-header.jpg);">
				</div>
			</div>
		</div>

		<!-- Basements -->
		<div class = 'service-container' id = 'basement-service'>
			<a role="button">
				<div class = 'row'>
					<div class = 'col-sm-8'>
						<div class = 'our-services-banner' style = "background-image:url(/images/main-basement.jpg);"></div>
					</div>

					<div class = 'col-sm-4'>
						<p>
						<strong>Basements</strong><br/>
						Finishing your basement is an ideal way to increase living space and add value to your home.<br/>
						</p>
						<div class = "read-more">
							<a href="/projects#basement-images">
								VIEW OUR BASEMENT PROJECTS<br/>
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseBasement">
				<div class = "services-info">
					Besides being a place used as a storage facility, basements offer a fantastic ground for a creative and rewarding remodeling project. Whether you are looking for a new bedroom, bar, theater, gym, or office, the solution might be right under your feet.<br/><br/>
					At CBM, we guide you through every step of the way... list steps.
				</div>
			</div>
		</div>
		<!-- End Basements -->

		<!-- Bathrooms -->
		<div class = 'service-container' id = 'bathroom-service'>
			<a role="button">
				<div class = 'row'>
					<div class = 'col-sm-8 col-sm-push-4'>
						<div class = 'our-services-banner' style = "background-image:url(/images/services-bathroom.jpg);"></div>
					</div>
					<div class = 'col-sm-4 col-sm-pull-8'>
						<p>
						<strong>Bathrooms</strong><br/>
						Being one of the most used rooms in your home, remodelling your bathroom is a sure way to add life to your home.<br/>
						</p>
						<div class = "read-more" style = 'margin-top:20px;'>
							<a href="/projects#bathroom-images">
								VIEW OUR BATHROOM PROJECTS<br/>
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseBathroom">
				<div class = "services-info">
					Besides being a place used as a storage facility, basement offers a fantastic ground for creative and rewarding remodeling project. Whether you are looking for a new bedroom, bar, theater, gym, or office, the solution might be right under your feet.
				</div>
			</div>
		</div>
		<!-- End Bathrooms -->

		<!-- Kitchens -->
		<div class = 'service-container' id = 'kitchen-service'>
			<a role="button">
				<div class = 'row'>
					<div class = 'col-sm-8'>
						<div class = 'our-services-banner' style = "background-image:url(/images/services-kitchen.jpg);"></div>
					</div>
					<div class = 'col-sm-4'>
						<p>
						<strong>Kitchens</strong><br/>
						From hosting a dinner party to having a late night snack, the kitchen is most important room in your home.<br/>
						</p>
						<div class = "read-more">
							<a href="/projects#kitchen-images">
								VIEW OUR KITCHEN PROJECTS<br/>
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseKitchen">
				<div class = "services-info">
					Besides being a place used as a storage facility, basements offer a fantastic ground for a creative and rewarding remodeling project. Whether you are looking for a new bedroom, bar, theater, gym, or office, the solution might be right under your feet.<br/><br/>
					At CBM, we guide you through every step of the way... list steps.
				</div>
			</div>
		</div>
		<!-- End Kitchens -->
		<!-- Commercial -->
		<div class = 'service-container' id = 'commercial-service'  style = 'border-bottom:1px solid #777;'>
			<a role="button">
				<div class = 'row'>
					<div class = 'col-sm-8 col-sm-push-4'>
						<div class = 'our-services-banner' style = "background-image:url(/images/services-commercial.jpg);"></div>
					</div>
					<div class = 'col-sm-4 col-sm-pull-8'>
						<p>
						<strong>Commercial</strong><br/>
						From restaurants and pubs to offices and warehouses, having a beautiful and well-organized place of work makes all the difference.<br/>
						</p>
						<div class = "read-more" style = 'margin-top:20px;'>
							<a href="/projects#commercial-images">
								VIEW OUR COMMERCIAL PROJECTS<br/>
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseBathroom">
				<div class = "services-info">
					Besides being a place used as a storage facility, basement offers a fantastic ground for creative and rewarding remodeling project. Whether you are looking for a new bedroom, bar, theater, gym, or office, the solution might be right under your feet.
				</div>
			</div>
		</div>
		<!-- End Commercial -->
		<div class="row">
			<div class = "col-sm-12">
				<!-- Get Quote Section -->
				<section id = "get-quote-section" class = 'services-get-quote'>
						<h1>Get Started Now</h1>
						<a href = "#" id="our-services-quote-btn"><button class = "hero-shot-btn">Request A Quote</button></a>
				</section>
				<!-- End Get Quote Section -->
			</div>
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

		// Change 'READ MORE' text based on state
		$('#collapseBasement').on('show.bs.collapse', function () {
		  $('#basement-service .read-more').html('READ LESS<br/><span class="glyphicon glyphicon-chevron-up"></span>');
		});
		$('#collapseBasement').on('hide.bs.collapse', function () {
		  $('#basement-service .read-more').html('READ MORE<br/><span class="glyphicon glyphicon-chevron-down"></span>');
		});

		$('#collapseBathroom').on('show.bs.collapse', function () {
		  $('#bathroom-service .read-more').html('READ LESS<br/><span class="glyphicon glyphicon-chevron-up"></span>');
		});
		$('#collapseBathroom').on('hide.bs.collapse', function () {
		  $('#bathroom-service .read-more').html('READ MORE<br/><span class="glyphicon glyphicon-chevron-down"></span>');
		});

		$('#collapseKitchen').on('show.bs.collapse', function () {
		  $('#kitchen-service .read-more').html('READ LESS<br/><span class="glyphicon glyphicon-chevron-up"></span>');
		});
		$('#collapseKitchen').on('hide.bs.collapse', function () {
		  $('#kitchen-service .read-more').html('READ MORE<br/><span class="glyphicon glyphicon-chevron-down"></span>');
		});

		// Mixpanel Tracking
		$("#our-services-quote-btn").click(function(e){
			e.preventDefault();
            // Show the Contact Modal
            $('#contactModal').modal();

			// Send mixpanel event
			mixpanel.track("Get Quote", {
				"Source": "Our Services Page"
			});
		});
	});
</script>

@stop
