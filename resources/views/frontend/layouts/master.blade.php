<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>{{ config('app.name') }}</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
			Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
	<!-- //meta-tags -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<!-- header -->
	@include('frontend.layouts.partials._header')
	<!-- //header -->
	<!-- banner -->
	@yield('banner')
	<!--//banner -->

	@yield('main-content')	

	<!-- footer -->
	@include('frontend.layouts.partials._footer')
	<!--/footer -->

	<!-- js files -->
	@include('frontend.layouts.partials._js_files')
	<!-- //js-files -->

</body>

</html>