$("#submit").click( function () {
    var info_name= $("#info_name").val();
    var info_tel=  $("#info_tel").val();
    var info_educate=  $("select[name = educate]").val();
    var info_age=  $("select[name = age]").val();
     // if (!info_name){
     //    alert("请填写您的姓名");
     //    return;
     //    }
    if (!info_tel){
        alert("请填写您的手机号码");
        return;
    }
    if (!$("#info_tel").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(16[0-9]{1})|(18[0-9]{1})|(19[0-9]{1})|(17[0-9]{1}))+\d{8})$/)) {
        $("#info_tel").focus();
        alert("手机号不正确!");
        return false;
    } 
    $("#submit").attr({"disabled":"disabled"});
    var comefrom = 1 //来源
    var device = 2    //设备
    var object = 28  //项目
	var urlparm = window.location.href;

    $.ajax({
        url:"destine.huozhongedu.com/leave_message/leave_message.php",
        type:'post',
        data:{ 'mobile': info_tel,'url':urlparm,'years':info_age,'education':info_educate},
        dataType:'json',

        // jsonp: 'callback', //jsonp回调参数，必需
        // async: false,
        success:function(json){
            console.log(json);
            if(json.code == 200){
                $("input").val('');
               alert("感谢您的注册，请耐心等待通知：）");
            }
        }
    });
	// mantis 
	// sendPage(info_tel, info_name, '', null);
});




$("#submit2").click( function () {
    var info_name= $("#info_name2").val();
    var info_tel=  $("#info_tel2").val();
     var info_educate=  $("select[name = educate]").val();
    var info_age=  $("select[name = age]").val();
    // if (!info_name){
    //     alert("请填写您的姓名");
    //     return;
    //     }
    if (!info_tel){
        alert("请填写您的手机号码");
        return;
    }
    if (!$("#info_tel2").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(16[0-9]{1})|(18[0-9]{1})|(19[0-9]{1})|(17[0-9]{1}))+\d{8})$/)) {
        $("#info_tel2").focus();
        alert("手机号不正确!");
        return false;
        }

    $("#submit2").attr({"disabled":"disabled"});
    var comefrom = 1 //来源
    var device = 2    //设备
    var object =28  //项目
	var urlparm = window.location.href;
	

    $.ajax({
        url:"destine.huozhongedu.com/leave_message/leave_message.php",
        type:'post',
        data:{ 'mobile': info_tel,'url':urlparm,'years':info_age,'education':info_educate},
        dataType:'json',
        // jsonp: 'callback', //jsonp回调参数，必需
        // async: false,
        success:function(json){
            console.log(json);
            if(json.code == 200){
                $("input").val('');
               alert("感谢您的注册，请耐心等待通知：）");
            }
        }
    });
	// mantis 
	// sendPage(info_tel, info_name, '', null);
});
