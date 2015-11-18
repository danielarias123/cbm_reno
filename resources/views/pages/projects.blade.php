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
				<h3 class = "project-row-header">Bathrooms</h3>
			</div>
		</div>
		<div class = "image-row row" style = "margin-bottom:40px;">
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

	});
</script>

@stop