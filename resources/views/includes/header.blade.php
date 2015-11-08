<section id = "nav-header">
	<a href = "/"><div id ='header-logo'><span>CBM</span>Renovations</div></a>
	<div class = "main-navbar-container">
		<ul id = "main-navbar">
			<a href = "/"><li class="{{ Request::is('/') ? 'active-link' : '' }}">Home</li></a>
			<a href = "/ourservices"><li class="{{ Request::is('ourservices') ? 'active-link' : '' }}">Our Services</li></a>
			<a href = "/projects"><li class="{{ Request::is('projects') ? 'active-link' : '' }}">Projects</li></a>
			<a href = "/ourstory"><li class="{{ Request::is('ourstory') ? 'active-link' : '' }}">Our Story</li></a>
			<a href = "/testimonials"><li class="{{ Request::is('testimonials') ? 'active-link' : '' }}">Testimonials</li></a>
			<a href = "/contact-us"><li class="{{ Request::is('contact-us') ? 'active-link' : '' }}">Contact Us</li></a>
		</ul>
	</div>
	<div id = "phone-section"><span class="glyphicon glyphicon-earphone" style = "vertical-align: text-top;" aria-hidden="true"></span>&nbsp;<a href ="tel:647-785-7125">647 785 7125</a></div>
	<!-- <div id = "free-quote">Get A <span style = "font-weight:200;">Free</span> Quote</div> -->
</section>