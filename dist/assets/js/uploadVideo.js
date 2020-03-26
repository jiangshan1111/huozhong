var outUrl = "";
var videoType = "";
var storageType = "";
var cate = "";
var flasGroupUpLoadFlag = false;

//1、scrom,2、flash组，3、其他zip压缩包
var zipType=1,accessid,accesskey,host,g_dirname,g_object_name,g_object_name_type;
var fileName,fileSize,files,policyBase64,bytes,signature,uploader;

String.prototype.endWith=function(s){
	  if(s==null||s==""||this.length==0||s.length>this.length)
	     return false;
	  if(this.substring(this.length-s.length)==s)
	     return true;
	  else
	     return false;
	  return true;
}
$(function () {
    $(document).ready(function () {
        // $.ajax({
        //     url: rootPath+"/ossAuth/getUploadSign",
        //     async: false,
        //     type: "post",
        //     cache: false,
        //     success: function (result) {
        //         accessid = result.data.accessid;
        //         host = result.data.host;
        //         g_dirname = result.data.dir;
        //         signature = result.data.signature;
        //         policyBase64 = result.data.policy;
        //     }
        // });
        init();
        uploadOss();
        height();
        def();
        checkFunctionSet();

    }).on("click",".delres",function(){
    	var $this = $(this);
    	var id = $this.data("id");
    	/*var parent = $this.parent().parent();*/
    	$.ajax({
    		url: "/classTypeResource/delreslist",
    		type:"post",
    		data:{"id":id},
    		dataType:"json",
    		success:function(data){
    			if(data.msg == "success"){
    				$.msg("资源已删除");
    				$this.parent().parent().remove();
    			}else{
    				$.msg(data.msg);
    			}
    		}
    	});
    }).on('click','.delscorm',function () {
        var id = $(this).data('id');
        delscorm(id);
    }).on('change','#filescorm', function(evt) {
        zipType = 1;
        var files = document.getElementById("filescorm").files;
        fileSize = bytesToSize(files[0].size);

        var uuid =generateUUID();
        var group={};
        group.id=uuid;
        group.complete=0;//是否上传完成
        group.allnum=0;//文件总数
        group.cpnum=0;//校验通过数
        group.apnum=0;//加入队列数
        group.upnum=0;//已上传数
        group.mfp="";//主文件地址
        group.size=0;//文件大小
        group.files=[];//临时文件列表
        group.fileId = "";
        group.fileName = files[0].name;
        groups.push(group);
        var timer=setInterval(function(){
            if(group.allnum>0&&group.allnum==group.cpnum){
                if(zipType==1&&group.mfp==""){
                    showProduce(0,group);
                    return;
                }else if(zipType==2&&group.mfp==""){
                    showProduce(0,group);
                    return;
                }
                var fileSize = 0;
                for(var i=0;i<group.files.length;i++){
                    fileSize+=group.files[i].size;
                }
                var tag = $("div.addVideoTc #tag").val();
                var rTagId = $("div.addVideoTc #tag").find("option:selected").attr("ids");
                var itemOneId = $("#itemOneId").val();
                var itemSecondId = $("#itemSecondId").val();
                $.ajax({
                    url: rootPath + "/video/saveVideoUrl",
                    type: "post",
                    async:false,
                    data: {
                        "videoName": group.fileName,
                        "videoStatus": "VIDEO_PROCESS_UPLOAD",
                        "itemOneId": itemOneId,
                        "itemSecondId": itemSecondId,
                        "videoTag": tag,
                        "rTagId":rTagId,
                        "webVideoId": g_dirname+$("#companyId").val()+"/"+"scorm/"+uuid+"/",
                        "storageType": "VIDEO_STORAGE_TYPE_SCORM",
                        "vodeoSize": fileSize
                    },
                    dataType: "json",
                    success: function (data) {
                        if (data.msg == "success") {
                            window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
                            group.fileId = data.id;
                        }
                    }
                });
                for(var i=0;i<group.files.length;i++){
                    group.size+=group.files[i].size;
                    uploader.addFile(group.files[i]);
                }
                group.files=[];
                clearInterval(timer);
            }
        },1000)
        function handleFile(f) {
            JSZip.loadAsync(f)
                .then(function(zip) {
                    zip.forEach(function (relativePath, zipEntry) {  // 2) print entries
                        if(!relativePath.endsWith("/")){
                            group.allnum=group.allnum+1;
                            zipEntry.async("uint8array").then(function success(content) {
                                var mime=MimeUtil.getMimeType(relativePath);
                                var f=new File([content], zipEntry.name, {type:mime});
                                if(zipType ==1){
                                    f.dir=$("#companyId").val()+"/"+"scorm/"+uuid+"/"+zipEntry.name.substring(0,zipEntry.name.lastIndexOf("/")+1);
                                }else{
                                    f.dir=$("#companyId").val()+"/"+"flash/"+uuid+"/"+zipEntry.name.substring(0,zipEntry.name.lastIndexOf("/")+1);
                                }
                                group.files.push(f);
                                if(zipType==1){
                                    if("imsmanifest.xml"==zipEntry.name){
                                        zipEntry.async("text").then(function success(content) {
                                            try{
                                                var mainsrc=content.match(/\<resource [^\>]*/)[0].match(/\<resource [^\>]*/)[0].match(/href[ ]*\=[ ]*\"([^\">]*)/)[0];
                                                mainsrc=mainsrc.substring(mainsrc.lastIndexOf('"')+1);
                                                group.mfp=g_dirname+$("#companyId").val()+"/"+"scorm/"+uuid+"/"+mainsrc;
                                                group.cpnum=group.cpnum+1;
                                                showProduce(1,group);
                                            }catch(e){
                                                alert("Scrom 主文件损坏");
                                            }
                                        }, function error(e) {
                                            alert("Scrom 主文件损坏");
                                        });
                                    }else{
                                        group.cpnum=group.cpnum+1;
                                    }
                                }else if(zipType==2){
                                    if(zipEntry.name.indexOf('/')<0&&zipEntry.name.endsWith(".swf")){
                                        group.mfp=g_dirname+$("#companyId").val()+"/"+"flash/"+uuid+"/"+zipEntry.name;
                                        group.cpnum=group.cpnum+1;
                                    }else{
                                        group.cpnum=group.cpnum+1;
                                    }
                                }
                                showProduce(1,group);
                            }, function error(e) {

                            });
                        }
                    });
                }, function (e) {
                    var obj;
                    if(zipType == 1){
                       obj = $("#fileuploadscorm table tbody").append(html);
                    }else if(zipType == 2){
                        obj = $('table[name="resourceList"] tbody').append(html);
                    }
                    obj.find("td:eq(2)").html("<span style='color:red;'>上传异常</span>");
                });
        }

        var files = evt.target.files;
        for (var i = 0; i < files.length; i++) {
            handleFile(files[i]);
        }
    }).on("click",".delresFlashGroup",function() {
        var $this = $(this);
        var id = $this.data("id");
        $.ajax({
            url: "/classTypeResource/delresFlashGroup",
            type: "post",
            data: {"id": id},
            dataType: "json",
            success: function (data) {
                if (data.msg == "success") {
                    $.msg("资源已删除");
                    $this.parent().parent().remove();
                } else {
                    $.msg(data.msg);
                }
            }
        })
    });

    function init() {
        var btypes = $("#membertype").val();
        $(".w-video").hide();
        $(".last_v").hide();
        $(".last_w").show();
        $(".last_s").hide();
        $(".scorms").hide();
        $("#fileupload").hide();
        $("#fileupload1").hide();
        $("#fileuploadscorm").hide();
        if (btypes == "qnvd") {
            //$("#fileuploadqnvd").show();//qnvd form
            document.getElementById("fileuploadqnvd").style.display = "block";
            $("#uploadBLVS").remove();//blvs form
            $("#fileupload").remove();//cc form
            $("#fileupload1").remove();//letv form
            $('#fileUploadBjy').remove();//bjy form
            $('#aliyunUploadVideoButton').remove();
            $("#startbutton").remove();
            $("#blvsloadvideo").remove();
            $('#bjyUploadVideoButton').remove();
            QnVideo();
        } else if(btypes == "blvs"){
            $("#fileuploadqnvd").remove();
            //$("#uploadBLVS").show();
            document.getElementById("uploadBLVS").style.display = "block";
            $("#fileupload").remove();
            $("#fileupload1").remove();
            $('#fileUploadBjy').remove();//bjy form
            $('#aliyunUploadVideoButton').remove();
            $("#startbutton").remove();
            $("#qnuploadvideo").remove();
            $('#bjyUploadVideoButton').remove();
            if(upload == null){
            	blveUploadify();
                // blvsUploadify();
            }
        } else if(btypes == "bjy"){
            $("#fileupload").remove();
            $("#fileupload1").remove();
            $("#fileuploadqnvd").remove();
            $("#uploadBLVS").remove();
            //$('#fileUploadBjy').show();//bjy form
            document.getElementById("fileUploadBjy").style.display = "block";
            $('#aliyunUploadVideoButton').remove();
            $("#startbutton").remove();
            $("#qnuploadvideo").remove();
            $("#blvsloadvideo").remove();
            bjyUploadVido();
        }else if(btypes == "aliy"){
            $("#fileupload").remove();
            $("#fileupload1").remove();
            $("#fileuploadqnvd").remove();
            $("#uploadBLVS").remove();
            //$('#fileuploadAliyun').show();//bjy form
            document.getElementById("fileuploadAliyun").style.display = "block";
            $('#bjyUploadVideoButton').remove();
            $("#startbutton").remove();
            $("#qnuploadvideo").remove();
            $("#blvsloadvideo").remove();

            $('#aliyunUploadVideoButton').show();
            aliyunUploadVideo();
        }else {
            //$("#fileupload").show();
            //$("#fileupload1").show();
            // document.getElementById("fileupload").style.display = "block";
            if( document.getElementById("fileupload1")){
                document.getElementById("fileupload1").style.display = "block";
            }
            $("#fileuploadqnvd").remove();
            $("#uploadBLVS").remove();
            $("#fileUploadBjy").remove();

            $("#qnuploadvideo").remove();
            $("#blvsloadvideo").remove();
            $('#bjyUploadVideoButton').remove();
            $('#aliyunUploadVideoButton').remove();
        }
        $(".btn-method").click(function () {
            if ($(this).attr("data-type") == 0) {
            	$("div[name='ff']").show();
            	
            	/*$(".tips-ff").show();*/
            	$("#localVideo").show();
                $("#scormTip").hide();
                $(".w-video").hide();
                
                $(".last_v").hide();
                $(".last_w").show();
                $(".last_s").hide();
                
                $(".video_file").show();
                $(".video_url").hide();
                $(".video-msg").show();
                $("#uploadBLVS").show();

                $(".scorms").hide();
                $("#fileuploadscorm").hide();
                if (btypes == "qnvd") {
                    $("#fileuploadqnvd").show();
                }else if(btypes == "qnvd"){
                    $("#uploadBLVS").show();
                }else if(btypes == "aliy"){
                    $("#fileuploadAliyun").show();
                } else{
                    $("#fileupload").show();
                    $("#fileupload1").show();
                }
            } else if ($(this).attr("data-type") == 1) {
            	$("div[name='ff']").hide();
                $("#localVideo").hide();
                $("#scormTip").hide();
            	/*$(".tips-ff").hide();*/
                $(".w-video").show();
                
                $(".last_v").show();
                $(".last_w").hide();
                $(".last_s").hide();
                
                $(".video_file").hide();
                $(".video_url").show();
                $(".video-msg").show();
                $(".scorms").hide();
                $("#fileuploadqnvd").hide();
                /*$("#uploadBLVS").hide();*/
            } else {
            	$("div[name='ff']").show();
            	/*$(".tips-ff").show();*/
                $(".w-video").hide();
                $("#scormTip").show();
                $("#localVideo").hide();
                $(".last_v").hide();
                $(".last_w").hide();
                $(".last_s").show();
                
                $(".video_file").show();
                $(".video_url").hide();
                $(".video-msg").hide();
                $(".scorms").show();
                $("#fileupload").hide();
                $("#fileupload1").hide();
                $("#fileuploadscorm").show();
                $("#fileuploadqnvd").hide();
                $("#fileUploadBjy").hide();
                $("#fileuploadAliyun").hide();
                $("#uploadBLVS").hide();
            }
            $(".btn-method").addClass("btn-default").removeClass("btn-success");
            $(this).addClass("btn-success").removeClass("btn-default");
            height();
        });
        $("#btn-cancel").click(function () {
            $("#itemOneId").val(-1);
            $("#itemSecondId").val(-1);
            $("#tag").val("");
            $("#hh").val(0);
            $("#mm").val(0);
            $("#ss").val(0);
            $("#videourl").val("");
            $("#videoname").val("");
            outUrl = "";
            videoType = "";
        });
        $("input[name='fenxiaoAll']").click(function(){
            debugger;
            if($(this).prop("checked")){
                $("input[name='fenxiao']").prop("checked",true);
            }else{
                $("input[name='fenxiao']").prop("checked",false);
            }
        });
        $("input[name='fenxiao']").click(function(){
           var check = $("input[name='fenxiao']:not(:checked)").length;
           if(check > 0){
               $("input[name='fenxiaoAll']").prop("checked",false);
           }else{
               $("input[name='fenxiaoAll']").prop("checked",true);
           }
        });
        $("input[name='fenxiaoAll2']").click(function(){
            debugger;
            if($(this).prop("checked")){
                $("input[name='fenxiao2']").prop("checked",true);
            }else{
                $("input[name='fenxiao2']").prop("checked",false);
            }
        });
        $("input[name='fenxiao2']").click(function(){
            var check = $("input[name='fenxiao2']:not(:checked)").length;
            if(check > 0){
                $("input[name='fenxiaoAll2']").prop("checked",false);
            }else{
                $("input[name='fenxiaoAll2']").prop("checked",true);
            }
        });
        if($(".addVideoTc").find("select[name='itemOneId']").children().length>1){
            $(".addVideoTc").find("select[name='itemOneId']").on('change',function(){
                var _val = $(this).val();
                var _this = $(this);
                if(typeof (_val) != 'undefined' && _val > 0){
                    $.ajax({
                       url:rootPath+"/video/findSecItemByOneId" ,
                        type:"post",
                        data:{"oneItemId":_val},
                        success:function(data){
                            var secItem = _this.next().next();
                            secItem.html("").html(data);
                        }
                    });
                }
            });
            $(".addResourceTc").find("select[name='itemOneId']").on('change',function(){
                var _val = $(this).val();
                var _this = $(this);
                if(typeof (_val) != 'undefined' && _val > 0){
                    $.ajax({
                        url:rootPath+"/video/findSecItemByOneId" ,
                        type:"post",
                        data:{"oneItemId":_val},
                        success:function(data){
                            var secItem = _this.next().next();
                            secItem.html("").html(data);
                        }
                    });
                }
            });
        }
        $("#navBar li[for]").on("click", function (e) {
            var $this = $(this);
            $this.addClass("L-ac").siblings().removeClass("L-ac");
            $("#content>div[name=" + $this.attr("for") + "]").css("display", "block").siblings().css("display", "none");
            var acceptSource = $this.attr("name");
            var resourceUpload = $("#resourceUpload");
            var flashGroup = $('#flashGroup');
            var addResourceTcTips = $(".addResourceTc .tips-msg.tips-ff" );
            var tip = $("#changedTips");
            switch(acceptSource){
            case("flash"):{
            	$('#resourceUpload').html('添加flash资源').addClass('btn-success').removeClass('btn-default').siblings('a').addClass('btn-default').removeClass('btn-success');
                tip.text("可上传文件属性为：swf，可上传文件最大为1G。");
                addResourceTcTips.text('可上传文件属性为：swf，可上传文件最大为1G。');
            	if(flasGroupUpLoadFlag){
            		flashGroup.show();
            	}
            	break;
            }
            case("audio"):{
            	flashGroup.hide();
            	resourceUpload.text("添加音频资源");
            	addResourceTcTips.text("允许上传文件格式为：mp3");
                tip.text("允许上传文件格式为：mp3");
            	$("#resourceSubmit").off("click").on("click",function(){
            		selajaxstroage("#audiofiles");
            	});
            	break;
            }case("video"):{
            	flashGroup.hide();
            	resourceUpload.text("添加音频资源");
            	addResourceTcTips.text("允许上传文件格式为：mp3");
                tip.text("允许上传文件格式为：mp3");
            	$("#resourceSubmit").off("click").on("click",function(){
            		selajaxstroage("#audiofiles");
            	});
            	break;
            }
            case("ppt"):{
            	flashGroup.hide();
            	resourceUpload.text("添加ppt资源");
            	cate = "ppt";
            	addResourceTcTips.text("允许上传文件格式为：ppt,pptx");
                tip.text("允许上传文件格式为：ppt,pptx");
            	$("#resourceSubmit").off("click").on("click",function(){
            		selajaxstroage("#pptfiles");
            	});
            	break;
            }
            case("docs"):{
            	flashGroup.hide();
            	resourceUpload.text("添加文档资源");
            	cate = "docs";
                tip.text("允许上传文件格式为：doc,pdf,xls,docx,xlsx");
            	addResourceTcTips.text("允许上传文件格式为：doc,pdf,xls,docx,xlsx");
            	$("#resourceSubmit").off("click").on("click",function(){
            		selajaxstroage("#docfiles");
            	});
            	break;
            }
            }
        });

        $(".btn-add-url").click(function () {
            var totalUrl = url = $("#videourl").val();
            if (typeof (url) == "undefined" || url == null || url == "") {
                $('<div class="c-fa" style="z-index;102;">请填入外部视频连接地址</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            //截取网址域
            if (url.indexOf("http://") >= 0) {
                url = url.substring(7);
            } else if (url.indexOf("https://") >= 0) {
                url = url.substring(8);
            } else{
                $('<div class="c-fa" style="z-index;102;">请添加协议头,http://或https://</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            var httpTitle = url.substring(0, url.indexOf("/"));
            videoType = httpTitle;
            if (httpTitle == "v.youku.com") {
                storageType = "VIDEO_STORAGE_TYPE_YK";
                //截取优酷的
                if (url.indexOf("id_") >= 0) {
                    if (url.indexOf("==") >= 0) {
                        outUrl = (url.substring(url.indexOf("id_") + 3, url.indexOf("=")));
                    } else {
                        outUrl = (url.substring(url.indexOf("id_") + 3, url.lastIndexOf(".html")));
                    }
                } else {
                    $('<div class="c-fa" style="z-index;102;">您输入的地址不合法</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
                    return false;
                }
            } else if (httpTitle == "video.tudou.com") {
                storageType = "VIDEO_STORAGE_TYPE_TD";
                var tudouReg = /^http\:\/\/video\.tudou\.com\/v\/([^\?]*)\.html\?.*/;
                if(tudouReg.test(totalUrl)){
                	outUrl = totalUrl.replace(/^http\:\/\/video\.tudou\.com\/v\/([^\?]*)\.html\?.*/,"$1");
                }
                else {
                    $('<div class="c-fa" style="z-index;102;">您输入的地址不合法</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
                    return false;
                }
            } else if(httpTitle == "www.tudou.com"){
            	storageType = "VIDEO_STORAGE_TYPE_TD";
                //截取土豆的
                if (url.indexOf("albumplay/") >= 0) {
                    outUrl = "a/" + (url.substring(url.lastIndexOf("/") + 1, url.indexOf(".html")));
                } else if (url.indexOf("listplay/") >= 0) {
                	if(url.indexOf(".html") >= 0){
                        outUrl = "l/" + (url.substring(url.lastIndexOf("/") + 1, url.indexOf(".html")));
                	}else{
                		outUrl = url.substring(url.indexOf("listplay/") + ("listplay/").length);
                		outUrl = "l/" + (outUrl.substring(url.indexOf("/") + 1, outUrl.lastIndexOf("/")));
                	}
                } else if (url.indexOf("view/") >= 0) {
                    outUrl = (url.substring(url.indexOf("view/") + ("view/").length));
                    if(outUrl.indexOf("/") >= 0){
                    	outUrl = "v/" + (outUrl.substring(0,outUrl.indexOf("/")));
                    }else{
                    	outUrl = "v/" + outUrl;
                    }
                }else {
                    $('<div class="c-fa" style="z-index;102;">您输入的地址不合法</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
                    return false;
                }
            }else if (httpTitle == "console.video.capitalcloud.net") {
                storageType = "VIDEO_STORAGE_TYPE_SS";
                //截取石山的
                if (url.indexOf("entryId=") >= 0) {
                    outUrl = (url.substring(url.indexOf("entryId=") + 8, url.indexOf("&pubId=")));
                    $('<div class="c-fa" style="z-index;102;">已添加外部链接</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
                    return false;
                } else {
                    $('<div class="c-fa" style="z-index;102;">您输入的地址不合法</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
                    return false;
                }
            } else if(httpTitle == "qzonestyle.gtimg.cn"){
				storageType = "VIDEO_STORAGE_TYPE_QQ";
				var o1 = url.substring(url.indexOf("&file_id=")+9,url.indexOf("&app_id="));
				var o2 = url.substring(url.indexOf("&app_id=")+8,url.indexOf("&version="));
				outUrl = o1 + "," + o2;
			} else if(httpTitle.endWith('gensee.com')){//http://yunduoketang.gensee.com/training/site/v/04435895
				storageType = 'VIDEO_STORAGE_TYPE_ZS';
                outUrl = totalUrl.split('?')[0];
                if(outUrl)
				    outUrl = outUrl.split('gensee.com/training/site/v/')[1];//04435895
				if(outUrl){
					$('<div class="c-fa" style="z-index;102;">已添加外部链接</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
					return;
				}else {
					$('<div class="c-fa" style="z-index;102;">您输入的地址不合法</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
	                    $(this).remove();
	                });
					return false;
				}
			} else {
				storageType = 'VIDEO_STORAGE_TYPE_OTHER';
				videoType = totalUrl;
				$('<div class="c-fa" style="z-index;102;">已添加外部链接</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            $.ajax({
                url: rootPath + "/video/selVideoName",
                type: "post",
                data: {
                    "url": $("#videourl").val(),
                    "domain": httpTitle
                },
                dataType: "json",
                beforeSend: function (XMLHttpRequest) {
                        $(".addVideoTc").css("z-index", 2);
                        $(".loading").show();
                        $(".loading-bg").show();
                    },
                success: function (data) {
                    if (data.msg != "error") {
                        $("#videoname").val(data.msg);
                        $('<div class="c-fa" style="z-index;102;">已添加外部链接</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                            $(this).remove();
                        });
                    }
                },
                complete: function (XMLHttpRequest, textStatus) {
                    $(".addVideoTc").css("z-index", 101);
                    $(".loading").hide();
                    $(".loading-bg").hide();
                }
            });
        });

        $("#btn-save").click(function () {
            var oneItemId = $("#itemOneId").val();
            var twoItemId = $("#itemSecondId").val();
            var videoName = $("#videoname").val();
            var url = $("#videourl").val();
            var hh = $("#hh").val() == "" ? 0 : $("#hh").val();
            var mm = $("#mm").val() == "" ? 0 : $("#mm").val();
            var ss = $("#ss").val() == "" ? 0 : $("#ss").val();
            /* alert(oneItemId + "" + twoItemId + "" + videoName + "" + url + "" + outUrl + "" + videoType); */
            if (oneItemId == null || twoItemId == null || oneItemId == "" || twoItemId == "" || oneItemId < 1 || twoItemId < 1) {
                $('<div class="c-fa" style="z-index;102;">请选择科目</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            if (storageType != 'VIDEO_STORAGE_TYPE_OTHER' && (url == "" || outUrl == "" || videoType == "")) {
                $('<div class="c-fa" style="z-index;102;">请添加外部链接地址</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            if (videoName == "") {
                $('<div class="c-fa" style="z-index:102;">请添加视频名称</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            if (!$("#protocol").prop("checked")) {
                $('<div class="c-fa" style="z-index:102;">您尚未同意上传协议</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            if (hh == 0 && mm == 0 && ss == 0) {
                $('<div class="c-fa" style="z-index:102;">请填写视频时长</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                    $(this).remove();
                });
                return false;
            }
            var schoolids="";
            if($("input[name='fenxiaoAll']").prop("checked")){
                schoolids="-1";
            }else{
                $("input[name='fenxiao']:checked").each(function(i,item){
                    if((i+1) < $("input[name='fenxiao']:checked").length){
                        schoolids += $(this).val()+",";
                    }else{
                        schoolids += $(this).val();
                    }
                });
            }
            //保存到video
            var videoTime = (hh.length == 2 ? hh : "0" + hh) + ":" + (mm.length == 2 ? mm : "0" + mm) + ":" + (ss.length == 2 ? ss : "0" + ss);
            var videoTag = $("div.addVideoTc #tag").val();
            var rTagId = $("div.addVideoTc #tag").find("option:selected").attr("ids");
            $.ajax({
                url: rootPath + "/video/saveVideoUrl",
                type: "post",
                data: {
                    "videoName": videoName,
                    "videoTime": videoTime,
                    "videoStatus": "VIDEO_PROCESS_NOMAL",
                    "itemOneId": oneItemId,
                    "itemSecondId": twoItemId,
                    "videoTag": videoTag,
                    "rTagId":rTagId,
                    "webVideoId": outUrl,
                    "webVideoDomain": videoType,
                    "storageType": storageType,
                    "schoolIds":schoolids
                },
                dataType: "json",
                beforeSend: function (XMLHttpRequest) {
                        $(".addVideoTc").css("z-index", 2);
                        $(".loading").show();
                        $(".loading-bg").show();
                    },
                    success: function (data) {
                        if (data.msg == "success") {
                            window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
                            var domain = "";
                            /*if(videoType == "open.163.com"){
	    					domain = "网易公开课";
	    				}else */
                            if (videoType == "v.youku.com") {
                                domain = "优酷视频";
                            } else if (videoType == "www.tudou.com") {
                                domain = "土豆视频";
                            } else if (videoType == "console.video.capitalcloud.net") {
                                domain = "石山视频";
                            }
                            $(".v_url").prepend("<tr data-id='" + data.id + "'><td><div class='operate_w'>" + videoName + "</div></td><td>" + domain + "</td><td>正常</td><td><a class='btn btn-sm btn-del' href='javascript:;' data-id='" + data.id + "'>删除</a></td></tr>");
                            $(".btn-del").click(function () {
                                var vid = $(this).attr("data-id");
                                $.ajax({
                                    url: rootPath + "/video/delVideoUrl",
                                    type: "post",
                                    data: {
                                        "id": vid
                                    },
                                    dataType: "json",
                                    beforeSend: function (XMLHttpRequest) {
                                            $(".loading").show();
                                            $(".loading-bg").show();
                                        },
                                        success: function (data) {
                                            if (data.msg == "success") {
                                                $('<div class="c-fa" style="z-index:102;">已删除</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                                                    $(this).remove();
                                                });
                                                $("tr[data-id='" + vid + "']").remove();
                                            } else {
                                                $('<div class="c-fa" style="z-index:102;">删除失败</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                                                    $(this).remove();
                                                });
                                            }
                                        },
                                        complete: function (XMLHttpRequest, textStatus) {
                                            $(".loading").hide();
                                            $(".loading-bg").hide();
                                        }
                                });
                            });

                            $(".tcBg").fadeOut(200, function () {
                                $(this).remove();
                            });
                            $(".addVideoTc").hide();
                            $("#itemOneId").val(-1);
                            $("#itemSecondId").val(-1);
                            $("#tag").val("");
                            $("#hh").val(0);
                            $("#mm").val(0);
                            $("#ss").val(0);
                            $("#videourl").val("");
                            $("#videoname").val("");
                            outUrl = "";
                            videoType = "";
                        } else {
                            $(".addVideoTc").css("z-index", 101);
                        }
                    },
                    complete: function (XMLHttpRequest, textStatus) {
                        $(".addVideoTc").css("z-index", 101);
                        $(".loading").hide();
                        $(".loading-bg").hide();
                    }
            });
        });
    }
});

function cancle(ele) {
    //获取当前取消的CC视频的ID
    var ccvid = $(ele).parents(".template-upload").data('data').video.ccvid;
    //根据视频ID从数据中库中删除
    var uri = rootPath + '/video/del/' + ccvid;
    $.ajax({
        url: uri,
        async: false,
        type: "post",
        data: {
            "ccvid": ccvid,
        },
        cache: false,
        error: function (data) {
                alert("取消出现错误!");
            },
            success: function (result) {

            }
    });
}

function height() {
    var docheight = -parseInt($(".addVideoTc").height());
    var divheight = parseInt(parseInt($(".check_student_hd").height()) + parseInt($(".check_student_bd").height()));
    $(".addVideoTc").height(divheight);
    $(".addVideoTc").css("top", "0px");
    $(".addVideoTc").css("margin-top", (parseInt((docheight - divheight) / 2)) + "px");
}

function uploadscorm() {
    var f = document.getElementById("filescorm").files;
    var name = f[0].name;
    var size = bytesToSize(f[0].size);
    var tag = $("div.addVideoTc #tag").val();
    var rTagId = $("div.addVideoTc #tag").find("option:selected").attr("ids");
    var itemOneId = $("#itemOneId").val();
    var itemSecondId = $("#itemSecondId").val();
    var html = "";
    html += "<tr><td width='480'>" + name + "</td>";
    html += "<td width='100'>" + size + "</td>";
    html += "<td width='300'><span style='color:red;'>正在上传    " +
        "<img src='" + rootPath + "/images/jia.jpg' height='16px' width='16px'></span></td>";
    html += "<td width='190'></td></tr>";
    $("#fileuploadscorm table tbody").append(html);
    var obj = $("#fileuploadscorm table tbody tr:last");
    $.ajaxFileUpload({
        url: rootPath + "/video/scormupload;" + window["sessionName"] + "=" + window["sessionId"],
        type: "post",
        secureuri: false,
        fileElementId: "filescorm",
        dataType: "json",
        success: function (data) {
            if (data.msg == 'success') {
                addvideoinfo(name, itemOneId, itemSecondId, tag, rTagId, data.url, "VIDEO_STORAGE_TYPE_SCORM", obj, data.size);
            } else {
                obj.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
            }
        }
    });
}

function bytesToSize(bytes) {
    if (bytes === 0) {
        return '0 B';
    }
    var k = 1024, // or 1024
        sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
        i = Math.floor(Math.log(bytes) / Math.log(k));
    return (bytes / Math.pow(k, i)).toPrecision(3) + ' ' + sizes[i];
}

function updateVideoinfo(obj,fileId,path) {
    $.ajax({
        url: rootPath + "/video/update",
        type: "post",
        data: {
            "id": fileId,
            "videoStatus":"VIDEO_PROCESS_NOMAL",
            "webVideoId":path
        },
        dataType: "json",
        success: function (data) {
            if (data == "success") {
                obj.attr("id", "tr_" + fileId);
                obj.find("td:eq(2)").html("<span >上传完成</span>");
                if(zipType == 1){
                    obj.find("td:eq(3)").html('<a href="javascript:;" data-id="' + fileId + '" ' +
                        'class="btn btn-mini btn-primary delscorm">删除</a>');
                }else if(zipType == 2){
                    obj.find("td:eq(3)").html('<a href="javascript:;" data-id="' + fileId + '" ' +
                        'class="btn btn-mini btn-primary delres">删除</a>');
                }

            }
        }
    });
}

function updateFlashGroupInfo(obj,fileId,path) {
    $.ajax({
        url : rootPath + "/resourceList/updateResource",
        type:"post",
        async:false,
        data:{
            'id': fileId,
            'filePath':path
        },
        dataType:"json",
        success:function(data){
            if (data == 'success') {
                obj.find("td:eq(2)").html("<span >上传完成</span>");
                obj.find("td:eq(3)").html('<a href="javascript:;" data-id="' + fileId + '" ' +
                    'class="btn btn-mini btn-primary delresFlashGroup">删除</a>');
            } else {
                obj.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
            }
            obj.removeAttr("id");
        }
    });
}



function delscorm(id) {
    $.ajax({
        url: rootPath + "/video/delVideoUrl",
        type: "post",
        data: {
            "id": id
        },
        dataType: "json",
        beforeSend: function (XMLHttpRequest) {
                $(".loading").show();
                $(".loading-bg").show();
            },
            success: function (data) {
                if (data.msg == "success") {
                    $('<div class="c-fa" style="z-index:102;">已删除</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
                    $("#tr_" + id).remove();
                } else {
                    $('<div class="c-fa" style="z-index:102;">删除失败</div>').appendTo('body').fadeIn(100).delay(1000).fadeOut(200, function () {
                        $(this).remove();
                    });
                }
            },
            complete: function (XMLHttpRequest, textStatus) {
                $(".loading").hide();
                $(".loading-bg").hide();
            }
    });
}

function resourcechange(e) {
    var f = document.getElementById("resourceUploadInput").files;
    for(var i=0;i<f.length;i++){
    	var file = f[i];
    	var ele = $("#resourceUploadInput").clone();
    	$("#resourceUploadInput").after(ele);
		$('#resourceform').append(html);
    	updocs($("#resupload").val());
		console.log($("#resupload").val());
    }
}

function updocs(f){
	var name = f.name;
    var size = bytesToSize(f.size);
    var tag = $("div.addResourceTc #tag").val();
    var itemOneId = $("div.addResourceTc #itemOneId").val();
    var itemSecondId = $("div.addResourceTc #itemSecondId").val();
    var html = "";
    html += "<tr><td width='480'>" + name + "</td>";
    html += "<td width='100'>" + size + "</td>";
    html += "<td width='300'><span style='color:red;'>正在上传    " +
        "<img src='" + rootPath + "/images/jia.jpg' height='16px' width='16px'></span></td>";
    html += "<td width='190'></td></tr>";
    html = $(html);
    $("table[name=resourceList] tbody").append(html);
    var uuid = guid();
    $.ajaxFileUpload({
        url: rootPath + "/classTypeResource/uploadToSwf;" + window["sessionName"] + "=" + window["sessionId"],
        data: {
            'oneItemId': itemOneId,
            'twoItemId': itemSecondId,
            'tag': tag,
            'uuid': uuid
        },
        type: "post",
        secureuri: false,
        async: false,
        fileElementId: "resourceUploadInput",
        dataType: "json",
        success: function (data) {
            if (data.msg == 'success') {
                window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
            	html.attr("id","restr_"+data.id);
                html.find("td:eq(2)").html("<span >上传完成</span>");
                html.find("td:eq(3)").html('<a href="javascript:;" data-id="' + data.id + '" ' +
                    'class="btn btn-mini btn-primary delres">删除</a>');
            } else {
            	html.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
            }
        }
    });
}

function def(){
	Qiniu.uploader({
	    runtimes: 'html5,flash,html4',      // 上传模式，依次退化
	    browse_button: 'pickfiles',         // 上传选择的点选按钮，必需
	    uptoken_url: '/classTypeResource/getuptoken',         // Ajax请求uptoken的Url，强烈建议设置（服务端提供）
	    get_new_uptoken: true,             // 设置上传文件的时候是否每次都重新获取新的uptoken
	    unique_names: false,              // 默认false，key为文件名。若开启该选项，JS-SDK会为每个文件自动生成key（文件名）
	    save_key: false,                  // 默认false。若在服务端生成uptoken的上传策略中指定了sava_key，则开启，SDK在前端将不对key进行任何处理
	    domain: $("#qndomain").val(),     // bucket域名，下载资源时用到，必需
	    container: 'qnuploadt',             // 上传区域DOM ID，默认是browser_button的父元素
	    max_file_size: '1024mb',             // 最大文件体积限制
	    filters:{
			mime_types:[
			            {title:"flash files",extensions:"swf"}]},
	    flash_swf_url: 'path/of/plupload/Moxie.swf',  //引入flash，相对路径
	    max_retries: 3, // 上传失败最大重试次数
	    chunk_size: '4mb',                  // 分块上传时，每块的体积
	    auto_start: true,                   // 选择文件后自动上传，若关闭需要自己绑定事件触发上传
	    init: {
	        'FilesAdded': function(up, files) {
	            plupload.each(files, function(file) {
	                // 文件添加进队列后，处理相关的事情
	            	var tag = $("div.addResourceTc #tag").val();
	            	var ids = $("div.addResourceTc #tag").find("option:selected").attr("ids");
	                var itemOneId = $("div.addResourceTc #itemOneId").val();
	                var itemSecondId = $("div.addResourceTc #itemSecondId").val();
	                var html = "";
	                html += "<tr><td width='480' style='word-break:break-all'>" + file.name + "</td>";
	                html += "<td width='100'>" + bytesToSize(file.size) + "</td>";
	                html += "<td id='td"+file.id+"' width='300'><span style='color:red;'>等待上传</span></td>";
	                html += "<td width='190'></td></tr>";
	                html = $(html);
	                html.attr("id",file.id);
	                html.data("tag",tag);
	                html.data("ids",ids);
	                html.data("itemOneId",itemOneId);
	                html.data("itemSecondId",itemSecondId);
	                $("table[name=resourceList] tbody").append(html);
		        	if(file.name.length > 120){
		        		html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议三十个字以内</span>");
		        		up.removeFile(file);
		        	}
	            });
	        },
	        'BeforeUpload': function(up, file) {
	               // 每个文件上传前，处理相关的事情
	        	resourceValidate(up, file);
	        },
	        'UploadProgress': function(up, file) {
	               // 每个文件上传时，处理相关的事情
	        	progress($("#td"+file.id),file.percent);
	        },
	        'FileUploaded': function(up, file, info) {
	               var res = $.parseJSON(info);
	               var sourceLink = res.key; //获取上传成功后的文件的Url
	               var size = file.size;
	               var name = file.name;
	               var suffix = name.substring(name.lastIndexOf(".") + 1);

	               var $this = $("#"+file.id);
	               if(name.length > 120){
	            	   $this.find("td:eq(2)").html("<span style='color:red;'>文件名太长</span>");
	            	   /*$this.removeAttr("id");*/
	            	   return false;
	               }
                var schools = "";
                var allschool =  $("input[name='fenxiaoAll2']").prop("checked");
                if(allschool){
                    schools = "-1";
                }else{
                    $("input[name='fenxiao2']:checked").each(function(i,item){
                        if(($("input[name='fenxiao2']:checked").length-1) == i){
                            schools += $(item).val();
                        }else{
                            schools += $(item).val()+",";
                        }
                    });
                }
	               $.ajax({
	            	   url : "/resourceList/save",
	            	   type:"post",
	            	   async:false,
	            	   data:{'sysItemOne': $this.data("itemOneId"),
	                       'sysItemSecond': $this.data("itemSecondId"),
	                       'tag': $this.data("tag"),
	                       'fileName':name,
                           'rTagId': $this.data("ids"),
	                       'fileType':suffix,
	                       'filePath':sourceLink,
	                       'fileSize':size,
                           'schoolids':schools,
	                       'fileCategory':"flash",
	                       'uploadType':0},
	                   dataType:"json",
	                   success:function(data){
	                       if (data.msg == 'success') {
                               window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
	                    	   $this.find("td:eq(2)").html("<span >上传完成</span>");
	                    	   $this.find("td:eq(3)").html('<a href="javascript:;" data-id="' + data.id + '" ' +
	                               'class="btn btn-mini btn-primary delres">删除</a>');
	                       } else {
	                    	   $this.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
	                       }
	                   }
	               });
	        },
	        'Error': function(up, err, errTip) {
	               //上传出错时，处理相关的事情
	        	var $this = $("#"+file.id);
	        	$this.find("td:eq(2)").html("<span style='color:red;'>" + errTip + "</span>");
	        },
	        'UploadComplete': function() {
	               //队列文件处理完毕后，处理相关的事情
	        },
	        'Key': function(up, file) {
	        	var name = file.name;
	        	var suffix = name.substring(parseInt(name.lastIndexOf(".") + 1));
	            var key = "";
	            key = $("#companyId").val() + "/flash" +
	            	"/" + guid() + "." + suffix;
	            return key;
	        }
	    }
	});

	Qiniu.uploader({
	    runtimes: 'html5,flash,html4',
	    browse_button: 'audiofiles',
	    uptoken_url: '/classTypeResource/getuptoken',
	    get_new_uptoken: true, 
	    unique_names: false,
	    save_key: false,
	    domain: $("#qndomain").val(),
	    container: 'qnuploadt',
	    max_file_size: '1024mb',
	    filters:{
			mime_types:[
			            {title:"audio files",extensions:"mp3"}]},
	    flash_swf_url: 'path/of/plupload/Moxie.swf',
	    max_retries: 3,
	    chunk_size: '4mb', 
	    auto_start: true, 
	    init: {
	        'FilesAdded': function(up, files) {
	            plupload.each(files, function(file) {
	                // 文件添加进队列后，处理相关的事情
	            	var tag = $("div.addResourceTc #tag").val();
                    var ids = $("div.addResourceTc #tag").find("option:selected").attr("ids");

	                var itemOneId = $("div.addResourceTc #itemOneId").val();
	                var itemSecondId = $("div.addResourceTc #itemSecondId").val();
	                var html = "";
	                html += "<tr><td width='480' style='word-break:break-all'>" + file.name + "</td>";
	                html += "<td width='100'>" + bytesToSize(file.size) + "</td>";
	                html += "<td id='td"+file.id+"' width='300'><span style='color:red;'>等待上传</span></td>";
	                html += "<td width='190'></td></tr>";
	                html = $(html);
	                html.attr("id",file.id);
	                html.data("tag",tag);
	                html.data("ids",ids);
	                html.data("itemOneId",itemOneId);
	                html.data("itemSecondId",itemSecondId);
	                $("table[name=resourceList] tbody").append(html);
		        	if(file.name.length > 120){
		        		html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议三十个字以内</span>");
		        		up.removeFile(file);
		        	}
	            });
	        },
	        'BeforeUpload': function(up, file) {
	               // 每个文件上传前，处理相关的事情
	        	resourceValidate(up, file);
	        },
	        'UploadProgress': function(up, file) {
	               // 每个文件上传时，处理相关的事情
	        	progress($("#td"+file.id),file.percent);
	        },
	        'FileUploaded': function(up, file, info) {
	               var res = $.parseJSON(info);
	               var sourceLink = res.key;
	               var size = file.size;
	               var name = file.name;
	               var suffix = name.substring(name.lastIndexOf(".") + 1);
	               console.log(sourceLink+","+size+","+name);
	               var $this = $("#"+file.id);
	               if(name.length > 120){
	            	   $this.find("td:eq(2)").html("<span style='color:red;'>文件名太长</span>");
	            	   $this.removeAttr("id");
	            	   return false;
	               }
                var schools = "";
                var allschool =  $("input[name='fenxiaoAll2']").prop("checked");
                if(allschool){
                    schools = "-1";
                }else{
                    $("input[name='fenxiao2']:checked").each(function(i,item){
                        if(($("input[name='fenxiao2']:checked").length-1) == i){
                            schools += $(item).val();
                        }else{
                            schools += $(item).val()+",";
                        }
                    });
                }
	               $.ajax({
	            	   url : "/resourceList/save",
	            	   type:"post",
	            	   async:false,
	            	   data:{'sysItemOne': $this.data("itemOneId"),
	                       'sysItemSecond': $this.data("itemSecondId"),
	                       'tag': $this.data("tag"),
                           'rTagId':$this.data("ids"),
	                       'fileName':name,
	                       'fileType':suffix,
	                       'filePath':sourceLink,
	                       'fileSize':size,
                           'schoolids':schools,
	                       'fileCategory':"audio",
	                       'uploadType':0},
	                   dataType:"json",
	                   success:function(data){
	                       if (data.msg == 'success') {
                               window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
	                    	   $this.find("td:eq(2)").html("<span >上传完成</span>");
	                    	   $this.find("td:eq(3)").html('<a href="javascript:;" data-id="' + data.id + '" ' +
	                               'class="btn btn-mini btn-primary delres">删除</a>');
	                       } else {
	                    	   $this.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
	                       }
		            	   $this.removeAttr("id");
	                   }
	               });
	        },
	        'Error': function(up, err, errTip) {
	               //上传出错时，处理相关的事情
	        	var $this = $("#"+file.id);
	        	$this.find("td:eq(2)").html("<span style='color:red;'>" + errTip + "</span>");
	        	/*$this.removeAttr("id");*/
	        },
	        'UploadComplete': function() {
	               //队列文件处理完毕后，处理相关的事情
	        },
	        'Key': function(up, file) {
	        	var name = file.name;
	        	var suffix = name.substring(parseInt(name.lastIndexOf(".") + 1));
	            var key = "";
	            key = $("#companyId").val() + "/audio" +
	            	"/" + guid() + "." + suffix;
	            return key;
	        }
	    }
	});
	
	Qiniu.uploader({
	    runtimes: 'html5,flash,html4',
	    browse_button: 'pptfiles',
	    uptoken_url: '/classTypeResource/getuptoken',
	    get_new_uptoken: true, 
	    unique_names: false,
	    save_key: false,
	    domain: $("#qndomain").val(),
	    container: 'qnuploadt',
	    max_file_size: '1024mb',
	    filters:{
			mime_types:[
			            {title:"ppt files",extensions:"ppt,pptx"}]},
	    flash_swf_url: 'path/of/plupload/Moxie.swf',
	    max_retries: 3,
	    chunk_size: '4mb', 
	    auto_start: true, 
	    init: {
	        'FilesAdded': function(up, files) {
	            plupload.each(files, function(file) {
	                // 文件添加进队列后，处理相关的事情
	            	var tag = $("div.addResourceTc #tag").val();
	                var itemOneId = $("div.addResourceTc #itemOneId").val();
	                var itemSecondId = $("div.addResourceTc #itemSecondId").val();
                    var ids = $("div.addResourceTc #tag").find("option:selected").attr("ids");

	                var html = "";
	                html += "<tr><td width='480' style='word-break:break-all'>" + file.name + "</td>";
	                html += "<td width='100'>" + bytesToSize(file.size) + "</td>";
	                html += "<td id='td"+file.id+"' width='300'><span style='color:red;'>等待上传</span></td>";
	                html += "<td width='190'></td></tr>";
	                html = $(html);
	                html.attr("id",file.id);
	                html.data("tag",tag);
	                html.data("ids",ids);
	                html.data("itemOneId",itemOneId);
	                html.data("itemSecondId",itemSecondId);
	                $("table[name=resourceList] tbody").append(html);
		        	if(file.name.length > 120){
		        		html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议三十个字以内</span>");
		        		up.removeFile(file);
		        	}
	            });
	        },
	        'BeforeUpload': function(up, file) {
	               // 每个文件上传前，处理相关的事情
	        	resourceValidate(up, file);
	        },
	        'UploadProgress': function(up, file) {
	               // 每个文件上传时，处理相关的事情
	        	progress($("#td"+file.id),file.percent);
	        },
	        'FileUploaded': function(up, file, info) {
	               var res = $.parseJSON(info);
	               var sourceLink = res.key;
	               var size = file.size;
	               var name = file.name;
	               var suffix = name.substring(name.lastIndexOf(".") + 1);
	               console.log(sourceLink+","+size+","+name);
	               var $this = $("#"+file.id);
	               if(name.length > 120){
	            	   $this.find("td:eq(2)").html("<span style='color:red;'>文件名太长</span>");
	            	   return false;
	               }
                var schools = "";
                var allschool =  $("input[name='fenxiaoAll2']").prop("checked");
                if(allschool){
                    schools = "-1";
                }else{
                    $("input[name='fenxiao2']:checked").each(function(i,item){
                        if(($("input[name='fenxiao2']:checked").length-1) == i){
                            schools += $(item).val();
                        }else{
                            schools += $(item).val()+",";
                        }
                    });
                }
	               $.ajax({
	            	   url : "/resourceList/save",
	            	   type:"post",
	            	   async:false,
	            	   data:{'sysItemOne': $this.data("itemOneId"),
	                       'sysItemSecond': $this.data("itemSecondId"),
	                       'tag': $this.data("tag"),
                           'rTagId': $this.data("ids"),
	                       'fileName':name,
	                       'fileType':suffix,
	                       'sourcePath':sourceLink,
	                       'sourceSize':size,
                           'schoolids':schools,
	                       'fileCategory':"ppt",
	                       'uploadType':0},
	                   dataType:"json",
	                   success:function(data){
	                       if (data.msg == 'success') {
                               window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
	                    	   $this.find("td:eq(2)").html("<span >上传完成待处理</span>");
	                       } else {
	                    	   $this.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
	                       }
	                   }
	               });
	        },
	        'Error': function(up, err, errTip) {
	               //上传出错时，处理相关的事情
	        	var $this = $("#"+file.id);
	        	$this.find("td:eq(2)").html("<span style='color:red;'>" + errTip + "</span>");
	        	/*$this.removeAttr("id");*/
	        },
	        'UploadComplete': function() {
	               //队列文件处理完毕后，处理相关的事情
	        },
	        'Key': function(up, file) {
	        	var name = file.name;
	        	var suffix = name.substring(parseInt(name.lastIndexOf(".") + 1));
	            var key = "";
	            key = $("#companyId").val() + "/ppt" +
	            	"/" + guid() + "." + suffix;
	            return key;
	        }
	    }
	});
	
	Qiniu.uploader({
	    runtimes: 'html5,flash,html4',
	    browse_button: 'docfiles',
	    uptoken_url: rootPath + '/classTypeResource/getuptoken',
	    get_new_uptoken: true, 
	    unique_names: false,
	    save_key: false,
	    domain: $("#qndomain").val(),
	    container: 'qnuploadt',
	    max_file_size: '1024mb',
	    filters:{
			mime_types:[
			            {title:"docs files",extensions:"doc,pdf,xls,docx,xlsx"}]},
	    flash_swf_url: 'path/of/plupload/Moxie.swf',
	    max_retries: 3,
	    chunk_size: '4mb', 
	    auto_start: true, 
	    init: {
	        'FilesAdded': function(up, files) {
	            plupload.each(files, function(file) {
	                // 文件添加进队列后，处理相关的事情
	            	var tag = $("div.addResourceTc #tag").val();
	            	var ids = $("div.addResourceTc #tag").find("option:selected").attr("ids");

	                var itemOneId = $("div.addResourceTc #itemOneId").val();
	                var itemSecondId = $("div.addResourceTc #itemSecondId").val();
	                var html = "";
	                html += "<tr><td width='480' style='word-break:break-all'>" + file.name + "</td>";
	                html += "<td width='100'>" + bytesToSize(file.size) + "</td>";
	                html += "<td id='td"+file.id+"' width='300'><span style='color:red;'>等待上传</span></td>";
	                html += "<td width='190'></td></tr>";
	                html = $(html);
	                html.attr("id",file.id);
	                html.data("tag",tag);
	                html.data("itemOneId",itemOneId);
	                html.data("itemSecondId",itemSecondId);
	                html.data("ids",ids);
	                $("table[name=resourceList] tbody").append(html);
		        	if(file.name.length > 120){
		        		html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议三十个字以内</span>");
		        		up.removeFile(file);
		        	}
	            });
	        },
	        'BeforeUpload': function(up, file) {
	               // 每个文件上传前，处理相关的事情
	        	resourceValidate(up, file);
	        },
	        'UploadProgress': function(up, file) {
	               // 每个文件上传时，处理相关的事情
	        	progress($("#td"+file.id),file.percent);
	        },
	        'FileUploaded': function(up, file, info) {
	               var res = $.parseJSON(info);
	               var sourceLink = res.key;
	               var size = file.size;
	               var name = file.name;
	               var suffix = name.substring(name.lastIndexOf(".") + 1);
	               console.log(sourceLink+","+size+","+name);
	               var $this = $("#"+file.id);
	               if(name.length > 120){
	            	   $this.find("td:eq(2)").html("<span style='color:red;'>文件名太长</span>");
	            	   return false;
	               }
                var schools = "";
                var allschool =  $("input[name='fenxiaoAll2']").prop("checked");
                if(allschool){
                    schools = "-1";
                }else{
                    $("input[name='fenxiao2']:checked").each(function(i,item){
                        if(($("input[name='fenxiao2']:checked").length-1) == i){
                            schools += $(item).val();
                        }else{
                            schools += $(item).val()+",";
                        }
                    });
                }
	               $.ajax({
	            	   url : rootPath + "/resourceList/save",
	            	   type:"post",
	            	   async:false,
	            	   data:{'sysItemOne': $this.data("itemOneId"),
	                       'sysItemSecond': $this.data("itemSecondId"),
	                       'tag': $this.data("tag"),
	                       'fileName':name,
                           'rTagId': $this.data("ids"),
	                       'fileType':suffix,
	                       'sourcePath':sourceLink,
	                       'sourceSize':size,
	                       'fileCategory':"docs",
                           'schoolids':schools,
	                       'uploadType':0},
	                   dataType:"json",
	                   success:function(data){
	                       if (data.msg == 'success') {
                               window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
	                    	   $this.find("td:eq(2)").html("<span >上传完成待处理</span>");
	                       } else {
	                    	   $this.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
	                       }
	                   }
	               });
	        },
	        'Error': function(up, err, errTip) {
	               //上传出错时，处理相关的事情
	        	var $this = $("#"+file.id);
	        	$this.find("td:eq(2)").html("<span style='color:red;'>" + errTip + "</span>");
	        	/*$this.removeAttr("id");*/
	        },
	        'UploadComplete': function() {
	               //队列文件处理完毕后，处理相关的事情
	        },
	        'Key': function(up, file) {
	        	var name = file.name;
	        	var suffix = name.substring(parseInt(name.lastIndexOf(".") + 1));
	            var key = "";
	            key = $("#companyId").val() + "/docs" +
	            	"/" + guid() + "." + suffix;
	            return key;
	        }
	    }
	});
}


// 点播上传。每次上传都是独立的鉴权，所以初始化时，不需要设置鉴权
var selectFile = function (event) {
    var userData = '{"Vod":{"UserData":{"IsShowWaterMark":"false","Priority":"7"}}}';
    JSON.stringify()
    for(var i=0; i<event.target.files.length; i++) {
        $.ajax({
            url : rootPath + "/video/getApsaraVideoAuth",
            type:"post",
            async:false,
            data:{'fileName': event.target.files[i].name},
            dataType:"json",
            success:function(data){
                if (null != data) {
                    event.target.files[i].uploadAuth = data.uploadAuth;
                    event.target.files[i].uploadAddress = data.uploadAddress;
                    event.target.files[i].videoId = data.videoId;
                }
            }
        });
        if(event.target.files[i].name.length > 30){
            return $.msg("文件名称不能超过30个字符");
        }
        var fileTypes = "3gp,asf,avi,dat,dv,flv,f4v,gif,m2t,m3u8,m4v,mj2,mjpeg,mkv,mov,mp4,mpe,mpg,mpeg,mts,ogg,qt,rm,rmvb,swf,ts,vob,wmv,webm";
        var split = event.target.files[i].name.split(".");
        if(fileTypes.indexOf(split[1]) == -1){
            return $.msg("存在不支持的格式或非视频文件");
        }

        // 点播上传。每次上传都是独立的OSS object，所以添加文件时，不需要设置OSS的属性
        aliyunUploader.addFile(event.target.files[i], null, null, null, userData);

        // 文件添加进队列后，处理相关的事情
        var tag = $("div.addVideoTc #tag").val();
        var itemOneId = $("div.addVideoTc #itemOneId").val();
        var itemSecondId = $("div.addVideoTc #itemSecondId").val();
        var html = "";
        html += "<tr id='tr"+event.target.files[i].videoId+"'><td width='480' style='word-break:break-all'>" + event.target.files[i].name + "</td>";
        html += "<td width='100'>" + bytesToSize(event.target.files[i].size) + "</td>";
        html += "<td id='td"+event.target.files[i].videoId+"' width='300'><span style='color:red;'>等待上传</span></td>";
        html += "<td width='190'><button class='btn btn-warning btn-xs cancel' id='"+event.target.files[i].videoId+"' onclick='deleteFile(this)' style='margin-top:3px;'><i class='glyphicon glyphicon-ban-circle'></i><span>删除</span></button></td></tr>";
        html = $(html);
        html.data("tag",tag);
        html.data("itemOneId",itemOneId);
        html.data("itemSecondId",itemSecondId);
        $("#fileuploadAliyun table tbody").append(html);
        aliyunUploader.startUpload();
    }
};
var aliyunUploader;
function aliyunUploadVideo(){
    aliyunUploader = new AliyunUpload.Vod({
        // 文件上传失败
        'onUploadFailed': function (uploadInfo, code, message) {
            $("#td"+uploadInfo.file.videoId+"").html("<span style='color: red;'>上传失败</span>");
        },
        // 文件上传完成
        'onUploadSucceed': function (uploadInfo) {
            window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
            $("#td"+uploadInfo.file.videoId+"").html("<span style='color: #1ebb90;'>上传完成</span>");
            recordLog(uploadInfo.file.videoId)
        },
        // 文件上传进度
        'onUploadProgress': function (uploadInfo, totalSize, loadedPercent) {
            var html = '<div style="margin-top:4px; width:150px; display:inline-block;" class="progress progress-striped active mb0 tc_rel" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">';
            html += '<div class="progress-bar progress-bar-success" style="width:'+(loadedPercent * 100.00).toFixed(2)+'%;"></div>';
            html += '<div style="margin-top: 3px;" class="tc tc_pos upload_percent progress-u">'+(loadedPercent * 100.00).toFixed(2)+'%</div>';
            html += '</div><span class="rate" style="vertical-align:super; "></span>';
            $("#td"+uploadInfo.file.videoId+"").html(html);
        },
        // 开始上传
        'onUploadstarted': function (uploadInfo) {
            console.debug(uploadInfo);
            var schools = "";
            var allschool =  $("input[name='fenxiaoAll']").prop("checked");
            if(allschool){
                schools = "-1";
            }else{
                $("input[name='fenxiao']:checked").each(function(i,item){
                    if(($("input[name='fenxiao']:checked").length-1) == i){
                        schools += $(item).val();
                    }else{
                        schools += $(item).val()+",";
                    }
                });
            }
            $.ajax({
                type: "post",
                async:false,
                url:  rootPath+"/video/uploadApsaraVieo",
                dataType : "json",
                data:{
                    "videoTag":$("div.addVideoTc #tag").val(),
                    "rTagId":$("div.addVideoTc #tag").find("option:selected").attr("ids"),
                    "itemOneId":$("#itemOneId").val(),
                    "itemSecondId":$("#itemSecondId").val(),
                    "videoName":uploadInfo.file.name,
                    "vodeoSize":uploadInfo.file.size,
                    "videoCcId":uploadInfo.file.videoId,
                    'schoolids':schools
                },
                success: function(data){
                    if(!(null != data && data.uploadFlag)){
                        return $.msg("上传失败");
                    }
                    var uploadAuth = document.getElementById("uploadAuth").value;
                    var uploadAddress = document.getElementById("uploadAddress").value;
                    var videoId = document.getElementById("videoId").value;

                    if(!uploadInfo.file.videoId){
                        aliyunUploader.setUploadAuthAndAddress(uploadInfo, uploadInfo.file.uploadAuth, uploadInfo.file.uploadAddress,uploadInfo.file.videoId);
                    }else{
                        //如果videoId有值，根据videoId刷新上传凭证
                        aliyunUploader.setUploadAuthAndAddress(uploadInfo, uploadInfo.file.uploadAuth, uploadInfo.file.uploadAddress);
                    }
                }
            });
        }
    });
    document.getElementById("aliyunVideoFiles").addEventListener('change', selectFile);
}
function deleteFile(obj) {
    var videoId = obj.id;
    if (videoId) {
        $.ajax({
            url: rootPath + '/video/del/' + videoId,
            type: "post",
            async: false,
            data: {
                "ccvid": videoId,
            },
            cache: false,
            error: function (data) {
                $.msg("删除出现错误!");
            },
            success: function (result) {
                $("#tr"+videoId).remove();
            }
        });
    }
}


function QnVideo(){
	Yunduo.uploader({
		runtimes: 'html5,flash,html4',
		browse_button: 'quVideoFiles',
	    filters:{
			max_file_size: '2048mb',
			mime_types:[
			            {title:"video files",extensions:"mp4,flv,avi,aiff,mov,mpeg,mpg,qt,ram,viv,ra,rm,rmvb,wmv"}]},
	    flash_swf_url: 'path/of/plupload/Moxie.swf',
	    chunk_size: '4mb', 
	    init: {
	        'FilesAdded': function(up, files) {
	            plupload.each(files, function(file) {
	                // 文件添加进队列后，处理相关的事情
	            	var tag = $("div.addVideoTc #tag").val();
	            	var ids = $("div.addVideoTc #tag").find("option:selected").attr("ids");
	                var itemOneId = $("div.addVideoTc #itemOneId").val();
	                var itemSecondId = $("div.addVideoTc #itemSecondId").val();
	                var html = "";
	                html += "<tr><td width='480' style='word-break:break-all'>" + file.name + "</td>";
	                html += "<td width='100'>" + bytesToSize(file.size) + "</td>";
	                html += "<td id='td"+file.id+"' width='300'><span style='color:red;'>等待上传</span></td>";
	                html += "<td width='190'></td></tr>";
	                html = $(html);
	                html.attr("id",file.id);
	                html.data("tag",tag);
	                html.data("ids",ids);
	                html.data("itemOneId",itemOneId);
	                html.data("itemSecondId",itemSecondId);
	                $("#fileuploadqnvd table tbody").append(html);
		        	if(file.name.length > 50){
		        		html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议五十个字以内</span>");
		        		up.removeFile(file);
		        	}
	            });
	        },
	        'BeforeUpload': function(up, file) {
	               // 每个文件上传前，处理相关的事情
	        	resourceValidate(up, file);
	        },
	        'UploadProgress': function(up, file) {
	               // 每个文件上传时，处理相关的事情
	        	progress($("#td"+file.id),file.percent);
	        },    
	        'FileUploaded': function(up, file, info) {
	               var size = getMB(file.size);
	               var name = file.name;
	               var tampname = info.response;
	               var key = getKey(name);
	               var $this = $("#"+file.id);
	               if(name.length > 50){
	            	   $this.find("td:eq(2)").html("<span style='color:red;'>文件名太长</span>");
	            	   return false;
	               }
	               $.ajax({
	            	   url : "/video/saveQNVideo",
	            	   type:"post",
	            	   async:false,
	            	   data:{'itemOneId': $this.data("itemOneId"),
	                       'itemSecondId': $this.data("itemSecondId"),
	                       'videoTag': $this.data("tag"),
                           'rTagId':$this.data("ids"),
	                       'videoName':name,
	                       'videoStatus':'VIDEO_PROCESS_INHAND',
	                       'filePath':tampname,
	                       'webVideoId':key,
	                       'storageType':'VIDEO_STORAGE_TYPE_QNVD'
	                       },
	                   dataType:"json",
	                   success:function(data){
	                       if (data.msg == 'success') {
	                    	   $this.find("td:eq(2)").html("<span >处理中</span>");
                               recordLog(data.video.id);
	                       } else {
	                    	   $this.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
	                       }
	                   }
	               });
	        },
	        'Error': function(up, err) {
	               //上传出错时，处理相关的事情
	        	var $this = $("#"+err.file.id);
	        	$this.find("td:eq(2)").html("<span style='color:red;'>" + err.response + "</span>");
	        	/*$this.removeAttr("id");*/
	        }
	    }
	});
}
var upload;
function blveUploadify(){
    var obj = {
        uploadButtton: "BLVSFiles",   //打开上传控件按钮id
        userid : $("#userid").val(),
        ts : $("#ts").val(),
        hash : $("#hash").val(),
        cataid:'1',
        sign: $("#sign").val(),
        uploadSuccess: function(res){
            var vid = res.vid;
            var fileName = res.title;
            $.ajax({
                url : rootPath + "/classModule/blvsUploadSuccess",
                type:"post",
                async:false,
                data:{'itemOneId': $("#itemOneId").val(),
                    'itemSecondId': $("#itemSecondId").val(),
                    'videoTag': $("#tag").val(),
                    'videoName':fileName,
                    'videoStatus':'VIDEO_PROCESS_INHAND',
                    'webVideoId':vid,
                    'storageType':'VIDEO_STORAGE_TYPE_BLVS'
                },
                dataType:"json",
                success:function(data){
                    if (data.msg == 'success') {
                        console.log("success");
                    }else{
                        console.log(data);
                    }
                }
            });
        },
    };
    $.ajax({
        url : rootPath + "/video/validateBLVS",
        type:"post",
        dataType:"json",
        success:function(data){
            var initParam = $.extend(obj,data);
            upload = new PolyvUpload(initParam);

            setInterval(function (){
                $.ajax({
                    url : rootPath + "/video/validateBLVS",
                    type:"post",
                    dataType:"json",
                    success:function(data){
                        var initParam = $.extend(obj,data);
                        upload.update(initParam);
                    }
                });
            },(3*60*1000));
        }
    });

}

function selajaxstroage(ele){
	if(!$("div.addResourceTc #itemOneId").val()||"0"==$("div.addResourceTc #itemOneId").val()){
		$("div.addResourceTc .item_msg").html("请选择学科");
		return false;
	}
	if(!$("div.addResourceTc #itemSecondId").val()||"0"==$("div.addResourceTc #itemSecondId").val()){
		$("div.addResourceTc .item_msg").html("请选择学科小类");
		return false;
	}
	if(!$("div.addResourceTc #protocol").prop("checked")){
		$("div.addResourceTc .protocol_msg").html("您尚未同意上传协议");
		return false;
	}
	$("div.addResourceTc .protocol_msg").html("");
    $('div.addResourceTc i.close').click();
    $(ele).click();
}

function resourceValidate(up,file){
	$.ajax({
		url:rootPath + "/classTypeResource/selSumNum",
		type:"post",
		dataType:"json",
		async:false,
		success:function(data){
			if(data.msg != "success"){
				var $this = $("#"+file.id);
				$this.find("td:eq(2)").html("<span style='color:red;'>" + data.msg + "</span>");
				up.removeFile(file);
			}
		}
	});
}

function getMB(bytes) {
    if (bytes === 0) {
        return 0;
    }
    var mb = (1024 * 1024), // or 1024
        i = Math.floor(Math.log(bytes) / Math.log(mb));
    return (bytes / Math.pow(mb, i)).toPrecision(3);
}

function getKey(name){
	var suffix = name.substring(parseInt(name.lastIndexOf(".") + 1));
    var key = "";
    key = $("#companyId").val() + "/video" +
    	"/" + guid() + "." + suffix;
    return key;
}

function guid() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
        return v.toString(16);
    });
}
function checkFunctionSet(){
	$.ajax({
		url: rootPath + "/companyFunctionSet/queryCompanyCertificateExist",
		type:"post",
		data:{"functionCode":'RESOURCE_TYPE_FLASHGROUP','status':'1'},
		success:function(data){
			if(data == "success"){
				flasGroupUpLoadFlag = true;
			}else{
				flasGroupUpLoadFlag = true;
			}
		}
	});
}

/**
 * bjy uploadvideo
 */
function bjyUploadVido(){
    var backVideoId;
    var uploader = new BJY.VideoUploader({
        mainElement: $('#bjyFiles'),
        ignoreError: true,
        name: '',
        multiple: true,
        getUploadUrl: function (data) {
            return  $.ajax({
                        url: rootPath + '/video/getUpBjySign',
                        type: 'post',
                        data: {
                            file_name: data.videoName
                        }
                    }).then(function (signInfo) {
                            return $.ajax({
                                        url: 'https://api.baijiacloud.com/openapi/video/getUploadUrl',
                                        type: 'post',
                                        data: signInfo
                                    })
                    }).then(function (response) {
                        var result = response.data;
                        return {
                            id: result.video_id,
                            url: result.upload_url
                        };
                    });
        },
        getResumeUploadUrl: function (data) {
            return $.ajax({
                        url: rootPath + '/video/getBjyResumSign',
                        type: 'post',
                        async:false,
                        data: {
                            video_id: data.uploadId
                        }
                    }).then(function (signInfo) {
                        return $.ajax({
                                    url: 'http://www.baijiacloud.com/openapi/video/getResumeUploadUrl',
                                    type: 'post',
                                    data: signInfo
                                });
                    }).then(function(response){
                        var result = response.data;
                        if (!result) {
                            alert(response.msg);
                            return;
                        }
                        return {
                            fid: result.video_id,
                            id: result.video_id,
                            url: result.upload_url,
                            uploaded: result.upload_size
                        };
                    });
        },
        onFileChange: function (files) {
            var currentFiles = uploader.currentFiles;
            if (!currentFiles.length) {
                return;
            }

            if (!uploader.validateFiles(currentFiles)) {
                uploader.reset();
                return;
            }
            var itemHTML = '<div class="item-list">'

            $.each(currentFiles,function (index, file) {
                    // 文件添加进队列后，处理相关的事情
                    var tag = $("div.addVideoTc #tag").val();
                    var itemOneId = $("div.addVideoTc #itemOneId").val();
                    var itemSecondId = $("div.addVideoTc #itemSecondId").val();
                    var html = "";
                    html += "<tr><td width='480' style='word-break:break-all'>" + file.videoName + "</td>";
                    html += "<td width='100'>" + bytesToSize(file.videoSize) + "</td>";
                    html += "<td id='td"+index+"' width='300'><span style='color:red;'>等待上传</span></td>";
                    html += "<td width='190'></td></tr>";
                    html = $(html);
                    html.attr("id",index);
                    html.data("tag",tag);
                    html.data("itemOneId",itemOneId);
                    html.data("itemSecondId",itemSecondId);
                    $("#fileUploadBjy table tbody").append(html);
                    if(file.videoName.length > 50){
                        html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议五十个字以内</span>");
                        uploader.reset();
                        return;
                    }
                    uploader.autoUpload(file);
                }
            );

            itemHTML += '</div>';
            $(itemHTML).insertAfter($('.bjy-demo'))
        },
        onUploadStart: function (data) {
            console.log('onUploadStart', data.fileItem);
        },
        onUploadProgress: function (data) {
            // $('.item')
            //     .eq(data.fileItem.index)
            //     .find('.item-status').html('上传' + data.percent + '>uploaded: ' + data.uploaded + '> total: ' +  data.total + '> index :' + data.fileItem.chunk.index);
            console.log(data);
            progress($("#td"+data.fileItem.index),data.percent.replace('%',''));
        },

        onUploadSuccess: function (data) {
            console.log('onUploadSuccess', data);
            // $('.item')
            //     .eq(data.fileItem.index)
            //     .find('.item-status').html('上传成功');

            var name = data.fileItem.file.name;
            var $this = $("#td"+data.fileItem.index).parents('tr');
            var tdindex = data.fileItem.index;
            $.ajax({
                url : rootPath + "/video/bjyUploadSuccess",
                type:"post",
                async:false,
                data:{'itemOneId': $this.data("itemOneId"),
                    'itemSecondId': $this.data("itemSecondId"),
                    'videoTag': $this.data("tag"),
                    'videoName':name,
                    'videoStatus':'VIDEO_PROCESS_INHAND',
                    'videoCcId':data.uploadId,
                    'storageType':'VIDEO_STORAGE_TYPE_BJY'
                },
                dataType:"json",
                success:function(data){
                    if (data.msg == 'success') {
                        window.sessionStorage.removeItem("COURSE_SEARCH_DATA");
                        backVideoId = data.video.id;
                        $("#td" + tdindex).html("<span >处理中</span>");
                    } else {
                        $("#td" + tdindex).html("<span style='color:red;'>" + data.msg + "</span>");
                    }
                }
            });

        },
        onChunkUploadError: function (data) {
            alert('上传错误，请重新上传');
        },
        onUploadError: function (data) {
            alert('上传错误，请重新上传');
            // $('.item')
            //     .eq(data.fileItem.index)
            //     .find('.item-status').html('上传失败');
            $("#td"+data.fileItem.index).html('上传失败');
        },
        onUploadComplete: function (data) {
            if (backVideoId){
                recordLog(backVideoId);
            }
        },
        onError: function (data) {
            alert(data.content);
        }
    });
    $('.btn-stop').click(function () {
        // uploader.stopFile 传入上传的 index 可以停止上传
        uploader.stopFile(0);
    });
    $('.btn-continue').click(function () {
        // 继续上传
        var data = uploader.currentFiles[0];
        uploader.resumeUpload(data);
    });
}


var blv_uploader;
function blvsUploadify() {
    $.ajax({
        url : rootPath + "/video/getBlvsWriteToken",
        type:"post",
        dataType:"json",
        success:function(jsonData){
            var writeToken = jsonData.writeToken;

            blv_uploader = $('#blv_uploader').uploadify({
                'auto' : true,
                'height': 36,
                //设置按钮的高度(单位px)，默认为30.(不要在值里写上单位，并且要求一个整数，width也一样)
                'width': 138,
                'buttonCursor': 'hand',
                'formData' : {
                    'fcharset' : 'ISO-8859-1',
                    'writetoken' : writeToken,
                    'cataid':'1',
                    'JSONRPC'     : '{"title": "这里是标题11", "tag": "标签", "desc": "视频文档描述"}'
                },
                'buttonText': '选择上传文件',
                'fileSizeLimit' : '3000MB',
                'fileTypeDesc' : '视频文件',
                'fileTypeExts' : '*.avi; *.wmv; *.mp4;*.mp3; *.mov; *.flv; *.mkv; *.rmvb',//文件类型过滤
                'swf'      : '../uploadify/uploadify.swf',
                'multi':true,
                'successTimeout':1800,
                'queueSizeLimit':10,
                'uploader' : 'http://v.polyv.net/uc/services/rest?method=uploadfile',
                onSelect: function(file){
                    //TODO 查询存储空间是否够用

                    // 文件添加进队列后，处理相关的事情
                    var tag = $("div.addResourceTc #tag").val();
                    var itemOneId = $("div.addResourceTc #itemOneId").val();
                    var itemSecondId = $("div.addResourceTc #itemSecondId").val();
                    var html = "";
                    html += "<tr><td width='480' style='word-break:break-all'>" + file.name + "</td>";
                    html += "<td width='100'>" + bytesToSize(file.size) + "</td>";
                    html += "<td id='td"+file.id+"' width='300'><span style='color:red;'>等待上传</span></td>";
                    html += "<td width='190'></td></tr>";
                    html = $(html);
                    html.attr("id","tr"+file.id);
                    html.data("tag",tag);
                    html.data("itemOneId",itemOneId);
                    html.data("itemSecondId",itemSecondId);
                    $("#uploadBLVS tbody.files").append(html);
                    if(file.name.length > 50){
                        html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议五十个字以内</span>");
                        $('#blv_uploader').uploadify('cancel',file.id);
                    }
                    $('div.addVideoTc').find('i.close').click();
                },
                onUploadStart: function(file){
                    console.log('start update');
                    var obj = {};
                    obj.title = file.name;
                    obj.tag = '标签';
                    obj.desc = '视频文档描述';
                    var formData = {
                        'fcharset' : 'ISO-8859-1',
                        'writetoken' : writeToken,
                        'cataid':'1',
                        'JSONRPC'     : JSON.stringify(obj)
                    }
                    $('#blv_uploader').uploadify('settings','formData',formData);
                },
                //每个文件即将上传前触发
                onUploadProgress: function(file,bytesUploaded,bytesTotal,totalBytesUploaded,totalBytesTotal){
                    progress($("#td"+file.id),((bytesUploaded/bytesTotal)*100).toFixed(2));
                },
                //onUploadSuccess为上传完视频之后回调的方法，视频json数据data返回，
                //下面的例子演示如何获取到vid
                'onUploadSuccess':function(file,data,response){
                    var jsonobj=eval('('+data+')');
                    console.log(jsonobj.data[0].vid + " - " + jsonobj.data[0].playerwidth + " - " + jsonobj.data[0].duration);
                    var name = file.name;
                    $.ajax({
                        url : rootPath + "/classModule/blvsUploadSuccess",
                        type:"post",
                        async:false,
                        data:{'itemOneId': $("#itemOneId").val(),
                            'itemSecondId': $("#itemSecondId").val(),
                            'videoTag': $("#tag").val(),
                            'videoName':name,
                            'videoStatus':'VIDEO_PROCESS_INHAND',
                            'webVideoId':jsonobj.data[0].vid,
                            'storageType':'VIDEO_STORAGE_TYPE_BLVS'
                        },
                        dataType:"json",
                        success:function(data){
                            if (data.msg == 'success') {
                                recordLog(data.video.id);
                                $("#td" + file.id).html("<span >处理中</span>");
                                console.log("success");
                            } else {
                                $("#td" + file.id).html("<span style='color:red;'>" + data.msg + "</span>");
                            }
                        }
                    });
                },
                onUploadError: function(file,errorCode,erorMsg,errorString){
                    if(errorString != 'Cancelled'){
                        $("#td" + file.id).html('<span >'+erorMsg+'</span>');
                    }
                    console.log(errorCode+"_"+erorMsg+"_"+errorString);
                },
            });


        }
    });


}
// function blvsUploadify() {
//     $.ajax({
//         url : rootPath + "/video/getBlvsWriteToken",
//         type:"post",
//         dataType:"json",
//         success:function(jsonData){
//             var writeToken = jsonData.writeToken;
//
//             blv_uploader = $('#blv_uploader').fileupload({
//                 autoUpload: false,//是否自动上传
//                 // acceptFileTypes: 'wmv,wm,asf,asx,rm,rmvb,ra,ram,mpg,mpeg,mpe,vob,dat,mov,3gp,mp4,mp4v,m4v,mkv,avi,flv,f4v,mts',//文件格式限制
//                 // maxNumberOfFiles: 5,//最大上传文件数目
//                 // maxFileSize: 1024000000,//文件不超过5M
//                 // limitConcurrentUploads: 5,
//                 // sequentialUploads: true,//是否队列上传
//                 url: "http://v.polyv.net/uc/services/rest?method=uploadfile",  //文件上传地址，当然也可以直接写在input的data-url属性内
//                 dataType: 'json',
//                 add: function (e, data) {
//                     console.log(data);
//                     var uuid = getuuid();
//                     var fileName = data.files[0].name;
//                     var fileSize = data.files[0].size;//KB
//                     var tag = $("div.addResourceTc #tag").val();
//                     var itemOneId = $("div.addResourceTc #itemOneId").val();
//                     var itemSecondId = $("div.addResourceTc #itemSecondId").val();
//                     var html = "";
//                     html += "<tr><td width='480' style='word-break:break-all'>" + fileName + "</td>";
//                     html += "<td width='100'>" + bytesToSize(fileSize) + "</td>";
//                     html += "<td id='td"+uuid+"' width='300'><span style='color:red;'>等待上传</span></td>";
//                     html += "<td width='190'></td></tr>";
//                     html = $(html);
//                     html.attr("id","tr"+uuid);
//                     html.data("tag",tag);
//                     html.data("itemOneId",itemOneId);
//                     html.data("itemSecondId",itemSecondId);
//                     $("#uploadBLVS tbody.files").append(html);
//                     if(fileName.length > 30){
//                         html.find("td:eq(2)").html("<span style='color:red;'>文件名太长,建议三十个字以内</span>");
//                         var qx = '<a class="btn btn-primary btn-xs canle" style="margin-top:3px;" href="javascript:;">' +
//                             '                    <i class="glyphicon glyphicon-upload"></i>' +
//                             '                    <span>取消</span>' +
//                             '                </a>';
//                         html.find('td:last').html(qx);
//                     }else{
//                         var begin = '<a class="btn btn-primary btn-xs start" style="margin-top:3px;" href="javascript:;">' +
//                             '                    <i class="glyphicon glyphicon-upload"></i>' +
//                             '                    <span>开始上传</span>' +
//                             '                </a>';
//                         var canle = '<a class="btn btn-primary btn-xs canle" style="margin-top:3px;margin-left: 5px;" href="javascript:;">' +
//                             '                    <i class="glyphicon glyphicon-upload"></i>' +
//                             '                    <span>取消</span>' +
//                             '                </a>';
//                         html.find('td:last').html(begin + canle);
//                     }
//
//
//                     $('#uploadBLVS').on('click','.canle',function () {
//                         data.abort();
//                     });
//                     $('#uploadBLVS').on('click','.start',function () {
//                         data.submit();
//                     });
//
//
//                 },
//                 progress: function (e, data) {
//                     console.log(data);
//                     // var progress = parseInt(data.loaded / data.total * 100, 10);
//                     // console.log(progress);
//                 },
//                 done: function (e, data) {
//                     console.log('upload success');
//                     console.log(data);
//
//                     data.context.text('Upload finished.');
//                 },
//                 fail: function (e, data) {
//                     console.log(data);
//                 }
//
//             });
//             //文件上传前触发事件
//             $('#blv_uploader').bind('fileuploadsubmit', function (e, data) {
//                 console.log(data);
//                 data.formData = {
//                     'fcharset' : 'ISO-8859-1',
//                     'writetoken' : 'dfab9a6d-dcb7-44c3-b9ed-fb2755eb5975',
//                     'cataid':'1',
//                     'JSONRPC'     : '{"title": "uploadfile", "tag": "标签", "desc": "视频文档描述"}'
//                 };  //如果需要额外添加参数可以在这里添加
//                 // var obj = {};
//                 // obj.title = file.name;
//                 // obj.tag = '标签';
//                 // obj.desc = '视频文档描述';
//                 // var formData = {
//                 //     'fcharset' : 'ISO-8859-1',
//                 //     'writetoken' : writeToken,
//                 //     'cataid':'1',
//                 //     'JSONRPC'     : JSON.stringify(obj)
//                 // }
//             });
//
//         }
//     });
//
//
// }
//
// function getuuid(){
//     var s = [];
//     var hexDigits = "0123456789abcdef";
//     for (var i = 0; i < 36; i++) {
//         s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
//     }
//     s[14] = "4";  // bits 12-15 of the time_hi_and_version field to 0010
//     s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1);  // bits 6-7 of the clock_seq_hi_and_reserved to 01
//     s[8] = s[13] = s[18] = s[23] = "-";
//
//     var uuid = s.join("");
//     return uuid;
// }


    //获取文件格式
    function get_suffix(filename) {
        pos = filename.lastIndexOf('.')
        suffix = ''
        if (pos != -1) {
            suffix = filename.substring(pos)
        }
        return suffix;
    }
    //处理上传文件名称
    function calculate_object_name(filename){
        g_object_name += "${filename}"
        return ''
    }
    //获取上传文件名
    function get_uploaded_object_name(filename){
        tmp_name = g_object_name
        tmp_name = tmp_name.replace("${filename}", filename);
        return tmp_name
    }
    function set_upload_param(up, filename, ret,dir){
        g_object_name = g_dirname;
        if(typeof dir!='undefined'&&dir!=""){
            g_object_name+=dir;
            var spilt = dir.split("/");
            var groupt=getGroupById(spilt[2]);
            if(groupt.apnum!=groupt.allnum){
                return;
            }
        }
        if (filename != '') {
            suffix = get_suffix(filename)
            calculate_object_name(filename)
        }
        new_multipart_params = {
            'key' : g_object_name,
            'policy': policyBase64,
            'OSSAccessKeyId': accessid,
            'success_action_status' : '200',
            'signature': signature,
        };
        up.setOption({
            'url': host,
            'multipart_params': new_multipart_params
        });
        up.start();
    }
    //获取uuid
    function generateUUID() {
        var d = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-xxxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = (d + Math.random()*16)%16 | 0;
            d = Math.floor(d/16);
            return (c=='x' ? r : (r&0x3|0x8)).toString(16);
        });
        return uuid;
    }
    //上传文件组列表
    var groups=[];
    //依据分组id获取上传文件组信息
    function getGroupById(id){
        for(var i=0;i<groups.length;i++){
            if(id==groups[i].id){
                return groups[i];
            }
        }
        return null;
    }
    //显示文件组进度消息
    function showProduce(step,group){
        var massage = "";
        if(step==1&&group.cpnum<group.allnum){
            massage = "校验进度:"+group.cpnum+"/"+group.allnum;
        }else if((step==2&&group.apnum<group.allnum)||(step==1&&group.cpnum==group.allnum)){
            massage = "解析进度:"+group.apnum+"/"+group.allnum;
        }else if(step==3||(step==2&&group.apnum==group.allnum)){
            massage = "上传进度:"+group.upnum+"/"+group.allnum;
        }else if(step==4){
            massage = "上传完成";
        }else if(step==0){
            massage = "获取引导文件中...";
        }
        if($("#"+group.id).size()==0){
            var html = "";
            html += "<tr id="+group.id+"><td width='480'>" + group.fileName + "</td>";
            html += "<td width='100'>" + fileSize+ "</td>";
            html += "<td width='300'><span style='color:red;'>"+massage+"</span></td>";
            html += "<td width='190'></td></tr>";
            if(zipType == 1){
                $("#fileuploadscorm table tbody").append(html);
            }else if(zipType == 2){
                $('table[name="resourceList"] tbody').append(html);
            }
        }else{
            var obj;
            if(zipType == 1){
                obj = $("#fileuploadscorm table tbody tr#"+group.id);
            }else if(zipType == 2){
                obj = $('table[name="resourceList"] tbody tr#'+group.id);
            }
            obj.find("td:eq(2)").html("<span style='color:red;'>"+massage+"</span>");
        }
    }
    function uploadOss(){
        uploader = new plupload.Uploader({
            runtimes : 'html5,flash,silverlight,html4',
            browse_button : 'selectfiles',
            flash_swf_url : 'lib/plupload-2.1.2/js/Moxie.swf',
            silverlight_xap_url : 'lib/plupload-2.1.2/js/Moxie.xap',
            url : 'http://oss.aliyuncs.com',
            init: {
                FilesAdded: function(up, files) {
                    plupload.each(files, function(file) {
                        var dir=file.getNative().dir;
                        var spilt = dir.split("/");
                        var groupt=getGroupById(spilt[2]);
                        groupt.apnum+=1;
                        showProduce(2,groupt);

                        // 文件总数等于上传队列总数时才触发上传事件
                        if(groupt.apnum == groupt.allnum){
                            debugger
                            set_upload_param(uploader, '', false);
                        }
                    });
                },
                BeforeUpload: function(up, file) {
                    set_upload_param(up, file.name, true,file.getNative().dir);
                },
                FileUploaded: function(up, file, info) {
                    if (info.status == 200){
                        var dir=file.getNative().dir;
                        var spilt = dir.split("/");
                        var groupt=getGroupById(spilt[2]);
                        groupt.upnum+=1;
                        showProduce(3,groupt);
                        if(groupt.allnum==groupt.upnum && zipType == 1){
                            showProduce(4,groupt);
                            var obj = $("#fileuploadscorm table tbody tr#"+groupt.id);
                            updateVideoinfo(obj,groupt.fileId,groupt.mfp);
                            console.log("filescorm:"+groupt.mfp);
                        }else if(groupt.allnum==groupt.upnum && zipType == 2){
                            showProduce(4,groupt);
                            var obj = $('table[name="resourceList"] tbody tr#'+groupt.id);
                            updateFlashGroupInfo(obj,groupt.fileId,groupt.mfp);
                            console.log("flashGroupFiles:"+groupt.mfp);
                        }
                    }else{
                        document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = info.response;
                    }
                },
                Error: function(up, err) {
                    console.log(err);
                }
            }
        });
        uploader.init();
    }

    function recordLog(vid) {
        $.ajax({
            url : rootPath + "/video/generateUploadLog",
            data:{"id":vid},
            type:'POST',
            success : function (flag) {
                if (flag){
                    /*日志插入成功*/
                }
            }
        })
    }