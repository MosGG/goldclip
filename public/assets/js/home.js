function scrollHorizontally(e) {
  // e = window.event || e;
  // var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
  var scrollSpeed = 1;
  var scrollT = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
  var delta = scrollT - document.body.clientHeight;
  var obj1 = document.getElementById('horizontal-1');
  obj1.style.left = document.body.clientWidth - (delta * scrollSpeed) -50 + 'px';
  var obj2 = document.getElementById('horizontal-2');
  obj2.style.left = - document.body.clientWidth + (delta * scrollSpeed) + 'px';
  var menu = document.getElementById('menu');
  var left = delta + 100;
  if (left > 0) { left = 0 }
  menu.style.right = left + 'px';
  isInScreen(document.getElementById('video-2'));
  isInScreen(document.getElementById('video-3'));
  // e.preventDefault();
}
// $( document ).ready(function() {
//   console.log(window.addEventListener);
//   if (window.addEventListener) {
//     // IE9, Chrome, Safari, Opera
//     window.addEventListener("mousewheel", scrollHorizontally, false);
//     // Firefox
//     window.addEventListener("DOMMouseScroll", scrollHorizontally, false);
//   } else {
//     // IE 6/7/8
//     window.attachEvent("onmousewheel", scrollHorizontally);
//   }
// });

$(window).on('mousewheel DOMMouseScroll',function(e){
  scrollHorizontally(e);
});

$("#arrowdown").click(function(){
  $("html, body").animate({ scrollTop: document.body.clientHeight }, "slow");
  $('#horizontal-2').animate({ left: - document.body.clientWidth + "px" }, "slow");
  $('#menu').animate({ right: "0px" }, "slow");
});

function isInScreen(ele){
  if (ele.getBoundingClientRect().top < window.innerHeight &&
    ele.getBoundingClientRect().bottom > 0) {
    ele.play();
  } else {
    ele.pause();
  }
}