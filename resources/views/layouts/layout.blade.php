<!doctype html>

<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title')</title>

		<!-- MetaData -->
		<meta name="description" content="@yield('description')">
		<link rel="canonical" href="@yield('url')" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="@yield('type')" />
		<meta property="og:title" content="@yield('title')" />
		<meta property="og:description" content="@yield('description')" />
		<meta property="og:url" content="@yield('url')" />
		<!-- End MetaData -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,200,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
		<script src="/jquery/dist/jquery.min.js"></script>
		<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/style.css">

		<link rel="icon" type="image/png" href="/images/cbm-logo192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/images/cbm-logo160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="/images/cbm-logo96" sizes="96x96">
		<link rel="icon" type="image/png" href="/images/cbm-logo32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/images/cbm-logo16.png" sizes="16x16">


		<!-- start Mixpanel -->
		<script type="text/javascript">
		(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
mixpanel.init("a00df3c695e5cc3b99b810766c4561b2");
		</script>
		<!-- end Mixpanel -->

		@yield('header')

	</head>
	<body>

	    <header class="row">
	        @include('includes.header')
	    </header>
		@yield('content')
		@include('includes.contact-modal')

		<script type="text/javascript">

		$(document).ready(function(){

		$('[data-toggle=dropdown]').each(function() {
 this.addEventListener('click', function() {}, false);
});

			$(window).scroll(function(){

					// Style Navbar Header
				    if($(".webpage-section").offset().top < $(document).scrollTop()){

				    	$( "#nav-header").css({
				    		'border-bottom':'1px solid #666',
				    		'color':'#b5b5b5',
				    		'background': 'rgba(51,51,51,'+Math.abs($(".webpage-section").offset().top/80)+')'
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

	</body>
</html>
