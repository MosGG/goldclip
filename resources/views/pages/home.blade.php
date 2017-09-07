<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Gold Clip - Home</title>
	
	<!-- Favicons -->
	<!-- <link rel="shortcut icon" href="assets/img/Cheee_heart.png"> -->
	<!-- <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->


	<!-- Reset CSS -->
	<link href="/assets/css/reset.css" rel="stylesheet">
	<link href="/assets/css/goldclip.css" rel="stylesheet">
	<link href="/assets/css/home.css" rel="stylesheet">
	<link href="/assets/css/animate.css" rel="stylesheet">
	<link href="/assets/css/menu-m.css" rel="stylesheet">
</head>
<body>

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
			<a href="/product?language=<?=$text['language']?>"><h2>Product</h2></a>
			<a href="/process?language=<?=$text['language']?>"><h2>Process</h2></a>
			<a href="/about?language=<?=$text['language']?>"><h2>About Us</h2></a>
			<a href="/contact?language=<?=$text['language']?>"><h2>Contact Us</h2></a>
		</div>
	</div>


	<div class="first-screen">
		<img class="logo" src="/assets/img/goldclip_logo.png">
		<video id="video-1" muted loop playsinline autoplay webkit-playsinline src="/assets/video/video1-480.mov"></video>
		<div class="discover-goldclip">
			<h2 class="lyon-bold xl-text white wow fadeInUp">SCROLL,</h2>
			<h2 class="lyon-bold xl-text white wow fadeInUp" data-wow-delay="0.5s">PARTICIPATE &</h2>
			<h2 class="lyon-bold xl-text white wow fadeInUp" data-wow-delay="1s">DISCOVER GOLD CLIP</h2>
			</h2>
			<img class="wow fadeInUp" data-wow-delay="1.5s" src="/assets/img/ArrowDown.png">
		</div>
		<div id="horizontal-1" class="fg-regular parallax">PURE WOOL</div>
		<div id="horizontal-2" class="fg-regular parallax">PREMIER QUALITY</div>
	</div>
	<div class="second-screen">
		<div class="section-container">
			<div class="sections">
				<div class="toptext">
					<div class="section-number lyon-bold wow fadeInLeft">
						01
					</div>
					<div class="section-desc">
						<h2 class="section-title wow slideInDown">一张能承载起整家人温暖的好被子</h2>
						<p class="p-left wow fadeIn" data-wow-delay="0.5s">澳大利亚得天独厚的气候环境孕育出世界最好的羊毛，再加上澳洲成熟的碳化技术，便使澳洲羊毛出口量世界第一，羊毛被也成为居家生活的必备品。 Gold Clip Wool羊毛源自维多利亚羊毛处理机构</p>
						<p class="p-right wow fadeIn" data-wow-delay="0.5s">Victoria Wool Processor澳洲仅有的三家羊毛处理和供应商中最大的一家，羊毛来源经过VWP和羊毛牧场双重认证，品质保证的农场-Shellal。</p>
					</div>
				</div>
				<div class="bottomvideo wow fadeIn">
					<video id="video-2" muted loop playsinline webkit-playsinline src="/assets/video/video2-480.mov"></video>
				</div>
			</div>
			<div class="sections">
				<div class="toptext">
					<div class="section-number lyon-bold wow fadeInLeft">
						02
					</div>
					<div class="section-desc">
						<h2 class="section-title wow slideInDown">爱你一“被”子</h2>
						<p class="p-left wow fadeIn" data-wow-delay="0.5s">Gold Clip原材料均采集于澳洲本地由Pool Dorset 协会认证的牧羊场，这些牧羊场的每一只羊均受澳洲有关动物身份识别及管理部门Shearwell Australia 的监管 ；羊毛经澳洲羊毛协会Woolmark 认证。</p>
						<p class="p-right wow fadeIn" data-wow-delay="0.5s">优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，然后加上高支纱、高密度全棉布料制成。天然、舒适、环保。</p>
					</div>
				</div>
				<div class="bottomvideo wow fadeIn">
					<video id="video-3" muted loop playsinline webkit-playsinline src="/assets/video/video3-480.mov"></video>
				</div>
			</div>
			<div class="news">
				<img class="news-image" src="/assets/img/news-1.png">
				<div class="news-desc">
					<h2 class="wow fadeIn" data-wow-delay="0.5s">从此爱上床</h2>
					<p class="wow fadeIn" data-wow-delay="0.5s">Gold Clip一款土生土长于澳大利亚维多利亚州的顶级羊毛被，他选择澳大利亚最好的羊毛和材料，澳洲制造认证，国际羊毛局纯羊毛认证，全球无害物质认证，确保每件产品都按照最高的标准进行打造。</p>
					<a href="/product?language=<?=$text['language']?>"><button class="home-button wow flipInY" data-wow-delay="0.5s">更多信息</button></a>
				</div>
			</div>
			<div class="news">
				<img class="news-image" src="/assets/img/news-2.png">
				<div class="news-desc">
					<h2 class="wow fadeIn" data-wow-delay="0.5s">温暖“被”至丨御寒大作战</h2>
					<p class="wow fadeIn" data-wow-delay="0.5s">Gold Clip顶级羊毛被现已上市，它将成为你生活起居，过节送礼的首选佳品，你还在等待什么，现在就联系我们吧。</p>
					<a href="/contact?language=<?=$text['language']?>"><button class="home-button wow flipInY" data-wow-delay="0.5s">联系我们</button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="home-footer">
		<div class="home-footer-logo">
			<img class="wow pulse" src="/assets/img/goldclip_logo.png">
		</div>
		<div class="home-footer-links fg-regular wow fadeIn">
			<a href="/about?language=<?=$text['language']?>">ABOUT US</a> |
			<a href="/product?language=<?=$text['language']?>">PRODUCT</a> |
			<a href="/process?language=<?=$text['language']?>">PROCESS</a> |
			<a href="/privacy">PRIVACY POLICY</a>
		</div>
		<div class="home-footer-cheee fg-regular wow fadeIn" data-wow-delay="0.3s">
			© Gold Clip 2017 - All Rights Reserved<br>Made with ❤ by Gold Clip
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