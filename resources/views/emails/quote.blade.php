<body>
<div style = "background: #333 !important; padding:10px 20px;">
	<h2 style = "color: #fff !important;">You have received a message from cbmreno.ca!</h2>
</div>
<div style = "padding:20px;">
	<p>
		Hey <strong>{{$recipient}}</strong>,
	</p>
	<p>
		You have a new message from the <strong>Contact Us</strong> section on the CBM Renovations website.<br/>
		Below is the message enclosed:
	</p>
	<div style = "border: 1px solid #333; padding:20px;">
		<strong>Name:</strong>&nbsp;{{$name}}<br/>
		<strong>Email:</strong>&nbsp;{{$email}}<br/>
		<strong>Phone:</strong>&nbsp;{{$phone}}<br/><br/>
		<strong>Job Type:</strong>&nbsp;{{$job_type}}<br/>
		<strong>Message:</strong><br/>
		<div style = "font-style:italic; padding-left:10px; padding-bottom: 5px;">"{{$contact_message}}"</div>
		<strong>Best Time to Reach Them:</strong>&nbsp;{{$best_time}}
	</div>
	<p style = "padding-top:20px;">
		This is an automatically generated notification. Do not Reply to this email.
	</p>
</div>
</body>
