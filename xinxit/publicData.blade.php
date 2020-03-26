<!DOCTYPE html>
<html lang="en">
    <head>
        <title>公海数据</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen"> 
        <!--<link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" media="screen">
           <link rel="stylesheet" href="{{asset('css/index.css')}}">
           <link rel="stylesheet" href="{{asset('css/polling.css')}}">
           	<link rel="stylesheet" href="{{asset('css/model.css')}}">
    <link rel="stylesheet" href="{{asset('css/model2.css')}}">
       <!--<script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
        <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
        
        <link rel="stylesheet" href="{{asset('css/table.css')}}">
        <script src="{{asset('js/My97DatePicker/WdatePicker.js')}}"></script>
    </head>
    
    <body>
    	@include('layout/head')
    	<!--<script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="https://www.jeasyui.com/easyui/datagrid-filter.js"></script>
        <script type="text/javascript" src="https://www.jeasyui.com/easyui/datagrid-cellediting.js"></script>
        <div class="container-fluid">
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="span12" id="polling-header">
                        <div class=" span10 " id="polling-header-top">
                            <p class="polling-headerp" style="background-image: url('{{asset("img/down.svg")}}');"><span></span>查询条件</p>
                        </div>
                        <div class=" span10 " id="polling-header-body" style="overflow:hidden">
                            <form style="position:relative" name="seaform" id ="seaform">
                                <!--<div class="span6"><span>首席咨询师：</span><input type="text" placeholder="" name="WMBA" ></div>-->
                                <div class="span6"><span>项目：</span><select name="seaproject" id="">
                                    <option value="">请选择</option>
                                    @foreach($projects as $project)
                                    <option value="{{$project->gname}}">{{$project->gname}}</option>
                                    @endforeach
                                </select></div>
                                <div class="span6"><span>反馈信息：</span><select name="seaAdvi" id="">
                                        <option value="">请选择</option>
                                        <option value="无此人,打错了">无此人，打错了</option>
	                                    <option value="当日三遍未通">当日三遍未通</option>
	                                    <option value="撞单分重,学员呼入,留言回拨">撞单分重；学员呼入；留言回拨</option>
	                                    <option value="客服,已报名学员">客服，已报名学员</option>
	                                    <option value="空号">空号</option>
	                                    <option value="咨询其他项目">咨询其他项目</option>
	                                    <option value="各种限制条件,不能来北京考试">各种限制条件，不能来北京考试</option>
	                                    <option value="不符合考编条件">不符合考编条件</option>     
                                   </select></div>
                                <div class="span6"><span>手机号：</span><input type="text" placeholder=""name="seaphone"></div>
                                <!-- <div class="span6"><span>最后跟单日期：</span><input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})"placeholder=""name="lastDocumentaryDate"></div> -->
                                <div class="span6"><span>跟单次数：</span><input type="text" placeholder=""name="numberOfTimes"></div>
                                <div class="span6"><span>放弃次数：</span><input type="text" placeholder=""name="giveupOfTimes"></div>
                                <div class="span6">
                                    <span>最后跟访时间：</span><input class="Wdate" type="text" style="width:23%" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="last_time1"  placeholder="日期">
                                    <span style="width:10%;text-align:center">至</span>
                                    <input class="Wdate" type="text" style="width:23%" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="last_time2" placeholder="日期">
                                </div>
                                <div class="span6">
                                    <span>录入时间：</span><input class="Wdate" type="text" style="width:23%" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="in_time1"  placeholder="日期">
                                    <span style="width:10%;text-align:center">至</span>
                                    <input class="Wdate" type="text" style="width:23%" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="in_time2" placeholder="日期">
                                </div>
                                {{csrf_field()}}
                                <input type="button" class="reset" value="重置" style="margin-right:30px"></input>
                                <input type="button" id="seasearch"  class="seasearch" value="查询"></input>
                               
                            </form>
                        </div>
                        <div class=" span10 " id="polling-header-top">
                            <p class="polling-allotp" style="background-image: url('{{asset("img/down.svg")}}');"><span style="background: url('{{asset("img/alloct.svg")}}') no-repeat;background-size: 100% 100%;"></span>分配数据</p>
                        </div>
                        <div class=" span10 " id="polling-allot-body" style="overflow:hidden;">
                            <div style="position:relative" id="seaform1">
                                <div class="span6"><span>姓名：</span>
                                    <select name="polling-account" id="">
                                    <option value="">请选择姓名</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->uid}}">{{$user->user_name}} {{$user->project}} {{$user->sector}} {{$user->group}}</option>
                                    @endforeach
                                 </select></div>
                                <div class="span6"><span>部门搜索：</span>
                                    <select name="polling-pro" id="">
                                    <option value="">请选择</option>
                                    @foreach($sectors as $sector)
                                    <option value="{{$sector->gname}}">{{$sector->gname}}</option>
                                    @endforeach
                                 </select></div>
                                <div class="span6"><span>小组搜索：</span>
                                    <select name="polling-group" id="">
                                    <option value="">请选择</option>
                                    @foreach($groups as $group)
                                    <option value="{{$group->gname}}">{{$group->gname}}</option>
                                    @endforeach
                                 </select></div>
                                <div class="span6"><span>搜索：</span>
                                    <input type="text" name="polling-name" placeholder="请输入咨询师正确信息"></div>
                                
                                <input type="button" class="polling-allot" value="分配" style="margin-right:30px"></input>
                               <span class="polling-allotspan" style="float:right;color:#42b983"></span>
                            </div>
                        </div>
                        <div class=" span10 " id="polling-header-footer" style="display:none">
                                <div class="block-content collapse in" >
                                        <div class="span12">
                                              <div style="overflow:auto">
                                                    <table id="datagrid2" title="领取数据列表" style="overflow:auto"
                                                    data-options="rownumbers:true,singleSelect:true,pagination:true,pageSize:10,pagelist:[10,20,30]" style="width: 100%;">
                                                <thead>
                                                    <tr class="content">
                                                        <th data-options="field:'ck',checkbox:true"></th>
                                                        <th data-options="field:'mobile',width:160,align:'center',editor:'textbox'">手机号</th> 
                                                        <th data-options="field:'project',width:80,align:'center'">项目</th>
                                                        <th data-options="field:'first_name',width:160,align:'center'" >最初跟访人</th>
                                                        <th data-options="field:'last_name',sortable:true,width:100,align:'center' ">最后跟访人</th>
                                                        
                                                        
                                                        
                                                        <th data-options="field:'in_time',width:160,align:'center'">录入时间</th>
                                                        <th data-options="field:'last_consult_time',width:160,align:'center',editor:'textbox'">最后跟访时间</th>
                                                        <th data-options="field:'visit_times',width:80,align:'center',editor:'textbox'">跟单次数</th>
                                                        <th data-options="field:'give_up_times',width:80,align:'center',editor:'textbox'">放弃次数</th>
                                                        <th data-options="field:'sign_times',width:80,align:'center',editor:'textbox'">报名次数</th>
                                                        <th data-options="field:'book_reason',width:80,align:'center'">反馈信息</th>
                                                        <!--<th data-options="field:'did',width:80,align:'center'">did</th>-->
                                                        
                                                    </tr>
                                                    
                                                </thead>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                        </div>
                                
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modelprompt1" >
            <div class="modelcuer">
                <div class="modelcuer-head">
                    <p style="color:#42b983">提示</p>
                    <button class="promptx1">X</button>
                </div>
                <div class="modeldel-body">
                    <div class="monumber">
                        <p class="promptp1" style="color:#42b983;"></p>
                        <button class="promptx1" style="padding:0px 30px">确定</button>
                    </div>
                </div>
            </div>        
        </div>
    </body>
    <script src="{{asset("js/bootstrap.js")}}"></script>
    <script type="text/javascript">
    	$(function(){
    		$(function () {
	            var p = $('#datagrid2').datagrid('getPager');
	            $(p).pagination({
	                beforePageText: '第',//页数文本框前显示的汉字  
	                afterPageText: '页    共 {pages} 页',
	                displayMsg: '当前: 第 {from}~{to} 条   共 {total} 条',
	            });
	       });
    	})
    	
    	
    	$('.promptx1').click(function(){
            $('.modelprompt1')[0].style.display = "none";
        })
    	
    function optnme(q){
            var arr1 = [];
            var arr2 = [];
            var objopt = {}
            for (let i = 0; i < q[0].length; i++) {
                arr1.push( q[0][i].value);
                arr2.push(q[0][i].innerHTML);
                
            }
           for (var j = 0; j < arr1.length; j++) {
               objopt[arr1[j]] = arr2[j]
               
           }
           return objopt
        }
        var objopt5 = optnme($('select[name=polling-account]'))
        function huhu(){
            $('select[name=polling-account]')[0].innerHTML = ""
            for(var k in objopt5){
                console.log(objopt5[k].indexOf($('select[name = polling-group]').val()))
                if(objopt5[k].indexOf ($('select[name=polling-pro]').val())> -1 && objopt5[k].indexOf($('select[name = polling-group]').val())> -1 &&objopt5[k].indexOf($('input[name=polling-name]').val())> -1){
                    $('select[name=polling-account]')[0].innerHTML += "<select name='polling-account'>"
                    +"<option value="+k+">"+objopt5[k]+"</option>"+"</select>"
                }
            }
        }
        $('input[name=polling-name]').on('keyup',function(){
            huhu()
        });
        $('select[name=polling-group]').on('change',function(){
            huhu()
        });
        $('select[name=polling-pro]').on('change',function(){
            huhu()
        });
    $('.polling-headerp').click(function(){
        if($(this)[0].style.backgroundImage == 'url("{{asset("img/down.svg")}}")'){
            console.log(1)
             $(this)[0].style.backgroundImage = 'url("{{asset("img/up.svg")}}")';
             $('#polling-header-body')[0].style.display = "none"
        }else{
            $(this)[0].style.backgroundImage = 'url("{{asset("img/down.svg")}}")'
            $('#polling-header-body')[0].style.display = "block"
        }
    })
    $('.polling-allotp').click(function(){
        if($(this)[0].style.backgroundImage == 'url("{{asset("img/down.svg")}}")'){
            console.log(1)
             $(this)[0].style.backgroundImage = 'url("{{asset("img/up.svg")}}")';
             $('#polling-allot-body')[0].style.display = "none"
        }else{
            $(this)[0].style.backgroundImage = 'url("{{asset("img/down.svg")}}")'
            $('#polling-allot-body')[0].style.display = "block"
        }
    })
    $('.reset').click(function(){
        $("#seaform").find('input[type=text],select,input[type=hidden]').each(function() {
         $(this).val('');
     });
    })   
       var thisApp = {
        init: function () {
            $("#datagrid2").datagrid({   	
                rownumbers: true,
                singleSelect: true,
                pagination: true,
//              url:'{{Url("admin/getPublicData")}}',
                method:'post',
                remoteSort: false,
                checkOnSelect:false,
                selectOnCheck:true,
                pageSize: 10,
                pageList: [10, 50, 100],
                queryParams: form2Json("seaform"),
                toolbar: [
                     {
                        text: '领取',
                        iconCls: 'icon-save',
                        handler: function () {
                            var get = $("#datagrid2").datagrid("getSelections");
                            var arr3 = []
                            for(let i=0;i<get.length;i++)

                            {
                                    arr3.push(get[i].did) ;
                            }
                            if(arr3 != ""){
                                $.ajax({
                                url:'{{Url("admin/publicToMyData")}}',
                                type:'post',
                                data:{did:arr3,_token:"{{csrf_token()}}"},
                                dataType:'json',
                                success:function(data){
							        if(data.success == true){
							        	$('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "成功"+data.successNum+"条 "+ ' 失败'+data.failNum+'条';
							        }else if(data.success == false){
							            $('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "该时段不能领取";	            
							        }else{
							            $('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "未知错误";	            
							        }
							    },
							    error:function(){
							        $('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "服务器错误";	            
							      }
                                })
                            }
                            
                        }
                    }],
                    onSortColum: function (sort,order) {  //其中sort代表排序列字段名称；order:排序列的顺序（ASC或DESC）
                    　　　$('#datagrid2').datagrid('reload', {
                    　　　sort: sort,
                    　　　order: order
                    　　});
                    },
                    onLoadSuccess: function(data){//加载完毕后获取所有的checkbox遍历
                        if (data.rows.length > 0) {
                            //循环判断操作为新增的不能选择
                            for (var i = 0; i < data.rows.length; i++) {
                                //根据isFinanceExamine让某些行不可选
//                              if (data.rows[i].did == "") {
//                                  $("input[type='checkbox']")[i + 1].disabled = true;
//                                  $("input[type='checkbox']")[i + 1].checked = false;
//                              }
                            }
                        }
                        $('.datagrid-header-check').html("<input type='checkbox' id='selectAll'>");
                        console.log($('#selectAll'))
                        $('#selectAll').change(function(){
                            var status = $(this).is(':checked');
                            var data3 = $("#datagrid2").datagrid("getSelections");
                            if(data3 != ""){
                                $('.polling-allot').attr('disabled',false)
                            }else{
                                $('.polling-allot').attr('disabled','disabled')
                            }
                            $("input:checkbox[name = 'ck']").each(function(rowIndex,el){
                                $('#datagrid2').datagrid('unselectRow',rowIndex);
                                $("input:checkbox[name = 'ck']")[rowIndex].checked = false
                                if(!$(this).is(":disabled")){
                                    if(status){
                                        $('#datagrid2').datagrid('checkRow',rowIndex);
                                    }
                                }
                            })
                        })
                        var data3 = $("#datagrid2").datagrid("getSelections");
                        if(data3 != ""){
                            $('.polling-allot').attr('disabled',false)
                        }else{
                            $('.polling-allot').attr('disabled','disabled')
                        }
                    },
                    onClickRow : function(rowIndex, rowData) {
                    if($("input:checkbox[name = 'ck']")[rowIndex].disabled == true){
                        $("input:checkbox[name = 'ck']")[rowIndex].checked = false;
                    }else{
                        
                        if($("input:checkbox[name = 'ck']")[rowIndex].checked == true){
                            $("input:checkbox[name = 'ck']")[rowIndex].checked = false
                        }else{
                            $("input:checkbox[name = 'ck']")[rowIndex].checked = true
                        }
                    }
                    var a= 0;
                    $("input:checkbox[name = 'ck']").each(function(rowIndex,el){
                        
                            if (el.disabled == true) {
                                $('#datagrid2').datagrid('unselectRow', rowIndex);
                                a++;
                            }
                        }) 
                        var b=0;
                        for (var i = 0; i < $("input:checkbox[name = 'ck']").length; i++) {
                            if($("input:checkbox[name = 'ck']")[i].checked == true){
                                b++
                            }
                        }
                        if(a==b){
                            $('#selectAll')[0].checked = true;
                        }else{
                            $('#selectAll')[0].checked = false;
                        }
                        var data3 = $("#datagrid2").datagrid("getSelections");
                        if(data3 != ""){
                            $('.polling-allot').attr('disabled',false)
                        }else{
                            $('.polling-allot').attr('disabled','disabled')
                        }
                    },
                    onDblClickRow:function(){
                        console.log(1)
                    }
            })
        }
       }
       $(function(){
        // thisApp.init();
        // var dg=$('#datagrid2').datagrid({singleSelect:false});
        // dg.datagrid('enableFilter', [{}]);
        $(".seasearch").linkbutton({ iconCls: 'icon-search', plain: true }).click(function () {
            $('#polling-header-footer')[0].style.display = "block"
        //     $('.polling-headerp')[0].style.backgroundImage = 'url("{{asset("img/up.svg")}}")';
        //  $('#polling-header-body')[0].style.display = "none";
         var dg = $('#datagrid2').datagrid({queryParams: form2Json("seaform"),singleSelect:false,url:'{{Url("admin/getPublicData")}}'});
         dg.datagrid('enableFilter', [{
                field:'mobile',
                type:'text'
            },{
                field:'project',
                type:'text'
            },{
                field:'first_name',
                type:'text'
            },{
                field:'last_name',
                type:'text'
            },{
                field:'in_time',
                type:'text'
            },{
                field:'last_consult_time',
                type:'text'
            },{
                field:'visit_times',
                type:'text'
            },{
                field:'give_up_times',
                type:'text'
            },{
                field:'sign_times',
                type:'text'
            },{
                field:'book_reason',
                type:'text'
            }]);
         var p = $('#datagrid2').datagrid('getPager');
	        $(p).pagination({
	            beforePageText: '第',//页数文本框前显示的汉字  
	            afterPageText: '页    共 {pages} 页',
	            displayMsg: '当前: 第 {from}~{to} 条   共 {total} 条',
	        });            
        });
        $('.polling-allot').click(function(){
            var get2 = $("#datagrid2").datagrid("getSelections");
                            var arr5 = []
                            for(let i=0;i<get2.length;i++)

                            {
                                    arr5.push(get2[i].did) ;
                            }
                            console.log(arr5)
            if($('select[name=polling-account]').val()!=""){
                $.ajax({
                    url:'{{Url("admin/publicToMyData")}}',
                    type:'post',
                    data:{did:arr5,
                    allotname:$('select[name=polling-account]').val(),_token:"{{csrf_token()}}"},
                    dataType:'json',
                    success:function(data){
                    	console.log(data)
							        if(data.success == true){
							        	$('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "成功"+data.successNum+"条 "+ ' 失败'+data.failNum+'条';
							        }else if(data.success == false){
							            $('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "该时段不能分配";	            
							        }else{
							            $('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "未知错误";	            
							        }
							    },
							    error:function(){
							        $('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "服务器错误";	            
							    	}
                })
            }else{
                $('.modelprompt1')[0].style.display="block";
							            $('.promptp1')[0].innerHTML = "请选择姓名";	            
							    	}
            
        })
    // });
    })
    function form2Json(id) {

        var arr = $("#" + id).serializeArray()
        var jsonStr = "";

        jsonStr += '{';
        for (var i = 0; i < arr.length; i++) {
            jsonStr += '"' + arr[i].name + '":"' + arr[i].value + '",'
        }
        jsonStr = jsonStr.substring(0, (jsonStr.length - 1));
        jsonStr += '}'

        var json = JSON.parse(jsonStr)
        return json
    }
    </script>
</html>