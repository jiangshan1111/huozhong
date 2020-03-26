var msgCount;
var  rootPath1 = "http://manage.yunduoketang.com"
     $(function(){
     	$(".sendClassPackage").hide();

		$(".sendStuMsg").show();
		$(".phoneHint").hide();
		$("#ckecktor").hide();
 		$selectSubMenu('student_message');
 		selectGroup1('_edit');
 		selItem();
		$("#one").getSysItem("type4",function(){
            $("#one option").eq(0).remove();
            $("#one option").eq(0).attr("selected",true);
            var messageType = $(".btn-type.btn-primary").attr("data-type");
            var oneItem = $("#one").val();
            selTwoItem(messageType,oneItem);
		});
 		selOneType();
		 $("#codeimg,#refeshcodeimg").bind("click",function(){
			 $("#codeimg").html('<img src="'+rootPath1+'/captcha?refesh='+new Date()+'" height="28" width="64" alt="点击刷新验证码" onclick="Form.refreshCaptcha()">')
		 })
		 $("#codeimg").trigger("click");
 		$("#oneType").change(function(){
			var messageType = $(".btn-type.btn-primary").attr("data-type");
            $("#twoType").empty();
			var code = $("#oneType").val();
			selTwoType(messageType,code);
		});

         $("#twoType").change(function(){
             var messageType = $(".btn-type.btn-primary").attr("data-type");
             $("#threeType").empty();
             var code = $("#twoType").val();
             var co = $("#oneType").val();
             if (code==""){
             	code = co;
			 }
             selThreeType(messageType,code);
         });

         $("#threeType").change(function () {
             selectPackage();
         });

         $("#package").change(function () {
             var id = $("#package").val();
             if(id!==null){
                 $.ajax({
                     url: rootPath1+"/classPackageStage/queryClassPackageStages",
                     type: "post",
                     dataType: "json",
                     data: {"classPackageId":id},
                     success: function(jsonData){

                         $("#jieduan").empty();

                         // if(jsonData.length>0){
                             $("#jieduan").append("<option value='" + 0 + "'>" + '全部阶段' + "</option>");

                             var data = {};
                             data.commodityId=id;
                         	 data.status = 1;

                             $.ajax({
                                 url: rootPath1 + "/classPackage/queryStudentsList",
                                 data: data,
                                 type: 'post',
                                 success: function (jsonData) {

                                     if (jsonData.rowCount > 0) {
                                         $('#num,#sendStu,#useMsg,#sendCount,#useEmailMsg').html(jsonData.rowCount|| 0);
                                         valida();
                                     }else{
                                         $('#num,#sendStu,#useMsg,#sendCount,#useEmailMsg').html(0);
                                         valida();
                                     }
                                 }
                             });
						 // }else{
                          //    $("#num").html(0 + "人");
                          //    $("#sendCount").html(0 + "人");
                          //    $("#useEmailMsg").html(0);
                          //    $("#useMsg").html("0条");
						 // }
                         if(jsonData.length>0) {
                             $.each(jsonData, function (index, item) {
                                 $("#jieduan").append("<option value='" + item.id + "'>" + item.title + "</option>");
                             });
                         }

                     }
                 });

             }else{
                 $("#jieduan").empty();
                 $('#num,#sendStu,#useMsg,#sendCount,#useEmailMsg').html(0);
                 valida();
			 }
         });

         $("#jieduan").change(function () {
             var id = $("#package").val();
			 var stageId = $("#jieduan").val();

             var data = {};
             data.commodityId=id;
			 data.stageId=stageId;
             data.status = 1;

             $.ajax({
                 url: rootPath1 + "/classPackage/queryStudentsList",
                 data: data,
                 type: 'post',
                 success: function (jsonData) {

                     if (jsonData.rowCount > 0) {
                         $('#num,#sendStu,#useMsg,#sendCount,#useEmailMsg').html(jsonData.rowCount||0);
                         valida();
                     }else{
                         $('#num,#sendStu,#useMsg,#sendCount,#useEmailMsg').html(0);
                         valida();
                     }
                 }
             });

         });

 		msgCount = $("#totalMsg").val();
 		$("#one").change(function(){
            $('input:checkbox[name="include"]').removeAttr("checked");
 	    	var messageType = $(".btn-type.btn-primary").attr("data-type");
 	    	var oneItem = $("#one").val();
 	    	selTwoItem(messageType,oneItem);
 		});
 		$("#two").change(function(){
            $('input:checkbox[name="include"]').removeAttr("checked");
 	    	var messageType = $(".btn-type.btn-primary").attr("data-type");
 	    	var oneItem = $("#one").val();
 			 if(messageType == "STUDENT_MESSAGE_CLASSTYPE"){
 				 url = rootPath1 + "/classModule/selClassType?nolimit=yes";
 				 $("#classTitle").html("课程：");
 			 }else if(messageType == "STUDENT_MESSAGE_MODULENO"){
 				 url = rootPath1 + "/classModule/selModuleNo";
 				 $("#classTitle").html("班号：");
 			 }
 	    	selClassOrModule(url,oneItem,$("#two").val());
 		});

 		$(".btn-method").on('click',function(){
            $(".hintUsername").hide();
            $('input:checkbox[name="include"]').removeAttr("checked");
 			var type = $(this).data("type");
			$(this).addClass('btn-primary').removeClass('btn-default').siblings().removeClass('btn-primary').addClass('btn-default');//选中第一行
			$(".btn-type:first").addClass('btn-primary').removeClass('btn-default').siblings().removeClass('btn-primary').addClass('btn-default');//第二行默认选中第一个
			selItem();
			if(type == 'STUDENT_MESSAGE_MOBILE'){
				// $(".btn-type").last().prev().show();
				$(".group-message").css("display","inline-block");
				$(".special-message").css("display","inline-block");
				$(".phoneHint,.emailHint,.emailTitle,#ckecktor,#email_ckecktor,.use_email,.stuGroup").hide();
				$(".sendStuMsg,.zhan,#messageContent").show();
			}
			if(type == "STUDENT_MESSAGE_WEB"){
				// $(".btn-type").last().prev().hide();
                $(".group-message").css("display","none");
                // $(".special-message").css("display","none");
				$("#messageContent,.zhan,.phoneHint,.emailHint,.emailTitle,#email_ckecktor,#use_email,.stuGroup,.use_email").hide();
				$("#ckecktor,.sendStuMsg").show();

			}
			if(type == 'STUDENT_MESSAGE_EMAIL'){
				// $(".btn-type").last().prev().show();
                $(".group-message").css("display","inline-block");
                $(".special-message").css("display","inline-block");
				$(".phoneHint,.emailHint,#ckecktor,#messageContent,.zhan").hide();
				$(".sendStuMsg,.emailTitle,#email_ckecktor,.use_email").show();
			}

			$(".sendClassPackage,.stuSign").hide();
 		});
 		$('.btn-type').on('click',function(){
            $(".hintUsername").hide();
            $('input:checkbox[name="include"]').removeAttr("checked");
 			var notice_fs;
 			var notice_type = $(this).data('type');
 			$.each($('.btn-method'),function(){
 				if($(this).hasClass('btn-primary')) notice_fs = $(this).data('type');
 			});
 			$(this).addClass('btn-primary').removeClass('btn-default').siblings().removeClass('btn-primary').addClass('btn-default');
 			if(notice_fs == 'STUDENT_MESSAGE_MOBILE' && notice_type == 'STUDENT_MESSAGE_SPECIAL'){
 				$(".phoneHint").show();
 				$(".sendStuMsg,.emailHint,.stuGroup,.stuSign").hide();
                $('.sendClassPackage').hide();
 			}
            if(notice_fs == 'STUDENT_MESSAGE_WEB' && notice_type == 'STUDENT_MESSAGE_SPECIAL'){
 				$(".hintUsername").show();
                $(".phoneHint").show();
                $(".sendStuMsg,.emailHint,.stuGroup,.stuSign").hide();
                $('.sendClassPackage').hide();
            }
 			if(notice_fs == 'STUDENT_MESSAGE_EMAIL' && notice_type == 'STUDENT_MESSAGE_SPECIAL'){
 				$(".emailHint").show();
 				$(".sendStuMsg,.phoneHint,.stuGroup,.stuSign").hide();
                $('.sendClassPackage').hide();
 			}
 			if(notice_type == 'STUDENT_MESSAGE_CLASSTYPE'){
 				selItem();
 				$('.sendStuMsg,.include').show();
 				$('.phoneHint,.emailHint,.stuGroup,.stuSign').hide();
                $('.sendClassPackage').hide();
 			}
 			if(notice_type == 'STUDENT_MESSAGE_MODULENO'){
                selItem();
                $('.sendStuMsg').show();
                $('.phoneHint,.emailHint,.stuGroup,.stuSign').hide();
                $('.sendClassPackage,.include').hide();
			}
 			if(notice_type == 'STUDENT_MESSAGE_GROUP'){
 				selectGroup1('_edit');
 				$('.stuGroup').show();
 				$('.phoneHint,.emailHint,.sendStuMsg,.stuSign').hide();
                $('.sendClassPackage').hide();
 			}

 			if(notice_type == 'STUDENT_MESSAGE_CLASSPACKAGE'){
                selectPackage();
                $('.phoneHint,.emailHint,.sendStuMsg,.stuGroup,.stuSign').hide();
                $('.sendClassPackage').show();
			}
			if(notice_type == 'STUDENT_MESSAGE_NOSIGN'){
 				selectStudentSign();
                $(".stuSign").show();
                $(".phoneHint,.sendStuMsg,.emailHint,.stuGroup").hide();
                $('.sendClassPackage').hide();
			}
 			valida();
			resetFooterPosition()
 		});

 		$("#class").change(function(){
            $('input:checkbox[name="include"]').removeAttr("checked");
 			selPerson();
			valida();
			resetFooterPosition();
 		});
 		$("#useMsg").html("0条");
 		$("#write").html(0);
 		$("#Surplus").html(msgCount + "条");

 		$(".btn-send").click(function(){
 			var title = $.trim($("#title").val());
 			var method = $.trim($(".btn-method.btn-primary").attr("data-type"));
 			var types = $.trim($(".btn-type.btn-primary").attr("data-type"));
 			var flag =$('input:checkbox[name="include"]').is(":checked");
 			var include = "0";
			if(flag){
				include="1";
			}
 			var msgcount = "";
 			var emailTitle = '';
 			var oneItemId = null;
 			var twoItemId = null;
 			var classId = null;
 			var groupOneId = null;
 			var groupTwoId = null;
 			var groupThrId = null;
 			var groupFouId = null;
 			var groupFivId = null;
 			var phone = null;
 			var email = null;

 			var itemThirdId = null;
 			var classPackageId = null;
 			var classPackageName = null;
 			var classPackageStageId = null;

			$(".loading,.loading-bg").show();
 			if(title == ""){
				$("#title").focus();
				$("#title").select();
				$(".loading,.loading-bg").hide();
				return false;
 			}

 			if(method == 'STUDENT_MESSAGE_MOBILE' && types == "STUDENT_MESSAGE_SPECIAL"){
 				phone = $.trim($("#phone").val());
 				if(phone == ""){
 					$("#phone").focus();
 					$("#phone").select();
					$(".loading,.loading-bg").hide();
 					return false;
 				}
 				phone = phone.replace(/，/g,",");
 				var reg = /^1(?:3\d{3}|5[^4\D]\d{2}|8\d{3}|7(?:[01356789]\d{2}|4(?:0\d|1[0-2]|9\d))|9[189]\d{2}|6[567]\d{2}|4(?:[14]0\d{3}|[68]\d{4}|[579]\d{2}))\d{6}$/;
 				if(phone.indexOf(",") < 0){
 					phone = phone.replace(/[^0-9]/ig,"");
 	 				if(!reg.test($.trim(phone))){
 	 					$("#phone").focus();
 	 					$('<div class="c-fa">'+ "手机号" + phone + "格式不正确！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
 	 						$(this).remove();}
 	 					);
						$(".loading,.loading-bg").hide();
 	 					return false;
 	 				}
 				}else{
 					var array = phone.split(",");
 					for(var i = 0 ; i < array.length ; i++){
 						var tPhone = array[i];
 						if(tPhone != null){
 							tPhone = tPhone.replace(/[^0-9]/ig,"");
 						}
 	 	 				if(!reg.test($.trim(tPhone))){
 	 	 					$("#phone").focus();
 	 	 					$('<div class="c-fa">'+ "手机号" + array[i] + "格式不正确！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
 	 	 						$(this).remove();}
 	 	 					);
							$(".loading,.loading-bg").hide();
 	 	 					return false;
 	 	 				}
 					}
 				}
 			}
            if(method == 'STUDENT_MESSAGE_WEB' && types == "STUDENT_MESSAGE_SPECIAL"){
                phone = $.trim($("#phone").val());
                if(phone == ""){
                    $("#phone").focus();
                    $("#phone").select();
                    $(".loading,.loading-bg").hide();
                    return false;
                }
                phone = phone.replace(/，/g,",");
                var regInt = new RegExp("^[0-9]*$");
                var reg = /^1(?:3\d{3}|5[^4\D]\d{2}|8\d{3}|7(?:[01356789]\d{2}|4(?:0\d|1[0-2]|9\d))|9[189]\d{2}|6[567]\d{2}|4(?:[14]0\d{3}|[68]\d{4}|[579]\d{2}))\d{6}$/;
                if(phone.indexOf(",") < 0){
                    // phone = phone.replace(/[^0-9]/ig,"");
                    if(!reg.test($.trim(phone)) && regInt.test($.trim(phone))){
                        $("#phone").focus();
                        $('<div class="c-fa">'+ "手机号" + phone + "格式不正确！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
                            $(this).remove();}
                        );
                        $(".loading,.loading-bg").hide();
                        return false;
                    }
                }else{
                    var array = phone.split(",");
                    for(var i = 0 ; i < array.length ; i++){
                        var tPhone = array[i];
                        if(tPhone != null){
                            // tPhone = tPhone.replace(/[^0-9]/ig,"");
                        }
                        if(!reg.test($.trim(tPhone))  && regInt.test($.trim(tPhone)) ){
                            $("#phone").focus();
                            $('<div class="c-fa">'+ "手机号" + array[i] + "格式不正确！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
                                $(this).remove();}
                            );
                            $(".loading,.loading-bg").hide();
                            return false;
                        }
                    }
                }
            }
 			if(method == 'STUDENT_MESSAGE_EMAIL'){
 				emailTitle = $.trim($('#email_title').val());
 				if(!emailTitle){
 					$('#emailTitle').focus();
 					$('<div class="c-fa">'+ "请填写邮件标题！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
	 						$(this).remove();}
	 					);
					$(".loading,.loading-bg").hide();
 					return;
 				}
 			}
 			if(method == 'STUDENT_MESSAGE_EMAIL' && types == "STUDENT_MESSAGE_SPECIAL"){
 				email = $.trim($('#email').val());
 				if(!email){
 					$("#email").focus();
 					$("#email").select();
 					return false;
 				}
 				email = email.replace(/，/g,",");
 				var reg = /^[a-zA-Z0-9_·.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/;
 				if(email.indexOf(',') < 0){
 					if(!reg.test(email)){
 						$('#email').focus();
 						$('<div class="c-fa">'+ "邮箱" + email + "格式不正确！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
 	 						$(this).remove();}
 	 					);
						$(".loading,.loading-bg").hide();
 	 					return false;
 					}
 				}else{
 					var arr = email.split(',');
 					for(var i=0;i<arr.length;i++){
 						if(!reg.test($.trim(arr[i]))){
 							$('<div class="c-fa">'+ "邮箱" + arr[i] + "格式不正确！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
 	 	 						$(this).remove();}
 	 	 					);
							$(".loading,.loading-bg").hide();
 	 	 					return false;
 						}
 					}
 				}
 			}
 			if(types == 'STUDENT_MESSAGE_CLASSTYPE' || types == 'STUDENT_MESSAGE_MODULENO'){
 				oneItemId = $.trim($("#one").val());
 				twoItemId = $.trim($("#two").val());
 				classId = $.trim($("#class").val());
				if(!classId){
                    $.msg("请先选择课程！");
					$(".loading,.loading-bg").hide();
                    return false;
                }
 			}
 			if(types == 'STUDENT_MESSAGE_GROUP'){
 				groupOneId = $.trim($('#studentG1_edit').val());
 				groupTwoId = $.trim($('#studentG2_edit').val());
                groupThrId = $.trim($('#studentG3_edit').val());
                groupFouId = $.trim($('#studentG4_edit').val());
                groupFivId = $.trim($('#studentG5_edit').val());
 			}

 			if(types == 'STUDENT_MESSAGE_CLASSPACKAGE'){
                oneItemId = $.trim($("#oneType").find('option:selected').attr("memberType"));
                twoItemId = $.trim($("#twoType").find('option:selected').attr("memberType"));
                itemThirdId = $.trim($("#threeType").find('option:selected').attr("memberType"));
                classPackageId = $.trim($("#package").val());
                classPackageName = $.trim($("#package").find('option:selected').attr("memberType"));
                classPackageStageId = $.trim($("#jieduan").val());
                if(!classPackageId){
                    $.msg("请先选择课程包！");
					$(".loading,.loading-bg").hide();
                    return false;
                }
            }

 			if(method == "STUDENT_MESSAGE_WEB"){
 				CKupdate();
 				msgcount = $("#newsContents").val();
 				msgcount = msgcount.replace(/<p>/g, "<span>");
 				msgcount = msgcount.replace(/<p /g, "<span ");
 				msgcount = msgcount.replace(/<\/p>/g, "</span><br>");
 			}else if(method == 'STUDENT_MESSAGE_EMAIL'){
 				CKupdate();
 				msgcount = $("#email_newsContents").val();
// 				msgcount = msgcount.replace(/<p>/g, "<span>");
// 				msgcount = msgcount.replace(/<p /g, "<span ");
// 				msgcount = msgcount.replace(/<\/p>/g, "</span><br>");
 			}else{
 				msgcount = $.trim($("#msgcount").val());
 			}
 			if(!msgcount){
// 				if(!reg.test($.trim(arr[i]))){
					$('<div class="c-fa">'+ "发送内容不能为空！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
 						$(this).remove();}
 					);
				$(".loading,.loading-bg").hide();
 					return false;
