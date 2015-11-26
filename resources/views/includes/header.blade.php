<section id = "nav-header">
	<a href = "/"><div id ='header-logo'><span>CBM</span>Renovations</div></a>
	<div class = "main-navbar-container">
		<ul id = "main-navbar" class = "hidden-xs">
			<a href = "/"><li class="{{ Request::is('/') ? 'active-link' : '' }}">Home</li></a>
			<a href = "/ourservices"><li class="{{ Request::is('ourservices') ? 'active-link' : '' }}">Our Services</li></a>
			<a href = "/projects"><li class="{{ Request::is('projects') ? 'active-link' : '' }}">Projects</li></a>
			<a href = "/ourstory"><li class="{{ Request::is('ourstory') ? 'active-link' : '' }}">Our Story</li></a>
			<a href = "/testimonials"><li class="{{ Request::is('testimonials') ? 'active-link' : '' }}">Testimonials</li></a>
			<a href = "/contact-us"><li class="{{ Request::is('contact-us') ? 'active-link' : '' }}">Contact Us</li></a>
		</ul>
		<div class="dropdown visible-xs">
			<div class="dropdown-toggle navbar-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</div>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu">
				<a href = "/"><li class="{{ Request::is('/') ? 'active-link' : '' }}">Home</li></a>
				<a href = "/ourservices"><li class="{{ Request::is('ourservices') ? 'active-link' : '' }}">Our Services</li></a>
				<a href = "/projects"><li class="{{ Request::is('projects') ? 'active-link' : '' }}">Projects</li></a>
				<a href = "/ourstory"><li class="{{ Request::is('ourstory') ? 'active-link' : '' }}">Our Story</li></a>
				<a href = "/testimonials"><li class="{{ Request::is('testimonials') ? 'active-link' : '' }}">Testimonials</li></a>
				<a href = "/contact-us"><li class="{{ Request::is('contact-us') ? 'active-link' : '' }}">Contact Us</li></a>
			</ul>
		</div>
	</div>
	<div id = "phone-section" class = "hidden-xs"><span class="glyphicon glyphicon-earphone" style = "vertical-align: text-top;" aria-hidden="true"></span>&nbsp;<a href ="tel:647-785-7125">647 785 7125</a></div>
	<!-- <div id = "free-quote">Get A <span style = "font-weight:200;">Free</span> Quote</div> -->
</section>
