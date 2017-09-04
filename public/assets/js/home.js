function scrollHorizontally(e) {
  // e = window.event || e;
  // var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
  var scrollSpeed = 1;
  var delta = document.body.scrollTop - document.body.clientHeight;
  var obj1 = document.getElementById('horizontal-1');
  obj1.style.left = document.body.clientWidth - (delta * scrollSpeed)  - 50 + 'px';
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

if (window.addEventListener) {
  // IE9, Chrome, Safari, Opera
  window.addEventListener("mousewheel", scrollHorizontally, false);
  // Firefox
  window.addEventListener("DOMMouseScroll", scrollHorizontally, false);
} else {
  // IE 6/7/8
  window.attachEvent("onmousewheel", scrollHorizontally);
}

function isInScreen(ele){
  if (ele.getBoundingClientRect().top < window.innerHeight &&
    ele.getBoundingClientRect().bottom > 0) {
    ele.play();
  } else {
    ele.pause();
  }
}