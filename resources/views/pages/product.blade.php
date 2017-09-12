@extends('layouts.pageLayout')

@section('title')<title>Product - GoldClip</title>@stop

@section('css-reference')
	<link href="/assets/css/product.css" rel="stylesheet">
	<link href="/assets/js/slick/slick.css" rel="stylesheet">
@stop

@section('body')
<div class="uppertitle">LOVE WOOL</div>
<div class="lowertitle">GOLD CLIP</div>
<div></div>
<section class="container"> 
    <div id="carousel" class="panels-backface-invisible">
      	<div class="num_text"><div class="number">01</div><div class="text"><?=$text['product-t-1']?></div></div>
	  		<div class="num_text"><div class="number">02</div><div class="text"><?=$text['product-t-2']?></div></div>
		    <div class="num_text"><div class="number">03</div><div class="text"><?=$text['product-t-3']?></div></div>
        <div class="num_text"><div class="number">04</div><div class="text"><?=$text['product-t-4']?></div></div>
        <div class="num_text"><div class="number">05</div><div class="text"><?=$text['product-t-5']?></div></div>
        <div class="num_text"><div class="number">06</div><div class="text"><?=$text['product-t-6']?></div></div>
        <div class="num_text"><div class="number">07</div><div class="text"><?=$text['product-t-7']?></div></div>
    </div>
  </section>
 
