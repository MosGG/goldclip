<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us - GoldClip</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/template.css">
  <link rel="stylesheet" href="/assets/css/home.css">
  <link rel="stylesheet" href="/assets/css/menu-m.css">
  <link rel="stylesheet" href="/assets/css/newcontact.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <div class="background"></div>
  <a href="/?language=<?=$text['language']?>"><img class="logo" src="/assets/img/goldclip_logo.png"></a>

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
  <div id="menu" class="nav2">
  <?php
    if ($text['language'] == 'ch') {
      echo '<a href="?language=en"><div class="en_cn border_right">EN</div></a><div class="brown en_cn border_left ">中</div>';
    } else {
      echo '<div class="brown en_cn border_right ">EN</div><a href="?language=ch"><div class="en_cn border_left">中</div></a>';
    }
  ?>
      <div class="blank">
          <div class="navbar">
          <div class="nav_font"><a href="/?language=<?=$text['language']?>" class="hvr-underline-from-left"><?=$text['home']?></a></div>
            <div class="nav_font"><a href="/product?language=<?=$text['language']?>" class="hvr-underline-from-left"><?=$text['product']?></a></div>
            <div class="nav_font"><a href="/process?language=<?=$text['language']?>" class="hvr-underline-from-left"><?=$text['process']?></a></div>
            <div class="nav_font"><a href="/about?language=<?=$text['language']?>" class="hvr-underline-from-left"><?=$text['about']?></a></div>
          </div>
      </div>
      <div class="contact_us">
          <div class="nav_font2"><a href="/contact?language=<?=$text['language']?>" class="hvr-underline-from-left-white"><?=$text['contact_us']?></a></div>
      </div>
    </div>

  <div class="form" class="ng-pristine ng-valid">
    <div class="form_title"><?=$text['contact_us']?></div>
    <div class="required">*<?=$text['required']?></div>

    <form id="contact_form" role="form" novalidate="">
      <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label class="sr-only" for="cfname"><?=$text['fname']?> *</label>
        <input type="text" id="cfname" class="form-control" name="cfname" placeholder="<?=$text['fname']?>" required>
        <p class="warning"><?=$text['wf']?></p>
      </div>

      <div class="form-group">
        <label class="sr-only" for="clname"><?=$text['lname']?> *</label>
        <input type="text" id="clname" class="form-control" name="clname" placeholder="<?=$text['lname']?>" required>
        <p class="warning"><?=$text['wl']?></p>
      </div>

      <div class="form-group">
        <label class="sr-only" for="cemail"><?=$text['email']?> *</label>
        <input type="email" id="cemail" name="cemail" class="form-control" placeholder="<?=$text['email']?>" required>
        <p class="warning"><?=$text['we']?></p>
      </div>

      <div class="form-group">
        <label class="sr-only" for="cphone"><?=$text['phone']?></label>
        <input type="text" id="cphone" name="cphone" class="form-control" placeholder="<?=$text['phone']?>">
        <p class="warning"></p>
      </div>

      <div class="form-group2">
        <label class="sr-only form_left" for="cmessage"><?=$text['msg']?> *</label>
        <textarea class="form_text" id="cmessage" name="cmessage" rows="7" placeholder="<?=$text['msg_h']?>" required></textarea>
        <p class="wspecial_a"><?=$text['wm']?></p>
      </div>


        <button id ="subbutton" type="submit" class="buttonsub" name="subject" onclick="JavaScript:return Validator();"><c class="ctext"><?=$text['submit']?></c> <img id = "pic" src="assets/img/loading2.gif" /></button>
    </form>
  </div>

  <div id="result"></div>
  <!-- <object id="svg1" data="assets/img/marker.svg" type="image/svg+xml"></object> -->

  <div id="map"></div>
  <div class="info">
    <div class="head"><b>Gold Clip Australia Pty. Ltd.</b></div>
    <div class="content special"><b>ABN:</b> 69620431272 </div>
    <div class="content"><b><?=$text['email']?>: </b><a href="mailto:admin@goldclip.com.au"><c class="underline">admin@goldclip.com.au</c></a></div>
    <div class="content"><b><?=$text['address']?>: </b><a href="http://maps.google.com/?q=350 Collins Street, Melbourne, Vic, 3000" target="_blank"><c class="underline">Level 2, 350 Collins Street, Melbourne, Vic, 3000</c></a></div>
  </div>

  <div class="qr"><img src="/assets/img/qr.png"></div>
  <div class="mini_nav">
    <div class="float_left">
      <a href="http://maps.google.com/?q=350 Collins Street, Melbourne, Vic, 3000" target="_blank">
      <img class = 'icon_img' src="/assets/img/add.svg" height="37" width="39" />
      </a>
    </div>
    <div  class="middle">
      <a href="tel:61451919628">
        <img  class = 'icon_img' src="/assets/img/tel.svg" height="37" width="39" />
      </a>
    </div>
    <div  class="float_right">
      <a href="mailto:admin@goldclip.com.au">
      <img   class = 'icon_img' src="/assets/img/mail.svg" height="27" width="39" />
      </a>
    </div>
  </div>
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
  <script>
  $(document).ready(function(){
  $('#contact_form').submit(function(event) {
    event.preventDefault();
    var ajaxResponse    = $('#result');
    var ajaxButton = $('#subbutton c');
    var responsepic = $('#pic');

    var formData = {
              'fname'             : $('input[name=cfname]').val(),
              'lname'             : $('input[name=clname]').val(),
              'email'             : $('input[name=cemail]').val(),
              'phone'    				  : $('input[name=cphone]').val(),
              'message'						: $('textarea[name=cmessage]').val(),
              'future'						: $('input[name=cc]').val(),
              '_token'						: $('input[name=_token]').val()

          };


    $.ajax({
              type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
              url         : 'email-sending', // the url where we want to POST
              data        : formData, // our data object
              dataType    : 'json', // what type of data do we expect back from the server
              encode      : true,
              timeout     : 10000,
              cache				: false,
              beforeSend  : function(result) {
                            ajaxButton.html("<?=$text['sending']?>");
                            responsepic.css('visibility','visible');

                          },
              success     : function(result) {
                                if(result.sendstatus == 1) {
                                  responsepic.css('visibility','hidden');
                                   $('.form').css('visibility','hidden');
                                    ajaxResponse.hide();
                                    ajaxResponse.html("<?=$text['success']?>");
                                    ajaxResponse.fadeIn(500);

                                  } else {
                                    responsepic.css('visibility','hidden');
                                    ajaxResponse.html(result.message);
                                    ajaxButton.html("<?=$text['submit']?>");
                                  }
                            },
              error      : function(request, status, err) {
                            request.abort();
                            responsepic.css('visibility','hidden');
                            $('.form').css('visibility','hidden');;
                              if (status == "timeout") {
                                ajaxResponse.html("<?=$text['timeout']?>");
                                ajaxButton.html("<?=$text['submit']?>");
                                ajaxResponse.fadeIn(500);

                            } else {
                              ajaxResponse.html(result.message);
                              ajaxButton.html("<?=$text['submit']?>");
                              ajaxResponse.fadeIn(500);

                            }
                            setTimeout(function(){
                                // ajaxResponsepic.hide();
                                ajaxResponse.fadeOut(500);
                                $('#contact_form')[0].reset();
                                ajaxButton.fadeIn(500);
                                $('.form').css('visibility','visible');
                            },3000);
                            }
          });

  });
  });
  </script>
  <script type="text/javascript" src="/assets/js/newcontact.js"></script>
  <script type="text/javascript" src="/assets/js/map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ9dJuakDsSoyFHKkZ8F-S4pixZGXhMfg=&callback=initMap"></script>
</body>

</html>
