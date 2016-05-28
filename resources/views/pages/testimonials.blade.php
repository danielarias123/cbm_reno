@extends('layouts.layout')

@section('title', 'Read Our Satisfied Customer&#039;s Testimonials | CBM Renovations')
@section('description', 'Read our satisfied client&#039;s testimonials &amp; comments about CBM Renovations professional work.')
@section('url', 'http://www.cbmreno.ca/testimonials')
@section('type', 'article')

@section('content')

<!-- Mixpanel Tracking -->
<script type="text/javascript">
mixpanel.track("Testimonials Page View");
</script>

	<!-- Testimonials Section -->
	<section id = "testimonials" class = "webpage-section">
		<div class = "container">
			@if(Session::has('testimonial-sent'))
					<div class="alert alert-success">
					  {!! Session::get('message')!!}
					</div>
			@endif
			<div class = 'row'>
				<div class = "col-sm-12">
					<h1 class = "pages-header">Testimonials</h1>
				</div>
			</div>
			<div class = "row testimonial-row" style = "border-top: 1px solid #666; margin-top:30px;">
				<div class = "col-sm-12">
					<div class = "testimonial-text">
						Great quality home renovations done on my basement and garage roof. CBM Renovations is a company I would recommend for anyone interested in renovating or fixing construction issues, like roofing, or basement finishing. Manny Arias is an expert in the field and high integrity contractor.
						<div class = "testimonial-divider"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
					</div>
					<p class = "testimonial-author">
						Pablo Viola.<br/>
						Oakville, ON
					</p>
				</div>
			</div>
			<div class = "row testimonial-row">
				<div class = "col-sm-12">
					<div class = "testimonial-text">
						I hired CBM renovations to finish my basement in Burlington and Manny and his crew were very polite and courteous, they finished my basement on time and within budget, no extra cost, no sorprises, very good quality workmanship. We certainly recommend CBM to all our friends and family!
						<div class = "testimonial-divider"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
					</div>
					<p class = "testimonial-author">
						JC/Irene Bracho.<br/>
						Burlington, ON
					</p>
				</div>
			</div>
			<div class = "row testimonial-row">
				<div class = "col-sm-12">
					<div class = "testimonial-text">
						I have hired Manny many times for a variety of contracting work, from construction and rennovation, to tiling and painting. He has always done an excellent job, is personable and courteous. I have always been happy with his work. I have also referred friends and neighbours to Manny's services and they have all been satisfied.
						<div class = "testimonial-divider"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
					</div>
					<p class = "testimonial-author">
						Melissa Pedersen.<br/>
						Burlington, ON
					</p>
				</div>
			</div>
			<div class = "row testimonial-row">
				<div class = "col-sm-12">
					<div class = "testimonial-text">
						After getting a referal from a good friend, we decided to hire CBM to finish our basement. The renovation project was stress free and Manny and his crew were very professional, they finish my basement, one bathroom and one kitchen according to schedule, Since then, I always recommend CBM to anyone who needs a General Contractor.
						<div class = "testimonial-divider"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
					</div>
					<p class = "testimonial-author">
						Omar Abuhantash.<br/>
						Oakville, ON
					</p>
				</div>
			</div>
			<div class = "row testimonial-row" style = "border:none; border-bottom: 1px solid #666;">
				<div class = "col-sm-12">
					<div class = "testimonial-text">
						I have used Manny Arias' services many times in my house and I can honestly say that his work is excellent. He did a great job with my family bathroom renovation. He is trustworthy and reliable and always willing to do what it takes to do the job right!!! As an interior designer I highly recommend Manny Arias to my clients and friends'
						<div class = "testimonial-divider"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
					</div>
					<p class = "testimonial-author">
						Monica Rolling.<br/>
						Oakville, ON
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonials Section -->
	<!-- Quote Section -->
	<section id = "get-quote-section">
		<div class = "container">
			<div class = "row">
				<div class = 'col-sm-12'>
					<button type='button' class = "hero-shot-btn" data-toggle="modal" data-target="#testimonialModal">Submit Your Own</button>

					<div class = 'book-consultation-link'><a href = "#" id = "testimonials-quote-btn"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Book Your Free Consultation</a></div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Quote Section -->

	<!-- Testimonial Modal -->
	<div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="testimonialModalLabel">
	  <div class="modal-dialog testimonial-modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style = 'background:#444; border-bottom:none;'>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style = 'color:#fff;'><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="testimonialModalLabel">Share your experience with CBM Renovations</h4>
	      </div>
	      {!! Form::open(array('action' => 'PagesController@sendtestimonial')) !!}
	      <div class="modal-body" style = 'background:#333;'>
	        {!! Form::text('name', $value = null, array('placeholder' => 'Name', 'class' => 'form-control contact-us-form', 'required' => 'required')) !!}
	        {!! Form::text('location', $value = null, array('placeholder' => 'Location', 'class' => 'form-control contact-us-form', 'required' => 'required')) !!}
	        {!! Form::textarea('testimonial_text', $value = null, array('placeholder' => 'Testimonial', 'class' => 'form-control contact-us-form contact-us-textarea', 'required' => 'required')) !!}
	      </div>
	      <div class="modal-footer" style = 'background:#444;border-top:none;'>
	        <button type="button" class="hero-shot-btn testimonial-btn" data-dismiss="modal">Close</button>
	        {!! Form::submit('Submit', array('class' => 'hero-shot-btn testimonial-btn')) !!}
	      </div>
	      {!! Form::close() !!}
	    </div>
	  </div>
	</div>
	<!-- End Testimonial Modal -->

	<!-- Logos Section -->
	@include('includes.logos')
	<!-- End Logos Section -->

	<!-- Site Wide Footer -->
	@include('includes.footer')

	<script type="text/javascript">
		$(document).ready(function(){

			$( ".alert" ).delay(6000).fadeOut();

			// Mixpanel Tracking
			$("#testimonials-quote-btn").click(function(e){
				e.preventDefault();
	            // Show the Contact Modal
	            $('#contactModal').modal();

				// Send mixpanel event
				mixpanel.track("Get Quote", {
					"Source": "Testimonials Page"
				});
			});

		});
	</script>
@stop
