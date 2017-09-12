function Validator(){
  var flag = 0;
  $('p').css('visibility','hidden');
  $('d').css('visibility','hidden');
  var a =document.forms["contact_form"];
  var bt = document.forms["contact_form"]["subject"];
  for (var i = 0;i<a.length;i++) {
    var s = a[i];
    if( s.name == "_token" ||s.name == "c1"||s.name == "cphone" ||s.name == "subject" ){
      continue;
    }else {
      if (s.value == ""){
         if (s.name == 'cmessage'){
          s.nextElementSibling.style.visibility = 'visible';
          flag = 1;
        }else{
          s.nextSibling.nextSibling.style.visibility = 'visible';
          flag = 1;
        }

    }else if (s.name == 'cemail'){
      var x = s.value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        s.nextSibling.nextSibling.style.visibility = 'visible';
        flag = 1;
      }
    }else if (s.name == "cc2"){
      if (s.checked == false){
        s.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.style.visibility = 'visible';
        flag = 1;
      }
    }
    }
}

// setTimeout(function(){
//     $('p').css('visibility','hidden');
//     $('d').css('visibility','hidden');
// },4000);

// console.log(flag)
if(flag == 1){
  return false;
}else{
  return true;
}
}
