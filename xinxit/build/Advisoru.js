
var Width = document.body.clientWidth;
console.log(Width)
if(Width < 800){
    $('.Advi-foot-body')[0].style.display="none";
    $('.Advi-foot-body1')[0].style.display="block";
}


var wujiaox = document.querySelectorAll('.wujiaox')
    switch($('#pingfen')[0].innerHTML){
    case "A":
    for(let h=0;h<wujiaox.length;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
        break;
    case "B":
    for(let h=0;h<wujiaox.length-1;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
        break;
    case "C":
    for(let h=0;h<wujiaox.length-2;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
        break;
    case "D":
    for(let h=0;h<wujiaox.length-3;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
        break;
    case "E":
    for(let h=0;h<wujiaox.length-4;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
        break;
    };
    // case 1:
    //     System.out.println("1");break;
    // case 2:
    //     System.out.println("2");break;
    // default:
    //     System.out.println("default");break;
console.log(wujiaox)
wujiaox.forEach(function(e,i){
    // wujiaox[i].onclick = function(){
    //     if($(this)[0].style.background == 'url("img/wujiaoxing3.svg")'){
    //         for (var j = 0; j <= i; j++) {
    //             wujiaox[j].style.background = 'url("img/wujiaoxing4.svg")'
    //         }
    //     }else{
    //         for (var j = i; j < wujiaox.length; j++) {
    //             wujiaox[j].style.background = 'url("img/wujiaoxing3.svg")'
    //         }
    //     }
    //     var index = 0; 
    //     for(let h=0;h<wujiaox.length;h++){
    //         if(wujiaox[h].style.background == 'url("img/wujiaoxing4.svg")'){
    //             index += 1
    //         }
    //     }
    //     console.log(index)
    //     if(index == 0){
    //         $('#pingfen')[0].innerHTML = "";
    //     }else if(index == 1){
    //         $('#pingfen')[0].innerHTML = "E";
    //     }else if(index == 2){
    //         $('#pingfen')[0].innerHTML = "D";
    //     }else if(index == 3){
    //         $('#pingfen')[0].innerHTML = "C";
    //     }else if(index == 4){
    //         $('#pingfen')[0].innerHTML = "B";
    //     }else if(index == 5){
    //         $('#pingfen')[0].innerHTML = "A";
    //     }
    // }
        
    })
 var reg1=/^([\u4e00-\u9fa5]){2,7}$/;
 var reg12= /^[\u4E00-\u9FA5A-Za-z]+$/;
 var reg2 = /^[0-9]{6,15}$/;
 var reg3 = /^[0-9]{2,15}$/;
 var reg21=/^\d{6}$/;
 var reg444=/^\d{9}$/;
 var reg4441=/^\d{8}$/;
 var reg4444=/^\d{11}$/;
 var reg4445=/^\d{11,12}$/;
 var reg4442=/^(D|E|S|P)\d{8}$/;
 var regtel = /^([0-9]{3,4})?[0-9]{7,8}$/;
 var reg4443=/^(H|M)\d{10}$/;
 var reg44 =  /(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
 var regemail = /^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
 console.log(reg1.test('2'))
 function dis(){
     if(!(
     $('input[name=stuname]')[0].style.color == "red"||
     $('input[name=phonenumber]')[0].style.color == "red"||
     $('input[name=mobilephonenumber]')[0].style.color == "red"||
     $('input[name=qqnumber]')[0].style.color == "red" ||
     $('input[name=adviemail]')[0].style.color == "red")){
         $('#queding').attr('disabled',false)
     }else{
        $('#queding').attr('disabled','disabled')
     }
 }
 dis()
 function filter(h) {
    
        var inputContent = h;
        var arrMg = ["fuck", "tmd", "他妈的","你麻痹",'卧槽','操','草' ,'艹','窝草','擦','尼玛','妈','日','你大爷','傻','沙比','煞笔','傻比','傻B','sb','SB','逼','吊','屌','逗比','王八','蠢','猪','狗','死','蛋','智障','弱智','二逼','二比'];
        var showContent = inputContent;
    
        for (var i = 0; i < arrMg.length; i++) {
            var r = new RegExp(arrMg[i], "ig");
    
            showContent = showContent.replace(r, "*");
        }
        return showContent
    }
 $('textarea[name=textarea]').on('keyup',function(){
    dis()
    var h = filter($('textarea[name=textarea]').val())
    $('textarea[name=textarea]')[0].value = h
 })
 $('input[name= nextretime]').on('focus',function(){
    dis()
 })
 $('.wujiaox').click(function(){
     dis()
 })
 
 function disa(){
    if(!(
    // $('input[name=adviidcard]')[0].style.color == "red"||
    // $('input[name=advizipcard]')[0].style.color == "red"||
    // $('input[name=jinjiphone]')[0].style.color == "red"||
    // $('input[name=jinjiphone]').val() == ""||
    // $('input[name=jinjiname]')[0].style.color == "red" ||
    // $('input[name=jinjiname]').val() == "" ||
    // // $('input[name=yuyuemoney]')[0].style.color == "red"||
    // $('select[name = IDtype]').val() == ""||
    // $('input[name = adviaddress]').val() == ""||
    // $('select[name = class1]').val() == ""||
    // $('select[name = payment]').val() == "" ||
    // $('input[name=adviidcard]').val()==""   ||
    // // $('input[name=yuyuemoney]').val() ==""  ||
    // $('input[name=classnumber]')[0].style.color == "red"||
    // $('select[name = adviaddress_province]').val() == ""||
    // $('select[name = adviaddress_city]').val() == ""||
    // $('select[name = adviaddress_area]').val() == ""||
    // $('select[name = exam_province]').val() == ""||
    // $('select[name = exam_city]').val() == ""||
    $('input[name=adviaddress]').val() =="" || 
    $('.orderp')[0].style.color == `red`
    )
    ){
        console.log(1)
        $('#ordergo').attr('disabled',false)
    }else{
       $('#ordergo').attr('disabled','disabled')
    }
}
disa()
//课程号码
$('input[name=classnumber]').on('keyup',function(){
    if(reg4445.test($('input[name=classnumber]').val())||$('input[name=classnumber]').val()==""){
       $('input[name=classnumber]')[0].style.color = "green";
    }else{
       $('input[name=classnumber]')[0].style.color = "red";
    }
    disa()
})
$('select[name = payment]').on('change',function(){
    disa()
})
$('select[name = class1]').on('change',function(){
    disa()
})

$('select[name = IDtype]').on('change',function(){
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
    }else if($('select[name = IDtype] :selected').text() == "港澳居民来往内地通行证"){
        if(reg4443.test($('input[name=adviidcard]').val())||$('input[name=adviidcard]').val()==""){
            $('input[name=adviidcard]')[0].style.color = "green";
         }else{
            $('input[name=adviidcard]')[0].style.color = "red";
         }
    }else if($('select[name = IDtype] :selected').text() == "台湾居民来往内地通行证"||$('select[name = IDtype] :selected').text() == "台湾居民居住证"){
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
    }else{
        $('input[name=adviidcard]')[0].style.color = "red";
    }
    disa()
})
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
//邮箱
$('input[name=adviemail]').on('keyup',function(){
    if(regemail.test($('input[name=adviemail]').val())||$('input[name=adviemail]').val()==""){
       $('input[name=adviemail]')[0].style.color = "green";
    }else{
       $('input[name=adviemail]')[0].style.color = "red";
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
$('#feedback').click(function(){
    if ($('select[name = datavalidity]').val()!="") {
        $.ajax({
        url:'',
        type:'post',
        data:{
            datavalidity:$('select[name = datavalidity]').val(),
            nulldata:$('select[name = nulldata]').val(),
            remarks:$('textarea[name = remarks]').val(),
        },
        success:function(){
            if(data == 1){
                $('.feedbackp')[0].innerHTML = "反馈成功";
                setTimeout(function(){
                $('.feedbackp')[0].innerHTML = "";
                },3000) 
            }else{
                $('.feedbackp')[0].innerHTML = "反馈失败";
                setTimeout(function(){
                $('.feedbackp')[0].innerHTML = "";
                },3000) 
            }
        },
        error:function(){
            $('.feedbackp')[0].innerHTML = "服务器错误";
            setTimeout(function(){
            $('.feedbackp')[0].innerHTML = "";
            },3000)
        }
        })
    }else{
        $('.feedbackp')[0].innerHTML = "请选择数据有效性";
        setTimeout(function(){
        $('.feedbackp')[0].innerHTML = "";
        },3000)
    }
    
})

var obj = {}
 pingfen="";
$('#queding').click(function(){console.log($('#pingfen')[0].innerHTML)
    
    var ke1 = "",ke2="",ke3="";
    if($("input[name=ke1]")[0].checked){
        ke1 = 1
    }else{
        ke1 = 0
    }
    if($("input[name=ke2]")[0].checked){
        ke2 = 1
    }else{
        ke2 = 0
    }
    if($("input[name=ke3]")[0].checked){
        ke3 = 1
    }else{
        ke3 = 0
    }
    var obj1={
        // trade:$('input[name = trade]').val(),
        adviemail:$('input[name = adviemail]').val(),
        phonenumber:$('input[name = phonenumber]').val(),
        matephone:$('#matephone')[0].innerHTML,
        mobilephonenumber:$('input[name = mobilephonenumber]').val(),
        qqnumber:$('input[name = qqnumber]').val(),
        wxnumber:$('input[name = wxnumber]').val(),
        stuname:$('input[name = stuname]').val(),
        chatHistory:$('#chatHistory').val(),
        last_consult_time:"{{$data['last_consult_time']}}",
        did:did,type:1, _token:'{{csrf_token()}}'};
var obj2={pro1:$('#pro1').text(),
        class1:$('select[name = class1]').val(),
        kaoqi:$('select[name = kaoqi]').val(),
        yuyuetime:$('input[name = yuyuetime]').val(),
        yuyuemoney:$('input[name = yuyuemoney]').val(),
        payment:$('select[name = payment]').val(),
        did:$('#did').attr("data-did"),type:2};
    if (!$("input[type=checkbox]")[0].checked) {
        obj = obj1;
    }else{
        obj = obj2
    }
    if(localStorage.my_did != "12"){
        $('.modelprompt')[0].style.display = "block";
        $('.promptp')[0].innerHTML = "请点击溯回按钮返回上一页"
        return
    }
        
   
    if($('#pingfen')[0].innerHTML == ""){
        $.ajax({
            url:'',
            type:'post',
            data:{},
            success:function(data){
                $('#pingfen')[0].innerHTML = data;
                var wujiaox = document.querySelectorAll('.wujiaox')
                switch($('#pingfen')[0].innerHTML){
                case "A":
                for(let h=0;h<wujiaox.length;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
                    break;
                case "B":
                for(let h=0;h<wujiaox.length-1;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
                    break;
                case "C":
                for(let h=0;h<wujiaox.length-2;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
                    break;
                case "D":
                for(let h=0;h<wujiaox.length-3;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
                    break;
                case "E":
                for(let h=0;h<wujiaox.length-4;h++){wujiaox[h].style.background = 'url("img/wujiaoxing4.svg")';}
                    break;
                };
                obj.pingfen = $('#pingfen')[0].innerHTML;
                $.ajax({
                    url:'',
                    type:'post',
                    data:obj,
                    success:function(data){
                        if(data == 1){
                            $('.yuyuep')[0].innerHTML = "成功";
                            setTimeout(function(){
                                $('.yuyuep')[0].innerHTML = "";
                            },3000)
                        }else if(data == 0){
                            $('.yuyuep')[0].innerHTML = "失败"
                            setTimeout(function(){
                                $('.yuyuep')[0].innerHTML = "";
                            },3000)
                        }else{
                            $('.yuyuep')[0].innerHTML = "预约编号："+data;
                            setTimeout(function(){
                                $('.yuyuep')[0].innerHTML = "";
                            },3000)
                        }
                    },
                    error:function(){
                        $('.yuyuep')[0].innerHTML = "服务器错误";
                        setTimeout(function(){
                            $('.yuyuep')[0].innerHTML = "";
                        },3000)
                    }
                })
            },
            error:function(){
                
            }
        })
    }else{$.ajax({
            url:'',
            type:'post',
            data:obj,
            success:function(data){
                
                if(data == 1){
                    $('.yuyuep')[0].innerHTML = "成功";
                    setTimeout(function(){
                        $('.yuyuep')[0].innerHTML = "";
                    },3000)
                }else if(data == 0){
                    $('.yuyuep')[0].innerHTML = "失败"
                    setTimeout(function(){
                        $('.yuyuep')[0].innerHTML = "";
                    },3000)
                }else{
                    $('.yuyuep')[0].innerHTML = "预约编号："+data;
                    setTimeout(function(){
                        $('.yuyuep')[0].innerHTML = "";
                    },3000)
                }
            },
            error:function(){
                $('.yuyuep')[0].innerHTML = "服务器错误";
                setTimeout(function(){
                    $('.yuyuep')[0].innerHTML = "";
                },3000)
            }
        })}
        
})
$('#queding').click(function(){
    console.log(pingfen)
})
var phone = '';
$('.Adviphone').click(function(){
    var str = '';
    if($(this)[0].parentNode.nextSibling.innerHTML == ""){
        str = $(this)[0].parentNode.nextSibling.value
    }else{
        str = $(this)[0].parentNode.nextSibling.innerHTML
    }
    console.log(str)
    phone = str;
})
$('select[name = datavalidity]').change(function(){
    console.log(phone)                                                                    
    if($(this).val() == '反馈无效'){
        $('#nulldata')[0].style.display= "block";
    }else if($(this).val() == '反馈呼叫未通'){
        $('#nulldata')[0].style.display= "none";
        $('select[name = nulldata]')[0].value = 0;
        $.ajax({
            url:"",
            type:"post",
            data:{matephone:$('#matephone')[0].innerHTML,
                    phone:8888888},
            success:function(){

            }
        })
    }else{
        $('#nulldata')[0].style.display= "none";
        $('select[name = nulldata]')[0].value = 0;
    }
})
$('select[name = nulldata]').change(function(){
    if($(this).val() == '当日三遍未通'){
        $.ajax({
            url:"",
            type:"post",
            data:{matephone:$('#matephone')[0].innerHTML,
                    phone:8888888},
            success:function(){

            }
        })
    }
})
$("input[name=check]").change(function(){
    console.log(1)
    console.log($(this)[0].checked)
    $('input[name=yuyuemoney]')[0].value="";
    $('#queding').attr('disabled',false)
    if(!$(this)[0].checked){
        $('select[name = pro1]').attr('disabled','disabled')
        $('input[name = yuyuetime]').attr('disabled','disabled')
        $('input[name = yuyuemoney]').attr('disabled','disabled')
        $('select[name = class1]').attr('disabled','disabled')
        $('select[name = payment]').attr('disabled','disabled')
        $('select[name = sec1]').attr('disabled','disabled')
        $('select[name = kaoqi]').attr('disabled','disabled')
        $('input[name = nextretime]').attr('disabled',false)
        $('select[name = datavalidity]').attr('disabled',false)
        $('select[name = nulldata]').attr('disabled',false)
        $('textarea[name = remarks]').attr('disabled',false)
    }else{
        $('input[name = nextretime]').attr('disabled','disabled')
        $('select[name = datavalidity]').attr('disabled','disabled')
        $('select[name = nulldata]').attr('disabled','disabled')
        $('textarea[name = remarks]').attr('disabled','disabled')
        $('input[name = yuyuetime]').attr('disabled',false)
        $('input[name = yuyuemoney]').attr('disabled',false)
        $('select[name = class1]').attr('disabled',false)
        $('select[name = payment]').attr('disabled',false)
        $('select[name = sec1]').attr('disabled',false)
        $('select[name = kaoqi]').attr('disabled',false)
    }
})
var year =new  Date().getFullYear();
console.log(year)
var arr = [];
var k1 = year+"03";
var k2 = year+"04";
var k3 = year+"05";
var k4 = year+"06";
var k5 = year+"07";
var k6 = year+"09";
var k7 = year+"10";
var k8 = year+"11";
var k9 = year+"11";
var k10 = year+1+"考期";
arr.push(k1,k2,k3,k4,k5,k6,k7,k8,k9,k10)
console.log(arr)
for(var i = 0 ;i < arr.length;i++){
    $('select[name=kaoqi]')[0].innerHTML += "<"+"option value='"+arr[i]+"'"+">"+arr[i]+'<'+"/option"+">"
}
$('.laba').click(function(){
    console.log(1)
    $.ajax({
        url:"",
        type:"get",
        data:{},
        success:function(){

        }
    })
})