
var Width = document.body.clientWidth;
console.log(Width)
if(Width < 800){
    $('.Advi-foot-body')[0].style.display="none";
    $('.Advi-foot-body1')[0].style.display="block";
}
// for(let i=0;i<$('.wujiaox').length;i++){
    
//正则替换（覆盖）
var reg1=/^([\u4e00-\u9fa5]){2,7}$/;
var reg12= /^[\u4E00-\u9FA5A-Za-z]+$/;
var reg2 = /^[0-9]{6,15}$/;
var reg3 = /^[0-9]{2,15}$/;
var reg21=/^\d{6}$/;
var reg444=/^\d{9}$/;
var reg4441=/^\d{8}$/;
var reg4444=/^\d{11}$/;
var reg4442=/^[a-zA-Z0-9_-]{2,}$/;
var regtel = /^([0-9]{3,4})?[0-9]{7,8}$/;
var reg4443=/^(H|M)\d{10}$/;
var reg44 =  /(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
var reg4445=/^\d{11,12}$/;
var regemail = /^[A-Za-z0-9_\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
var regjgz =  /^[\u4E00-\u9FA5](字第)([0-9a-zA-Z]{4,8})(号?)$/;
console.log(reg1.test('2'))
function dis(){
    if(!(
    $('input[name=stuname]')[0].style.color == "red"||
    $('input[name=phonenumber]')[0].style.color == "red"||
    $('input[name=mobilephonenumber]')[0].style.color == "red"||
    $('input[name=qqnumber]')[0].style.color == "red"||
     $('textarea[name=textarea]').val()=="" || 
     $('textarea[name=textarea]')[0].style.color == "red"||
     $('input[name= nextretime]').val()==""||
     $('select[name = workyear]').val() == ""||
     $('select[name = sex]').val() == ""||
     $('select[name = class]').val() == ""||
     $('select[name = educate]').val() == ""||
     $('select[name = trade]').val() == ""||
     $('input[name=adviemail]')[0].style.color == "red")){
        $('#queding').attr('disabled',false)
    }else{
       $('#queding').attr('disabled','disabled')
    }
}
dis()
$('select[name = workyear]').on('change',function(){dis()})
$('select[name = sex]').on('change',function(){dis()})
$('select[name = class]').on('change',function(){dis()})
$('select[name = educate]').on('change',function(){dis()})
$('select[name = trade]').on('change',function(){dis()})
 function filter(h) {
    
        var inputContent = h;
        var arrMg = ["fuck", "tmd", "他妈的","你麻痹",'卧槽','操','草' ,'艹','窝草','擦','尼玛','妈','日','你大爷','傻','沙比','煞笔','傻比','傻B','sb','SB','逼','吊','屌','逗比','王八','蠢','猪','狗','死','蛋','智障','弱智','二逼','二比','2b'];
        var showContent = inputContent;
    
        for (var i = 0; i < arrMg.length; i++) {
            var r = new RegExp(arrMg[i], "ig");
    
            showContent = showContent.replace(r, "*");
        }
        return showContent
    }
 var reglast  = /^[a-zA-Z\u4e00-\u9fa5]$/
 $('textarea[name=textarea]').on('keyup',function(){
    dis()
    var h = filter($('textarea[name=textarea]').val())
    $('textarea[name=textarea]')[0].value = h
    if(h.length<5){
        $('textarea[name=textarea]')[0].style.color ="red"
    }else{
        if(reglast.test(h[h.length-1])){
         $('textarea[name=textarea]')[0].style.color ="green"
       }else{
         $('textarea[name=textarea]')[0].style.color ="red"
       }
    }
 })
 $('input[name= nextretime]').on('focus',function(){
    dis()
 })


function disa(){
   if(!(
   $('input[name=adviidcard]')[0].style.color == "red"||
   $('input[name=advizipcard]')[0].style.color == "red"||
   $('input[name=jinjiphone]')[0].style.color == "red"||
   $('input[name=jinjiphone]').val() == ""||
   $('input[name=jinjiname]')[0].style.color == "red" ||
   $('input[name=jinjiname]').val() == "" ||
   $('select[name = IDtype]').val() == ""||
   $('input[name = adviaddress]').val() == ""||
   $('select[name = enrolmentType]').val() == ""||
   $('select[name = class1]').val() == ""||
   $('input[name=adviidcard]').val()==""   ||
    $('input[name=classnumber]')[0].style.color == "red"||
    $('select[name = adviaddress_province]').val() == ""||
    $('select[name = adviaddress_city]').val() == ""||
    $('select[name = adviaddress_area]').val() == ""||
    $('select[name = exam_province]').val() == ""||
    $('select[name = exam_city]').val() == ""||
    $('input[name=classnumber]').val() == ""||
    $('input[name=adviaddress]').val() ==""
   )
   ){
       console.log(1)
       $('#ordergo').attr('disabled',false)
   }else{
      $('#ordergo').attr('disabled','disabled')
   }
}
disa()
$('select[name = enrolmentType]').on('change',function(){
    disa()
 })
//课程号码
$('input[name=classnumber]').on('keyup',function(){
    if(reg4445.test($('input[name=classnumber]').val())||$('input[name=classnumber]').val()==""){
       $('input[name=classnumber]')[0].style.color = "green";
    }else{
       $('input[name=classnumber]')[0].style.color = "red";
    }
    disa()
})
$('select[name = adviaddress_province]').on('change',function(){
   disa()
})
$('select[name = adviaddress_city]').on('change',function(){
   disa()
})
$('select[name = adviaddress_area]').on('change',function(){
   disa()
})
$('select[name = exam_province]').on('change',function(){
   disa()
})
$('select[name = exam_city]').on('change',function(){
   disa()
})
$('select[name = class1]').on('change',function(){
   disa()
})
$('select[name = IDtype]').on('change',function(){
   disa()
})
$('input[name=adviaddress]').on('keyup',function(){
	disa()
})
$('input[name=adviidcard]').on('keyup',function(){
   if($('select[name = IDtype] :selected').text() == "身份证"){
       if(reg44.test($('input[name=adviidcard]').val())||$('input[name=adviidcard]').val()==""){
           $('input[name=adviidcard]')[0].style.color = "green";
        }else{
           $('input[name=adviidcard]')[0].style.color = "red";
        }
   }else if($('select[name = IDtype] :selected').text() == "护照"){
       if(reg4442.test($('input[name=adviidcard]').val())||$('input[name=adviidcard]').val()==""){
           $('input[name=adviidcard]')[0].style.color = "green";
        }else{
           $('input[name=adviidcard]')[0].style.color = "red";
        }
   }else if($('select[name = IDtype] :selected').text() == "港澳居民内地通行证"){
       if(reg4443.test($('input[name=adviidcard]').val())||$('input[name=adviidcard]').val()==""){
           $('input[name=adviidcard]')[0].style.color = "green";
        }else{
           $('input[name=adviidcard]')[0].style.color = "red";
        }
   }else if($('select[name = IDtype] :selected').text() == "台湾居民内地通行证"||$('select[name = IDtype] :selected').text() == "台湾居民居住证"){
       if(reg4441.test($('input[name=adviidcard]').val())||$('input[name=adviidcard]').val()==""){
           $('input[name=adviidcard]')[0].style.color = "green";
        }else{
           $('input[name=adviidcard]')[0].style.color = "red";
        }
   }else if($('select[name = IDtype] :selected').text() == "港澳居民居住证"){
       if(reg444.test($('input[name=adviidcard]').val())||$('input[name=adviidcard]').val()==""){
           $('input[name=adviidcard]')[0].style.color = "green";
        }else{
           $('input[name=adviidcard]')[0].style.color = "red";
        }
   }else if($('select[name = IDtype] :selected').text() == "军官证"){
       if(regjgz.test($('input[name=adviidcard]').val())||$('input[name=adviidcard]').val()==""){
           $('input[name=adviidcard]')[0].style.color = "green";
        }else{
           $('input[name=adviidcard]')[0].style.color = "red";
        }
   }else{
       $('input[name=adviidcard]')[0].style.color = "red";
   }
   disa()
})
//邮箱
$('input[name=adviemail]').on('keyup',function(){
    if(regemail.test($('input[name=adviemail]').val())||$('input[name=adviemail]').val()==""){
       $('input[name=adviemail]')[0].style.color = "green";
    }else{
       $('input[name=adviemail]')[0].style.color = "red";
    }
    dis()
})
//班型价格
$('input[name=yuyuemoney]').on('keyup',function(){
    	if((reg3.test($('input[name=yuyuemoney]').val())||$('input[name=yuyuemoney]').val()=="")&&$('input[name=yuyuemoney]').val()<=32000){
      $('input[name=yuyuemoney]')[0].style.color = "green";
   }else{
      $('input[name=yuyuemoney]')[0].style.color = "red";
   }
   disa()
})
$('input[name=adviaddress]').on('keyup',function(){
   console.log($('input[name=adviaddress]').val())
   disa()
})
$('input[name=advizipcard]').on('keyup',function(){
   if(reg21.test($('input[name=advizipcard]').val())||$('input[name=advizipcard]').val()==""){
      $('input[name=advizipcard]')[0].style.color = "green";
   }else{
      $('input[name=advizipcard]')[0].style.color = "red";
   }
   disa()
})
$('input[name=jinjiphone]').on('keyup',function(){
   if(reg4445.test($('input[name=jinjiphone]').val())||$('input[name=jinjiphone]').val()==""){
      $('input[name=jinjiphone]')[0].style.color = "green";
   }else{
      $('input[name=jinjiphone]')[0].style.color = "red";
   }
   disa()
})
$('input[name=jinjiname]').on('keyup',function(){
   if(reg12.test($('input[name=jinjiname]').val())||$('input[name=jinjiname]').val()==""){
      $('input[name=jinjiname]')[0].style.color = "green";
   }else{
      $('input[name=jinjiname]')[0].style.color = "red";
   }
   disa()
})
$('input[name=stuname]').on('keyup',function(){
    if(reg12.test($('input[name=stuname]').val())||$('input[name=stuname]').val()==""){
       $('input[name=stuname]')[0].style.color = "green";
    }else{
       $('input[name=stuname]')[0].style.color = "red";
    }
    dis()
})
$('input[name=phonenumber]').on('keyup',function(){
   if(reg4445.test($('input[name=phonenumber]').val())||$('input[name=phonenumber]').val()==""){
      $('input[name=phonenumber]')[0].style.color = "green";
   }else{
      $('input[name=phonenumber]')[0].style.color = "red";
   }
   dis()
})
$('input[name=mobilephonenumber]').on('keyup',function(){
   if(regtel.test($('input[name=mobilephonenumber]').val())||$('input[name=mobilephonenumber]').val()==""){
      $('input[name=mobilephonenumber]')[0].style.color = "green";
   }else{
      $('input[name=mobilephonenumber]')[0].style.color = "red";
   }
   dis()
})
$('input[name=qqnumber]').on('keyup',function(){
   if(reg2.test($('input[name=qqnumber]').val())||$('input[name=qqnumber]').val()==""){
      $('input[name=qqnumber]')[0].style.color = "green";
   }else{
      $('input[name=qqnumber]')[0].style.color = "red";
   }
   dis()
})
console.log(new Date('2018-11-22 22:33:44'))
var date = new Date();
$('input[name=nextretime]').on('blur',function(){
    console.log(1)
    if(new Date($('input[name=nextretime]').val()).getTime()>date.getTime()){
        console.log(1)
       $('input[name=nextretime]')[0].style.color = "green";
    }else{
       $('input[name=nextretime]')[0].value = "时间无效";
    }
})
