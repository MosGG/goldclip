@extends('layouts.pageLayout')

@section('title')<title>About Us - GoldClip</title>@stop

@section('css-reference')
	<link href="/assets/css/about.css" rel="stylesheet">
	<link href="/assets/js/slick/slick.css" rel="stylesheet">
@stop


@section('body')
<div class="uppertitle">LOVE WOOL</div>
<div class="lowertitle">GOLD CLIP</div>
<div></div>
<section class="container">
    <div id="carousel" class="panels-backface-invisible">
	      	<div class="num_text"><div class="number">01</div><div class="text"><?=$text['about-t-1']?></div></div>
	  		<div class="num_text"><div class="number">02</div><div class="text"><?=$text['about-t-2']?></div></div>
			<div class="num_text"><div class="number">03</div><div class="text"><?=$text['about-t-3']?></div></div>
			<div class="num_text"><div class="number">04</div><div class="text"><?=$text['about-t-4']?></div></div>
			<div class="num_text"><div class="number">05</div><div class="text"><?=$text['about-t-5']?></div></div>
			<div class="num_text"><div class="number">06</div><div class="text"><?=$text['about-t-6']?></div></div>
    </div>
  </section>

<section class="container2">
	<div id="carousel2" class="panels-backface-invisible">
		<div class="ppt">
			<p class="detail-left"><?=$text['about-d-1']?></p>
			<div class="detail-right">
				<h2>“</h2>
				<label class="detail-right-sologan">
				<?=$text['detail-sologan']?>
				</label>
				<!-- <h2>”</h2> -->
				<br><br>
				<span>Gold Clip</span>
			</div>
		</div>
		<div class="ppt">
			<p class="detail-left"><?=$text['about-d-2']?></p>
			<div class="detail-right">
				<img src="/assets/img/about-2.png">
			</div>
		</div>
		<div class="ppt">
			<p class="detail-left"><?=$text['about-d-3']?></p>
			<div class="detail-right">
				<img src="/assets/img/about-3.png">
				<p><?=$text['about-d-3-2']?></p>
			</div>
		</div>
		<div class="ppt">
			<div class="detail-left">
				<p><?=$text['about-d-4']?></p>
				<?php if ($text['language'] != 'en'){ ?>
				<div style="text-align: center;padding-top: 10px;"><img src="/assets/img/about-4-2.png"></span></div>
				<?php }?>
			</div>
			<div class="detail-right">
				<img src="/assets/img/about-4.png">
				<p><?=$text['about-d-4-2']?></p>
			</div>
		</div>
		<div class="ppt">
			<table class="t5-table">
				<tr>
				<td class="t5-title"><?=$text['about-5-t-1']?></td>
				<td class="t5-slash"><img src="/assets/img/slash.png"></td>
				<td class="t5-des"><?=$text['about-5-d-1']?></td>
				</tr>
				<tr>
				<td class="t5-title"><?=$text['about-5-t-2']?></td>
				<td class="t5-slash"><img src="/assets/img/slash.png"></td>
				<td class="t5-des"><?=$text['about-5-d-2']?></td>
				</tr>
				<tr>
				<td class="t5-title"><?=$text['about-5-t-3']?></td>
				<td class="t5-slash"><img src="/assets/img/slash.png"></td>
				<td class="t5-des"><?=$text['about-5-d-3']?></td>
				</tr>
				<tr>
				<td class="t5-title"><?=$text['about-5-t-4']?></td>
				<td class="t5-slash"><img src="/assets/img/slash.png"></td>
				<td class="t5-des"><?=$text['about-5-d-4']?></td>
				</tr>
				<tr>
				<td class="t5-title"><?=$text['about-5-t-5']?></td>
				<td class="t5-slash"><img src="/assets/img/slash.png"></td>
				<td class="t5-des"><?=$text['about-5-d-5']?></td>
				</tr>
			</table>
			<div class="detail-right">
				<img src="<?=$text['about-5-p']?>">
			</div>
			
		</div>
		<div class="ppt">
			<div class="detail-left">
				<p><?=$text['about-6-d']?></p>
				<div style="text-align: center;">
					<img class="certify-img" src="/assets/img/about-6-2.png">
					<img class="certify-img" style="padding: 0 20px;" src="/assets/img/about-6-3.png">
					<img class="certify-img" src="/assets/img/about-6-4.png">
				</div>
			</div>
			<div class="detail-right">
				<img src="/assets/img/about-6.png">
				<p><?=$text['about-6-d-2']?></p>
			</div>
		</div>
	</div>
</section>

