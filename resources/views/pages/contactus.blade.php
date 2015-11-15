@extends('layouts.layout')

@section('content')

<!-- Mixpanel Tracking -->
<script type="text/javascript">
mixpanel.track("Contact Us Page View");
</script>

	<section id = "contact-us" class = "webpage-section">
		<div class = 'container'>
			@if(Session::has('form-success'))
				@if(Session::get('form-success') == true)
					<div class="alert alert-success">
					  {!! Session::get('message')!!}
					</div>
				@endif
				@if(Session::get('form-success') == false)
					<div class="alert alert-danger">
					  <strong>Error:</strong> {!! Session::get('message')!!}
					</div>
				@endif
			@endif
			<div class = "row">
				<div class = 'col-sm-12'>
					<h1 class = "pages-header">Contact Us</h1>
				</div>
			</div>
		</div>
		<div id = "map-container">
			<div id="map"></div>
		</div>
		<div class = "container">
			<div class = 'row'>
				<div class = "col-sm-6">
					<div class="contact-us-section">
						<h3><strong>CBM</strong> Renovations Inc.</h3>
						<p>We service areas within the GTA including Oakville, Burlington, Hamilton, Mississauga, Milton, Brampton and Etobicoke. </p><br/>
						<p>To book a free consultation or if you have any general questions, fill out the form and one of our representatives will contact you as soon as possible.</p><br/>
						<p><span class="glyphicon glyphicon-earphone" style = "vertical-align: text-top; color:#888;" aria-hidden="true"></span>&nbsp;&nbsp;<a href ="tel:647-785-7125">647 785 7125</a><br/>
							<span class="glyphicon glyphicon-envelope" style = "vertical-align: text-top; color:#888;" aria-hidden="true"></span>&nbsp;&nbsp;<a href="mailto:info@cbmreno.ca">info@cbmreno.ca</a>
						</p>
	
					</div>
				</div>
				<div class = "col-sm-6">
					<div class="contact-us-section">
						<h3 style = "text-align:center;">Tell us a little about your project...</h3>
						<div id = "contact-us-form">
							{!! Form::open(array('action' => 'PagesController@sendemail')) !!}
							{!! Form::text('name', $value = null, array('placeholder' => 'Name', 'class' => 'form-control contact-us-form', 'required' => 'required')) !!}
							{!! Form::email('email', $value = null, array('placeholder' => 'Email', 'class' => 'form-control contact-us-form','required' => 'required')) !!}
							{!! Form::text('phone', $value = null, array('placeholder' => 'Phone Number', 'class' => 'form-control contact-us-form', 'style' => "margin-bottom:15px;", 'required' => 'required')) !!}
							<div class = 'contact-us-label'>Project Type</div>
							{!! Form::select('job_type', array('Kitchen' => 'Kitchen', 'Bathroom' => 'Bathroom', 'Basement' => 'Basement', 'Addition' => 'Addition', 'Commercial' => 'Commercial', 'Exterior' => 'Exterior', 'Other' => 'Other'), null, array('class' => 'form-control contact-us-select')) !!}
							{!! Form::textarea('contact_message', $value = null, array('placeholder' => 'Message', 'class' => 'form-control contact-us-form contact-us-textarea', 'required' => 'required')) !!}
							{!! Form::text('best_time', $value = null, array('placeholder' => 'Best Time to Reach You', 'class' => 'form-control contact-us-form', 'required' => 'required')) !!}
							<div class = "captcha_container">{!! captcha_img('flat'); !!}{!! Form::text('captcha', $value = null, array('placeholder' => 'Enter characters you see', 'class' => 'form-control', 'required' => 'required')) !!}</div>
							<p style = "text-align:center;">{!! Form::submit('Send', array('class' => 'hero-shot-btn contact-us-btn', 'id' => 'submit-quote-btn')) !!}</p>
							{!! Form::close() !!}
						</div>
					</div>
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

		var map;

		// Function to set yp Google Map
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
		    center: {lat: 43.428504, lng: -79.70},
		    zoom: 9,
		    scrollwheel: false,
		    disableDefaultUI: true
		  });
		  // Style the Map
		var dark_style = 
			[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{
         featureType: "road",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       }];
		map.setOptions({styles: dark_style});

		}

		$(document).ready(function(){

			$( ".alert" ).delay(6000).fadeOut();

			// Mixpanel Tracking
			$("#submit-quote-btn").click(function(){
				mixpanel.track("Submit Quote Request");
			});	
			
		});
	</script>

	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxXcm_dyzOBtB6jUSaHnPpHiLhLP1A9fk&callback=initMap">
    </script>
@stop
