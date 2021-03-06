<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	@yield('title')
	<link rel="shortcut icon" href="/assets/img/favicon3.ico">
	<link href="/assets/css/reset.css" rel="stylesheet">
	<link href="/assets/css/template.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/menu-m.css" rel="stylesheet">

	@yield('css-reference')
</head>
<body>
	<div class="background">
    	<div class="circle">
    		<img src="/assets/img/circle.png">
	  	</div>
  	</div>
  	<div class="title">
  		<a href="/?language=<?=$text['language']?>">
  			<img src="/assets/img/title.png" height="36" width="306">
		</a>
	</div>
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
		        	<a href="/?language=<?=$text['language']?>" class="hvr-underline-from-left <?php if ($action == 'home') echo "selected" ?>"><?=$text['home']?></a>
	        	</div>
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
  	<div id="menu-m">
  		<div class="dot"></div>
  		<div id="top-d" class="dot"></div>
  		<div class="dot"></div>
  		<div id="left-d" class="dot"></div>
  		<div class="dot"></div>
  		<div id="right-d" class="dot"></div>
  		<div class="dot"></div>
  		<div id="bottom-d" class="dot"></div>
  		<div class="dot"></div>
  		<div class="menu-t menu-text">MENU</div>
  		<div class="close-t menu-text">CLOSE</div>
  	</div>
	<div class="menu-m-content">
		<div class="menu-m-center">
			<div class="menu-m-cn-en">
			<?php 
				if ($text['language'] == 'ch') {
					echo '<a href="?language=en"><span class="">EN</span></a>|<span class="">中</span>';
				} else {
					echo '<span class="">EN</span>|<a href="?language=ch"><span class="">中</span></a>';
				}
			?>
			</div>
			<a href="/product?language=<?=$text['language']?>"><h2><?=$text['project']?></h2></a>
			<a href="/process?language=<?=$text['language']?>"><h2><?=$text['process']?></h2></a>
			<a href="/about?language=<?=$text['language']?>"><h2><?=$text['about']?></h2></a>
			<a href="/contact?language=<?=$text['language']?>"><h2><?=$text['contact_us']?></h2></a>
		</div>
		<div class="footer-m">
		    <div class="left_footer">
		    	© Gold Clip 2017 - All Rights Reserved, Made with <i class="fa fa-heart"></i> by Gold Clip
	    	</div>
	    	<div class="icon">
		      	<a href="javascript:$('.qrcode').fadeIn();"><img src="assets/img/wechat.svg"></a>
		    </div>
		    <div class="icon">
		      	<a href="mailto:admin@goldclip.com.au"><img src="/assets/img/mail.svg"></a>
		    </div>
		    <div class="icon">
		      	<a href="tel:0451919628"><img src="/assets/img/tel.svg" /></a>
		    </div>
		    <div class="icon">
		      	<a href="https://www.google.com.au/maps/place/Alcaston+House,+2+Collins+St,+Melbourne+VIC+3004/" target="_blank"><img src="/assets/img/add.svg" /></a>
		    </div> 
	  	</div>
	</div>

	<div id="prev-page" class="page-btn"><img src="/assets/img/prev-page.png"></div>
	<div id="next-page" class="page-btn"><img src="/assets/img/next-page.png"></div>

	<div class="body-content">
		@yield('body')
	</div>
	<div class="qrcode" onclick="$('.qrcode').fadeOut();">
		<img src="/assets/img/qrcode.png">
	</div>

	<!-- FOOTER -->
	<div class="footer">
	    <div class="left_footer">
	    	© Gold Clip 2017 - All Rights Reserved, Made with <i class="fa fa-heart"></i> by Gold Clip
    	</div>
    	<div class="icon">
	      	<a href="javascript:$('.qrcode').fadeIn();"><img src="assets/img/wechat.svg"></a>
	    </div>
	    <div class="icon">
	      	<a href="mailto:admin@goldclip.com.au"><img src="/assets/img/mail.svg"></a>
	    </div>
	    <div class="icon">
	      	<a href="tel:0451919628"><img src="/assets/img/tel.svg" /></a>
	    </div>
	    <div class="icon">
	      	<a href="https://www.google.com.au/maps/place/Alcaston+House,+2+Collins+St,+Melbourne+VIC+3004/" target="_blank"><img src="/assets/img/add.svg" /></a>
	    </div> 
  	</div>
	<!-- /FOOTER -->

	@yield('modal')

	<!-- Javascript files -->
	<script src="/assets/js/jquery-2.1.3.min.js"></script>
	<script>
		$("#menu-m").click(function(){
			$("#top-d").toggleClass('top-open');
			$("#bottom-d").toggleClass('bottom-open');
			$("#left-d").toggleClass('left-open');
			$("#right-d").toggleClass('right-open');
			$(".menu-t").toggleClass('menu-t-open');
			$(".close-t").toggleClass('close-t-open');
			$(".menu-m-content").toggleClass('menu-m-content-open');
		});
	</script>

	@yield('js-reference')

</body>
	@yield('js-function')
</html>