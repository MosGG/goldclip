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
	<!-- <link rel="shortcut icon" href="assets/img/Cheee_heart.png"> -->
	<!-- <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->

	<!-- Google Font (Raleway) -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,600,700' rel='stylesheet' type='text/css'> -->

	<!-- Bootstrap core CSS -->
	<!-- <link href="/assets/css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- Reset CSS -->
	<link href="/assets/css/reset.css" rel="stylesheet">
	<link href="/assets/css/template.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">

	@yield('css-reference')
</head>
<body>

	<!-- PRELOADER -->
	<!-- <div class="page-loader">
		<div class="loader">Loading...</div>
	</div> -->
	<!-- /PRELOADER -->

	<!-- WRAPPER -->
	<div class="background">
    	<div class="circle">
    		<img src="/assets/img/circle.png">
	  	</div>
  	</div>
  	<div class="title"><img src="/assets/img/title.png" height="36" width="306"></div>
  	<div id="menu" class="nav">
		<?php 
			if ($text['language'] == 'ch') {
				echo '<a href="?language=en"><div class="en_cn border_right">EN</div></a><div class="brown en_cn border_left ">中</div>';
			} else {
				echo '<div class="brown en_cn border_right ">EN</div><a href="?language=ch"><div class="en_cn border_left">中</div></a>';
			}
		?>
	    <div class="blank">
	      	<div class="navbar">
		        <div class="nav_font">
		        	<a href="/product?language=<?=$text['language']?>" class="hvr-underline-from-left <?php if ($action == 'product') echo "selected" ?>"><?=$text['product']?></a>
	        	</div>
		        <div class="nav_font">
		        	<a href="/process?language=<?=$text['language']?>" class="hvr-underline-from-left <?php if ($action == 'process') echo "selected" ?>"><?=$text['process']?></a>
		        </div>
		        <div class="nav_font">
		        	<a href="/about?language=<?=$text['language']?>" class="hvr-underline-from-left <?php if ($action == 'about') echo "selected" ?>"><?=$text['about']?></a>
	        	</div>
	      	</div>
	    </div>
	    <div class="contact_us">
	      	<div class="nav_font2"><a href="/contact?language=<?=$text['language']?>" class="hvr-underline-from-left-white"><?=$text['contact_us']?></a></div>
	    </div>
  	</div>

  		

	<div class="body-content">
		@yield('body')
	</div>


	<!-- FOOTER -->
	<div class="footer">
	    <div class="left_footer">
	    	© Gold Clip 2017 - All Rights Reserved, Made with ❤ by Gold Clip
    	</div>
    	<div class="icon">
	      	<a href="/"><img src="/assets/img/Weixing.png" /></a>
	    </div>
	    <div class="icon">
	      	<a href="mailto:info@goldclip.com.au"><img src="/assets/img/Message.png"></a>
	    </div>
	    <div class="icon">
	      	<a href="tel:"><img src="/assets/img/Phone.png" /></a>
	    </div>
	    <div class="icon">
	      	<a href="http://"><img src="/assets/img/Shape.png" /></a>
	    </div>
	    
  	</div>
	<!-- /FOOTER -->

	@yield('modal')

	<!-- Javascript files -->
	<script src="/assets/js/jquery-2.1.3.min.js"></script>

	@yield('js-reference')

</body>
	@yield('js-function')
</html>