@extends('layouts.layout')

<section id = 'our-services'>
	<div class = "container">
		<div class = "row">
			<div class = 'col-sm-12'>
				<h1 class = "pages-header">Our Services</h1>
			</div>
		</div>
		<div class = 'row' style = 'margin-top:40px;'>
			<div class = 'col-sm-4'>
				<p class = 'our-services-overview-text'>
					CBM Renovations specializes in both residential and commercial projects. Our aim is to revolutionize the way construction industry works by integrating technological advancements, expertise and experience.
				</p>
			</div>
			<div class = 'col-sm-8'>
				<div class = 'our-services-banner' style = "background-image:url(/images/contact-us-hero.jpg);">
				</div>
			</div>
		</div>
		<div class = 'service-container'>
			<div class = 'row'>
				<div class = 'col-sm-8'></div>
				<div class = 'col-sm-4'></div>
			</div>
		</div>
	</div>
</section>
@section('content')

<!-- Site Wide Footer -->
@include('includes.footer')

@stop