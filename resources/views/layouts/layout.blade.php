<!doctype html>

<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CBM Renovations</title>
		<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,200,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
		<script src="/jquery/dist/jquery.min.js"></script>
		<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		

	</head>
	<body>

	    <header class="row">
	        @include('includes.header')
	    </header>

	        @yield('content')

	</body>
</html>