<section class="container2">
	<div id="carousel2" class="panels-backface-invisible">
    <!-- 1 -->
		<div class="ppt">
			<div class="product-right">
          <h2>“</h2>
          <label class="detail-right-sologan">
              我们热爱羊毛，热爱生活，<br>
              与羊毛生活与共，呼吸与共，<br>日夜相伴。
          </label>
          <br><br>
          <span>Gold Clip</span>
          <p class="special-padding">Gold Clip原材料均采集于澳洲本地由Poll Dorset协会认证的牧羊场，这些牧羊场的每一只羊均受澳洲有关动物身份识别及管理部门Shearwell Australia的监管；羊毛经澳洲羊毛协会Woolmark认证；并在维多利亚羊毛处理机构Victoria Wool Processor澳洲仅有的三家羊毛处理和供应商中最大的一家，做羊毛净化处理，羊毛来源经过VWP和羊毛牧场双重认证，品质保证。</p>
          <div class="product-item">
            <div class="item-name">
              <?=$text['our_quality']?>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-1']?>
              </p>
            </div>
          </div>
      </div>
		</div>
    <!-- 2 -->
		<div class="ppt">
      <div class="product-right">
  				<div class="product-item ">
            <div class="item-name">
              <img src="/assets/img/product-2-1.png">
              <span class="special-line-height"><?=$text['product-2-t-1']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-2-1']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-2.png">
              <span class="special-line-height"><?=$text['product-2-t-2']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
              <?=$text['p-2-2']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-3.png">
              <span class="special-line-height"><?=$text['product-2-t-3']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-2-3']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-4.png">
              <span class="special-line-height"><?=$text['product-2-t-4']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-2-4']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-5.png">
              <span class="special-line-height"><?=$text['product-2-t-5']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-2-5']?>
              </p>
            </div>
          </div>
      </div>
		</div>
    <!-- 3 -->
		<div class="ppt">
			<div class="product-right">
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-1.png">
              <span class="special-line-height"><?=$text['product-3-t-1']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-3-1']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-2.png">
              <span class="special-line-height"><?=$text['product-3-t-2']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-3-2']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-3.png">
              <span class="special-line-height"><?=$text['product-3-t-3']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-3-3']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-4.png">
              <span class="special-line-height"><?=$text['product-3-t-4']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content"><?=$text['p-3-4']?></p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-5.png">
              <span class="special-line-height"><?=$text['product-3-t-5']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content"><?=$text['p-3-5']?></p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-6.png">
              <span class="special-line-height"><?=$text['product-3-t-6']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content"><?=$text['p-3-6']?></p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-7.png">
              <span class="special-line-height"><?=$text['product-3-t-7']?></span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content"><?=$text['p-3-7']?></p>
            </div>
          </div>
      </div>
		</div>
    <!-- 4 -->
    <div class="ppt">
      <div class="product-right">
          <div class="product-item special-margin-2">
            <div class="item-name">
              <?=$text['product-4-t-1']?>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-4-1']?>
              </p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <?=$text['product-4-t-2']?>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">
                <?=$text['p-4-1']?>
              </p>
            </div>
          </div>
      </div>
    </div>

    <!-- 5 -->
    <div class="ppt relative">
      <div class="product-right-5 special-margin-3">
          <div class="product-select">
              <div class="product-warm">
                <img src="/assets/img/high-warm.png">
              </div>
              <div class="product-detail">
                <div class="p-title">高暖冬被 550克（GMS）</div>
                <div class="p-price left">
                  <label class="p-p-title"><?=$product[0]['title']?></label><br>
                  <label class="p-p-price"><?=$product[0]['price']?></label><br>
                  <label class="p-p-part"><?=$product[0]['id']?></label>
                </div>
                <div class="p-price right">
                  <label class="p-p-title"><?=$product[1]['title']?></label><br>
                  <label class="p-p-price"><?=$product[1]['price']?></label><br>
                  <label class="p-p-part"><?=$product[1]['id']?></label>
                </div>
              </div>
          </div>
          <div class="product-select">
              <div class="product-warm">
                <img src="/assets/img/four-season.png">
              </div>
              <div class="product-detail">
                <div class="p-title">四季被 400克（GMS）</div>
                <div class="p-price left">
                  <label class="p-p-title"><?=$product[2]['title']?></label><br>
                  <label class="p-p-price"><?=$product[2]['price']?></label><br>
                  <label class="p-p-part"><?=$product[2]['id']?></label>
                </div>
                <div class="p-price right">
                  <label class="p-p-title"><?=$product[3]['title']?></label><br>
                  <label class="p-p-price"><?=$product[3]['price']?></label><br>
                  <label class="p-p-part"><?=$product[3]['id']?></label>
                </div>
              </div>
          </div>
          <a href="/contact?language=<?=$text['language']?>"><div class="btn right"><?=$text['contact_us_buy']?></div></a>
      </div>
    </div>

    <!-- 6  -->
    <div class="ppt relative">
      <div class="product-right relative">
          <p>
          <?=$text['product-6']?>
          </p>
          <a href="/contact?language=<?=$text['language']?>"><div class="btn right"><?=$text['contact_us_buy']?></div></a>
      </div>
    </div>

    <!-- 7  -->
    <div class="ppt relative">
      <div class="product-right relative">
          <p class="brown special-margin">
          <?=$text['product-7']?>
          </p>
          <a href="/contact?language=<?=$text['language']?>"><div class="btn right"><?=$text['contact_us_buy']?></div></a>
      </div>
    </div>
	</div>
</section>