//				}
 			}
			var imgCode = $.trim($("#checkcode").val());
 			$.ajax({
 				url:rootPath1 + "/classModule/sendMsg",
 				type:"post",
 				data:{"title":title,"content":msgcount,"messageType":types,"messageMethod":method,"itemOneId":oneItemId,"itemSecondId":twoItemId,"classTypeId":classId,'groupOneId':groupOneId,'groupTwoId':groupTwoId,"groupThreeId":groupThrId,"groupFourId":groupFouId,"groupFiveId":groupFivId,'email':email,'emailTitle':emailTitle,"phone":phone,"moduleNoId":classId,"itemThirdId":itemThirdId,"classPackageId":classPackageId,"classPackageName":classPackageName,"classPackageStageId":classPackageStageId,"imgCode":imgCode,"include":include},
 				dataType:"json",
 				success:function(data){
 					if(data.result == "success"){
						$(".loading").hide();
						var msg ="消息已发送!";
						if(method == 'STUDENT_MESSAGE_MOBILE'){
                            msg = "消息通知已提交!";
						}
                        $('<div class="c-fa">'+msg+'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
                            $(this).remove();
                            location.href = rootPath1 + "/student/notice";
                            $(".loading").show();
                        });
 					}else if(data.result == "content_erro"){
						$(".loading,.loading-bg").hide();
                        $('<div class="c-fa">'+ "请正常填写发送内容！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
                            $(this).remove();
                        });
					}else if(data.result == "code_error"){
						$(".loading,.loading-bg").hide();
						$("#codeimg").trigger("click");
						$('<div class="c-fa">'+ "图形验证码错误！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
							$(this).remove();
						});
					}else{
						$(".loading,.loading-bg").hide();
			            if(data.result == "stuno"){
					        $('<div class="c-fa">'+ "当前没有学员！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
					        	$(this).remove();
					        });
			            }else if(data.result == "msgNotCount"){
                            $('<div class="c-fa">'+ "短信量不足，请购买后再发送" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
                                $(this).remove();
                            });
                        }else if(data.result == "mailNotCount"){
                            $('<div class="c-fa">'+ "邮件量不足，请购买后再发送" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
                                $(this).remove();
                            });
                        }else{
					        $('<div class="c-fa">'+ "消息发送失败！" +'</div>').appendTo('body').fadeIn(100).delay(2000).fadeOut(200,function(){
					        	$(this).remove();
					        });
			            }
 					}
 				}
 			});
 		});

		 $('input:checkbox[name="include"]').change(function(){
			 if($(this).is(":checked")){
				 selPackagePerson();
                 valida();
			 }else{
                 var num = $(".btn-view").html();
                 num = num.substr(0,num.length-1);
                 num = parseInt(num) - parseInt($("#countNoRepeat").val());
                 $(".btn-view").html(num + "人");
                 $("#sendStu,#useEmailMsg").html(num);
                 valida();
			 }
		 });

     });

	function selOneType(){
		var messageType = $(".btn-type.btn-primary").attr("data-type");
		var code = $("#oneType").val();
		selTwoType(messageType,code);
	}

	function selTwoType(messageType,code){

		var co = code;

		$.ajax({
			url:rootPath1 + "/classPackageCategory/queryCategoryList",
			type:"post",
            data : {"leavl":"second","code":code,"status":1},
			dataType:"json",
			success:function(data){
				$("#twoType").empty();

                $("#twoType").append("<option value='" + "'>" + '全部' + "</option>");

				$.each(data,function(index,item){
					$("#twoType").append("<option value='" + item.code + "'memberType='" +item.id+"'>" + item.name + "</option>");
				});

                var messageType = $(".btn-type.btn-primary").attr("data-type");
                var code = $("#twoType").val();

                if(code==""){
                	code = co;
				}
                selThreeType(messageType,code);

			}
		});
	}


	function selThreeType(messageType,code){
		$.ajax({
			url:rootPath1 + "/classPackageCategory/queryCategoryList",
			type:"post",
            data : {"leavl":"third","code":code,"status":1},
			dataType:"json",
			success:function(data){
				$("#threeType").empty();

                $("#threeType").append("<option value='" + "'>" + '全部' + "</option>");

				$.each(data,function(index,item){
					$("#threeType").append("<option value='" + item.code + "'memberType='" +item.id+"'>" + item.name + "</option>");
				});

                selectPackage()

			}
		});
	}
	//查询未报名学员
	function selectStudentSign(){
		$.ajax({
			url: rootPath1 + "/student/noSignUp",
			type:"post",
			success:function(data){
				$("#stuSignCount,#useEmailMsg").html("").html(data.count || 0);
                $("#sendStuSign").html("").html(data.count || 0);
				valida();
			}
		});
	}
	//查询课程包
	function selectPackage() {

		var one = $("#oneType").val();
        var two = $("#twoType").val();
        var three = $("#threeType").val();
        var code = '';
		if(three!==""){
			code = three;
		}else if(two!==""&&three==""){
			code = two;
		}else{
			code = one;
		}

        $.ajax({
            url : rootPath1 + "/classPackage/queryPackageList",
            type : "post",
            data : {"code" : code},
            success : function(result) {
                $("#package").empty();
                $.each(result.data,function(index,item){
                    $("#package").append("<option value='" + item.id + "'memberType='" +item.name+"'>" + item.name + "</option>");
                });

                var id = $("#package").val();
                if(id!==null){
                    $.ajax({
                        url: rootPath1+"/classPackageStage/queryClassPackageStages",
                        type: "post",
                        dataType: "json",
                        data: {"classPackageId":id},
                        success: function(jsonData){

                            $("#jieduan").empty();

                            // if(jsonData.length>0){
                                $("#jieduan").append("<option value='" + 0 + "'>" + '全部阶段' + "</option>");

                                var data = {};
                                data.commodityId=id;
                            	data.status = 1;

                                $.ajax({
                                    url: rootPath1 + "/classPackage/queryStudentsList",
                                    data: data,
                                    type: 'post',
                                    success: function (jsonData) {

                                        if (jsonData.rowCount > 0) {
                                            $('#num,#useMsg,#sendCount,#useEmailMsg').html(jsonData.rowCount|| 0);
                                            valida();
                                        }else{
                                            $('#num,#useMsg,#sendCount,#useEmailMsg').html(0);
                                            valida();
                                        }
                                    }
                                });

							// }else{
                             //    $("#num").html(0 + "人");
                             //    $("#sendCount").html(0 + "人");
                             //    $("#useEmailMsg").html(0);
                             //    $("#useMsg").html("0条");
							// }
                            if(jsonData.length>0) {
                                $.each(jsonData, function (index, item) {
                                    $("#jieduan").append("<option value='" + item.id + "'>" + item.title + "</option>");
                                });
                            }

                        }
                    });

                }else{
                    var type = $(".btn-type.btn-primary").attr("data-type");
                    if(type != 'STUDENT_MESSAGE_CLASSTYPE'){
                        $("#jieduan").empty();
                        $('#num,#sendStu,#useMsg,#sendCount,#useEmailMsg').html(0);
                        valida();
                    }
                }

            }


        });

    }

     function selItem(){
    	 var messageType = $(".btn-type.btn-primary").attr("data-type");
    	 var oneItem = $("#one").val();
    	 selTwoItem(messageType,oneItem);
     }

     function selTwoItem(messageType,oneItem){
     	//把课程下拉框置空
         $("#class").empty();
         $("#select2-class-container").text("");
         $(".include").hide();
         $("#two").html('').getSysItem("type4",oneItem,function(){
             $("#two option").eq(0).remove();
             $("#two option").eq(0).attr("selected",true);
             var url = "";
             if(messageType == "STUDENT_MESSAGE_CLASSTYPE"){
                 url = rootPath1 + "/classModule/selClassType?nolimit=yes";
                 $("#classTitle").html("课程：");
             }else if(messageType == "STUDENT_MESSAGE_MODULENO"){
                 url = rootPath1 + "/classModule/selModuleNo";
                 $("#classTitle").html("班号：");
             }
             selClassOrModule(url,oneItem,$("#two").val());
         });
    	 // $.ajax({
    		//  url:rootPath1 + "/classModule/selTwoItem",
    		//  type:"post",
    		//  data:{"oneItem":oneItem},
    		//  dataType:"json",
   		// 	beforeSend:function(XMLHttpRequest){
   	  //             $(".loading").show();
   	  //             $(".loading-bg").show();
   	  //        },
    		//  success:function(data){
    		// 	 $("#two").empty();
    		// 	 $.each(data.two,function(index,item){
    		// 		 $("#two").append("<option value='" + item.id + "'>" + item.itemName + "</option>");
    		// 	 });
    		// 	 var url = "";
    		// 	 if(messageType == "STUDENT_MESSAGE_CLASSTYPE"){
    		// 		 url = rootPath1 + "/classModule/selClassType";
    		// 		 $("#classTitle").html("课程：");
    		// 	 }else if(messageType == "STUDENT_MESSAGE_MODULENO"){
    		// 		 url = rootPath1 + "/classModule/selModuleNo";
    		// 		 $("#classTitle").html("班号：");
    		// 	 }
    		// 	 selClassOrModule(url,oneItem,$("#two").val());
    		//  }
    	 // });
     }

     function selClassOrModule(url,oneItem,twoItem){
     	$.ajax({
			 url:url,
			 type:"post",
			 data:{"itemOneId":oneItem,"itemSecondId":twoItem},
			 dataType:"json",
	   			beforeSend:function(XMLHttpRequest){
	   	              $(".loading").show();
	   	              $(".loading-bg").show();
	   	         },
			 success:function(data){
				 $("#class").empty();
				 $.each(data.types,function(index,item){
					 $("#class").append("<option value='" + item.id + "'>" + item.name + "</option>");
				 });
				 $(".js-example-basic-single").select2();
				 selPerson();
                 valida();
			 },
             complete:function(XMLHttpRequest,textStatus){
                 $(".loading").hide();
                 $(".loading-bg").hide();
             }
		 });
     }

     function selPerson(){
    	 //查询人数
    	 var messageType = $(".btn-type.btn-primary").attr("data-type");
    	 var classTypeId = $("#class").val();
    	 var itemOneId = $("#one").val();
    	 var itemSecondId = $("#two").val();
    	 $.ajax({
    		 url:rootPath1 + "/classModule/selPerson",
             async:false,
    		 type:"post",
    		 data:{"messageType":messageType,"id":classTypeId,"itemOneId":itemOneId,"itemSecondId":itemSecondId},
    		 dataType:"json",
    			beforeSend:function(XMLHttpRequest){
     	              $(".loading").show();
     	              $(".loading-bg").show();
     	         },
    		 success:function(data){
				 var countPackage = data.countPackage;
				 if(countPackage > 0 ){
				 	$(".include").show();
				 }else{
                     $(".include").hide();
				 }
				 $("#countNoRepeat").val(data.countNoRepeat);
    			 $(".btn-view").html(data.count + "人");
    			 $("#sendStu,#useEmailMsg").html(data.count);
    		 },
	   			complete:function(XMLHttpRequest,textStatus){
	   				$(".loading").hide();
	   	            $(".loading-bg").hide();
	   	        }
    	 });
     }

     //是否显示是否包含按钮
	 function showInclude(){
         var clazz = $("#class").val();
         if(!clazz || clazz ==""){
             $(".include").hide();
         }else{
             $.ajax({
                 url:rootPath1 + "/classModule/selClassPackageNumByClassTypeId",
                 async:false,
                 type:"get",
                 data:{"id":clazz},
                 dataType:"json",
                 beforeSend:function(XMLHttpRequest){
                     $(".loading").show();
                     $(".loading-bg").show();
                 },
                 success:function(data){
                     if(data && data.num > 0){
                         $(".include").show();
                     }else{
                         $(".include").hide();
                     }
                 },
                 complete:function(XMLHttpRequest,textStatus){
                     $(".loading").hide();
                     $(".loading-bg").hide();
                 }
             })
         }
	 }


	//5.8 创建课程通知时，增加复选框支持选择是否发放给报名包含此课程的课程包的学员
	function selPackagePerson(){
		/*var classTypeId = $("#class").val();
		$.ajax({
			url:rootPath1 + "/classModule/selPackagePerson",
			async:false,
			type:"post",
			data:{"id":classTypeId},
			dataType:"json",
			beforeSend:function(XMLHttpRequest){
				$(".loading").show();
				$(".loading-bg").show();
			},
			success:function(data){
				var num = $(".btn-view").html();
				num = num.substring(0,1);
				num = parseInt(num) + parseInt(data.count);
				$(".btn-view").html(num + "人");
				$("#sendStu,#useEmailMsg").html(num);
			},
			complete:function(XMLHttpRequest,textStatus){
				$(".loading").hide();
				$(".loading-bg").hide();
			}
		});*/
        var num = $(".btn-view").html();
        num = num.substr(0,num.length-1);
        num = parseInt(num) + parseInt($("#countNoRepeat").val());
        $(".btn-view").html(num + "人");
        $("#sendStu,#useEmailMsg").html(num);
	}

     function valida(){
    	 var method = $.trim($(".btn-method.btn-primary").attr("data-type"));

    	// console.info(method);

    	 switch(method){
    	 	case "STUDENT_MESSAGE_EMAIL":
    	 		if($(".btn-type.btn-primary").attr("data-type") == "STUDENT_MESSAGE_SPECIAL"){
    	 			 var count = 1;
    				 var phone = $.trim($("#email").val());
    				 if(phone.indexOf(",") < 0){
    					 var useMsg = count;
    		      		 $("#useEmailMsg").html(useMsg);
    				 }else{
    					 var phones = phone.split(",");
    					 var person = phones.length;
    		      		 var useMsg = count * parseInt(person);
    		      		 $("#useEmailMsg").html(useMsg);
    				 }
    			}
    	 		break;
    	 	default:
    	 		 if($(".btn-type.btn-primary").attr("data-type") == "STUDENT_MESSAGE_MODULENO"){

    	 		 	//班号通知

    	        	 var count = ($.trim($("#msgcount").val())).length+6;

    	      		 var person = $.trim($("#sendStu").text());
                     var useMsg;
                     if(count > 70){
                         useMsg = parseInt((count % 67) == 0 ? (count / 67) : (count / 67) + 1 ) * parseInt(person);
                     }else{
                         useMsg=1 * parseInt(person);
                     }
                     $("#hasCounts").html( parseInt(500) - parseInt(count) );
    	      		 $("#useMsg").html(useMsg + "条");
    	      		 $("#Surplus").html((msgCount)+ "条");
    	      		 $("#write").html(count-6);
    	 		 }else if($(".btn-type.btn-primary").attr("data-type") == "STUDENT_MESSAGE_CLASSTYPE"){

    	 		 	//课程通知

	      			 var count = ($.trim($("#msgcount").val())).length+6;

	      			 var person = $.trim($("#sendStu").text());

	      			 //console.info("person人数："+person)

                     var useMsg;
                     if(count > 70){
                         useMsg = parseInt((count % 67) == 0 ? (count / 67) : (count / 67) + 1 ) * parseInt(person);
                     }else{
                         useMsg=1 * parseInt(person);
                     }
                     $("#hasCounts").html( parseInt(500) - parseInt(count) );
	      			 $("#useMsg").html(useMsg + "条");
	      			 $("#Surplus").html((msgCount)+ "条");
	      			 $("#write").html(count-6);
    			}else if($(".btn-type.btn-primary").attr("data-type") == "STUDENT_MESSAGE_GROUP"){
    	 		 	//分组通知

    				 var count = ($.trim($("#msgcount").val())).length+6;

    	      		 var person = parseInt($("#_sendStu").html());
                     var useMsg;
                     if(count > 70){
                         useMsg = parseInt((count % 67) == 0 ? (count / 67) : (count / 67) + 1 ) * parseInt(person);
                     }else{
                         useMsg=1 * parseInt(person);
                     }
                     $("#hasCounts").html( parseInt(500) - parseInt(count) );
    	      		 $("#useMsg").html(useMsg + "条");
    	      		 $("#Surplus").html((msgCount)+ "条");
    	      		 $("#write").html(count-6);
    			}else if($(".btn-type.btn-primary").attr("data-type") == "STUDENT_MESSAGE_CLASSPACKAGE"){
                     var count = ($.trim($("#msgcount").val())).length+6;

                     var person = parseInt($("#sendCount").html());
                     var useMsg;
                     if(count > 70){
                         useMsg = parseInt((count % 67) == 0 ? (count / 67) : (count / 67) + 1 ) * parseInt(person);
                     }else{
                         useMsg=1 * parseInt(person);
                     }
                     $("#hasCounts").html( parseInt(500) - parseInt(count) );
                     $("#useMsg").html(useMsg + "条");
                     $("#Surplus").html((msgCount)+ "条");
                     $("#write").html(count-6);
			 	}else if($(".btn-type.btn-primary").attr("data-type") == "STUDENT_MESSAGE_NOSIGN"){
                     var count = ($.trim($("#msgcount").val())).length+6;

                     var person = parseInt($("#stuSignCount").html());
                     var useMsg;
                     if(count > 70){
                         useMsg = parseInt((count % 67) == 0 ? (count / 67) : (count / 67) + 1 ) * parseInt(person);
                     }else{
                         useMsg=1 * parseInt(person);
                     }
                     $("#hasCounts").html( parseInt(500) - parseInt(count) );
                     $("#useMsg").html(useMsg + "条");
                     $("#Surplus").html((msgCount)+ "条");
                     $("#write").html(count-6);
				 }else{
    				//指定通知
    				 var count = ($.trim($("#msgcount").val())).length+6;
    				 var phone = $.trim($("#phone").val());
    				 if(phone.indexOf(",") < 0){
                         var useMsg;
    				 	if(count > 70){
                            useMsg = parseInt((count % 67) == 0 ? (count / 67) : parseInt(count / 67) + 1 );
						}else{
                            useMsg=1;
						}
						 $("#hasCounts").html( parseInt(500) - parseInt(count) );
                         $("#useMsg").html(useMsg + "条");
						 $("#Surplus").html((msgCount)+ "条");
    				 }else{
    					 var phones = phone.split(",");
    					 var person = phones.length;
                         var useMsg;
                         if(count > 70){
                              useMsg = parseInt((count % 67) == 0 ? (count / 67) : (count / 67) + 1 ) * parseInt(person);
						 }else{
                             useMsg=1 * parseInt(person);
						 }
                         $("#hasCounts").html( parseInt(500) - parseInt(count) );
    		      		 $("#useMsg").html(useMsg + "条");
    		      		 $("#Surplus").html((msgCount)+ "条");
    				 }
    	      		 $("#write").html(count-6);
    			}
    	 		break;
    	 }
     }
   //处理CKEDITOR的值
		function CKupdate() {
			for (instance in CKEDITOR.instances) {
				CKEDITOR.instances[instance].updateElement();
			}
		}
		//初始化
		function selectGroup1(type){
			$("#studentG1"+type).html('');
			 $.ajax({
		    	url: "",
		    	// url: rootPath1+"/studentGroup/selectStudentGroup1",
		    	type: "get",
		    	// type: "post",
		    	// dataType: "json",
		    	async:false,
		    	success: function(jsonData){
					jsonData = [{"page":0,"pageSize":12,"totalRecords":0,"id":1239,"groupName":"基金从业资格考试","parentId":null,"createTime":"2017-04-25","updator":43761,"companyId":34270,"firstIndex":0,"totalPages":0,"lastPageNo":0,"previousPageNo":1,"nextPageNo":0,"limit":12,"start":0},{"page":0,"pageSize":12,"totalRecords":0,"id":3055,"groupName":"注册消防工程师考试","parentId":null,"createTime":"2018-01-06","updator":43979,"companyId":34270,"firstIndex":0,"totalPages":0,"lastPageNo":0,"previousPageNo":1,"nextPageNo":0,"limit":12,"start":0}]
		    		var id ;
//		    		$("#studentG1"+type).append('<option value="" selected="selected">全部</option>');
		    		$.each(jsonData,function(i, g){
		    			if(i==0) id = g.id;
		    			$("#studentG1"+type).append('<option value="' + g.id + '">'
						+ g.groupName + '</option>');
		    		})
		    		$("#studentG2"+type).append('<option value="" selected="selected">全部</option>');
		    		selectGroup2(id,'_edit');
		    	}
		     })
		}
		//一级切换事件
		function selectGroup2(a,type){
			$("#studentG2"+type).html('');
			if($("#studentG1"+type).val()==""){
				$("#studentG2"+type).append('<option value="" selected="selected">全部</option>');
                selectGroup3("_edit");
				return false;
			}
			$.ajax({
		    	url: rootPath1+"/studentGroup/selectStudentGroup2/"+$("#studentG1"+type).val(),
		    	type: "post",
		    	dataType: "json",
		    	async:false,
		    	success: function(jsonData){
		    		$("#studentG2"+type).append('<option value="" selected="selected">全部</option>');
		    		$.each(jsonData,function(i, g){
		    			$("#studentG2"+type).append('<option value="' + g.id + '">'
						+ g.groupName + '</option>');
		    		})
		    	}
		     })
            if ($("#maxLevel").val() && Number($("#maxLevel").val()) > 2){
                selectGroup3("_edit");
            }
            selGroupStu({groupOneId:$("#studentG1"+type).val()});

		}

