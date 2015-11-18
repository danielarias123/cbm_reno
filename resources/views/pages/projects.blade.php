@extends('layouts.layout')

@section('header')

{!!HTML::script('js/slick.min.js')!!}
{!!HTML::style('css/slick.css')!!}

@stop

@section('content')

<!-- Mixpanel Tracking -->
<script type="text/javascript">
//mixpanel.track("Projects Page View");
</script>

<section id = 'projects' class = "webpage-section">
	<div class = 'container'>
		<div class = "row">
			<div class = 'col-sm-12'>
				<h1 class = "pages-header">Projects</h1>
			</div>
		</div>
		<div class = "row project-category-row">
			<div class = 'col-sm-12'>
				<h3 class = "project-row-header">Basements</h3>
			</div>
		</div>
		<div class = "image-row row">
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="about-us-bg.jpg" data-lazy= "/images/about-us-bg.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="about-us-bg.jpg" data-lazy= "/images/about-us-bg.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="about-us-bg.jpg" data-lazy= "/images/about-us-bg.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="contact-us-hero.jpg" data-lazy= "/images/contact-us-hero.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="about-us-bg.jpg" data-lazy= "/images/about-us-bg.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="about-us-bg.jpg" data-lazy= "/images/about-us-bg.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="contact-us-hero.jpg" data-lazy= "/images/contact-us-hero.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="about-us-bg.jpg" data-lazy= "/images/about-us-bg.jpg"/></div>
			</div>
			<div>
				<div class = "project-image"><img data-toggle="modal" data-target="#imageModal" data-whatever="about-us-bg.jpg" data-lazy= "/images/about-us-bg.jpg"/></div>
			</div>
		</div>
	</div>
</section>

<!-- Image Modal -->
	<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel">
	  <div class="modal-dialog image-modal" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style = 'background:#444; border-bottom:none; height:40px; padding: 1px 10px;'>
	      	<h4></h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      </div>
	      <div class="modal-body" style = 'background:#333; padding: 10px;'>
	  
	      </div>
	      <div class="modal-footer" style = 'background:#444;border-top:none; padding: 7px;'>
	        <button type="button" class="hero-shot-btn testimonial-btn" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End Image Modal -->

<!-- Site Wide Footer -->
@include('includes.footer')

<script type="text/javascript">
	$(document).ready(function(){
		$('.image-row').slick({
			slidesToShow: 4,
			dots: true,
			prevArrow: "<div class='slick-prev'><span class='glyphicon glyphicon-chevron-left'></span></div>",
			nextArrow: "<div class='slick-next'><span class='glyphicon glyphicon-chevron-right'></span></div>",
			lazyload: 'ondemand'

		});

		$('#imageModal').on('show.bs.modal', function (event) {
			  var src = $(event.relatedTarget); // Button that triggered the modal
			  var image_title = src.data('whatever'); // Extract info from data-* attributes

			  var modal = $(this)
			  modal.find('.modal-body').html("<img class='chosen-image' src='/images/"+image_title+"'/>");
		});

	});
</script>

@stop