<div class="left-block">
<div id="left-block-top" class="l-page-btn"></div>
<div id="left-block-bottom" class="l-page-btn"></div>
<section class="container3">
	<div id="carousel3">
		<figure class="current-tab" data-up="PREMIER QUALITY" data-low="MULTIPLE QUALIFICATION">
			<i class="fa fa-circle" aria-hidden="true"></i>01 <?=$text['our_quality']?>
		</figure>
		<figure data-up="AUSTRALIAN MADE" data-low="WOOLMARK CERTIFICATION">
			<i class="fa fa-circle" aria-hidden="true"></i>02 <?=$text['product-t-2']?>
		</figure>
		<figure data-up="DEEP SLEEP" data-low="ANTI-ALLEGY">
			<i class="fa fa-circle" aria-hidden="true"></i>03 <?=$text['product-t-3']?> 
		</figure>
    <figure data-up="LOVE WOOL" data-low="GOLD CLIP">
      <i class="fa fa-circle" aria-hidden="true"></i>04 <?=$text['product-t-4']?>
    </figure>
    <figure data-up="HIGHEST WARM" data-low="EVERYDAY">
      <i class="fa fa-circle" aria-hidden="true"></i>05 <?=$text['product-t-5']?> 
    </figure>
    <figure data-up="QUALITY GUARANTEE" data-low="5 YEARS WARRENTY">
      <i class="fa fa-circle" aria-hidden="true"></i>06 <?=$text['shfw']?>
    </figure>
    <figure data-up="NO HASSLE" data-low="ENJOY SLEEP">
      <i class="fa fa-circle" aria-hidden="true"></i>07 <?=$text['product-t-7']?> 
    </figure>
    <figure data-up="PREMIER QUALITY" data-low="MULTIPLE QUALIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>01 <?=$text['our_quality']?>
    </figure>
    <figure data-up="AUSTRALIAN MADE" data-low="WOOLMARK CERTIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>02 <?=$text['product-t-2']?>
    </figure>
    <figure data-up="DEEP SLEEP" data-low="ANTI-ALLEGY">
      <i class="fa fa-circle" aria-hidden="true"></i>03 <?=$text['product-t-3']?> 
    </figure>
    <figure data-up="LOVE WOOL" data-low="GOLD CLIP">
      <i class="fa fa-circle" aria-hidden="true"></i>04 <?=$text['product-t-4']?>
    </figure>
    <figure data-up="HIGHEST WARM" data-low="EVERYDAY">
      <i class="fa fa-circle" aria-hidden="true"></i>05 <?=$text['product-t-5']?> 
    </figure>
    <figure data-up="QUALITY GUARANTEE" data-low="5 YEARS WARRENTY">
      <i class="fa fa-circle" aria-hidden="true"></i>06 <?=$text['shfw']?>
    </figure>
    <figure data-up="NO HASSLE" data-low="ENJOY SLEEP">
      <i class="fa fa-circle" aria-hidden="true"></i>07 <?=$text['product-t-7']?> 
    </figure>
    <figure data-up="PREMIER QUALITY" data-low="MULTIPLE QUALIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>01 <?=$text['our_quality']?>
    </figure>
    <figure data-up="AUSTRALIAN MADE" data-low="WOOLMARK CERTIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>02 <?=$text['product-t-2']?>
    </figure>
    <figure data-up="DEEP SLEEP" data-low="ANTI-ALLEGY">
      <i class="fa fa-circle" aria-hidden="true"></i>03 <?=$text['product-t-3']?> 
    </figure>
    <figure data-up="LOVE WOOL" data-low="GOLD CLIP">
      <i class="fa fa-circle" aria-hidden="true"></i>04 <?=$text['product-t-4']?>
    </figure>
    <figure data-up="HIGHEST WARM" data-low="EVERYDAY">
      <i class="fa fa-circle" aria-hidden="true"></i>05 <?=$text['product-t-5']?> 
    </figure>
    <figure data-up="QUALITY GUARANTEE" data-low="5 YEARS WARRENTY">
      <i class="fa fa-circle" aria-hidden="true"></i>06 <?=$text['shfw']?>
    </figure>
    <figure data-up="NO HASSLE" data-low="ENJOY SLEEP">
      <i class="fa fa-circle" aria-hidden="true"></i>07 <?=$text['product-t-7']?> 
    </figure>
	</div>
</section>
</div>

<div class="main">
    <ul id="game-list" class="game-list">
        <li>
            <div class="game-box box-1 game-boxdefault">
                <div class="game-front">
                    <div class="game-cover">
                        <!-- <div class="specular"></div> -->
                    </div>
                </div>
                <div class="game-right"></div>
                <div class="game-side">
                      <!-- <div class="specular-left"></div> -->
                </div>
                <div class="game-back">
                </div>
            </div>  
        </li>
    </ul>
</div><!--main-->

@stop

@section('js-reference')
<script src="/assets/js/underscore-min.js"></script>
<script src='/assets/js/slick/slick.js'></script>
@stop

@section('js-function')
<script>
	var breakpoint = 9;
  var height_delta = 0.6;
</script>
<script src='/assets/js/goldclip.js'></script>
<script src='/assets/js/product.js'></script>
@stop