function selectGroup3(type) {
    $("#studentG3"+type).html('');
    if ($("#studentG2" + type).val() == "") {
        $("#studentG3" + type).append('<option value="" selected="selected">全部</option>');
        selectGroup4("_edit");
        return false;
    }
    $.ajax({
        url: rootPath1 + "/studentGroup/selectStudentGroup2/" + $("#studentG2" + type).val(),
        type: "post",
        dataType: "json",
        async: false,
        success: function (jsonData) {
            $("#studentG3" + type).append('<option value="" selected="selected">全部</option>');
            $.each(jsonData, function (i, g) {
                $("#studentG3" + type).append('<option value="' + g.id + '">'
                    + g.groupName + '</option>');
            })
        }
    })

    if ($("#maxLevel").val() && Number($("#maxLevel").val()) > 3){
        selectGroup4("_edit");
    }
    selGroupStu({groupOneId:$("#studentG1"+type).val()});
}

function selectGroup4(type) {
    $("#studentG4"+type).html('');
    if ($("#studentG3" + type).val() == "") {
        $("#studentG4" + type).append('<option value="" selected="selected">全部</option>');
        selectGroup5("_edit");
        return false;
    }
    $.ajax({
        url: rootPath1 + "/studentGroup/selectStudentGroup2/" + $("#studentG3" + type).val(),
        type: "post",
        dataType: "json",
        async: false,
        success: function (jsonData) {
            $("#studentG4" + type).append('<option value="" selected="selected">全部</option>');
            $.each(jsonData, function (i, g) {
                $("#studentG4" + type).append('<option value="' + g.id + '">'
                    + g.groupName + '</option>');
            })
        }
    })

    if ($("#maxLevel").val() && Number($("#maxLevel").val()) > 4){
        selectGroup5("_edit");
    }
    selGroupStu({groupOneId:$("#studentG1"+type).val()});

}

