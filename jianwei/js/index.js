$(function () {
    var ipStation='http://47.110.127.119:8082';
    // var ipStation='http://39.100.225.4:8082';
    projects = ['健康管理师'];
    subjects = ['三级健康管理师'];
    courses = ['签约特招班', '委培无忧班', '基础精讲班', '定金班'];
    var tempStr = '',tempStr1 = '',tempStr2 = ''
    for(var i=0;i<projects.length;i++){
        tempStr +='<span>'+projects[i]+'</span>';
    }
    for(var i=0;i<subjects.length;i++){
        tempStr1 +='<span>'+subjects[i]+'</span>';
    }
    for(var i=0;i<courses.length;i++){
        tempStr2 +='<span>'+courses[i]+'</span>';
    }
    $("#hasSubjectText").html(subjects[0]);
    $("#hasProjectText").html(projects[0]);
    $("#hasClassText").html(courses[0]);
    $(".choseClassBox").find(".projectBox").html(tempStr).find("span:nth-child(1)").addClass("active");
    $(".choseClassBox").find(".subjectBox").html(tempStr1).find("span:nth-child(1)").addClass("active");
    $(".choseClassBox").find(".classBox").html(tempStr2).find("span:nth-child(1)").addClass("active");

//    页面加载获取屏幕高度
//     var _windowHeight=$(document).outerHeight();
//    存储选中的项目id，科目id，课程id，课程名字,输入的手机号，输入金额,支付方式
    var projectId,subjectId,classId,className,phoneNumber='',priceNumber='',payType='';
//    页面加载获取所有的项目科目课程数据
    // ajaxGetClassData(api.ajaxProject,'','get','oneLevel');
//    一级点击切换选中
    $(".projectBox").unbind("click").on("click","span",function () {
        var _thisId=$(this).attr("data-id");
        projectId=$(this).attr("data-id");
        $("#hasProjectText").html($(this).html());
        $(this).addClass("active").siblings().removeClass("active");
    });
//    二级点击切换
    $(".subjectBox").unbind("click").on("click","span",function () {
        var _thisId=$(this).attr("data-id");
        var _thisParentId=$(this).attr("data-parentid");
        $("#hasSubjectText").html($(this).html());
        subjectId=$(this).attr("data-id");
        $(this).addClass("active").siblings().removeClass("active");
    });
//    选中课程
    $(".classBox").unbind().on("click","span",function () {
        classId=$(this).attr("data-id");
        className=$(this).html();
        $("#hasClassText").html($(this).html());
        $(this).addClass("active").siblings().removeClass("active");
    });
//    选择支付方式
    $(".payTypeList span").click(function () {debugger
        $(this).addClass("active").siblings().removeClass("active");
        if($(this).hasClass("watchPay")){
            payType="watchPay";
        }
        if($(this).hasClass("alipayPay")){
            payType="alipayPay";
        }
        if($(this).hasClass("unionPay")){
            payType="unionPay";
        }
    });
//    支付输入框,电话验证
    $(".creatOrder li").on("blur","input",function () {
        if($(this).hasClass("phoneInput")){
            var _thisVal=$(this).val();
            var myreg=/^[1][3,4,5,6,7,8,9][0-9]{9}$/;
            if (!myreg.test(_thisVal)) {
                alert("请输入正确的电话号码");
                $(this).val("");
            } else {
                phoneNumber=$(this).val();
            }
        }
        if($(this).hasClass("inputPrice")){
            priceNumber=$(this).val();
        }
    });
    //限制输入的价格
    $(".creatOrder .priceInput").keyup(function () {
        var reg = $(this).val().match(/\d+\.?\d{0,2}/);
        var txt = '';
        if (reg != null) {
            txt = reg[0];
        }
        $(this).val(txt);
    }).change(function () {
        $(this).keypress();
         var v = $(this).val();
        if (/\.$/.test(v)) {
            $(this).val(v.substr(0, v.length - 1));
        }
    });
//    支付方式选择
    $("#orderPay").click(function () {debugger
        if(className !="" && classId !=""){
            if(phoneNumber !='' && priceNumber!=''){
                if(payType == ""){
                    alert("请选择支付方式")
                }else{
                    if(payType == "watchPay"){
                        var dataMess={money:priceNumber,commodityName:className,commodityId:classId,mobile:phoneNumber};
                        getPayCode(api.ajaxWeatch,dataMess)
                    }
                    if(payType == "alipayPay"){debugger
                        // var dataMess={money:priceNumber,commodityName:className,commodityId:classId,mobile:phoneNumber};
                        // getPayCode(api.ajaxZhiBao,dataMess)
                      
                        var param = "?money=" + priceNumber + "&commodityName="+className+"&commodityId="+classId+"&mobile="+phoneNumber;
                        window.open("http://47.110.127.119:8082/front/pay/newAlipay" + param)
                    }
                    if(payType == "unionPay"){
                        $(".bankDialog").show();
                    }
                }
            }else{
                if(phoneNumber ==''){
                    alert("请输入电话号码")
                    return false;
                }
                if(priceNumber ==''){
                    alert("请输入支付金额")
                    return false;
                }
            }
        }else{
            alert("请选择购买课程")
            return false;
        }
    });
//      关闭支付弹窗
    $(".payCode .closeCode").click(function () {
        $(".payCode").find(".codeBox").html("").end().hide();
    });
//   发送短信
    var orderNo;
    $("#sendSms").click(function () {
        if(className !="" && classId !=""){
            if(phoneNumber !='' && priceNumber!=''){
                var data = {};
                var name = $("#name").val();
                if(name.length == 0){
                    alert("姓名不能为空");
                    return false;
                }
                var cardType = $("#cardType option:selected").val();
                if(cardType.length == 0){
                    alert("请选择证件类型");
                    return false;
                }
                var cardNo = $("#cardNo").val();
                if(cardNo.length == 0){
                    alert("证件号不能为空");
                    return false;
                }
                var bankCardNo = $("#bankCardNo").val();
                if(bankCardNo.length == 0){
                    alert("银行卡号不能为空");
                    return false;
                }
                var mobile = $("#mobile").val();
                if(mobile.length == 0){
                    alert("银行预留手机号不能为空");
                    return false;
                }
                data.commodityId = classId;
                data.commodityName = className;
                data.money = priceNumber;
                data.cardType = cardType;
                data.cardNo = cardNo;
                data.bankCardNo = bankCardNo;
                data.mobile = mobile;
                data.name = name;

                $.ajax({
                    url:api.ajaxSendSMS,
                    data:data,
                    method:'POST',
                    success:function (data) {
                        if(data.code == 0){
                            orderNo = data.data.r3_OrderNo;
                            alert(data.data.rb_Msg);
                        }else{
                            alert(data.msg);
                        }

                    }
                });

            }else{
                if(phoneNumber ==''){
                    alert("请输入电话号码")
                    return false;
                }
                if(priceNumber ==''){
                    alert("请输入支付金额")
                    return false;
                }
            }
        }else{
            alert("请选择购买课程")
            return false;
        }
    });
//    提交快捷支付订单
    $(".opearBox .sureBtn").click(function () {
        if(className !="" && classId !=""){
            if(phoneNumber !='' && priceNumber!=''){
                var data = {};
                var name = $("#name").val();
                if(name.length == 0){
                    alert("姓名不能为空");
                    return false;
                }
                var cardType = $("#cardType option:selected").val();
                if(cardType.length == 0){
                    alert("请选择证件类型");
                    return false;
                }
                var cardNo = $("#cardNo").val();
                if(cardNo.length == 0){
                    alert("证件号不能为空");
                    return false;
                }
                var bankCardNo = $("#bankCardNo").val();
                if(bankCardNo.length == 0){
                    alert("银行卡号不能为空");
                    return false;
                }
                var mobile = $("#mobile").val();
                if(mobile.length == 0){
                    alert("银行预留手机号不能为空");
                    return false;
                }
                var smsCode = $("#smsCode").val();
                if(smsCode.length == 0){
                    alert("短信验证码不能为空");
                    return false;
                }
                data.commodityId = classId;
                data.commodityName = className;
                data.money = priceNumber;
                data.cardType = cardType;
                data.cardNo = cardNo;
                data.bankCardNo = bankCardNo;
                data.mobile = mobile;
                data.name = name;
                data.smsCode = smsCode;
                data.orderNo = orderNo;

                $.ajax({
                    url:api.ajaxSubmitUnionPay,
                    data:data,
                    method:'POST',
                    success:function (data) {
                        if(data.code == 0){
                            alert("付款成功");
                            $(".bankDialog").hide();
                        }else{
                            alert(data.msg);
                            $(".bankDialog").hide();
                        }

                    }
                })

            }else{
                if(phoneNumber ==''){
                    alert("请输入电话号码")
                    return false;
                }
                if(priceNumber ==''){
                    alert("请输入支付金额")
                    return false;
                }
            }
        }else{
            alert("请选择购买课程")
            return false;
        }
    });
//  取消弹出框
    $(".opearBox .cancelBtn").click(function () {
        $(".bankDialog").hide();
    });

//    初始化请求成功的回调
    function successCallback(data,level) {
        var tempStr='';
        var firstId='';
        switch(level){
            case"oneLevel":
                if(data.length>0){
                    for(var i=0;i<data.length;i++){
                        if(i==0){
                            firstId=data[0].id
                            projectId=data[0].id
                            $("#hasProjectText").html(data[0].name)
                        }
                        tempStr +='<span data-id='+data[i].id+'>'+data[i].name+'</span>';
                    }
                    $(".choseClassBox").find(".projectBox").html(tempStr).find("span:nth-child(1)").addClass("active");
                }else{
                    $(".choseClassBox").find(".projectBox").html("暂无数据~~~~");
                }
                ajaxGetClassData(api.ajaxProject,{parentId:firstId},'get','twoLevel');
                break;
            case"twoLevel":
                var towStageFirstId='';
                if(data.length>0){
                    for(var i=0;i<data.length;i++){
                        if(i==0){
                            towStageFirstId=data[0].id
                            subjectId=data[0].id
                            $("#hasSubjectText").html(data[0].name)
                        }
                        tempStr +='<span data-id='+data[i].id+' data-parentId='+data[i].parentId+'>'+data[i].name+'</span>';
                    }
                    $(".choseClassBox").find(".subjectBox").html(tempStr).find("span:nth-child(1)").addClass("active");
                    ajaxGetClassData(api.ajaxClass,{categoryOneId:firstId,categoryTowId:towStageFirstId},'get','threeLevel');
                }else{
                    $(".choseClassBox").find(".subjectBox").html("暂无数据~~~~");
                    $(".choseClassBox").find(".classBox").html("暂无数据~~~~");
                }
                break;
            case"threeLevel":
                if(data.length>0){
                    for(var i=0;i<data.length;i++){
                        classId=data[0].id;
                        className=data[0].courseName;
                        $("#hasClassText").html(data[0].courseName);
                        tempStr +='<span data-id='+data[i].id+' data-oneLevelId='+data[i].categoryOneId+' data-towLevelId='+data[i].categoryTowId+'>'+data[i].courseName+'</span>';
                    }
                    $(".choseClassBox").find(".classBox").html(tempStr).find("span:nth-child(1)").addClass("active");
                }else{
                    classId='';
                    className='';
                    $(".choseClassBox").find(".classBox").html("暂无数据~~~~");
                }
                break;
        }
        // $(".payCont").css("min-height",_windowHeight-140+"px");
    };
//初始化页面加载获取课程数据
    function ajaxGetClassData(ajaxUrl,sendData,type,level) {
        $.ajax({
            type:type,
            url:ajaxUrl,
            data:sendData,
            success:function (data) {
                if(data.code == 0){
                    successCallback(data.data,level);
                }else{
                    alert(data.msg);
                }
                
            }
        })
    };
    //    请求支付宝和微信支付二维码
    function getPayCode(ajaxUrl,sendData) {
        $.ajax({
            url:ajaxUrl,
            data:sendData,
            method:'POST',
            success:function (data) {
                if(data.code == 0){
                    $(".payCode").show();
                    var tempStr = "";
                    tempStr += '<img  href="#" src="'+ data.data.rd_Pic+ '" alt="code">';
                    tempStr += '<span><em>支付金额：</em>' + data.data.r3_Amount+ '元</span>';
                    $(".payCode .codeBox").html(tempStr);
                }else{
                    alert(data.msg);
                }
                
            }
        })
    }
});
