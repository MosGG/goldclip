  var w_height = $(window).height() * 0.6;
  $(".ppt").height(w_height);


var points = new Array()
var position = 0;
var selected = 0;
var num = $("#carousel3")[0].children.length;
var radius = 265; //px
var delta = 270 / num * 0.017453293;
for (var i=0;i<breakpoint;i++)
{
	points[i] = new Array();
	points[i]['x'] = Math.sin(delta * (i));
	points[i]['y'] = Math.cos(delta * (i));
	$("#carousel3")[0].children[i].style.top = radius * Math.sin(delta * (i)) + 'px';
	$("#carousel3")[0].children[i].style.left = radius * Math.cos(delta * (i)) + 'px';
}
for (var i=breakpoint;i<num;i++)
{
	points[i] = new Array();
	points[i]['x'] = Math.sin(delta * (i-num));
	points[i]['y'] = Math.cos(delta * (i-num));
	$("#carousel3")[0].children[i].style.top = radius * Math.sin(delta * (i-num)) + 'px';
	$("#carousel3")[0].children[i].style.left = radius * Math.cos(delta * (i-num)) + 'px';
}
function rolldown(){
	position = (position + 1) % num;
	// console.log(position);
	$($("#carousel3")[0].children[selected]).removeClass('current-tab');
	if (selected == 0) { selected = num; }
	selected = selected - 1;
	// console.log(selected);
	$($("#carousel3")[0].children[selected]).addClass('current-tab');
	for (var i=0;i<num;i++)
	{
		var current = (i + position) % num;
		$("#carousel3")[0].children[i].style.top = radius * points[current]['x'] + 'px';
		$("#carousel3")[0].children[i].style.left = radius * points[current]['y'] + 'px';
	}
	changesubtitle();
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
	changesubtitle();
}
function changesubtitle(){
	$('.uppertitle').css("opacity", '0');
	$('.lowertitle').css("opacity", '0');
	setTimeout(function(){
		$('.lowertitle').html($($("#carousel3")[0].children[selected]).attr('data-low'));
		$('.uppertitle').html($($("#carousel3")[0].children[selected]).attr('data-up'));
		$('.uppertitle').css("opacity", '1');
		$('.lowertitle').css("opacity", '1');
	}, 1000);
}

$(window).on('mousewheel DOMMouseScroll', _.debounce(function(e){
	var direction = (function () {
        var delta = (e.type === 'DOMMouseScroll' ?
                     e.originalEvent.detail * -40 :
                     e.originalEvent.wheelDelta);
        return delta > 0 ? 0 : 1;
    }());
    if(direction === 0) {
    	prev();
    }
    if(direction === 1) {
    	next();
    }
}, 600, {immediate:true}));

$(".container2").on('mousewheel DOMMouseScroll', function(e){
	e.stopPropagation()
});

$(".page-btn").on('click', _.debounce(function(e){
	if ($(this).attr('id') == 'next-page') {
		next();
	} else {
		prev();
	}
}, 600, {immediate:true}));

$(".l-page-btn").on('click', _.debounce(function(e){
	if ($(this).attr('id') == 'left-block-bottom') {
		next();
	} else {
		prev();
	}
}, 600, {immediate:true}));

function next(){
	rollup();
	$("#carousel").slick("slickNext");
   	$("#carousel2").slick("slickNext");
}

function prev(){
	$("#carousel").slick("slickPrev");
   	$("#carousel2").slick("slickPrev");
   	rolldown();
}