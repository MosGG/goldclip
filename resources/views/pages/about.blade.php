@extends('layouts.pageLayout')

@section('title')<title>About Us - GoldClip</title>@stop

@section('css-reference')
	<!-- <link href="/assets/css/custom-tony.css" rel="stylesheet"> -->
	<!-- <link href="/assets/css/animate-extend.css" rel="stylesheet"> -->
	<!-- <link href="/assets/css/magic.css" rel="stylesheet"> -->
	<link href="/assets/css/about.css" rel="stylesheet">
@stop

@section('body')
<div class="uppertitle">LOVE WOOL</div>
<div class="lowertitle">GOLD CLIP</div>
<div></div>
<section class="container">
    <div id="carousel" class="panels-backface-invisible">
	  	<figure>
	      	<div class="num_text">
	      		<div class="number">01</div>
	      		<div class="text">Gold Clip<br>- 名字的由来</div>
	  		</div>
		</figure>
	  	<figure><div class="num_text"><div class="number">02</div><div class="text">我们的理念</div></div></figure>
		<figure><div class="num_text"><div class="number">03</div><div class="text">澳大利亚羊毛</div></div></figure>
		<figure><div class="num_text"><div class="number">04</div><div class="text">党斯羊毛<br>- 无角陶赛特羊</div></div></figure>
		<figure><div class="num_text"><div class="number">05</div><div class="text">党斯羊毛的优点</div></div></figure>
		<figure><div class="num_text"><div class="number">06</div><div class="text">我们的羊毛来源</div></div></figure>
    </div>
  </section>

<section class="container2">
	<div id="carousel2" class="panels-backface-invisible">
		<figure>
			<p class="detail-left">Gold Clip的名字源于澳洲本地羊毛行业的俚语，Clip 做动词意为修剪，做名词意为一次的剪毛量或一年的羊毛总产量； Gold Clip寓意剪羊毛技术精湛，单次的羊毛采集满载而归, 一年的羊毛产量喜获丰收。</p>
			<div class="detail-right">
				<h2>“</h2>
				<p>
					如果您要追寻更高标准，<br>
					Gold Clip将为您奉上这份选择。<br>
					如果您想体验与众不同，<br>
					Gold Clip将为您呈上这个机会。<br>
					如果您想品鉴卓越品质，<br>
					Gold Clip将为您递上这份出品。
				</p>
				<h2>”</h2>
				<span>Gold Clip</span>
			</div>
		</figure>
		<figure>2</figure>
		<figure>3</figure>
		<figure>4</figure>
		<figure>5</figure>
		<figure>6</figure>
	</div>
</section>

<section class="container3">
	<div id="carousel3">
		<figure class="current-tab"><i class="fa fa-circle" aria-hidden="true"></i>01 名字的由来</figure>
		<figure><i class="fa fa-circle" aria-hidden="true"></i>02 我们的理念</figure>
		<figure><i class="fa fa-circle" aria-hidden="true"></i>03 澳大利亚羊毛</figure>
		<figure><i class="fa fa-circle" aria-hidden="true"></i>04 党斯羊毛</figure>
		<figure><i class="fa fa-circle" aria-hidden="true"></i>05 党斯羊毛的优点</figure>
		<figure><i class="fa fa-circle" aria-hidden="true"></i>06 我们的羊毛来源</figure>
	</div>
</section>

<section id="options">
    <!-- <p>
      <label for="panel-count">panels</label>
      <input type="range" id="panel-count" value="9" min="3" max="20" />
    </p> -->

    <p id="navigation">
      <button id="previous" data-increment="-1">Previous</button>
      <button id="next" data-increment="1">Next</button>
    </p>

    <p>
      <button id="toggle-axis">Toggle Carousel Axis</button>
    </p>

    <p>
      <button id="toggle-backface-visibility">Toggle Backface Visibility</button>
    </p>

  </section>

@stop

@section('js-reference')
<script src="/assets/js/Modernizr.js"></script>
<!-- <script src='/assets/js/animation.js'></script> -->
@stop

