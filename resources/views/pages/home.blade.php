<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Home - Gold Clip</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="/assets/img/favicon3.ico">
<!-- 	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->


	<!-- Reset CSS -->
	<link href="/assets/css/reset.css" rel="stylesheet">
	<link href="/assets/css/goldclip.css" rel="stylesheet">
	<link href="/assets/css/home.css" rel="stylesheet">
	<link href="/assets/css/animate.css" rel="stylesheet">
	<link href="/assets/css/menu-m.css" rel="stylesheet">
	<link href="/assets/css/preload.css" rel="stylesheet">
	<link href="/assets/css/pace.css" rel="stylesheet">

	<script type="text/javascript" src="/assets/js/pace.js"></script>
</head>
<body>

	<div class="preload">
		<div id="pre-circle">
			<svg x="0px" y="0px"
     			viewBox="0 -1 100 100" enable-background="new 0 0 93.6 98.1" xml:space="preserve">
		        <path class="anime" stroke="#fff" d="M64.9,69.4c-0.4,0-0.8,0-1.2-0.1c-0.5-0.1-0.9-0.5-0.9-1.1c0.1-0.5,0.5-0.9,1.1-0.9
		            c5.1,0.5,13.9-2.5,20.3-9.2c4.1-4.3,8.7-11.6,7.2-22.6C87.7,8.6,69.8,3.6,52.7,2.1c-9.7-0.8-15.2,2-18,4.5
		            c-2.5,2.2-3.2,4.3-3.2,4.5c0,0.5-0.4,1-1,1c-0.5,0-1-0.4-1-1c0-1,1-3.4,3.6-5.8c3.1-2.9,9.1-6.2,19.8-5.3
		            c16.8,1.4,36.6,6.7,40.4,35.1c1.6,11.8-3.4,19.7-7.8,24.3C79.2,66.1,70.5,69.4,64.9,69.4"/>
		        <path class="anime" stroke="#fff" d="M43.2,69.4c-0.2,0-0.5-0.1-0.6-0.2c-0.3-0.2-6.3-5.5-6.6-13.3c-0.1-3.3,0.5-11,9.9-12.9
		            c9.1-1.8,9.8-5.8,9.8-9.4c0-0.8-0.3-4.7-5.8-5.1c-3.7-0.3-5.2,1.2-6.9,3c-2.2,2.3-4.7,4.8-11.6,3.7c-4.1-0.7-7.6-5.9-7.6-11.4
		            C23.7,12.4,36.7,12,36.8,12c0.5,0,1,0.4,1,1c0,0.5-0.4,1-1,1c-0.5,0-11.1,0.4-11.2,9.8c0,4.4,2.8,8.9,5.9,9.4
		            c5.9,0.9,7.9-1,9.9-3.1c1.8-1.9,3.9-4,8.5-3.6c3.4,0.3,5.2,1.7,6.1,2.8c1.4,1.7,1.5,3.6,1.5,4.3c0,4.5-1.4,9.4-11.4,11.3
		            c-7.5,1.5-8.4,7.4-8.3,10.8c0.3,7,5.9,11.9,5.9,11.9c0.4,0.4,0.5,1,0.1,1.4C43.8,69.3,43.5,69.4,43.2,69.4"/>
		        <path class="anime"  stroke="#fff" d="M18.6,41.1c-0.3,0-0.7-0.2-0.9-0.5c-0.1-0.1-2.1-3.5-1.7-7.7c0.5-5.3,4.6-8.1,4.8-8.2
		            c0.5-0.3,1.1-0.2,1.4,0.3c0.3,0.5,0.2,1.1-0.3,1.4c-0.1,0-3.5,2.4-3.9,6.7c-0.3,3.6,1.4,6.5,1.4,6.5c0.3,0.5,0.1,1.1-0.3,1.4
		            C19,41.1,18.8,41.1,18.6,41.1"/>
		        <path class="anime"  stroke="#fff" d="M17.1,46.1c-0.1,0-0.1,0-0.2,0c-0.1,0-2.3-0.5-3.8-2.6c-0.8-1.2-1-2.4-1.2-3.4c-0.2-1.1-0.3-1.9-1.1-2.7
		            c-1.3-1.3-2-1.2-3.3-0.5c-0.5,0.3-1.1,0.6-1.7,1c-1.8,1.1-2.9,1.7-3.7,1.8c-1.1,0.1-1.6-0.3-1.9-0.7c-0.7-0.9-0.1-2.1,0.1-2.5
		            c0.9-1.8,4-5.8,8.2-6.1c4.2-0.4,6.4,1.2,6.4,1.3c0.4,0.3,0.5,0.9,0.2,1.4c-0.3,0.4-0.9,0.5-1.4,0.2c0,0-1.7-1.2-5.1-0.9
		            c-3.3,0.3-5.9,3.6-6.6,5c-0.1,0.2-0.1,0.3-0.1,0.4c0.5-0.1,1.9-1,2.8-1.5c0.6-0.4,1.2-0.7,1.8-1c2.2-1.2,3.8-0.9,5.6,0.9
		            c1.3,1.2,1.5,2.6,1.7,3.8c0.1,0.9,0.3,1.7,0.8,2.5c1,1.4,2.6,1.8,2.6,1.8c0.5,0.1,0.9,0.7,0.7,1.2C17.9,45.8,17.5,46.1,17.1,46.1"
		            />
		        <path class="anime" stroke="#fff" d="M27.2,65.4c-3.2,0-5.2-0.7-6.1-1.1c-2.2-1-2.7-3.1-2.9-4.4c-0.4-2.1,0.4-3.9,0.5-3.9
		            c0.3-0.5,0.8-0.7,1.3-0.4c0.5,0.2,0.7,0.8,0.4,1.3c0,0-0.6,1.2-0.3,2.6c0.3,1.3,0.6,2.4,1.8,3c0.7,0.3,3.5,1.4,8.4,0.7
		            c3-0.4,4.2-1.6,4.2-1.6c0.4-0.4,1-0.4,1.4-0.1c0.4,0.4,0.4,1,0.1,1.4c-0.2,0.2-1.6,1.7-5.4,2.3C29.4,65.3,28.3,65.4,27.2,65.4"/>
		        <path class="anime" stroke="#fff" d="M25.1,61.3c-1.9,0-2.8-0.4-3-0.5c-0.5-0.3-0.6-0.9-0.4-1.4c0.3-0.5,0.9-0.6,1.3-0.4c0.1,0,1.4,0.6,5.1,0
		            c0.5-0.1,1.1,0.3,1.1,0.8c0.1,0.5-0.3,1.1-0.8,1.1C27.2,61.3,26,61.3,25.1,61.3"/>
		        <path class="anime" stroke="#fff" d="M31.5,50.7c0,0,0.5-0.6,1.3-0.2c0.7,0.5,0.5,1.1,0.5,1.1c-0.1,0.2-0.7,1.2-2.8,2.1
		            c-0.5,0.2-0.9,0.4-1.2,0.5c-0.1,0-0.2,0.1-0.2,0.1c0,0.4-0.3,0.8-0.7,0.9c-0.1,0-0.2,0.1-0.3,0.1c-0.4,0-0.8-0.3-0.9-0.7
		            c-0.5-1.5,0.7-1.9,1.5-2.2c0.3-0.1,0.7-0.2,1.1-0.4C31.1,51.3,31.5,50.7,31.5,50.7"/>
		        <path class="anime" stroke="#fff" d="M20.1,53.9c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-1.4-0.6-2-2.1c-0.4-1.1,0.4-3.4,3.3-9.6c0.9-2,2.1-4.5,2.1-5
		            c0-0.5-0.1-0.9-0.5-1.4c-0.3-0.6-0.7-1.3-0.6-2.2c0.1-1.3,0.4-1.9,0.6-2.1c0,0,0.7-0.6,1.3-0.1c0.5,0.5,0.3,1.3,0.3,1.3
		            s0,0,0.1-0.1c0,0-0.2,0.3-0.2,1.2c0,0.3,0.1,0.5,0.4,1c0.3,0.6,0.8,1.4,0.7,2.6c-0.1,0.8-0.8,2.5-2.3,5.6
		            c-1.2,2.7-3.3,7.1-3.2,8.1c0.3,0.7,0.8,1,0.8,1c0.5,0.2,0.7,0.8,0.5,1.3C20.8,53.7,20.4,53.9,20.1,53.9"/>
		        <path class="anime" stroke="#fff" d="M43.8,98c-1.6,0.1-3.2,0.1-4.9,0c-7.4-0.4-12.8-3.2-16-8.2c-2.8-4.3-3.4-9.4-3.4-12.9
		            c0-7.3,1.9-10.1,1.9-10.2c0.3-0.5,0.9-0.6,1.4-0.3c0.4,0.3,0.6,0.9,0.3,1.4c0,0.1-1.6,2.6-1.6,9.1c0,6.8,2.3,18.3,17.5,19.2
		            c10.2,0.6,18.4-2,24.3-7.8c7.7-7.5,9.2-18,9.1-21.1c0-0.5,0.4-1,1-1c0.5,0,1,0.4,1,1c0.1,3.6-1.5,14.6-9.7,22.6
		            C59.3,94.8,52.3,97.6,43.8,98"/>
		        <path class="anime" stroke="#fff" d="M37.3,83c-5.7,0-9.5-3-11.3-6.3c-2.6-4.8-0.6-9.5-0.5-9.7c0.2-0.5,0.8-0.7,1.3-0.5
		            c0.5,0.2,0.7,0.8,0.5,1.3c0,0.1-1.7,4.1,0.4,8c2,3.7,7.1,7,15.2,4.2c4.9-1.7,11.8-7.4,15.1-16.1c0.2-0.5,0.8-0.8,1.3-0.6
		            c0.5,0.2,0.8,0.8,0.6,1.3c-2.5,6.5-8.7,14.7-16.3,17.3C41.3,82.6,39.2,83,37.3,83"/>
		        <path class="anime" stroke="#fff" d="M47.7,39.7c-2.8,0-4.5-1.9-4.6-2c-0.1-0.1-0.2-0.3-0.2-0.5c0-0.1-0.5-3.3,4.3-5.1c3.2-1.2,5.6,0.6,6.4,1.7
		            c0.1,0.2,0.2,0.4,0.2,0.6c0,1.3-0.9,4-4.1,5C49,39.6,48.3,39.7,47.7,39.7 M44.9,36.6c0.6,0.5,2.1,1.5,4.2,0.8
		            c2-0.6,2.5-2.1,2.6-2.7c-0.5-0.5-1.8-1.5-3.8-0.8C45.5,34.9,45,36.1,44.9,36.6"/>
		        <path class="anime" stroke="#fff" d="M49.7,33.3c0,0-1-0.5-1.9-0.1c-1.3,0.6-1,1.7-1,1.7s-0.1,1.6,1.9,1.1C50.8,35.5,49.7,33.3,49.7,33.3"/>
		        <path class="anime" stroke="#fff" d="M84.5,31.8C79.4,15.7,64.8,15,63.2,15c-3.1-0.1-5.9,1.6-7.5,4.5c-2.3,4,0.1,7.6,0.2,7.7
		            c0.1,0.2,0.3,0.3,0.6,0.4c0.3,0.1,0.8,0.2,1.2,0.2c1.5,0.2,3.9,0.6,6.7,2.1c1.2,0.6,2.2,1.3,3.1,1.9c-4,1.8-7.3,4.7-9.2,6.6
		            c-3.5,3.6-6.1,10.8-4.3,16.6c1.1,3.7,3.7,6,7.6,6.9c1.4,0.3,2.9,0.5,4.3,0.5c5.3,0,10.2-2.2,13.9-6.2C85.4,50,87.3,40.4,84.5,31.8
		             M78.3,54.8C74,59.5,68.2,61.4,62,60c-3.2-0.7-5.2-2.5-6.1-5.5c-1.5-5,0.8-11.5,3.9-14.6c0.1-0.1,0.2-0.2,0.3-0.3
		            c2.7-2.8,7.9-7.1,14.4-7.3c0.3,0,0.5,0,0.6,0.1c0,0.1-0.2,0.3-0.4,0.4c-0.1,0.1-0.2,0.1-0.4,0.2c-5.9,3.3-9.6,6-10.9,7.8
		            c-2.4,3.2-3.3,6.8-2.3,9.5c0.7,1.9,2.2,3.2,4.4,3.6c2.8,0.6,5.2,0,7.1-1.6c3.1-2.8,3.7-7.9,3.5-10c-0.1-0.8-0.5-3.5-2.4-6.6
		            c0.5-0.3,1-0.6,1.6-0.9c0.2-0.1,0.3-0.2,0.4-0.3c1-0.6,1.6-1.8,1.3-2.7c-0.1-0.5-0.6-1.5-2.6-1.4c-1.6,0-3.2,0.3-4.7,0.8
		            c-1.2-1-2.7-2-4.4-2.9c-3.1-1.6-5.7-2-7.3-2.3c-0.2,0-0.5-0.1-0.7-0.1c-0.4-0.8-1.2-3,0.1-5.3c1.3-2.2,3.4-3.5,5.7-3.5
		            c1.5,0,14.8,0.7,19.5,15.4C85.2,40.3,83.5,49.1,78.3,54.8 M71.9,36.5c1.7,2.7,2,5.1,2.1,5.8c0.1,1.4-0.3,6-2.9,8.3
		            c-1.4,1.2-3.2,1.6-5.3,1.2c-1.5-0.3-2.5-1.1-2.9-2.3c-0.8-2.1,0.1-5.2,2.2-7.8C65.7,40.8,67.5,39.2,71.9,36.5"/>
			</svg>
		</div>
		<svg id="goldclip-svg" width="383px" height="73px" viewBox="-1 153 385 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

		    <g fill-rule="evenodd" transform="translate(0.000000, 156.000000)">
		        
		        <path class="anime2" stroke-width="1"  stroke="#8A6D4D" d="M41.3437,20.6976 L41.3437,22.3916 C41.3437,34.3656 33.2107,43.1196 20.9547,43.1196 C8.5857,43.1196 -0.0003,34.1386 -0.0003,21.8836 C-0.0003,9.9666 8.9247,0.6466 21.2937,0.6466 C29.4827,0.6466 36.1467,4.7136 39.7627,10.9266 L32.3067,15.6716 C30.2737,11.8866 26.2637,9.3446 21.2937,9.3446 C14.0087,9.3446 8.8117,14.8226 8.8117,21.8836 C8.8117,29.3946 13.6117,34.7036 21.0677,34.7036 C26.0937,34.7036 29.7087,32.4446 31.5737,28.8306 L18.3007,28.8306 L18.3007,20.6976 L41.3437,20.6976 Z" id="Fill-1" mask="url(#mask-2)"></path>
		        
		        <path  class="anime2" stroke-width="1"  stroke="#8A6D4D" d="M76.074,34.7752 C83.359,34.7752 88.556,29.2962 88.556,22.2362 C88.556,15.1762 83.359,9.6992 76.074,9.6992 C68.789,9.6992 63.592,15.1762 63.592,22.2362 C63.592,29.2962 68.789,34.7752 76.074,34.7752 M76.074,1.0002 C88.443,1.0002 97.368,10.3202 97.368,22.2362 C97.368,34.1542 88.443,43.4722 76.074,43.4722 C63.706,43.4722 54.781,34.1542 54.781,22.2362 C54.781,10.3202 63.706,1.0002 76.074,1.0002" ></path>
		        <polygon class="anime2" stroke-width="1"  stroke="#8A6D4D"  points="112.6123 1.6221 121.4233 1.6221 121.4233 34.2661 144.9183 34.2661 144.9183 42.8521 112.6123 42.8521"></polygon>
		        <path class="anime2" stroke-width="1"  stroke="#8A6D4D" d="M168.241,34.2667 L173.438,34.2667 C180.384,34.2667 185.299,29.1277 185.299,22.2927 C185.299,15.4587 180.384,10.2067 173.438,10.2067 L168.241,10.2067 L168.241,34.2667 Z M194.108,22.2927 C194.108,33.9847 185.467,42.8517 173.493,42.8517 L159.431,42.8517 L159.431,1.6227 L173.493,1.6227 C185.467,1.6227 194.108,10.6027 194.108,22.2927 L194.108,22.2927 Z" ></path>
		        <path class="anime2" stroke-width="1"  stroke="#8A6D4D" d="M242.1118,1 C249.6228,1 255.7238,4.503 259.3378,9.981 L252.1648,15.29 C250.1328,11.844 246.4608,9.698 242.0548,9.698 C234.9378,9.698 229.8558,15.177 229.8558,22.237 C229.8558,29.24 234.9378,34.775 242.0548,34.775 C246.4608,34.775 250.1328,32.572 252.1648,29.184 L259.3378,34.492 C255.7238,39.972 249.6228,43.473 242.1118,43.473 C229.8558,43.473 221.0448,34.21 221.0448,22.237 C221.0448,10.263 229.8558,1 242.1118,1" ></path>
		        <polygon class="anime2" stroke-width="1"  stroke="#8A6D4D" points="273.3973 1.6221 282.2083 1.6221 282.2083 34.2661 305.7043 34.2661 305.7043 42.8521 273.3973 42.8521"></polygon>
		       
		        <polygon class="anime2" stroke-width="1"  stroke="#8A6D4D"  mask="url(#mask-4)" points="320.215 42.8525 329.026 42.8525 329.026 1.6225 320.215 1.6225"></polygon>
		        <path class="anime2" stroke-width="1"  stroke="#8A6D4D" d="M374.1028,16.6456 C374.1028,12.8606 371.5048,10.2076 367.6648,10.2076 L358.5148,10.2076 L358.5148,23.0836 L367.6648,23.0836 C371.5048,23.0836 374.1028,20.4296 374.1028,16.6456 M382.9138,16.6456 C382.9138,25.3996 376.7018,31.6696 367.4938,31.6696 L358.5148,31.6696 L358.5148,42.8516 L349.7028,42.8516 L349.7028,1.6216 L367.4938,1.6216 C376.7018,1.6216 382.9138,7.8906 382.9138,16.6456"></path>
		        
		    </g>
		</svg>
		<h2 id="typewriter" class="pre-des">PREMIUM AUSTRALIA WOOL PRODUCT</h2>
		<div class="background"></div>
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
	      		<div class="nav_font"><a href="/?language=<?=$text['language']?>" class="hvr-underline-from-left selected"><?=$text['home']?></a></div>
		        <div class="nav_font"><a href="/product?language=<?=$text['language']?>" class="hvr-underline-from-left"><?=$text['product']?></a></div>
		        <div class="nav_font"><a href="/process?language=<?=$text['language']?>" class="hvr-underline-from-left"><?=$text['process']?></a></div>
		        <div class="nav_font"><a href="/about?language=<?=$text['language']?>" class="hvr-underline-from-left"><?=$text['about']?></a></div>
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
  		<div class="menu-t menu-text"><?=$text['menu']?></div>
  		<div class="close-t menu-text"><?=$text['close']?></div>
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
			<a href="/product?language=<?=$text['language']?>"><h2><?=$text['product']?></h2></a>
			<a href="/process?language=<?=$text['language']?>"><h2><?=$text['process']?></h2></a>
			<a href="/about?language=<?=$text['language']?>"><h2><?=$text['about']?></h2></a>
			<a href="/contact?language=<?=$text['language']?>"><h2><?=$text['contact_us']?></h2></a>
		</div>
	</div>


	<div class="first-screen">
		<img class="logo" src="/assets/img/goldclip_logo.png">
		<video id="video-1" muted loop playsinline autoplay webkit-playsinline src="/assets/video/video1-480.mov"></video>
		<div class="discover-goldclip">
			<h2 class="lyon-bold xl-text white wow fadeInUp"><?=$text['home-screen-1-1']?></h2>
			<h2 class="lyon-bold xl-text white wow fadeInUp" data-wow-delay="0.5s"><?=$text['home-screen-1-2']?></h2>
			<h2 class="lyon-bold xl-text white wow fadeInUp" data-wow-delay="1s"><?=$text['home-screen-1-3']?></h2>
			</h2>
			<img id="arrowdown" class="wow fadeInUp" data-wow-delay="1.5s" src="/assets/img/ArrowDown.png">
		</div>
		<div id="horizontal-1" class="fg-regular parallax">PURE WOOL</div>
		<div id="horizontal-2" class="fg-regular parallax"><div>PREMIER QUALITY</div></div>
	</div>
	<div class="second-screen">
		<div class="section-container">
			<div class="sections">
				<div class="toptext">
					<div class="section-number lyon-bold wow fadeInLeft">
						01
					</div>
					<div class="section-desc">
						<h2 class="section-title wow slideInDown"><?=$text['lovefamily']?></h2>
						<p class="p-left wow fadeIn" data-wow-delay="0.5s"><?=$text['home-1']?></p>
						<p class="p-right wow fadeIn" data-wow-delay="0.5s"><?=$text['home-2']?></p>
					</div>
				</div>
				<div class="bottomvideo wow fadeIn">
					<video id="video-2" muted loop playsinline autoplay webkit-playsinline src="/assets/video/video2-480.mov"></video>
				</div>
			</div>
			<div class="sections">
				<div class="toptext">
					<div class="section-number lyon-bold wow fadeInLeft">
						02
					</div>
					<div class="section-desc">
						<h2 class="section-title wow slideInDown"><?=$text['loveforever']?></h2>
						<p class="p-left wow fadeIn" data-wow-delay="0.5s"><?=$text['wool_you_can_trust']?></p>
						<p class="p-right wow fadeIn" data-wow-delay="0.5s"><?=$text['loveforever-des-2']?></p>
					</div>
				</div>
				<div class="bottomvideo wow fadeIn">
					<video id="video-3" muted loop playsinline autoplay webkit-playsinline src="/assets/video/video3-480.mov"></video>
				</div>
			</div>
			<div class="news">
				<img class="news-image" src="/assets/img/news-1.png">
				<div class="news-desc">
					<h2 class="wow fadeIn" data-wow-delay="0.5s"><?=$text['lovesleep']?></h2>
					<p class="wow fadeIn" data-wow-delay="0.6s"><?=$text['home-3']?></p>
					<a href="/product?language=<?=$text['language']?>"><button class="home-button wow fadeIn" data-wow-delay="0.7s"><?=$text['moreinfo']?></button></a>
				</div>
			</div>
			<div class="news">
				<img class="news-image" src="/assets/img/news-2.png">
				<div class="news-desc">
					<h2 class="wow fadeIn" data-wow-delay="0.5s"><?=$text['lovewinter']?></h2>
					<p class="wow fadeIn" data-wow-delay="0.6s"><?=$text['home-4']?></p>
					<a href="/contact?language=<?=$text['language']?>"><button class="home-button wow fadeIn" data-wow-delay="0.7s"><?=$text['contact_us']?></button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="home-footer">
		<div class="home-footer-logo">
			<img class="wow pulse" src="/assets/img/goldclip_logo.png">
		</div>
		<div class="home-footer-links fg-regular wow fadeIn">
			<a href="/about?language=<?=$text['language']?>"><?=$text['about']?></a> |
			<a href="/product?language=<?=$text['language']?>"><?=$text['product']?></a> |
			<a href="/process?language=<?=$text['language']?>"><?=$text['process']?></a> 
			<!-- |
			<a href="/privacy"><?=$text['privacy']?></a> -->
		</div>
		<div class="home-footer-cheee fg-regular wow fadeIn" data-wow-delay="0.3s">
			© Gold Clip 2017 - All Rights Reserved<br>Made with <i class="fa fa-heart"></i> by Gold Clip
		</div>
		<div class="home-footer-icons">
			<a href="https://www.google.com.au/maps/place/Alcaston+House,+2+Collins+St,+Melbourne+VIC+3004/" target="_blank"><img class="wow fadeIn" data-wow-delay="0.5s" src="assets/img/address.png"></a>
			<a href="tel:0451919628"><img class="wow fadeIn" data-wow-delay="0.7s" src="assets/img/tel.png"></a>
			<a href="mailto:admin@goldclip.com.au"><img class="wow fadeIn" data-wow-delay="0.9s" src="assets/img/email.png"></a>
			<a href="javascript:$('.qrcode').fadeIn();"><img class="wow fadeIn" data-wow-delay="1.1s" src="assets/img/wechat.png"></a>
		</div>
	</div>
	<div class="qrcode" onclick="$('.qrcode').fadeOut();">
		<img src="/assets/img/qrcode.png">
	</div>
</body>
<script src="/assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/assets/js/home.js"></script>
<script type="text/javascript" src="/assets/js/wow.min.js"></script>
<script type="text/javascript">
		var anim = document.getElementById("typewriter");
		var flag = false;
		anim.addEventListener("animationend", function(){
			flag = true;
		}, false);

		$(window).load(function() {
			var timeid = setInterval(function(){
				if (flag) {
					$(".preload").fadeOut();
					clearInterval(timeid);
				}
			}, 1500);
		});

	new WOW().init();

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
</html>
