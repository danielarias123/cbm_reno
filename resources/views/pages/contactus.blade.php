@extends('layouts.layout')

@section('content')
	<section id = "contact-us">
		<div class = "container">
			<div class = 'row'>
				<div class = "col-sm-12">
					<h1 class = "pages-header">Contact Us</h1>
				</div>
			</div>
			<div class = 'row'>
				<div class = "col-sm-12">
					<div id = "contact-us-hero" style="background-image: url(/images/contact-us-hero.jpg);"></div>
				</div>
			</div>

			<div class = 'row'>
				<div class = "col-sm-6">
					<div class="contact-us-section">
						<h3><strong>CBM</strong> Renovations Inc.</h3>
						<p>We service areas within the GTA including Oakville, Burlington, Hamilton, Mississauga, Milton, Brampton and Etobicoke. </p><br/>
						<p>To book a free consultation or if you have any general questions, fill out the form and one of our representatives will contact you as soon as possible.</p><br/>
						<p><span class="glyphicon glyphicon-earphone" style = "vertical-align: text-top; color:#888;" aria-hidden="true"></span>&nbsp;&nbsp;<a href ="tel:647-785-7125">647 785 7125</a><br/>
							<span class="glyphicon glyphicon-envelope" style = "vertical-align: text-top; color:#888;" aria-hidden="true"></span>&nbsp;&nbsp;info@cbmreno.ca
						</p><br/>
						<p>2426 Chateau Common<br/>
						L6M 0S1<br/>
						Oakville, ON
						</p><br/>
					
						<iframe src="https://www.google.com/maps/d/embed?mid=zGwqgR5wqE1E.kjGd14QdgyNc" width="550" height="300"></iframe>
					</div>
				</div>
				<div class = "col-sm-6">
					<div class="contact-us-section">
						<h3 style = "text-align:center;">Tell us a little about your project...</h3>
						<div id = "contact-us-form">
							{!! Form::open(array('action' => 'PagesController@sendemail')) !!}
							{!! Form::text('name', $value = null, array('placeholder' => 'Name', 'class' => 'form-control contact-us-form')) !!}
							{!! Form::email('email', $value = null, array('placeholder' => 'Email', 'class' => 'form-control contact-us-form')) !!}
							{!! Form::text('phone', $value = null, array('placeholder' => 'Phone Number', 'class' => 'form-control contact-us-form', 'style' => "margin-bottom:15px;")) !!}
							<div class = 'contact-us-label'>Project Type</div>
							{!! Form::select('job_type', array('Kitchen' => 'Kitchen', 'Bathroom' => 'Bathroom', 'Basement' => 'Basement', 'Addition' => 'Addition', 'Commercial' => 'Commercial', 'Exterior' => 'Exterior', 'Other' => 'Other'), null, array('class' => 'form-control contact-us-select')) !!}
							{!! Form::textarea('message', $value = null, array('placeholder' => 'Message', 'class' => 'form-control contact-us-form contact-us-textarea')) !!}
							<p style = "text-align:center;">{!! Form::submit('Send', array('class' => 'hero-shot-btn contact-us-btn')) !!}</p>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Site Wide Footer -->
	@include('includes.footer')

	<script type="text/javascript">
	$(document).ready(function(){
		
		$(window).scroll(function(){
		    if($("#contact-us").offset().top < $(document).scrollTop()){

		    	$( "#nav-header").css({ 
		    		'border-bottom':'1px solid #666',
		    		'color':'#b5b5b5',
		    		'background': 'rgba(51,51,51,'+Math.abs($("#contact-us").offset().top/80)+')'
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
