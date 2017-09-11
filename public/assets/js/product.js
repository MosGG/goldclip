

  $('#carousel').slick({
	  draggable:false,
	  vertical: true,
	  arrows: false,
	});
	$('#carousel2').slick({
	  vertical: true,
	  draggable:false,
	  arrows: false,
	});

  $(window).on('mousewheel DOMMouseScroll', _.debounce(function(e){
    var direction = (function () {
          var delta = (e.type === 'DOMMouseScroll' ?
                       e.originalEvent.detail * -40 :
                       e.originalEvent.wheelDelta);
          return delta > 0 ? 0 : 1;
      }());
      if(direction === 0) {
        rotateBox(-1);
      }
      if(direction === 1) {
        rotateBox(1);
      }
  }, 600, {immediate:true}));

  $(".page-btn").on('click', _.debounce(function(e){
    if ($(this).attr('id') == 'next-page') {
      rotateBox(1);
    } else {
      rotateBox(-1);
    }
  }, 600, {immediate:true}));

  $(".l-page-btn").on('click', _.debounce(function(e){
    if ($(this).attr('id') == 'left-block-bottom') {
      rotateBox(1);
    } else {
      rotateBox(-1);
    }
  }, 600, {immediate:true}));

  var degree = 30;
  function rotateBox(a){
    var oldDegree = 0;
    var  obj = $(".game-list li .game-box.game-boxdefault")[0];
    var rotate = obj.style.transform;
    if (rotate != ""){
      oldDegree = rotate.split('rotateY(')[1].split("deg)")[0]
    } 
    var newDegree = parseInt(oldDegree) + (a * degree);
    newDegree = "rotateY(" + newDegree + "deg)";
    $(".game-list li .game-box.game-boxdefault")[0].style.transform = newDegree;
  }

  function expand(obj){
    var target = $(obj).siblings(".item-des");
    var height = target.children("p").height() + 60;
    if (target.height() == 0){
      target.height(height);
    } else {
      target.height(0);
    }
    var sliderCurrent = $(obj).parent().parent().parent();
    var parent = $(obj).parent();
    var scroll = parent[0].offsetTop; //- sliderCurrent[0].offsetTop;
    console.log(scroll);
    sliderCurrent.animate({ scrollTop: scroll }, "500");
  }