<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	@yield('title')
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/Cheee_heart.png">
<!-- 	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->

	<!-- Google Font (Raleway) -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,600,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Reset CSS -->
	<link href="/assets/css/reset.css" rel="stylesheet">
	
	<!-- Plugins -->

	@yield('css-reference')
	
	<!-- Template core CSS -->

	<!-- Angular Js -->
	<script src="/assets/js/angularJs/angular.min.js"></script>
	<script src="/assets/js/angularJs/angular-ui-router.min.js"></script>
	<script src="/assets/js/angularJs/angular-sanitize.min.js"></script>
	<script src="/assets/js/angularJs/me-lazyload.js"></script>

	<script>
		var app = angular.module('cheeeApp',['ngSanitize', 'ui.router','me-lazyload']);
	</script>
	
</head>
<body ng-app='cheeeApp'>

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- OVERLAY MENU -->
	<div id="overlay-menu" class="overlay-menu">

		<a href="#" id="overlay-menu-hide" class="navigation-hide"><i class="ion-close-round"></i></a>
		
		<div class="overlay-menu-inner">
			<nav class="overlay-menu-nav">
		
				<ul id="nav">
		
					<li><a href="/index">Home</a></li>
		
					<!-- <li><a href="/about">About</a></li> -->
		
					<li><a href="/portfolio">Portfolio</a></li>
		
					<!-- <li><a href="/service">Service</a></li> -->
		
					<li><a href="/contact">Contact</a></li>

					<li><a href="/login">Login</a></li>
		
				</ul>
		
			</nav>
		</div>
		
		<div class="overlay-navigation-footer">
		
			<div class="container">
		
				<div class="row">
		
					<div class="col-sm-12 text-center">
						<p class="copyright font-alt m-b-0">© 2016 CHEEE, All Rights Reserved.</p>
					</div>
		
				</div>
		
			</div>
		
		</div>

	</div>
	<!-- /OVERLAY MENU -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- NAVIGATION -->
		<nav class="navbar navbar-custom navbar-transparent navbar-light navbar-fixed-top">

			<div class="container">
			
				<div class="navbar-header">

					<a class="navbar-brand" href="/index">
						<!-- Logo -->
						<img src="/assets/img/Cheee-logo.png" width="100" alt="CHEEE | Graphic Design Melbourne & Web Design | Creative Agency">
					</a>
				</div>
			
				<!-- ICONS NAVBAR -->
				<ul id="icons-navbar" class="nav navbar-nav navbar-right">
					<li>
						<a href="#" id="toggle-menu" class="show-overlay" title="Menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</li>
				</ul>
				<!-- /ICONS NAVBAR -->
			
				<ul class="extra-navbar nav navbar-nav navbar-right">
					<li><a href="/index" title="Home">Home</a></li>
					<li><a href="/portfolio" title="Portfolio">Portfolio</a></li>
					<li><a href="/contact" title="Contact Us">Contact</a></li>
					<li><a href="/login" title="Login">Login</a></li>
				</ul>
			
			</div>

		</nav>
		<!-- /NAVIGATION -->

		<div class="body-content">
			@yield('body')
		</div>


		<!-- FOOTER -->
		<footer class="module bg-light">

			<div class="container">
			
				<!-- <div class="row">
			
					<div class="col-sm-12">
			
						<ul class="social-text-links font-alt text-center m-b-20">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google plus</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Linkedin</a></li>
							<li><a href="#">Dribbble</a></li>
						</ul>
			
					</div>
			
				</div> -->
			
				<div class="row">
			
					<div class="col-sm-12">
			
						<p class="copyright text-center m-b-0">© 2016 <a href="/index">CHEEE</a>, All Rights Reserved.</p>
			
					</div>
			
				</div>
			
			</div>

		</footer>
		<!-- /FOOTER -->

	</div>
	<!-- /WRAPPER -->

	@yield('modal')

	<!-- SCROLLTOP -->
	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>

	<!-- Javascript files -->
	<script src="/assets/js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>

	@yield('js-reference')
    <script src="/assets/js/app.js"></script>
	<script src="/assets/js/custom.js"></script>

</body>
	@yield('js-function')
</html>