function selectGroup5(type) {
    $("#studentG5"+type).html('');
    if ($("#studentG4" + type).val() == "") {
        $("#studentG5" + type).append('<option value="" selected="selected">全部</option>');
        selGroupStu({groupOneId:$("#studentG1"+type).val()});
        return false;
    }
    $.ajax({
        url: rootPath1 + "/studentGroup/selectStudentGroup2/" + $("#studentG4" + type).val(),
        type: "post",
        dataType: "json",
        async: false,
        success: function (jsonData) {
            $("#studentG5" + type).append('<option value="" selected="selected">全部</option>');
            $.each(jsonData, function (i, g) {
                $("#studentG5" + type).append('<option value="' + g.id + '">'
                    + g.groupName + '</option>');
            })
        }
    })

    selGroupStu({groupOneId:$("#studentG1"+type).val()});
}

		//二级切换事件
		function selGroupStu(dataInfo){
			var reData = {};
			if(typeof dataInfo === 'object' && !dataInfo.hasOwnProperty('groupOneId')){
				reData.groupTwoId = $(dataInfo).find('option:selected').val();
			}else{
				reData = dataInfo;
			}
			if(!reData.groupTwoId){
				reData.groupOneId = $('#studentG1_edit').find('option:selected').val();
			}

            if ($("#studentG2_edit").find('option:selected').val()){
                reData.groupTwoId = $('#studentG2_edit').find('option:selected').val();
                delete reData.groupOneId;
            }
            if ($("#studentG3_edit").find('option:selected').val()){
                delete reData.groupOneId;
                delete reData.groupTwoId;
                reData.groupThrId = $('#studentG3_edit').find('option:selected').val();
            }
            if ($("#studentG4_edit").find('option:selected').val()){
                delete reData.groupOneId;
                delete reData.groupTwoId;
                delete reData.groupThrId;
                reData.groupFouId = $('#studentG4_edit').find('option:selected').val();
            }
            if ($("#studentG5_edit").find('option:selected').val()){
                delete reData.groupOneId;
                delete reData.groupTwoId;
                delete reData.groupThrId;
                delete reData.groupFouId;
                reData.groupFivId = $('#studentG5_edit').find('option:selected').val();
            }
			$.ajax({
		    	url: rootPath1+"/studentGroup/selGroupStu",
		    	type: "post",
		    	dataType: "json",
		    	data : reData,
		    	async:false,
		    	success: function(jsonData){
		    		$('#groupStuCount').html(jsonData.count+'人');
		    		$('#_sendStu,#useEmailMsg').html(jsonData.count);
		    	}
		     })
		}
		