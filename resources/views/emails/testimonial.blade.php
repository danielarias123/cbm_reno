<body>
<div style = "background: #333 !important; padding:10px 20px;">
	<h2 style = "color: #fff !important;">You have received a testimonial for approval from cbmreno.ca!</h2>
</div>
<div style = "padding:20px;">
	<p>
		Hey <strong>{{$recipient}}</strong>,
	</p>
	<p>
		Someone has submitted a testimonial for approval on the <strong>Testimonials</strong> section on the CBM Renovations website.<br/>
		Below is the message enclosed:
	</p>
	<div style = "border: 1px solid #333; padding:20px;">
		<strong>Name:</strong>&nbsp;{{$name}}<br/>
		<strong>Location:</strong>&nbsp;{{$location}}<br/>
		<strong>Testimonial:</strong><br/>
		<div style = "font-style:italic; padding-left:10px; padding-bottom: 5px;">"{{$testimonial_text}}"</div><br/>
		If you would like to add this testimonial to the <strong>Testimonials</strong> Section, contact your website administrator with the message enclosed.
	</div>
	<p style = "padding-top:20px;">
		This is an automatically generated notification. Do not Reply to this email.
	</p>
</div>
</body>
