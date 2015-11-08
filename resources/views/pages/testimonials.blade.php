@extends('layouts.layout')

@section('content')

	<!-- Testimonials Section -->
	<section id = "testimonials">
		<div class = "container">
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
	<section id = "get-quote-section">
		<div class = "container">
			<div class = "row">
				<div class = 'col-sm-12'>
					<a><button class = "hero-shot-btn">Submit Your Own</button></a>

					<div class = 'book-consultation-link'><a href = "/contact-us"><span class="glyphicon glyphicon-comment" style = 'vertical-align:text-top; color:#888;'></span>&nbsp;&nbsp;Book Your Free Consultation</a></div>
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

			
			$(window).scroll(function(){
			    if($("#testimonials").offset().top < $(document).scrollTop()){

			    	$( "#nav-header").css({ 
			    		'border-bottom':'1px solid #666',
			    		'color':'#b5b5b5',
			    		'background': 'rgba(51,51,51,'+Math.abs($("#testimonials").offset().top/80)+')'
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
		});
	</script>
@stop