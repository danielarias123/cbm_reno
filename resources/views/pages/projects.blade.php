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

		<!-- Basement Images -->
		<div class = "row project-category-row">
			<div class = 'col-sm-12'>
				<h3 class = "project-row-header">Basements</h3>
			</div>
		</div>
		<div class = "image-row row" style = "margin-bottom:50px;">
			<div>
				<div class = "project-image" id = "basement-1" data-toggle="modal" data-target="#imageModal" data-image="basement-1.png" ><img data-lazy= "/images/basement-1.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "basement-2" data-toggle="modal" data-target="#imageModal" data-image="basement-6.png"><img data-lazy= "/images/basement-6.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "basement-3" data-toggle="modal" data-target="#imageModal" data-image="basement-3.png"><img data-lazy= "/images/basement-3.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "basement-4" data-toggle="modal" data-target="#imageModal" data-image="basement-7.png"><img data-lazy= "/images/basement-7.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "basement-5" data-toggle="modal" data-target="#imageModal" data-image="basement-2.png"><img data-lazy= "/images/basement-2.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "basement-6" data-toggle="modal" data-target="#imageModal" data-image="basement-4.png"><img data-lazy= "/images/basement-4.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "basement-7" data-toggle="modal" data-target="#imageModal" data-image="basement-8.png"><img data-lazy= "/images/basement-8.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "basement-8" data-toggle="modal" data-target="#imageModal" data-image="basement-5.png"><img data-lazy= "/images/basement-5.png"/></div>
			</div>
		</div>
		<!-- End Basement Images -->

		<!-- Kitchen Images -->
		<div class = "row project-category-row">
			<div class = 'col-sm-12'>
				<h3 class = "project-row-header">Kitchens</h3>
			</div>
		</div>
		<div class = "image-row row" style = "margin-bottom:50px;">
			<div>
				<div class = "project-image" id = "kitchen-1" data-toggle="modal" data-target="#imageModal" data-image="kitchen-1.png" ><img data-lazy= "/images/kitchen-1.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-2" data-toggle="modal" data-target="#imageModal" data-image="kitchen-3.png"><img data-lazy= "/images/kitchen-3.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-3" data-toggle="modal" data-target="#imageModal" data-image="kitchen-5.png"><img data-lazy= "/images/kitchen-5.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-4" data-toggle="modal" data-target="#imageModal" data-image="kitchen-4.png"><img data-lazy= "/images/kitchen-4.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-5" data-toggle="modal" data-target="#imageModal" data-image="kitchen-6.png"><img data-lazy= "/images/kitchen-6.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-6" data-toggle="modal" data-target="#imageModal" data-image="kitchen-7.png"><img data-lazy= "/images/kitchen-7.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-7" data-toggle="modal" data-target="#imageModal" data-image="kitchen-8.png"><img data-lazy= "/images/kitchen-8.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-8" data-toggle="modal" data-target="#imageModal" data-image="kitchen-2.png"><img data-lazy= "/images/kitchen-2.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "kitchen-9" data-toggle="modal" data-target="#imageModal" data-image="kitchen-9.png"><img data-lazy= "/images/kitchen-9.png"/></div>
			</div>
		</div>
		<!-- End Kitchen Images -->

		<!-- Bathroom Images -->
		<div class = "row project-category-row">
			<div class = 'col-sm-12'>
				<h3 class = "project-row-header">Bathrooms</h3>
			</div>
		</div>
		<div class = "image-row row" style = "margin-bottom:50px;">
			<div>
				<div class = "project-image" id = "bathroom-1" data-toggle="modal" data-target="#imageModal" data-image="bathroom-2.png" ><img data-lazy= "/images/bathroom-2.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-2" data-toggle="modal" data-target="#imageModal" data-image="bathroom-3.png"><img data-lazy= "/images/bathroom-3.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-4" data-toggle="modal" data-target="#imageModal" data-image="bathroom-7.png"><img data-lazy= "/images/bathroom-7.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-5" data-toggle="modal" data-target="#imageModal" data-image="bathroom-5.png"><img data-lazy= "/images/bathroom-5.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-6" data-toggle="modal" data-target="#imageModal" data-image="bathroom-6.png"><img data-lazy= "/images/bathroom-6.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-7" data-toggle="modal" data-target="#imageModal" data-image="bathroom-4.png"><img data-lazy= "/images/bathroom-4.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-8" data-toggle="modal" data-target="#imageModal" data-image="bathroom-8.png"><img data-lazy= "/images/bathroom-8.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-9" data-toggle="modal" data-target="#imageModal" data-image="bathroom-9.png"><img data-lazy= "/images/bathroom-9.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "bathroom-10" data-toggle="modal" data-target="#imageModal" data-image="bathroom-10.png"><img data-lazy= "/images/bathroom-10.png"/></div>
			</div>
		</div>
		<!-- End Bathroom Images -->

		<!-- Commercial Images -->
		<div class = "row project-category-row">
			<div class = 'col-sm-12'>
				<h3 class = "project-row-header">Commercial</h3>
			</div>
		</div>
		<div class = "image-row row" style = "margin-bottom:50px;">
			<div>
				<div class = "project-image" id = "commercial-1" data-toggle="modal" data-target="#imageModal" data-image="commercial-1.png" ><img data-lazy= "/images/commercial-1.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "commercial-2" data-toggle="modal" data-target="#imageModal" data-image="commercial-2.png"><img data-lazy= "/images/commercial-2.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "commercial-3" data-toggle="modal" data-target="#imageModal" data-image="commercial-3.png"><img data-lazy= "/images/commercial-3.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "commercial-4" data-toggle="modal" data-target="#imageModal" data-image="commercial-4.png"><img data-lazy= "/images/commercial-4.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "commercial-5" data-toggle="modal" data-target="#imageModal" data-image="commercial-5.png"><img data-lazy= "/images/commercial-5.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "commercial-6" data-toggle="modal" data-target="#imageModal" data-image="commercial-6.png"><img data-lazy= "/images/commercial-6.png"/></div>
			</div>
		</div>
		<!-- End Commercial Images -->

		<!-- Other Images -->
		<div class = "row project-category-row">
			<div class = 'col-sm-12'>
				<h3 class = "project-row-header">and everything else</h3>
			</div>
		</div>
		<div class = "image-row row" style = "margin-bottom:50px;">
			<div>
				<div class = "project-image" id = "other-1" data-toggle="modal" data-target="#imageModal" data-image="other-4.png" ><img data-lazy= "/images/other-4.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "other-2" data-toggle="modal" data-target="#imageModal" data-image="other-8.png"><img data-lazy= "/images/other-8.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "other-3" data-toggle="modal" data-target="#imageModal" data-image="other-2.png"><img data-lazy= "/images/other-2.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "other-4" data-toggle="modal" data-target="#imageModal" data-image="other-1.png"><img data-lazy= "/images/other-1.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "other-5" data-toggle="modal" data-target="#imageModal" data-image="other-3.png"><img data-lazy= "/images/other-3.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "other-6" data-toggle="modal" data-target="#imageModal" data-image="other-5.png"><img data-lazy= "/images/other-5.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "other-7" data-toggle="modal" data-target="#imageModal" data-image="other-6.png"><img data-lazy= "/images/other-6.png"/></div>
			</div>
			<div>
				<div class = "project-image" id = "other-8" data-toggle="modal" data-target="#imageModal" data-image="other-7.png"><img data-lazy= "/images/other-7.png"/></div>
			</div>
		</div>
		<!-- End Other Images -->

		<div class = "row">
			<div class = 'col-sm-12'>
				<!-- Get Quote Section -->
				<section id = "get-quote-section" class = 'services-get-quote' style = "margin-bottom: 40px;">
						<h1>Love where you Live</h1>
						<a href = "/contact-us" id="projects-quote-btn"><button class = "hero-shot-btn">Request A Quote</button></a>
				</section>
				<!-- End Get Quote Section -->
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

		// Set properties of slick carousel
		$('.image-row').slick({
			slidesToShow: 4,
			dots: true,
			prevArrow: "<div class='slick-prev'><span class='glyphicon glyphicon-chevron-left'></span></div>",
			nextArrow: "<div class='slick-next'><span class='glyphicon glyphicon-chevron-right'></span></div>",
			lazyload: 'ondemand'

		});


		$('#imageModal').on('show.bs.modal', function (event) {
			var slide = $(event.relatedTarget) // Button that triggered the modal
			var image_src = slide.data('image') // Extract info from data-* attributes


			var slide_num = slide[0].id.slice(-1);
			var id_prefix = slide[0].id.substring(0, slide[0].id.length - 1);
			var modal = $(this)
			modal.find('.modal-body').html("<img class='chosen-image' src='/images/"+image_src+"'/>");

			// $('#imageModal').keyup(function(e){

			// 	// Right Arrow
			// 	if(e.which == 39){
			// 		var next_slide = parseInt(slide_num)+1;
			// 		console.log(id_prefix+next_slide);
			// 	}

			// 	// Left Arrow
			// 	if(e.which == 37){
			// 		var next_slide = parseInt(slide_num)-1;
			// 		console.log(id_prefix+next_slide);
			// 	}

			// 	$('#imageModal').modal('hide');
			// 	$("#"+id_prefix+next_slide).click();
			// });
		})

		// Mixpanel Tracking
		$("#projects-quote-btn").click(function(){
			// Send mixpanel event
			mixpanel.track("Get Quote", {
				"Source": "Projects Page"
			});
		});

	});
</script>

@stop