@section('js-function')
<script>
	var points = new Array()
	var position = 0;
	var selected = 0;
	var num = $("#carousel3")[0].children.length;
	var radius = 270; //px
	var delta = 360 / num * 0.017453293;
	for (var i=0;i<num;i++)
	{
		points[i] = new Array();
		points[i]['x'] = Math.sin(delta * i);
		points[i]['y'] = Math.cos(delta * i);
		$("#carousel3")[0].children[i].style.top = radius * Math.sin(delta * i) + 'px';
		$("#carousel3")[0].children[i].style.left = radius * Math.cos(delta * i) + 'px';
	}
	function rolldown(){
		position = (position + 1) % num;
		console.log(position);
		$($("#carousel3")[0].children[selected]).removeClass('current-tab');
		if (selected == 0) { selected = num; }
		selected = selected - 1;
		console.log(selected);
		$($("#carousel3")[0].children[selected]).addClass('current-tab');
		for (var i=0;i<num;i++)
		{
			var current = (i + position) % num;
			$("#carousel3")[0].children[i].style.top = radius * points[current]['x'] + 'px';
			$("#carousel3")[0].children[i].style.left = radius * points[current]['y'] + 'px';
		}
		
	}
	function rollup(){
		if (position == 0) { position = num; }
		position--;
		$($("#carousel3")[0].children[selected]).removeClass('current-tab');
		selected = (selected + 1) % num;
		$($("#carousel3")[0].children[selected]).addClass('current-tab');
		for (var i=0;i<num;i++)
		{
			var current = (i + position) % num;
			$("#carousel3")[0].children[i].style.top = radius * points[current]['x'] + 'px';
			$("#carousel3")[0].children[i].style.left = radius * points[current]['y'] + 'px';
		}
	}
</script>
<script>
    var transformProp = Modernizr.prefixed('transform');

    function Carousel3D ( el ) {
      this.element = el;
      this.rotation = 0;
      this.panelCount = 0;
      this.totalPanelCount = this.element.children.length;
      this.theta = 0;
      this.isHorizontal = false;
    }

    Carousel3D.prototype.modify = function() {
      var panel, angle, i;
      this.panelSize = this.element[ this.isHorizontal ? 'offsetWidth' : 'offsetHeight' ];
      this.rotateFn = this.isHorizontal ? 'rotateY' : 'rotateX';
      this.theta = 360 / this.panelCount;

      // do some trig to figure out how big the carousel
      // is in 3D space
      this.radius = Math.round( ( this.panelSize / 2) / Math.tan( Math.PI / this.panelCount ) );

      for ( i = 0; i < this.panelCount; i++ ) {
        panel = this.element.children[i];
        angle = this.theta * i;
        panel.style.opacity = 1;
        panel.style.backgroundColor = 'hsla(' + angle + ', 100%, 50%, 0)';
				// panel.style.backgroundColor ＝ 'blue';
        // rotate panel, then push it out in 3D space
        panel.style[ transformProp ] = this.rotateFn + '(' + angle + 'deg) translateZ(' + this.radius + 'px)';
      }

      // hide other panels
      for (  ; i < this.totalPanelCount; i++ ) {
        panel = this.element.children[i];
        panel.style.opacity = 0;
        panel.style[ transformProp ] = 'none';
      }

      // adjust rotation so panels are always flat
      this.rotation = Math.round( this.rotation / this.theta ) * this.theta;
      this.transform();
    };

    Carousel3D.prototype.transform = function() {
      // push the carousel back in 3D space,
      // and rotate it
      this.element.style[ transformProp ] = 'translateZ(-' + this.radius + 'px) ' + this.rotateFn + '(' + this.rotation + 'deg)';
    };

    var init = function() {
      	var carousel = new Carousel3D( document.getElementById('carousel') ),
		  	carousel2 = new Carousel3D( document.getElementById('carousel2') ),
	      	panelCountInput = document.getElementById('panel-count'),
	      	axisButton = document.getElementById('toggle-axis'),
	      	navButtons = document.querySelectorAll('#navigation button'),

      	onNavButtonClick = function( event ){
            var increment = parseInt( event.target.getAttribute('data-increment') );
            carousel.rotation += carousel.theta * increment * -1;
            carousel.transform();
			carousel2.rotation += carousel2.theta * increment * -1;
      	  	carousel2.transform();
      	  	if (increment == 1) {
      	  		rollup();
      	  	} else {
      	  		rolldown();
      	  	}
      	};

      // populate on startup
      // carousel.panelCount = parseInt( panelCountInput.value, 10);
		carousel.panelCount = num;
      	carousel.modify();
		carousel2.panelCount = num;
      	carousel2.modify();


      axisButton.addEventListener('click', function(){
        carousel.isHorizontal = !carousel.isHorizontal;
        carousel.modify();
		carousel2.isHorizontal = !carousel2.isHorizontal;
        carousel2.modify();
      }, false);

      // panelCountInput.addEventListener( 'change', function( event ) {
      //   carousel.panelCount = event.target.value;
      //   carousel.modify();
      // }, false);

      for (var i=0; i < 2; i++) {
        navButtons[i].addEventListener( 'click', onNavButtonClick, false);
      }

      document.getElementById('toggle-backface-visibility').addEventListener( 'click', function(){
        carousel.element.toggleClassName('panels-backface-invisible');
		carousel2.element.toggleClassName('panels-backface-invisible');
				
      }, false);

      setTimeout( function(){
        document.body.addClassName('ready');
      }, 0);

    };

    window.addEventListener( 'DOMContentLoaded', init, false);
</script>
@stop