<div class="left-block">
<div id="left-block-top" class="l-page-btn"></div>
<div id="left-block-bottom" class="l-page-btn"></div>
<section class="container3">
	<div id="carousel3">
		<figure class="current-tab" data-up="LOVE WOOL" data-low="GOLD CLIP"><i class="fa fa-circle" aria-hidden="true"></i>01 <?=$text['etymology']?></figure>
		<figure data-up="SLEEP WELL" data-low="LUXURIOUS EXPERIENCE"><i class="fa fa-circle" aria-hidden="true"></i>02 <?=$text['about-t-2']?></figure>
		<figure data-up="PURE WOOL" data-low="AUSTRALIAN"><i class="fa fa-circle" aria-hidden="true"></i>03 <?=$text['about-t-3']?></figure>
		<figure data-up="TOP QULITY" data-low="REASONABLE MATERIAL"><i class="fa fa-circle" aria-hidden="true"></i>04 <?=$text['dorset']?></figure>
		<figure data-up="HEALTHY" data-low="BREATHABLE"><i class="fa fa-circle" aria-hidden="true"></i>05 <?=$text['about-t-5']?></figure>
		<figure data-up="REASONABLE MATERIAL" data-low="HISTORICAL"><i class="fa fa-circle" aria-hidden="true"></i>06 <?=$text['about-t-6']?></figure>
		<figure data-up="LOVE WOOL" data-low="GOLD CLIP"><i class="fa fa-circle" aria-hidden="true"></i>01 <?=$text['etymology']?></figure>
		<figure data-up="SLEEP WELL" data-low="LUXURIOUS EXPERIENCE"><i class="fa fa-circle" aria-hidden="true"></i>02 <?=$text['about-t-2']?></figure>
		<figure data-up="PURE WOOL" data-low="AUSTRALIAN"><i class="fa fa-circle" aria-hidden="true"></i>03 <?=$text['about-t-3']?></figure>
		<figure data-up="TOP QULITY" data-low="REASONABLE MATERIAL"><i class="fa fa-circle" aria-hidden="true"></i>04 <?=$text['dorset']?></figure>
		<figure data-up="HEALTHY" data-low="BREATHABLE"><i class="fa fa-circle" aria-hidden="true"></i>05 <?=$text['about-t-5']?></figure>
		<figure data-up="REASONABLE MATERIAL" data-low="HISTORICAL"><i class="fa fa-circle" aria-hidden="true"></i>06 <?=$text['about-t-6']?></figure>
		<figure data-up="LOVE WOOL" data-low="GOLD CLIP"><i class="fa fa-circle" aria-hidden="true"></i>01 <?=$text['etymology']?></figure>
		<figure data-up="SLEEP WELL" data-low="LUXURIOUS EXPERIENCE"><i class="fa fa-circle" aria-hidden="true"></i>02 <?=$text['about-t-2']?></figure>
		<figure data-up="PURE WOOL" data-low="AUSTRALIAN"><i class="fa fa-circle" aria-hidden="true"></i>03 <?=$text['about-t-3']?></figure>
		<figure data-up="TOP QULITY" data-low="REASONABLE MATERIAL"><i class="fa fa-circle" aria-hidden="true"></i>04 <?=$text['dorset']?></figure>
		<figure data-up="HEALTHY" data-low="BREATHABLE"><i class="fa fa-circle" aria-hidden="true"></i>05 <?=$text['about-t-5']?></figure>
		<figure data-up="REASONABLE MATERIAL" data-low="HISTORICAL"><i class="fa fa-circle" aria-hidden="true"></i>06 <?=$text['about-t-6']?></figure>
		<figure data-up="LOVE WOOL" data-low="GOLD CLIP"><i class="fa fa-circle" aria-hidden="true"></i>01 <?=$text['etymology']?></figure>
		<figure data-up="SLEEP WELL" data-low="LUXURIOUS EXPERIENCE"><i class="fa fa-circle" aria-hidden="true"></i>02 <?=$text['about-t-2']?></figure>
		<figure data-up="PURE WOOL" data-low="AUSTRALIAN"><i class="fa fa-circle" aria-hidden="true"></i>03 <?=$text['about-t-3']?></figure>
		<figure data-up="TOP QULITY" data-low="REASONABLE MATERIAL"><i class="fa fa-circle" aria-hidden="true"></i>04 <?=$text['dorset']?></figure>
		<figure data-up="HEALTHY" data-low="BREATHABLE"><i class="fa fa-circle" aria-hidden="true"></i>05 <?=$text['about-t-5']?></figure>
		<figure data-up="REASONABLE MATERIAL" data-low="HISTORICAL"><i class="fa fa-circle" aria-hidden="true"></i>06 <?=$text['about-t-6']?></figure>
	</div>
</section>
</div>
@stop

@section('js-reference')
<script src="/assets/js/underscore-min.js"></script>
<script src='/assets/js/slick/slick.js'></script>
@stop

@section('js-function')
<script>
	var breakpoint = 9;
	var height_delta = 0.5;
</script>
<script src='/assets/js/goldclip.js'></script>
<script>
	$('#carousel').slick({
	  draggable:false,
	  vertical: true,
	  arrows: false,
     touchMove: false,
    swipe:false,
	});
	$('#carousel2').slick({
	  vertical: true,
	  draggable:false,
	  arrows: false,
     	touchMove: false,
    	swipe:false,
	});
</script>
@stop



