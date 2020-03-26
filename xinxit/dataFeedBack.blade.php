<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>数据反馈页</title>
     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/model.css')}}">
    <link rel="stylesheet" href="{{asset('css/model2.css')}}">
    <link rel="stylesheet" href="{{asset('css/Advisory.css')}}">
     <link rel="icon" type="image/x-icon" href="{{asset('img/ico1.ico')}}"/>
    
</head>
<style>
    textarea{
        width: 40%;
    }
    .ggg{
    	margin-left:10px;
    	margin-right:10px;
    	padding:0px 10px
    }
    .table td{
        border: 1px solid rgb(210,210,210);
        text-align: center;
        vertical-align: middle;
    }
    @media  screen and (max-width: 1000px) {
    	.ggg{
    	margin-left:0;
    	margin-right:0;
    	padding:0
    	}
    }
    textarea{
        width: 40%;
    }
    .pretable{
        overflow: auto;
        max-height: 200px;
        padding: 10px;
    }
    .table td{
        border: 1px solid rgb(210,210,210);
        text-align: center;
        vertical-align: middle;
    }
    .paytable{
        border-bottom: 1px solid rgb(210,210,210);
        overflow: auto;
        max-height: 103px;
        margin-left:10px ;
    }
    .paytable a{
        float: left;
        width: 49.5%;
        border: 1px solid rgb(210,210,210);
        line-height: 40px;
        border-bottom: none;
    }
    .paytable a:nth-of-type(2n+1){
        border-right: none;
    }
    @media only screen and (max-width:1000px){
    	.paytable{
    		margin-left: 0;
    	}
        .paytable a{
            float: left;
            width: 100%;
            border-bottom: none;
        }
        .paytable a:nth-of-type(2n+1){
            border-right: 1px solid rgb(210,210,210);
        }
        .form-group{
            margin-left: -30px;
        }
        .paytable{
            overflow: auto;
            max-height: 206px;
        }
    }
    .im_table td{
                border: 1px solid rgb(204,204,204);
    text-align: center;
    height: 35px;
    word-wrap: break-word;
    word-break: break-all;
            }
    .im_table tr td:first-of-type{
        width: 20%;
    }
    .im_table tr td:nth-of-type(2){
        width: 40%;
    }
    .im_table tr td:nth-of-type(3){
        width: 40%;
    }
    .recordWork{
        overflow: hidden;
        margin: 0;
        text-align: left;
        margin: 0 2.5% 10px 2.5%;
        border-bottom: 1px solid rgb(204,204,204);
    }
    .recordWork span{
        padding: 10px 20px;
        font-size: 18px;
        display: inline-block;
    }
    .recordWork span.active{
        color:#42b983;
                /* border: 1px solid rgb(204,204,204); */
                border-bottom: 3px solid #42b983;
    }
    .span69::-webkit-scrollbar {display:none}
</style>
<!--<script type="text/javascript">
	function openwin(url) { 
	window.open (url, 'newwindow', 'height=300, width=400, top=200,left=200 toolbar =no, menubar=no, scrollbars=no, resizable=no, location=no, status=no')
	
	} 
</script>-->
<!--<body onload="openwin(window.location.href)">-->
<body>
	@include('layout/head')
          <div class="row-fluid" id="did" data-did="{{$data['did']}}-{{$data['belong_to']}}">
                <!-- block -->
                <div class="block ggg" style="">
                    <div class="span12 Advi1>
                        <p class="shouzi">{{$data["data_type"]}}
                        		<span style="margin-left: 30px;">
                        			<?php $moneys = 0;$insteads = '否';?>
			                        @if(count($history_ids)>0)
			                        	<a href="#" id="more" onclick="$('#history').css('display','inline-block');$(this).css('display','none');" style="text-decoration: none;">&nbsp;更多..&nbsp;</a>
			                        	<span id="history" style="display: none;margin-right: 20px;">
			                        		金额/代报名:
				                        @foreach($history_ids as $key => $dids)
				                        	历史{{$key+1}}:<a href="{{Url('admin/dataFeedBack')}}?data={{$dids->did}}" style="text-decoration: none;">&nbsp; {{$dids->sign_money}}/{{$dids->instead_sign == '' ? '否' : $dids->instead_sign}}&nbsp;</a>
				                        	<?php 
				                        		$moneys += $dids->sign_money;
				                        		if($dids->instead_sign == '是'){
				                        			$insteads = '是';
				                        		}
				                        	?>                     	
				                        @endforeach
				                        <button onClick="window.location.href='{{Url("admin/dataFeedBack")}}'+'?data='+localStorage.data_mydid" style="padding: 5px 10px;background-color: rgb(240,173,78);">回溯</button>
				                        </span>
			                        @endif
	                        	</span>
                        </p> 
                    </div>
                    <div class="span12 Advi-body" style="margin-left:0;margin-top:20px">
                        <div class="span12" style="height:50px;background:rgb(250,250,250);position: relative;" >
                        	<!--<input type="button" name="Submit" onclick="javascript:history.back(-1);" value="返回上一页">-->
                        	<button class="return" style="position:absolute;right:15px;top:50%;margin-top:-15px;padding:5px 10px;background:rgb(240,173,78);width:50px;" onclick="javascript:history.back(-1);">返回</button>

                            <p><span>推荐项目：</span><span id="pro1">{{$data['project']}}</span>
                            	<!--<span style="margin-left: 30px;">
			                        @if($data['sign_times']>0)
			                        	<a href="#" id="more" onclick="$('#history').css('display','inline-block');$(this).css('display','none');">&nbsp;更多..&nbsp;</a>
			                        	<span id="history" style="display: none;">
				                        @foreach($history_ids as $key => $dids)
				                        	<a href="{{Url('admin/dataFeedBack')}}?data={{$dids->did}}" >&nbsp;历史报名{{$key+1}}&nbsp;</a>
				                        @endforeach
				                        </span>
			                        @endif
	                        	</span>-->
                            </p>
                        </div>
                        <ul class="span12" style="margin:0">
                            <li><span>学员姓名:</span><input type="text" name="stuname" value="{{$data['stu_name']}}"></li>
                            <li><span>*工作年限:</span><select name="workyear" id="" <?php echo $data['work_year']!='' ? '' : '' ?>>
                                <option value="">请选择工作年限</option>
                                	<option value="无"<?php echo $data['work_year']=='无' ? 'selected="selected"' : '' ?> >无</option>
                                    <option value="应届生"<?php echo $data['work_year']=='应届生' ? 'selected="selected"' : '' ?> >应届生</option>
                                    <option value="1-3年" <?php echo $data['work_year']=='1-3年' ? 'selected="selected"' : '' ?> >1-3年</option>
                                    <option value="3-5年" <?php echo $data['work_year']=='3-5年' ? 'selected="selected"' : '' ?> >3-5年</option>
                                <option value="5-10年" <?php echo $data['work_year']=='5-10年' ? 'selected="selected"' : '' ?> >5-10年</option>
                                <option value="10年以上" <?php echo $data['work_year']=='10年以上' ? 'selected="selected"' : '' ?> >10年以上</option>
                            </select></li>
                            <li><span>*学员性别:</span><select name="sex"  <?php echo $data['sex']!='' ? '' : '' ?>>
                                <option value="">请选择性别</option>
                                <option value="无" <?php echo $data['sex']=='无' ? 'selected="selected"' : '' ?> >无</option>
                                <option value="男" <?php echo $data['sex']=='男' ? 'selected="selected"' : '' ?> >男</option>
                                <option value="女" <?php echo $data['sex']=='女' ? 'selected="selected"' : '' ?> >女</option>
                            </select></li>
                            <li><span>*学历:</span><select name="educate" id=""   <?php echo $data['education']!='' ? '' : '' ?>>
                                    <option value="">请选择学历</option>
                                    <option value="无" <?php echo $data['education']=='无' ? 'selected="selected"' : '' ?>>无</option>
                                    <option value="高中（中专或同等学历）" <?php echo $data['education']=='高中（中专或同等学历）' ? 'selected="selected"' : '' ?>>高中（中专或同等学历）</option>
                                <option value="大专、高职（或同等学历）" <?php echo $data['education']=='大专、高职（或同等学历）' ? 'selected="selected"' : '' ?>>大专、高职（或同等学历）</option>
                                <option value="本科" <?php echo $data['education']=='本科' ? 'selected="selected"' : '' ?>>本科</option>
                                <option value="硕士" <?php echo $data['education']=='硕士' ? 'selected="selected"' : '' ?>>硕士</option>
                                <option value="博士及以上学历" <?php echo $data['education']=='博士及以上学历' ? 'selected="selected"' : '' ?>>博士及以上学历</option>
                            </select></li>
                            <li><span>*所在行业:</span><select name="trade" id=""   <?php echo $data['trade']!='' ? '' : '' ?>>
                                                <option value="">请选择行业</option>
                                                <option value="无"  <?php echo $data['trade']=='无' ? 'selected="selected"' : '' ?>>无</option>
                                                <option value="IT服务/系统集成"  <?php echo $data['trade']=='IT服务/系统集成' ? 'selected="selected"' : '' ?>>IT服务/系统集成</option>
                                                <option value="财务/审计"  <?php echo $data['trade']=='财务/审计' ? 'selected="selected"' : '' ?>>财务/审计</option>
                                                <option value="教育/科研/培训"  <?php echo $data['trade']=='教育/科研/培训' ? 'selected="selected"' : '' ?>>教育/科研/培训</option>
                                                <option value="政府/非营利机构"  <?php echo $data['trade']=='政府/非营利机构' ? 'selected="selected"' : '' ?>>政府/非营利机构</option>
                                                <option value="互联网/电子商务"  <?php echo $data['trade']=='互联网/电子商务' ? 'selected="selected"' : '' ?>>互联网/电子商务</option>
                                                <option value="通信/电信"  <?php echo $data['trade']=='通信/电信' ? 'selected="selected"' : '' ?>>通信/电信</option>
                                                <option value="金融/银行"  <?php echo $data['trade']=='金融/银行' ? 'selected="selected"' : '' ?>>金融/银行</option>
                                                <option value="中介/专业服务"  <?php echo $data['trade']=='中介/专业服务' ? 'selected="selected"' : '' ?>>中介/专业服务</option>
                                                <option value="旅游/酒店"  <?php echo $data['trade']=='旅游/酒店' ? 'selected="selected"' : '' ?>>旅游/酒店</option>
                                                <option value="其他行业"  <?php echo $data['trade']=='其他行业' ? 'selected="selected"' : '' ?>>其他行业</option>
                                            </select>
                            </li>
                            <!--<li><span>一级项目:</span><span>{{$data['project']}}</span></li>-->
                            <li style="display:none"><span>来源网站：</span><span>baidu</span></li>
                            <li style="display:none"><span>推广渠道：</span><span>搜狗</span></li>
                            <li><span style="position:relative">咨询号码:<span class="phone Adviphone" style="position:absolute;top:9px;display:inline-block;width:20px;height:20px;"></span></span><span id="matephone">{{$data['mobile']}}</span></li>
                            <li><span style="position:relative">学员座机:<span class="phone Adviphone" style="position:absolute;top:9px;display:inline-block;width:20px;height:20px;"></span></span><input type="text" name="phonenumber" value="{{$data['Tel_num']}}"></li>
                            <li><span style="position:relative">常用电话:<span class="phone Adviphone" style="position:absolute;top:9px;display:inline-block;width:20px;height:20px;"></span></span><input type="text" name="mobilephonenumber" value="{{$data['common_tel']}}"></li>
                            <!--<li><span>一级项目:</span><span>{{$data['project']}}</span></li>
                            <li style="display:none"><span>来源网站：</span><span>baidu</span></li>
                            <li style="display:none"><span>推广渠道：</span><span>搜狗</span></li>
                            <li><span style="position:relative">咨询号码:<span class="phone Adviphone" style="position:absolute;top:9px;display:inline-block;width:20px;height:20px;"></span></span><span id="matephone">{{$data['mobile']}}</span></li>-->
                            <li style="display:none"><span>所属分校：</span><span>西安</span></li>
                            <!--<li><span>咨询类型：</span><span>首次</span></li>-->
                            <li style="display:none"><span>数据来源：</span><span>大熊在线</span></li>
                            <li><span>QQ：</span><input type="text" name="qqnumber" value="{{$data['qq']}}"></li>
                            <li><span>微信：</span><input type="text" name="wxnumber" value="{{$data['weixin']}}"></li>
                            <li><span>邮箱：</span><input type="text" name="adviemail" value="{{$data['email']}}"></li>
                            <li><span>*省份:</span>
                            	<select name="province" style="height: 40px;" id=""   <?php echo $data['province']!='' ? 'disabled' : '' ?>>
								<option value="" >未知</option>
								<option value="北京" >北京</option>
								<option value="上海">上海</option>
								<option value="天津">天津</option>
								<option value="重庆">重庆</option>
								<option value="四川">四川</option>
								<option value="贵州">贵州</option>
								<option value="云南">云南</option>
								<option value="西藏">西藏</option>
								<option value="河南">河南</option>
								<option value="湖北">湖北</option>
								<option value="湖南">湖南</option>
								<option value="广东">广东</option>
								<option value="广西">广西</option>
								<option value="陕西">陕西</option>
								<option value="甘肃">甘肃</option>
								<option value="青海">青海</option>
								<option value="宁夏">宁夏</option>
								<option value="新疆">新疆</option>
								<option value="河北">河北</option>
								<option value="山西">山西</option>
								<option value="内蒙古">内蒙古</option>
								<option value="江苏">江苏</option>
								<option value="浙江">浙江</option>
								<option value="安徽">安徽</option>
								<option value="福建">福建</option>
								<option value="江西">江西</option>
								<option value="山东">山东</option>
								<option value="辽宁">辽宁</option>
								<option value="吉林">吉林</option>
								<option value="黑龙江">黑龙江</option>
								<option value="海南">海南</option>
								<!--<option value="台湾">台湾</option>
								<option value="香港">香港</option>
								<option value="澳门">澳门</option>-->
                                            </select>
                            </li>
                            <!-- <li style="display:none"><span>广告商</span><span>搜狗搜索</span></li>
                            <li><span>邮寄地址：</span><input type="text" name="adviaddress"></li>
                            <li><span>邮编：</span><input type="text" name="advizipcard"></li>
                            <li><span>身份证号：</span><input type="text" name="adviidcard"></li>
                            
                                <option value="">请选择</option>    
                            </select></li>
                            <li><span>课程号码：</span><input type="text" name="classnumber"></li>
                            
                            <li><span style="line-height:16px">紧急联系人：</span><input type="text" name="jinjiname"></li>
                            <li><span style="line-height:16px">紧急联系手机：</span><input type="text" name="jinjiphone"></li> -->
                            
                        </ul>
                        <div class="Advi-body-foot">
                        	@if($data['belong_to']!=0)
                            <button  class="tablenew">反馈无效</button>
                           <button class="ordernew">创建订单</button>
                           @endif
                           <button class="historynew">流转历史</button>
                           @if($data['last_consult_time'] != '1992-08-02 00:00:00'&&$data['belong_to']!=0&&$data['project'] != '消防升级')
                           <button class="giveupnew">放弃</button>
                           @elseif($data['last_consult_time'] != '1992-08-02 00:00:00'&&$data['belong_to']!=0&&$data['project'] == '消防升级')
	                        <button class="giveuphid">隐藏</button>
                           @endif
                           <button class="after_service">后端服务</button>
                           
                           <!--<button class="youhuinew1">优惠码</button>-->
                        </div>
                    </div>
                    <div class="Advi-foot" style="width:100%;height:auto;overflow:hidden">
                            <div class="span12" style="height:50px;background:rgb(250,250,250);margin-top:10px">
                                    <p style="margin-left: 10px;line-height: 50px;">*探需基本信息</p>
                            </div>
                            <div class="span12 Advi-foot-body"style="margin:0;display:block">
                                <div class="Advi-foot-body-img" ><img src="{{asset('img/advv.png')}}" height="100%" alt=""></div>
                            </div>
                            <div class="span12 Advi-foot-body1"style="margin:0;display:none">
                                    <p>1.探需</p>
                                    <p>2.规划</p>
                                    <p>3.推荐版型</p>
                                    <p>4.截杀</p>
                                    <p>5.针对问题解决</p>
                                    <p>6.备注总结</p>
                            </div>
                            <textarea name="textarea" id="chatHistory" cols="30" rows="3" class="span12" placeholder="跟访信息规则：  1 数字范围0~100000  2 标点符号不能连续  3 同一个汉字不能连续出现3次   4 标点符号不能开头    5 长度不超过120个字" ></textarea>
                            <div class="span12" style="height:30px;background:rgb(250,250,250);margin-left:0"></div>
                            <div class="span12" style="margin:0;overflow:hidden">
                                <ul class="Advi-foot-ul">
                                        <!--<li><span>所在行业：</span><select name="trade" id="">
                                                <option value="">请选择行业</option>
                                                <option value="IT服务/系统集成"  <?php echo $data['trade']=='IT服务/系统集成' ? 'selected="selected"' : '' ?>>IT服务/系统集成</option>
                                                <option value="财务/审计"  <?php echo $data['trade']=='财务/审计' ? 'selected="selected"' : '' ?>>财务/审计</option>
                                                <option value="教育/科研/培训"  <?php echo $data['trade']=='教育/科研/培训' ? 'selected="selected"' : '' ?>>教育/科研/培训</option>
                                                <option value="政府/非营利机构"  <?php echo $data['trade']=='政府/非营利机构' ? 'selected="selected"' : '' ?>>政府/非营利机构</option>
                                                <option value="互联网/电子商务"  <?php echo $data['trade']=='互联网/电子商务' ? 'selected="selected"' : '' ?>>互联网/电子商务</option>
                                                <option value="通信/电信"  <?php echo $data['trade']=='通信/电信' ? 'selected="selected"' : '' ?>>通信/电信</option>
                                                <option value="金融/银行"  <?php echo $data['trade']=='金融/银行' ? 'selected="selected"' : '' ?>>金融/银行</option>
                                                <option value="中介/专业服务"  <?php echo $data['trade']=='中介/专业服务' ? 'selected="selected"' : '' ?>>中介/专业服务</option>
                                                <option value="旅游/酒店"  <?php echo $data['trade']=='旅游/酒店' ? 'selected="selected"' : '' ?>>旅游/酒店</option>
                                                <option value="其他行业"  <?php echo $data['trade']=='其他行业' ? 'selected="selected"' : '' ?>>其他行业</option>
                                            </select></li>-->
                                        <li><span>*推荐班型：</span><select name="class" id="">
                                                <option value="">请选择班型</option>
                                                @foreach($classTypes as $classType)
                                                <option value="{{$classType->class_type}}" >{{$classType->class_type}}</option>
                                                @endforeach
                                            </select></li>
                                   <script src="{{asset('js/My97DatePicker/WdatePicker.js')}}"></script>
                                    <li>
                                        <span>*下次回访：</span><input class="Wdate" type="text" name="nextretime" placeholder="下次回访时间必须大于当前时间" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" autocomplete="off"> 
                                    </li>
                                    <li style="position: relative">
                                        <span>咨询意向度：</span>
                                        <span class="wujiaox" style="background: url({{asset('img/wujiaoxing3.svg')}});left:40%"></span>
                                        <span class="wujiaox"  style="background: url({{asset('img/wujiaoxing3.svg')}});left:45%"></span>
                                        <span class="wujiaox" style="background: url({{asset('img/wujiaoxing3.svg')}});left:50%"></span>
                                        <span class="wujiaox"  style="background: url({{asset('img/wujiaoxing3.svg')}});left:55%"></span>
                                        <span class="wujiaox"  style="background: url({{asset('img/wujiaoxing3.svg')}});background-size:20px;left:60%"></span>
                                        <span id="pingfen" style="display:inline-block;color:orange;margin-left:30%;font-weight: bold;">{{$data['intention_degree']}}</span>
                                    </li> 
                                    
                                </ul>
                            </div>
                            <div class="span12" style="display:none;height:30px;background:rgb(250,250,250);margin-left:0"></div>
                            <div class="span12" style="margin:0;overflow:hidden;display:none">
                                <ul class="Advi-foot-ul">
                                    <li style="width:100%;font-size:17px;"><input type="checkbox"name="check" style="width:27px;height:17px;margin-top:0"><span>预约报名</span></li>
                                    <li style="display:none"><span>分校：</span><input type="text"></li>
                                    <!-- <li><span>推荐项目：</span><select name="pro1" id="" disabled>
                                            <option value="基金项目">基金项目</option>
                                            <option value="消防项目">消防项目</option>
                                    </select></li>
                                    <li><span>推荐班型：</span><select name="class1" id="" disabled>
                                            <option value="">请选择班型</option>
                                           		@if($data['project']=='基金项目')
                                                <option value="直播密训班">直播密训班</option>
                                                <option value="一次取证班">一次取证班</option>
                                                <option value="VIP不过退费班">VIP不过退费班</option>
                                                <option value="高校取证班">高校取证班</option>
                                                <option value="推荐挂靠班">推荐挂靠班</option>
                                                @elseif($data['project']=='消防项目')
                                                <option value="基础通关班">基础通关班</option>
                                                <option value="名师密训班">名师密训班</option>
                                                <option value="VIP零基础保障班">VIP零基础保障班</option>
                                                <option value="一次取证班">一次取证班</option>
                                                <option value="皇家内训班">皇家内训班</option>
                                                <option value="私教冲刺班">私教冲刺班</option>
                                                @endif
                                        </select></li>
                                        <li><span>推荐科目：</span>
                                            <input type="checkbox" name="ke1" id="" style="width:15px">
                                            科一
                                            <input type="checkbox" name="ke2" id=""style="width:15px">
                                            科二
                                            <input type="checkbox" name="ke3" id=""style="width:15px">
                                            科三
                                        </li> -->
                                        <!-- <li><span>考期：</span><select name="kaoqi" id="" disabled></select> -->
                                    <!-- <li style="display:none"><span>报名点：</span><input type="text"></li>
                                    <li><span>预约时间：</span><input class="Wdate" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" type="text" name="yuyuetime" disabled></li>
                                    <li><span>预约价格：</span><input type="text" name="yuyuemoney" disabled></li>
                                    <li><span>支付方式：</span><select name="payment" id="" disabled>
                                        <option value="">请选择支付方式</option>    
                                        <option value="支付宝">支付宝</option>    
                                        <option value="微信">微信</option>    
                                        <option value="汇款">汇款</option>    
                                        <option value="其他">其他</option>   
                                    </select></li> -->
                                </ul>
                            </div>
                            <div class="span12" style="margin:0;overflow:hidden;padding-bottom:10px">
                                
                                <button id="queding" style="float:right;margin-right:20px;width:40px">确定</button>
                                <span class="yuyuep" style="float:right;line-height:30px;color:#42b983;margin-right:20px"></span>
                            </div> 
                    </div>
                    <div class="Advi-footer" style="width:100%;height:auto;overflow:hidden">
                    	<div class="span12 span69 viewRecord" style="line-height:28px;background: #42b983;color:white;cursor:pointer;border:1px solid rgb(200,200,200);text-align:center;margin:0;height: 22px;overflow: auto;">展开历史咨询记录</div>
                        <div class="span12 Advi"></div>
                        @if($data['sign_money']!=0)
                        <div class="span12 Advi-chat" style="margin:0;background: url('{{asset("img/xinxi.png")}}') 11% 0px no-repeat;background-size:50px">
                            
                            <div style="width:99%;height:auto;border:1px solid rgb(202,202,202);padding-top:40px">
                                <p style="height:50px;font-size:16px;line-height:50px;margin-bottom:0">报名信息</p>
                                <div class="luji"> 
                                    <p>订单编号：HuoZhongNO_{{$didds}}</p>
                                    <p>报名时间：{{$data['sign_up_date']}}</p>
                                    <p>总金额：{{$data['sign_money']}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!--<div class="span12 Advi-chat" style="margin:0;background: url('{{asset("img/gongdan.png")}}') 11% 0px no-repeat;background-size:50px">
                                
                                <div style="width:99%;height:auto;border:1px solid rgb(202,202,202);padding-top:40px">
                                    <p style="height:50px;font-size:16px;line-height:50px;margin-bottom:0">工单详情</p>
                                    <div class="luji">
                                        <p>跟单咨询师：</p>
                                        <p>机会归属：</p>
                                        <p>跟访内容：</p>
                                        <p>推荐班型：</p>
                                        <p>通话录音：<button class="laba" style="padding-left:20px;padding-right:10px">点击播放</button></p>
                                        <p>预约信息：</p>
                                    </div>
                                </div>
                            </div>-->
                          <div class="span12 span69 " id="viewChat" style="display:none;margin:0;height: 292px;overflow: auto;"> </div>
                            @if($data['last_consult_time'] != '1992-08-02 00:00:00')                            
                                	<div class="span12 Advi-chat" style="margin:0;background: url('{{asset('img/gongdan.png')}}') 11% 0px no-repeat;background-size:50px ; ">
                                    
	                                    <div style="width:99%;height:auto;border:1px solid rgb(202,202,202);padding-top:40px">
	                                        <div class="luji">	                                        	
		                                        <p style="margin-top: 20px;">推荐班型：{{$data['class_type']}}</p>
	                                            <p>跟访内容：{{$data['first_record']}}</p>
	                                            <p><span style="margin-right:40px">首咨时间：{{$data['first_consult_time']}}</span>通话录音：<button class="laba" style="padding-left:20px;padding-right:10px" data-file="{{$data['first_record_file']}}">点击下载</button></p>
	                                        </div>
	                                    </div>
	                                </div>
                                @endif
                                <div class="span12 Advi-chat" style="margin:0;background: url('{{asset('img/fankui.gif')}}') 11% 0px no-repeat;background-size:50px ; ">
                                        
                                        <div style="width:99%;height:auto;border:1px solid rgb(202,202,202);padding-top:40px">
                                            <p style="height:50px;font-size:16px;line-height:50px;margin-bottom:0">乐语聊天记录</p>
                                                  
                                            {!!nl2br($data['chat_history'])!!}
                                            
                                        </div>
                                        <div class="luji">
                                        	
                                            </div>
                                    </div>
                </div>
          </div>
          <div class="modelhistory">
                <div class="modelhistoryr">
                  <div class="modelhistory-head">
                      <p style="color:#42b983">流转历史</p>
                      <button class="historyx">X</button>
                  </div>
                  
                  <div class="historyrcontent" style="text-align:center">
                  	<p style="margin:0"></p>
                    <table  style="border-collapse: collapse;border: 1px solid rgb(204,204,204);width: 100%;margin: 0 auto;"></table>
                  </div>
                </div>
              
            </div>
            <div class="modeltable">
                    <div class="modeltabler">
                      <div class="modeltable-head">
                          <p style="color:#42b983">反馈历史---(*挂完电话必须5分钟内反馈)</p>
                          <button class="tablex">X</button>
                      </div>
                      <div class="modeldel-body" style = "overflow:hidden;">
                      	<div style="overflow: auto;height:210px;padding: 0;" >
                                <table class="width:100%;" style="margin-top: 3px;" >
                                   
                                    
                                   </table>
                                </div>
                                <!-- <div class="monumber" style="height:160px"> -->
                                <ul class="Advi-foot-ul" style="margin-top:20px;overflow:hidden">
                                <li style="text-align:left"><span>数据有效性：</span><select name="datavalidity" id="">
                                        <option value="">请选择</option>
                                        @if($data['last_consult_time']=='1992-08-02 00:00:00' && $data['project'] != '消防升级')
                                        <option value="2" >反馈无效</option>
                                        @endif
                                        <option value="1">反馈呼叫未通</option>
                                    </select></li>
                                <li id="nulldata" style="display:none;text-align:left"><span>无效数据类型：</span><select name="nulldata" id="">
                                    <option value="0">请选择</option>
                                    <option value="无此人打错了">无此人,打错了</option>
                                    <option value="当日三遍未通">当日三遍未通</option>
                                    <option value="撞单分重,学员呼入,留言回拨">撞单分重,学员呼入,留言回拨</option>
                                    <option value="已报名学员">已报名学员</option>
                                    <option value="空号">空号</option>
                                    <option value="咨询其他项目">咨询其他项目</option>
                                    <option value="各种限制条件,不能来北京考试">各种限制条件，不能来北京考试</option>
                                    <option value="不符合考编条件">不符合考编条件</option>
                                    </select></li>
                                <li style="text-align:left"><span>备注：</span>
                                    <textarea name="remarks" id="" cols="60" rows="2" style="width:45%;height:33px"></textarea>
                                </li>
                                </ul>
                                <!-- </div> -->
                                <div>  <p class="feedbackp" style="color:#42b983;">〒▽〒</p>
                                    <button id="feedback" style="padding:0px 30px">确定</button></div>
                         
                        </div>
                    </div>
                    
                    
                </div>
                <div class="modelgiveup">
                    <div class="modelgiveupr">
                      <div class="modeltable-head">
                          <p style="color:#42b983">是否确定放弃？</p>
                          <button class="giveupx">X</button>
                      </div>
                      <div class="modeldel-body">
                                
                          <div class="monumber">
                                <p class="giveupp" style="color:#42b983;">&nbsp;…（⊙_⊙；）… &nbsp;</p>
                              <button id="giveupgo" style="padding:0px 30px">确定</button>
                              <button class="giveupx" style="padding:0px 30px">取消</button>
                        </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="modelgiveup">
                        <div class="modelgiveupr">
                          <div class="modeltable-head">
                              <p style="color:#42b983">是否确定隐藏？</p>
                              <button class="giveuphx">X</button>
                          </div>
                          <div class="modeldel-body">
                                    
                              <div class="monumber">
                                    <p class="giveuphp" style="color:#42b983;">&nbsp;…（⊙_⊙；）… &nbsp;</p>
                                  <button id="giveuphgo" style="padding:0px 30px">确定</button>
                                  <button class="giveuphx" style="padding:0px 30px">取消</button>
                            </div>
                            </div>
                        </div>
                        
                        
                    </div>
                <div class="modelphone1">
                    <div class="modelphone1r">
                      <div class="modelphone1-head">
                          <p style="color:#42b983">提示</p>
                          <button class="phone1x">X</button>
                      </div>
                      <div class="modeldel-body">
                                
                          <div class="monumber">
                                <p class="phone1p" style="color:#42b983;">\(^o^)/</p>
                              <button id="phone1x" style="padding:0px 30px">确定</button>
                        </div>
                        </div>
                    </div>
                </div>
                    <div class="modelphone2">
                        <div class="modelphone2r">
                          <div class="modelphone2-head">
                              <p style="color:#42b983">提示</p>
                              <button class="phone2x">X</button>
                          </div>
                          <div class="modeldel-body">
                                    
                              <div class="monumber">
                                    <p class="phone2p" style="color:#42b983;">\(^o^)/</p>
                                  <button id="phone2x" style="padding:0px 30px">确定</button>
                            </div>
                            </div>
                        </div>      
                    </div>  
                        <div class="modelphone3" >
                            <div class="modelphone3r">
                              <div class="modelphone3-head">
                                  <p style="color:#42b983">提示</p>
                                  <button class="phone3x">X</button>
                              </div>
                              <div class="modeldel-body">
                                        
                                  <div class="monumber">
                                        <p class="phone3p" style="color:#42b983;">\(^o^)/</p>
                                      <button id="phone3x" style="padding:0px 30px">确定</button>
                                </div>
                                </div>
                            </div>        
                        
                </div>
                <div class="modelorder" style="overflow:auto">
                    <div class="modelorderr" style="top:0">
                      <div class="modeldel-head">
                          <p style="color:#42b983">创建订单<span style="font-size:12px">（*为必填项,且必须正确输入）</span><span class="class_price" style="color:red;margin-left: 30px;font-size:15px"></span></p>
                          <button class="orderx">X</button>
                      </div>
                      <div class="modeldel-body" >
                            <ul class="Advi-foot-ul modelorderul" style="margin:0;overflow:hidden">
                            	<li id="jiujiu" style="width:100%;overflow:hidden"><div class="addrediv" style="float:right">
								    <select id="province" onchange="chooseProvince(this);console.log(this)" name="adviaddress_province" style="margin-right:5%">
								            <option value="">请选择省</option>
								    </select><select id="city" onChange="chooseCity(this)" name="adviaddress_city" style="margin-right:5%">
								            <option value="">请选择市</option>
								    </select><select id="area" name="adviaddress_area" style="margin-right:4%">
								            <option value="">请选择县</option> 
								    </select><input type="text" id="adviaddress" name="adviaddress" style="margin-right:4%;height:30px" value="">
								</div><span id="percent20">*邮寄地址：</span></li>
								<li><span>*考试地址：</span><select id="province1" name="exam_province" onchange="chooseProvince1(this)" style="width:21%;">
								    <option value="" style="color: red;">请选择</option>
								</select><select id="city1" onChange="" name="exam_city" style="width:21%;margin-right:0%">
								    <option value="" style="color: red;">请选择</option></select>
								</li>
                                <li style="display:none"><span>广告商</span><span>搜狗搜索</span></li>
                                
                                <li><span>邮编：</span><input type="text" name="advizipcard" value=""></li>
                                <li><span>*证件类型：</span><select name="IDtype" id="">
                                        <option value="">请选择证件</option>                                        
                                        <option value="身份证" >身份证</option>
                                        <option value="护照" >护照</option>
                                        <option value="港澳居民内地通行证" >港澳居民内地通行证</option>
                                        <option value="台湾居民内地通行证" >台湾居民内地通行证</option>
                                        <option value="港澳居民居住证" >港澳居民居住证</option>
                                        <option value="台湾居民居住证" >台湾居民居住证</option>
                                        <option value="军官证" >军官证</option>
                                </select></li>
                                <li><span>*证件号码：</span><input type="text" name="adviidcard" value=""></li>
                                <li><span>*课程号码：</span><input type="text" name="classnumber" value=""></li>
                                
                                <li><span style="line-height:16px">*紧急联系人：</span><input type="text" name="jinjiname" value=""></li>
                                <li><span style="line-height:16px">*紧急联系手机：</span><input type="text" name="jinjiphone" value=""></li>
                                <!--<li><span>推荐项目：</span>
                                	<select name="pro1" id="">
                                        <option value="{{$data['project']}}">{{$data['project']}}</option>                                        -->
                                        <!--<option value="基金项目">基金项目</option>
                                        <option value="消防项目">消防项目</option>-->
                               		<!--</select>
                               		
                                </li>-->
                                <li><span>*报名班型：</span><select name="class1" id="">
                                        <option value="" data-price ="0">请选择班型</option>
                                        @foreach($classTypes as $classType)
                                            <option value="{{$classType->class_type}}" data-price = "{{$classType->class_price}}" >{{$classType->class_type}} ￥{{$classType->class_price}}</option>
                                        @endforeach
                                    </select></li>
                                    <li><span>推荐科目：</span>
                                        <span style="display:inline-block;    width: 47%;
                                        height: 30px;">
                                            <input type="checkbox" name="ke1" id="" style="width:15px" >
                                        科一
                                        <input type="checkbox" name="ke2" id=""style="width:15px" >
                                        科二
                                        <input type="checkbox" name="ke3" id=""style="width:15px" >
                                        科三
                                        </span>
                                        
                                    </li>
                                    <li><span>报名类型：</span><select name="enrolmentType" id="">
                                            <option value="">请选择类型</option>
                                            <option value="定金" >定金</option>
                                            <option value="定金补费" >定金补费</option>
                                            <option value="全款报名" >全款报名</option>
                                            <option value="升班">升班</option>
                                            <option value="续报">续报</option>
                                            <option value="基金换科补费">基金换科补费</option>
                                            <option value="代报名补费" >代报名补费</option>
                                            <option value="首付" >首付</option>
                                            <option value="尾款" >尾款</option>
                                    </select></li>
                                    <li><span>考期：</span><select name="kaoqi" id="" >
                                        <option value="">请选择考期</option>
                                            <option value=""  ></option>
                                    </select>
                                <li style="display:none"><span>报名点：</span><input type="text"></li>
                                <!-- <li><span>预约时间：</span><input class="Wdate" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" type="text" name="yuyuetime"></li> -->
                               
                               <li><span>*班型价格：</span><span id="price" style=" display:inline-block;width:50.5%;text-align:left"></span></li>
                                
                                <li ><span>代报名：</span><select name="entry_fee" id="">
                                	<option value="1500" >是</option>
								    <option value="0" >否</option>
								    
								</select></li>
								<!--<li><span style="line-height:16px">*支付截图：</span><form id="orderform"  style='display:inline;' enctype="multipart/form-data" method="post">
                                <input type="file" name="payment" style="width: 50%;padding: 10px 0;" >
                                	
                                <input type="text" style="display: none" name="did" value="{{$data['did']}}"></form></li>-->
                                <li><span style="line-height:16px">*支付截图：</span><form id="orderform" enctype="multipart/form-data" style='display:inline'>
                                    <span style="display:inline-block;width:50%;position:relative">
                                        <label id="realBtn" class="lab" style="width:100px;">
                                                <span style="padding:5px 10px;margin-left:-24px;border:1px solid rgb(50,50,50);color:rgb(50,50,50);width:auto">选择图片</span>
                                                <!-- <input type="file" id="fileInput1" name="payment" class="mFileInput" style="left:-9999px;position:absolute;"><span style="padding:5px 10px;margin-left:-24px;border:1px solid rgb(50,50,50);color:rgb(50,50,50);width:auto">选择图片</span> -->
                                                <a href="#" style="position:absolute;right:0"></a>
                                        </label>
                                    </span>
                                    
                                    <input type="text" style="display: none" name="did" value="{{$data['did']}}"></form></li>
                                
                            </ul>
                            
                          <div>
                                <p class="orderp" style="color:#42b983;"></p>
                                <p class="orderp" style="color:#42b983;">\(^o^)/</p>
                                <button class="youhuinew1" style="width:80px;margin:10px">优惠券</button>
                               <button id="ordergo" style="width:80px;margin:10px">确定</button>
                        </div>
                        </div>
                    </div>                    
            </div>
            <div class="modelcue" >
			    <div class="modelcuer">
			      <div class="modelcuer-head">
			          <p style="color:#42b983">提示</p>
			          <button class="cuex">X</button>
			      </div>
			      <div class="modeldel-body" >
			                
			          <div class="monumber" style="width:100%;margin:0;">
			                <p class="cuep" style="color:#42b983;">请正确输入姓名、性别、学历、行业、邮箱及工作年限</p>
			              <button class="cuex" style="padding:0px 30px">确定</button>
			        </div>
			        </div>
			    </div>        
			
			</div>
			
			<div class="modelprompt">
		                <div class="modelcuer">
		                  <div class="modelcuer-head">
		                      <p style="color:#42b983">提示</p>
		                      <button class="promptx">X</button>
		                  </div>
		                  <div class="modeldel-body">
		                            
		                      <div class="monumber">
		                            <p class="promptp" style="color:#42b983;"></p>
		                          <button class="promptx" style="padding:0px 30px">确定</button>
		                    </div>
		                    </div>
		                </div>        
		            
		    </div>
		    
		    <!--使用优惠码-->
		    <div class="modelyouhui1">
				    <div class="modelcuer">
				      <div class="modelcuer-head">
				          <p style="color:#42b983">提示</p>
				          <button class="youhuix1">X</button>
				      </div>
				      <div class="modeldel-body">
				          <div class="monumber"><span>优惠码：</span><input type="text" name="youhuicard"></div>
				          <p class="youhuip1" style="color:#42b983;"></p>       
				          <div class="monumber youhuic" >
				                
				                
				              <button class="youhuicx" style="padding:0px 30px">使用</button>
				        </div>
				        <div class="monumber youhuiy" style="display:none;">
				              <button class="youhuiuse" style="padding:0px 30px">确定</button>
				              <button class="youhuigu" style="padding:0px 30px">取消</button>
				        </div>
				        </div>
				    </div>        
				
                </div>
                <div class="model-work-order" style="overflow:auto;">
            <div class="modelorderr"style="top:10%" >
              <div class="modeldel-head">
                  <p style="color:#42b983">后端服务<span style="font-size:12px"></span></p>
                  
                  <button class="work-orderx" style="">X</button>
              </div>
              <div class="modeldel-body" class="recordTable;" style="max-height:350px;overflow: auto">
                  <p class="recordWork" style="cursor:pointer"><span class="active">跟访记录</span><span>反馈记录</span></p>
                  <div style="">
                   <table class="im_table" style="    border-collapse: collapse;
                border: 1px solid rgb(204,204,204);
                width: 95%;
                margin: 0 auto;
                padding: 10px;">
                    <tr>
                        <td>班主任</td>
                        <td>跟访时间</td>
                        <td>跟访记录</td>
                    </tr>
                </table>    
                  </div>
                
          <!-- <p class="revisep" style="color:#42b983;">hehe</p>
          
                <button style="padding:0px 30px" class="revisewen">提交</button> -->
            </div>
            </div>        
        
    </div>
<div class="modelpay" style="overflow: auto;">
        <div class="modelorderr">
                <div class="modelorder-head">
                    <p style="color:#42b983">上传截图</p>
                    <button class="payx">X</button>
                </div>
                <div class="modeldel-body">
                        <form id="uploadForm" enctype="multipart/form-data">
                            <div class="row" style="margin-top: 20px;">
                             <div class="form-group col-md-12" id="file"> 
                              <div class="form-group field-uploadform-excelfiles" style="margin-left: 30px;">
                                <label class="control-label btn"
                                 for="uploadform-excelfiles">选择文件</label><input type="file" id="uploadform-excelfiles" name="UploadForm[excelFiles][]"
                                 multiple class="attachment-upload" style="left:-9999px;position:absolute;">
                               <div class="help-block"></div>
                               <div style="text-align:center" class="paytable">
                                已上传截图：<br>
                              		
                                    		<a href="javascript:void(0)" ref="{{asset('img/payment/')}}"></a>
                                    		
                               </div>
                               
                               <div id="fileName"></div>
                              </div>
                            
                             </div>
                            </div>
                            <div class="pretable">
                                <table role="presentation" class="table"><tbody id="files"></tbody></table> 
                            </div>
                            <p class="payp"></p>
                            <input type="hidden" name="did" id="" value="{{$data['did']}}" />
                            {{csrf_field()}}
                           </form>
                  </div>
              </div> 
              <div class="hoverimg" style="display:none;position:absolute;top:0;left:0;background-color:black;width:100%;height:100%;z-index:999;padding-left:50%;">
                    <img src="img/banner_01.jpg" style="width:300px;margin-left:-150px;" alt="">
                </div>       
</div>
</body>
<!--<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>-->
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/Advisoru.js')}}"></script>
<script src="{{asset('js/model.js')}}"></script>
<script src="{{asset('js/model2.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/city.js')}}"></script>
<script>
    //textarea验证
    var reglast  = /^[^A-Za-z]+$/
    var reglianxu = /([\u4e00-\u9fa5])\1\1/g;
    var regBD = /[^A-Za-z0-9\u4e00-\u9fa5]/g;
    var regBDlianxu = /([^A-Za-z0-9\u4e00-\u9fa5])\1/g;
    //=-!#$%+@
    $('textarea[name=textarea]').on('keyup',function(){
    var h = filter($('textarea[name=textarea]').val())
    $('textarea[name=textarea]')[0].value = h
    var num= h.match(/[0-9]+/g,);
    console.log(h.slice(0,1),h.slice(0,1).match(regBD) == null,h.match(reglianxu),reglast.test(h))
    
    if(h.length<5 || h.length>120 || h.slice(0,1).match(regBD)){
        $('textarea[name=textarea]')[0].style.color ="red"
    }else{
        if(reglast.test(h)){
         if(h.match(reglianxu)||h.match(regBDlianxu)){
            $('textarea[name=textarea]')[0].style.color ="red"
           }else{
            $('textarea[name=textarea]')[0].style.color ="green"
            for (let i = 0; i < num.length; i++) {
                if(num[i]>20000000000){
                    $('textarea[name=textarea]')[0].style.color ="red"
                }
            }
           }
       }else{
         $('textarea[name=textarea]')[0].style.color ="red"
       }
    }
    dis()
 })
	    //更换考试地址数组
    // function cityChange(){
    // 	console.log($('select[name = entry_fee]').val(),'12334423')
    //     $("select[name = exam_province]").empty();
    //     $("select[name = exam_city]").empty();
    //     provinceTag1.add(new Option('请选择省', ''));
    //     cityTag1.add(new Option('请选择市', ''));
    //     console.log(provinceTag1,$('select[name = entry_fee]').val()=='1500',provinceList1)
    //     if($('select[name = entry_fee]').val()=='1500' && ("{{$data['project']}}" == "消防项目" || "{{$data['project']}}" == "消防升级")){
    //         for (var j = 0; j < provinceList1.length; j++) {
    //             var province1 = provinceList1[j];
    //             var provinceName1 = province1.name;
    //             provinceArray1[j] = provinceName1;
    //             provinceTag1.add(new Option(provinceName1, j + 1));
    //             // console.log(new Option(provinceName1,j)) 
    //         }
    //     }else{
    //         for (var j = 0; j < provinceList.length; j++) {
    //             var province1 = provinceList[j];
    //             var provinceName1 = province1.name;
    //             provinceArray1[j] = provinceName1;
    //             provinceTag1.add(new Option(provinceName1, j + 1));
    //             // console.log(new Option(provinceName1,j)) 
    //         }
    //     }
    // }
//后端服务
$('.work-orderx').click(function(){
            $('.model-work-order').css('display','none')
        })
$('.after_service').click(function(){
    console.log(1)
    $('.im_table')[0].innerHTML=`
            <tr>
                    <td>班主任</td>
                        <td>跟访时间</td>
                        <td>跟访记录</td>
                    </tr>
            `
        $.ajax({
            url:'{{url('admin/back_visit_front')}}',
            data:{did:"{{$data['did']}}"},
            type:'get',
            dataType:'json',
            success:function(data){
                for (let k = 0; k < data.length; k++) {
                // uid = obja[k].uid=='0'?'无效':obja[k].uid
                // if(uid == "无效"){
                    $('.im_table')[0].innerHTML+=`
                    <tr>
                                <td>`+data[k].user_name+`</td>
                                <td>`+data[k].bv_date+`</td>
                                <td><div style="    overflow: auto;
    height: 30px;
    line-height: 30px;">`+data[k].bv_record+`</div></td>
                            </tr>
                    `
                        // }
                    }
            },
            error:function(){

            }
        })
    $('.model-work-order').css('display','block');
})
$('.recordWork span').click(function(){
    _this = $(this)
    console.log($(this).index())
    $('.recordWork span').each(function(index,el){
        $(el).removeClass('active')
    })
    _this.addClass('active')
    if($(this).index() == 0){
        $('.im_table')[0].innerHTML=`
            <tr>
                    <td>班主任</td>
                        <td>跟访时间</td>
                        <td>跟访记录</td>
                    </tr>
            `
        $.ajax({
            url:'{{url('admin/back_visit_front')}}',
            data:{did:"{{$data['did']}}"},
            type:'get',
            dataType:'json',
            success:function(data){
                for (let k = 0; k < data.length; k++) {
                // uid = obja[k].uid=='0'?'无效':obja[k].uid
                // if(uid == "无效"){
                    $('.im_table')[0].innerHTML+=`
                    <tr>
                                <td>`+data[k].user_name+`</td>
                                <td>`+data[k].bv_date+`</td>
                                <td><div style="    overflow: auto;
    height: 30px;
    line-height: 30px;">`+data[k].bv_record+`</div></td>
                            </tr>
                    `
                        // }
                    }
            },
            error:function(){

            }
        })
    }else if($(this).index() == 1){
        $('.im_table')[0].innerHTML=`
            <tr>
                    <td>班主任</td>
                        <td>反馈时间</td>
                        <td>反馈记录</td>
                    </td>
            `
        $.ajax({
            url:'{{url('admin/feedback_front')}}',
            data:{did:"{{$data['did']}}"},
            type:'get',
            dataType:'json',
            success:function(data){
                for (let k = 0; k < data.length; k++) {
                // uid = obja[k].uid=='0'?'无效':obja[k].uid
                // if(uid == "无效"){
                    $('.im_table')[0].innerHTML+=`
                    <tr>
                                <td>`+data[k].user_name+`</td>
                                <td>`+data[k].feedtime+`</td>
                                <td>`+data[k].inval_type+`</td>
                            </tr>
                    `
                        // }
                    }
            },
            error:function(){
                
            }
        })
    }
})
//	$('select[name = adviaddress_province]').val('20');
//	chooseProvince($('select[name = adviaddress_province]')[0]);
//	$('select[name= adviaddress_city] :selected').val('2');
//	chooseCity($('select[name = adviaddress_adviaddress_city]')[0])
//	if($('select[name= adviaddress_province]').val()!=""){
//      var address=$('select[name= adviaddress_province] :selected').text()+$('select[name= adviaddress_city] :selected').text()+$('select[name= adviaddress_area] :selected').text();
//      $('input[name=adviaddress]').val($('input[name=adviaddress]').val().split(address)[1])
//  }
$('select[name = province]').val('{{$data['province']}}')
var examDates = [];
    Y=new Date().getFullYear();
    switch ("{{$data['project']}}") {
        case'基金项目':
        var mon = ['03','04','05','06','07','09','10','11']
        for (var i = 0; i < mon.length; i++) {
            examDates.push(Y + mon[i])
        }
        for (var i = 0; i < mon.length; i++) {
            examDates.push(parseInt(Y+1)+ mon[i])
        }
        break;
        case'职称评审':
        y3 = Y ;
        y4 = parseInt(Y+1);
        examDates.push(y3);
        examDates.push(y4);
        break;
        default:
        y1 = Y + '11';
        y2 = parseInt(Y+1)+'11';
        examDates.push(y1);
        examDates.push(y2);
        break;
    }
    $('select[name = kaoqi]')[0].innerHTML = `<option value="0">请选择考期</option>`
    for (var i = 0; i < examDates.length; i++) {
	    $('select[name = kaoqi]')[0].innerHTML += `
	     <option value="`+examDates[i]+`">`+examDates[i]+`</option>
	    `
	}
function address(aaa){
	var str=aaa,str1='';
    var provrin = '',provrinIndex = '',citys=[],cityIndex='',areas=[],areaIndex='';
    console.log(provinceList[2].cityList);
    if(str.substring(0,2)=="黑龙"){
            provrin = "黑龙江";
            provrinIndex = 29;
            citys = provinceList[29].cityList;
        }else if(str.substring(0,2)=="内蒙"){
            provrinIndex = 20;
            provrin = "内蒙古";
            citys = provinceList[20].cityList;
        }
    for (var i = 0; i < provinceList.length; i++) {
        if(provinceList[i].name == str.substring(0,2)){
            provrinIndex = i;
            provrin = provinceList[i].name;
            citys = provinceList[i].cityList;
        }
    }
    console.log(provrin,citys,provrinIndex)
    str1 = str.split(provrin)[1];
    if(provrin == "北京"||provrin == "天津"||provrin == "上海"){
        for (var i = 0; i < provinceList[provrinIndex].cityList[0].areaList.length; i++) {
            if(str.indexOf(provinceList[provrinIndex].cityList[0].areaList[i])>-1){
                areaIndex = i;
                cityIndex = 0;
                console.log(areaIndex,cityIndex)
                str1 = str1.split(provinceList[provrinIndex].cityList[0].areaList[i])[1]
            }
        }
        for (var i = 0; i < provinceList[provrinIndex].cityList[1].areaList.length; i++) {
            if(str.indexOf(provinceList[provrinIndex].cityList[1].areaList[i])>-1){
                areaIndex = i;
                cityIndex = 1;
                str1 = str1.split(provinceList[provrinIndex].cityList[1].areaList[i])[1]
            }
        }
    }else if(provrin == "重庆"){
        
        for (var i = 0; i < provinceList[3].cityList[1].areaList.length; i++) {
            if(str.indexOf(provinceList[3].cityList[1].areaList[i])>-1){
                areaIndex = i;
                cityIndex = 1;
                console.log(areaIndex,cityIndex)
                str1 = str1.split(provinceList[3].cityList[1].areaList[i])[1]
            }
        }
        for (var i = 0; i < provinceList[3].cityList[2].areaList.length; i++) {
            console.log(provinceList[3].cityList[2].areaList[i])
            if(str.indexOf(provinceList[3].cityList[2].areaList[i])>-1){
                areaIndex = i;
                cityIndex = 2;
                console.log(areaIndex,cityIndex)
                str1 = str1.split(provinceList[3].cityList[2].areaList[i])[1]
            }
        }
        for (var i = 0; i < provinceList[3].cityList[0].areaList.length; i++) {
           
            if(str.indexOf(provinceList[3].cityList[0].areaList[i])>-1){
                areaIndex = i;
                cityIndex = 0;
                console.log(areaIndex,cityIndex)
                str1 = str1.split(provinceList[3].cityList[0].areaList[i])[1]
            }
        }
    }else{
        for (var i = 0; i < citys.length; i++) {
            if(str.indexOf(citys[i].name)>-1){
                cityIndex = i;
                areas = citys[i].areaList
                console.log(citys[i].name)
                str1 = str1.split(citys[i].name)[1];
                console.log(str1)
            }
        }
        for (var i = 0; i < areas.length; i++) {
            if(str.indexOf(areas[i])>-1){
                areaIndex = i;
                console.log(areaIndex)
                str1 = str1.split(areas[i])[1]
            }
        }

    }
    console.log(str1)
    
    $('select[name = adviaddress_province]').val(provrinIndex+1);
    chooseProvince($('select[name = adviaddress_province]')[0]);
    $('select[name = adviaddress_city]').val(cityIndex+1);
    chooseCity($('select[name = adviaddress_city]')[0]);
    $('select[name = adviaddress_area]').val(areaIndex+1);
    $('input[name=adviaddress]').val(str1)
}

    function changered(){
        if($('select[name= exam_province]').val() == ""){
            $('select[name= exam_province]')[0].style.color= 'red'
        }else{
            $('select[name= exam_province]')[0].style.color= 'black'
        }
        if($('select[name= exam_city]').val() == ""){
            $('select[name= exam_city]')[0].style.color= 'red'
        }else{
            $('select[name= exam_city]')[0].style.color= 'black'
        }
    }
    changered();
    $('select[name= exam_province]').change(function(){
        changered();
    })
    $('select[name= exam_city]').change(function(){
        changered();
    })
	
	//截图查看
var suo = true
$('.paytable a').click(function(e){
   console.log($(this).attr('ref'))
   if(suo==true){
           $('.hoverimg')[0].style.display = "block";
           $('.hoverimg img').attr('src',$(this).attr('ref'));
           // $('.hover-message')[0].innerText = $(this).attr('data-message');
           suo = false;
              setTimeout(function(){
               suo = true;
               
              },1500);
           }
})
$('.hoverimg').click(function(){
   $('.hoverimg')[0].style.display = "none";
})
	
	
	$('#realBtn').click(function(){
		$('.modelpay')[0].style.display = "block"
	})
	$('.payx').click(function(){
		$('.modelpay')[0].style.display = "none"
	})
	//使用优惠码
	// 优惠
		var classPrice = $('select[name = class1]').val();
		var entryFee = $('select[name = entry_fee]').val();
		var youhuiA ="0" ;
		var youhuiB ="0" ;//订单金额
		var coupon_num0 = '';
    	var coupon_num1="";
		
		$('.youhuix1').click(function(){
		        $('.modelyouhui1')[0].style.display = "none";
		    })
		    $('.youhuinew1').click(function(){
		        $('.modelyouhui1')[0].style.display = "block";
		    })
		$('.youhuicx').click(function(){
		    $('.youhuiy')[0].style.display = "block";
		    $('.youhuic')[0].style.display = "none";
		})
		console.log(classPrice,entryFee,youhuiA)
		$('.youhuiuse').click(function(){
		    $.ajax({
		        url:'{{Url("admin/useCoupon")}}',
		        type:'post',
		        data:{coupon_num:$('input[name = youhuicard]').val(),_token:'{{csrf_token()}}'},
		        success:function(data){
		            if(data == 1){
		               $('.youhuip1')[0].innerHTML= "优惠码过期";
		               setTimeout(function(){
		               	$('.youhuip1')[0].innerHTML="";
		               },3000)
		            }else if(data == 2){
		            	$('.youhuip1')[0].innerHTML= "优惠码已失效";
		            	setTimeout(function(){
		               	$('.youhuip1')[0].innerHTML="";
		               },3000)
		            }
		            else if(data == 3){
		            	$('.youhuip1')[0].innerHTML= "优惠码有误";
		            	setTimeout(function(){
		               	$('.youhuip1')[0].innerHTML="";
		               },3000)
		            }
		            else if(data == 0){
		            	$('.youhuip1')[0].innerHTML= "使用失败";
		            	setTimeout(function(){
		               	$('.youhuip1')[0].innerHTML="";
		               },3000)
		            }
		            else{
		                 $('.youhuip1')[0].innerHTML= "使用成功";
		                 youhuiA = data;
		                 coupon_num1 = $('input[name=youhuicard]').val()
		                 price()
		                 setTimeout(function(){
		               	$('.youhuip1')[0].innerHTML="";
		               },3000)
		            }
		        },
		        error:function(){
		            $('.youhuip1')[0].innerHTML= "服务器错误";
		            setTimeout(function(){
		               	$('.youhuip1')[0].innerHTML="";
		               },3000)
		        }
		    })
		})
		function price(){
       var enro = 0;
       if($('select[name = enrolmentType]').val() == "定金补费" && '{{$data['project']}}' == "消防升级"){
           enro = 2000;
       }else if($('select[name = enrolmentType]').val() == "定金补费" && ('{{$data['project']}}' == "消防项目" || '{{$data['project']}}' == "基金项目")){
           enro = 500;
       }else if($('select[name = enrolmentType]').val() == "代报名补费"){
           enro = parseInt($('select[name = class1] :selected').attr('data-price')-enro);
           $('select[name = entry_fee]').val('1500');
       }else if($('select[name = enrolmentType]').val() == "尾款" && $('select[name = class1]').val()=="职称评定协助服务协议（初级）"){
           enro = 1500;
           $('select[name = entry_fee]').val('0');
       }else if($('select[name = enrolmentType]').val() == "尾款" && $('select[name = class1]').val()=="职称评定协助服务协议（中级）"){
           enro = 1500;
           $('select[name = entry_fee]').val('0');
       }else if($('select[name = enrolmentType]').val() == "尾款" && $('select[name = class1]').val()=="职称评定协助服务协议（高级）"){
           enro = 5000;
           $('select[name = entry_fee]').val('0');
       }else{
           enro = 0;
       }
       if('{{$data['project']}}' == "职称评审"){
       	$('select[name = entry_fee]').val('0');
       }
       if(youhuiA != 0){
                var a = parseInt($('select[name = class1] :selected').attr('data-price')-enro)+parseInt($('select[name = entry_fee]').val())-parseInt(youhuiA)
                if(youhuiA < 0){
                    var youhuia= -youhuiA
                    $('#price')[0].innerHTML = `￥`+a+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`+`+youhuia+`)</span>`;
                }else{
                    $('#price')[0].innerHTML = `￥`+a+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`-`+youhuiA+`)</span>`;
                }
                price1 = a;
                youhui1= youhuiA
                coupon_num2 = coupon_num1
       }else{
           if(youhuiB != 0 && $('select[name = class1]').val() == classPrice){
           	
                var b = parseInt($('select[name = class1] :selected').attr('data-price')-enro)+parseInt($('select[name = entry_fee]').val())-parseInt(youhuiB)
                console.log(b)
                if(youhuiB < 0){
                    var youhuib= -youhuiB
                    $('#price')[0].innerHTML = `￥`+b+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`+`+youhuib+`)</span>`;
                }else{
                    $('#price')[0].innerHTML = `￥`+b+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`-`+youhuiB+`)</span>`;
                }
                price1 = b
                youhui1 = youhuiB
                coupon_num2 = coupon_num0
            }else{
                var b = parseInt($('select[name = class1] :selected').attr('data-price')-enro)+parseInt($('select[name = entry_fee]').val())-parseInt(0)
                console.log(b)
                    $('#price')[0].innerHTML = `￥`+b+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`+`+0+`)</span>`;
                price1 = b;
                youhui1= 0
                coupon_num2 = ""
            }
            // 
           }
           return (price1,youhui1,coupon_num2)
       }
//function price(){
//     var enro = 0;
//     if($('select[name = enrolmentType]').val() == "定金补费"){
//         enro = 500;
//     }else{
//         enro = 0;
//     }
//     var prcie = ""
//     var youhui = ""
//     console.log($('select[name = class1] :selected').attr('data-price'))
//     if($('select[name = class1]').val() == classPrice&&$('select[name = entry_fee]').val()==entryFee){
//      var b = parseInt($('select[name = class1] :selected').attr('data-price'))-enro+parseInt($('select[name = entry_fee]').val())-parseInt(youhuiB)
//      if(youhuiB < 0){
//          var youhuib= -youhuiB
//          $('#price')[0].innerHTML = `￥`+b+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`+`+youhuib+`)</span>`;
//      }else{
//          $('#price')[0].innerHTML = `￥`+b+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`-`+youhuiB+`)</span>`;
//      }
//      price1 = b
//      youhui1 = youhuiB
//     }else{
//      var a = parseInt($('select[name = class1] :selected').attr('data-price'))-enro+parseInt($('select[name = entry_fee]').val())-parseInt(youhuiA)
//      if(youhuiA < 0){
//          var youhuia= -youhuiA
//          $('#price')[0].innerHTML = `￥`+a+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`+`+youhuia+`)</span>`;
//      }else{
//          $('#price')[0].innerHTML = `￥`+a+`<span style="color:red;float:right">明细：(`+parseInt($('select[name = class1] :selected').attr('data-price')-enro)+`+`+$('select[name = entry_fee]').val()+`-`+youhuiA+`)</span>`;
//      }
//      price1 = a;
//      youhui1= youhuiA
//     }
//     return (price1,youhui1)
// }
function dingj(){
        if($('select[name = class1]').val()=="基金从业资格考试定金班" || $('select[name = class1]').val()=="一级注册消防工程师考试定金班" || $('select[name = class1]').val()=="一级注册消防工程师考试升级定金班"||"{{$data['project']}}"=='职称评审'){
            $('select[name = entry_fee]').val(0)
        }
   }
$('select[name = enrolmentType]').change(function(){
        price()
    })
		$('select[name = class1]').change(function(){

		price1 = $('select[name = class1] :selected').attr('data-price');
        price2 = {{$moneys}};
        price3 = '{{$insteads}}'=='是'?1500:0;
        if($(this).val() == "一级注册消防工程师考试皇家内训班"){
            str ='消防升级金额：' +price1+'-('+price2+'-'+price3+')='+(parseInt(price1)-parseInt(price2)+parseInt(price3))
            $('.class_price').text(str)
        }else{
            $('.class_price').text('')
        }
		    console.log(youhuiA);
		    if($(this).val() == "基金从业资格考试定金班" || $(this).val() == "基金从业资格考试高校取证班"){
            $('select[name = entry_fee]').val('0');
        }else{
            $('select[name = entry_fee]').val('1500');
        }
        dingj()
		 price()
		})
		$('select[name = entry_fee]').change(function(){
			dingj()
		    price()
		    // cityChange();
		    disa()
		})
		console.log(classPrice,entryFee,youhuiA)
		$('.youhuigu').click(function(){
		    $('.youhuiy')[0].style.display = "none";
		    $('.youhuic')[0].style.display = "block";
		})

	
    // 创建订单
    $('.ordernew').click(function(){
    	if(localStorage.data_mydid != '{{$didds}}'){
        	$('.modelprompt')[0].style.display = "block";
	        $('.promptp')[0].innerHTML = "点击回溯按钮回到入口数据";
	        return
	    }
//  	price();
        //判断是否为团报
        // cityChange();
    	var aa='{{$data["data_type"]}}',bb='{{$data["last_consult_time"]}}';   
	    if($('input[name = stuname]').val()!=""
            &&$('select[name = sex]').val()!=""
            &&$('select[name = sex]').val()!="无"
            &&$('input[name = adviemail]').val()!=""
            &&$('input[name=stuname]')[0].style.color != "red"
            &&$('input[name=adviemail]')[0].style.color != "red"
            &&$('input[name = phonenumber]')[0].style.color != "red"
            &&$('input[name = mobilephonenumber]')[0].style.color != "red"
            &&$('input[name = qqnumber]')[0].style.color != "red"
            &&$('select[name = workyear]').val()!=""
            &&$('select[name = workyear]').val()!="无"
            &&$('select[name = trade]').val()!=""
            &&$('select[name = trade]').val()!="无"
            &&$('input[name = wxnumber]').val()!=""
            &&$('select[name = educate]').val()!=""
            &&$('select[name = educate]').val()!="无"
            
            ){
//	        $('.modelorder')[0].style.display = "block"
				if(aa == "团报"|| aa == "转介绍"){
                    $('.modelorder')[0].style.display = "block";
                    $.ajax({
                        url:'{{Url("admin/getOrderInfo")}}',
                        type:'get',
                        dataType:'json',
                        data:{did:'{{$data["did"]}}',mobile:$('#matephone').text()},
                        success:function(data){
                            if(data[0].instead_sign == '是'){
                            	$('select[name=entry_fee]').val('1500');
                            }else{
                            	$('select[name=entry_fee]').val('0');
                            }
                        	    // cityChange();
                            address(data[0].mail_address);
                            $('select[name=exam_province] :selected').text(data[0].exam_province)
                            $('select[name=exam_city] :selected').text(data[0].exam_city)
                            $('input[name=advizipcard]').val(data[0].mail_num);
                            $('select[name=IDtype]').val(data[0].proof_type);
                            $('input[name=adviidcard]').val(data[0].id_num);
                            $('input[name=classnumber]').val(data[0].class_mobile);
                            $('input[name=jinjiname]').val(data[0].ergent_people);
                            $('select[name=class1]').val(data[0].classType);
                            $('select[name=enrolmentType]').val(data[0].sign_type);
                            $('select[name=kaoqi]').val(data[0].exam_date);
                           
                            
//                          if(data[0].section.indexOf('科一') >-1){
                            	$('input[name=ke1]')[0].checked = true
//                          }
                            if(data[0].section.indexOf('科二') >-1){
                            	$('input[name=ke2]')[0].checked = "checked"
                            }
                            if(data[0].section.indexOf('科三') >-1){
                            	$('input[name=ke3]')[0].checked = "checked"
                            }
                            $('#price')[0].innerHTML= data[0].price
                            $('input[name=jinjiphone]').val(data[0].ergent_mobile);
                             youhuiB = data[0].discount;
                            coupon_num0 = data[0].coupon_num;
                        },
                        error:function(){

                        }
                    })
                }else{
                    if( bb != "1992-08-02 00:00:00" || '{{$data["sign_times"]}}'>0){//普通数据必须有记录,或者二次报名数据直接点
                        $('.modelorder')[0].style.display = "block"; 
                        $.ajax({
                        url:'{{Url("admin/getOrderInfo")}}',
                        type:'get',
                        dataType:'json',
                        data:{did:'{{$data["did"]}}',mobile:$('#matephone').text()},
                        success:function(data){
                        	console.log(data)
                            address(data[0].mail_address);
                            if(data[0].instead_sign == '是'){
                            	$('select[name=entry_fee]').val('1500');
                            }else{
                            	$('select[name=entry_fee]').val('0');
                            }
    						// cityChange();
                            $('select[name=exam_province] :selected').text(data[0].exam_province)
                            $('select[name=exam_city] :selected').text(data[0].exam_city)
                            $('input[name=advizipcard]').val(data[0].mail_num);
                            $('select[name=IDtype]').val(data[0].proof_type);
                            $('input[name=adviidcard]').val(data[0].id_num);
                            $('input[name=classnumber]').val(data[0].class_mobile);
                            $('input[name=jinjiname]').val(data[0].ergent_people);
                            $('select[name=class1]').val(data[0].classType);
                            $('select[name=enrolmentType]').val(data[0].sign_type);
                            $('select[name=kaoqi]').val(data[0].exam_date);
                             if(data[0].section.indexOf('科一') >-1){
                            	$('input[name=ke1]')[0].checked = true
                            }
                            if(data[0].section.indexOf('科二') >-1){
                            	$('input[name=ke2]')[0].checked = "checked"
                            }
                            if(data[0].section.indexOf('科三') >-1){
                            	$('input[name=ke3]')[0].checked = "checked"
                            }

                            $('#price')[0].innerHTML= data[0].price;
                            $('input[name=jinjiphone]').val(data[0].ergent_mobile);
                            youhuiB = data[0].discount;
                           coupon_num0 = data[0].coupon_num;
                           

                        },
                        error:function(){

                        }
                    })
                    }else{
						$('.modelcue')[0].style.display = "block";
                        $('.cuep')[0].innerHTML = "非团购或代报名数据必须有1条跟访记录"
                    }
                }
	    }else{
	        console.log(1)
	        $('.modelcue')[0].style.display = "block"
	        $('.cuep')[0].innerHTML = "姓名、性别、学历、行业、微信、邮箱、工作年限不能为空和无"
	    }
	})
	$('.orderx').click(function(){
	    $('.modelorder')[0].style.display = "none";
//	    window.location.reload();//暂时关闭
	})
	$('.cuex').click(function(){
	    $('.modelcue')[0].style.display = "none";
	})
	
	if("{{$data['project']}}"=='消防项目'||"{{$data['project']}}"=='消防升级'||"{{$data['project']}}"=='职称评审'){
	    $('input[name = ke1]')[0].checked = true;
	    $('input[name = ke2]')[0].checked = true;
	    $('input[name = ke3]')[0].checked = true;
	}
	//判断支付截图格式
//	$("input[name=payment]").change(function(){
//         
//	    console.log($("input[name=simplehead]"))
//	        file = this.files[0];
//	        type = file.type;
//	
//	    console.log(type.indexOf("image/"),file.size)
//	    var maxsize = 2500000;
//	    if(type.indexOf("image/")<0){
//	        console.log(1)
//	        $('.orderp')[0].innerHTML = `请选择图片上传`;
//	        $('.orderp')[0].style.color = `red`;
//	    }else if(file.size > maxsize){
//	        $('.orderp')[0].innerHTML = `图片尺寸不能超过2MB`;
//	        $('.orderp')[0].style.color = `red`;
//	    }else if (window.FileReader) {    
//	        $('.orderp')[0].style.color = `green`;
//	        $('.orderp')[0].innerHTML = `图片正确`;
//	            var reader = new FileReader();    
//	            reader.readAsDataURL(file);    
//	            //监听文件读取结束后事件    
//	            reader.onloadend = function (e) {
//	                console.log(e)//e.target.result就是最后的路径地址
//	            };    
//	        } 
////      disa()
//  });
	//多文件上传支付截图
  var fileList;
  var allFile = [];
  //FormData对象初始化
  var form32 = document.getElementById("uploadForm");//upload-form
  var formData = new FormData(form32);
  formData.delete('UploadForm[excelFiles][]');
  $("#uploadform-excelfiles").on('change', function (e) {
   console.log($("#norm").val())
   
   var fileError = 0;
   fileList = e.currentTarget.files;
   $.each(fileList, function (index, item) {
 var fileName = item.name;
 var fileEnd = fileName.substring(fileName.indexOf("."));
    console.log(item.size)
 //上传文件格式判断
    type = item.type;
    var maxsize = 2*1024*1024
    if(type.indexOf("image/")<0){
        console.log(1)
        $('.payp')[0].innerHTML = `请选择图片上传`;
        $('.payp')[0].style.color = `red`;
    }else if(item.size > maxsize){
        $('.payp')[0].innerHTML = `图片尺寸不能超过2MB`;
        $('.payp')[0].style.color = `red`;
    }else if (window.FileReader) {  
  allFile.push(item);
$('#files').append( '<tr style="padding-top: 7px;">' +
        '<td>'+fileName+'</td>' +
        '<td><select style="margin:2px 10px 2px 0" name="'+fileName.split('.')[0]+'-'+fileName.split('.')[1]+'-company'+'"><option value="">请选择</option><option value="北京创睿造智教育科技有限公司">北京创睿造智教育科技有限公司</option><option value="北京智汇火种教育科技有限公司">北京智汇火种教育科技有限公司</option></select><select style="margin:2px 10px 2px 0" name="'+fileName.split('.')[0]+'-'+fileName.split('.')[1]+'-payment'+'"><option value="">请选择</option><option value="支付宝">支付宝</option><option value="微信">微信</option><option value="淘宝">淘宝</option><option value="现金">现金</option><option value="银行公户">银行公户</option></select><input style="margin:2px 10px 2px 0" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9]+/g,``);}).call(this)" placeholder="请输入支付金额" type="text" name="sign_money"></td>' +
        '<td><a href="javascript:void(0)" class="delete">删除</a></td>' +
        '</tr>');
  //追加文件
  formData.append('UploadForm[excelFiles][]',item);
    }
   });
   
   var fileCount = $('#files').find('tr').length;
   $('#fileName').html('共上传 ' + fileCount + ' 个文件');
   
  });
  $('#files').on('click','.delete',function (e) {
  var saveFile = [];
  var deleteName = e.target.parentNode.previousElementSibling.previousElementSibling.textContent;
  var deleteIndex;
  //将不删除的放入数组中
  $.each(allFile,function (index, item) {
   if(item.name == deleteName){
     deleteIndex = index;
   }else {
    saveFile.push(item);
   }
  });
  allFile.splice(deleteIndex,1);
  formData.delete('UploadForm[excelFiles][]');
  //将不删除的数组追加的formData中
  $.each(saveFile,function (index, item) {
   formData.append('UploadForm[excelFiles][]',item);
  });
 
  e.target.parentNode.parentNode.remove();
  var fileCount = $('#files').find('tr').length;
  $('#fileName').html('共上传 ' + fileCount + ' 个文件');
 
 });
 
 $("#fileUpload").on('click',function () {console.log(formData)
  var len = formData.getAll('UploadForm[excelFiles][]').length;
  $("#overlay").show();
    var deleteBtn = $(".delete");
    $.ajax({
        url: '{{Url("admin/savePayment")}}',
        type: 'post',
        cache: false,
        data: formData,
        processData: false,
        contentType: false,
        success:function(){
            $('.payp')[0].innerHTML = `文件上传成功!`;
            $('.payp')[0].style.color = `green`;
        },
        error:function(){
            $('.payp')[0].innerHTML = `文件上传失败`;
            $('.payp')[0].style.color = `green`;
        }
       })
 
 });
	
	//提交订单
	var orderLock = true;
    $('#ordergo').click(function(){
        if($('select[name = entry_fee]').val()=='1500' && ("{{$data['project']}}" == "消防项目" || "{{$data['project']}}" == "消防升级")){
            if($("select[name = exam_province] :selected").text()!= "四川" && $("select[name = exam_province] :selected").text()!= "湖北"&&$("select[name = exam_province] :selected").text()!= "广东"){
                $('.modelcue')[0].style.display = "block";
                $('.cuep')[0].innerHTML = '含代报名的考试地址只能选择四川，湖北，广东'; 
                return;
            }
        }
    	if(orderLock == true){
        orderLock = false;
        var form22 = new FormData(document.getElementById("orderform"));
        //先提交支付截图
        console.log(form22.get('did'))
        var order_go = true;
		var pay_way = [],pay_wayall = []
		var form = new FormData(document.getElementById("orderform"));
		formData.delete('pay_way[]');
		formData.delete('company[]');
		formData.delete('sign_money[]');
		console.log(document.getElementById("orderform"),form.get('payment'))
		console.log($('#uploadForm input'));
		console.log(formData.getAll('UploadForm[excelFiles][]'))
		for(var i=0;i<$('#uploadForm select').length;i++){
		    if(i%2){
		        formData.append('pay_way[]',$('#uploadForm select')[i].value)
		        pay_way.push($('#uploadForm select')[i].value)
		    }else{
		        formData.append('company[]',$('#uploadForm select')[i].value);
		        
		    }
		    if($('#uploadForm select')[i].value == ""){
		        order_go = false
		    }
		}
		for(var i=0;i<pay_way.length;i++){
		    if(pay_wayall.indexOf(pay_way[i])== '-1'){
		        pay_wayall.push(pay_way[i])
		    }
		}
		var payment = pay_wayall[0];
        for(var i=1;i<pay_wayall.length;i++){
            payment=payment+','+pay_wayall[i]
        }
        
		for(var i=1;i<$('#uploadForm input').length-2;i++){
		    formData.append('sign_money[]',$('#uploadForm input')[i].value);
		    if($('#uploadForm input')[i].value == ""){
		        order_go = false
		    }
		}
        
        price()
    //		console.log(price1,youhui1);
        var price2 = price1,youhui = youhui1,coupon_num = coupon_num2
        var addCity
        if($('select[name = adviaddress_province] :selected').text() == "北京"||
        $('select[name = adviaddress_province] :selected').text() == "上海"||
        $('select[name = adviaddress_province] :selected').text() == "天津"||
        $('select[name = adviaddress_province] :selected').text() == "重庆"){
            addCity = ""
        }else{
            addCity = $('select[name = adviaddress_city] :selected').text()
        }
        var ke1 = "",ke2="",ke3="";
        if($("input[name=ke1]")[0].checked){
            ke1 = '科一,'
        }else{
            ke1 = ''
        }
        if($("input[name=ke2]")[0].checked){
            ke2 = '科二,'
        }else{
            ke2 = ''
        }
        if($("input[name=ke3]")[0].checked){
            ke3 = '科三'
        }else{
            ke3 = ''
        }
        ke = ke1+ke2+ke3;
    //      console.log(1)
        didArr = $('#did').attr("data-did").split('-');
        did = didArr[0];
        var entryFee ;
        entryFee = '{{$data['project']}}'=='基金项目' ? '是' : $('select[name = entry_fee] :selected').text();
        var Allprice = 0;
		for(var i=1;i<$('#uploadForm input').length-2;i++){
		    console.log($('#uploadForm input')[i].value)
		    Allprice+=parseInt($('#uploadForm input')[i].value);
		    console.log(Allprice)
		}
		console.log(Allprice,Allprice == price1)
		if(Allprice == price1){
		    if(order_go){
        $.ajax({
            url:'{{Url('admin/saveOrder')}}',//创建订单确定
            type:'post',
            data:{
                trade:$('select[name = trade]').val(),
                province:$('select[name = province]').val(),
                adviemail:$('input[name = adviemail]').val(),
                phonenumber:$('input[name = phonenumber]').val(),
                mobilephonenumber:$('input[name = mobilephonenumber]').val(),
                qqnumber:$('input[name = qqnumber]').val(),
                wxnumber:$('input[name = wxnumber]').val(),
                stuname:$('input[name = stuname]').val(),
                sex:$('select[name = sex]').val(),
                educate:$('select[name = educate]').val(),
                workyear:$('select[name = workyear]').val(),
                adviaddress:$('input[name = adviaddress]').val(),
                advizipcard:$('input[name = advizipcard]').val(),
                adviidcard:$('input[name = adviidcard]').val(),
                classnumber:$('input[name = classnumber]').val(),
                IDtype:$('select[name = IDtype]').val(),
                jinjiname:$('input[name = jinjiname]').val(),
                matephone:$('#matephone')[0].innerHTML,
                jinjiphone:$('input[name = jinjiphone]').val(),
    //              pro1:$('#pro1').text(),
                entry_fee:entryFee,
                class1:$('select[name = class1]').val(),
                kaoqi:$('select[name = kaoqi]').val(),
                // yuyuetime:$('input[name = yuyuetime]').val(),
    //              classmoney:$('input[name = yuyuemoney]').val(),
                payment:payment,
                enrolmentType:$('select[name = enrolmentType]').val(),
                did:did,
                ke:ke,
                    _token:'{{csrf_token()}}',
                adviaddress:$('select[name = adviaddress_province] :selected').text()+addCity+$('select[name = adviaddress_area] :selected').text()+$('input[name = adviaddress]').val(),
                classmoney:price2,
                youhui,
                coupon_num,
                examProvince:$('select[name = exam_province] :selected').text(),
                examCity:$('select[name = exam_city] :selected').text()
            },
            success:function(data){
                    if(data == 0){
                        $('.orderp')[1].innerHTML= "创建失败";
                        setTimeout(function(){
                        $('.orderp')[1].innerHTML = "";
                    },3000)
                    }else{
                        $('.orderp')[1].innerHTML='订单编号：'+data;
    //					$.ajax({
    //					            url:'{{Url("admin/savePayment")}}',
    //					            type:'post',
    //					            data:form22,
    //					            processData:false,
    //					            contentType:false,
    //					            success:function(data){
    //									switch(data){
    //										case '1':
    //											$('.orderp')[0].innerHTML= '支付截图上传成功';
    //											 setTimeout(function(){
    //						                    $('.orderp')[0].innerHTML = "";
    //						                    },3000) 
    //										break;
    //										case '2':
    //											$('.orderp')[0].innerHTML= '支付截图未上传';
    //											 setTimeout(function(){
    //						                    $('.orderp')[0].innerHTML = "";
    //						                    },3000) 
    //										break;
    //										case '3':
    //											$('.orderp')[0].innerHTML= '支付截图格式为jpg，png，jpeg，且< 2M';
    //											 setTimeout(function(){
    //						                    $('.orderp')[0].innerHTML = "";
    //						                    },3000) 
    //										break;
    //										case '4':
    //											$('.orderp')[0].innerHTML = '订单创建失败';
    //											 setTimeout(function(){
    //						                    $('.orderp')[0].innerHTML = "";
    //						                    },3000) 
    //										break;
    //										case '0':
    //											$('.orderp')[0].innerHTML= '支付截图上传失败';
    //											 setTimeout(function(){
    //						                    $('.orderp')[0].innerHTML = "";
    //						                    },3000) 
    //										break;
    //									} 
    //					            },
    //					            error:function(){
    //									str = '支付截图上传发生错误';
    //					            }
    //					        })
                        $.ajax({
                        url: '{{Url("admin/savePayment")}}',
                        type: 'post',
                        cache: false,
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data){
                            switch(data){
                            case '1':
                                $('.orderp')[0].innerHTML= '支付截图上传成功';
// //                             orderLock = true
                                setTimeout(function(){
                                $('.orderp')[0].innerHTML = "";
                                },30000) 
                            break;
                            case '2':
                                $('.orderp')[0].innerHTML= '支付截图未上传';
                                setTimeout(function(){
                                $('.orderp')[0].innerHTML = "";
                                },3000) 
                            break;
                            case '3':
                                $('.orderp')[0].innerHTML= '支付截图格式为jpg，png，jpeg，且< 2M';
                                setTimeout(function(){
                                $('.orderp')[0].innerHTML = "";
                                },3000) 
                            break;
                            case '4':
                                $('.orderp')[0].innerHTML = '订单创建失败';
                                setTimeout(function(){
                                $('.orderp')[0].innerHTML = "";
                                },3000) 
                            break;
                            case '0':
                                $('.orderp')[0].innerHTML= '支付截图上传失败';
                                setTimeout(function(){
                                $('.orderp')[0].innerHTML = "";
                                },3000) 
                            break;}
                        },
                        error:function(){
                            $('.payp')[0].innerHTML = `文件上传失败`;
                            $('.payp')[0].style.color = `green`;
                        }
                    })
                }
            },
            error:function(){
                $('.orderp')[1].innerHTML= "服务器错误";
                    setTimeout(function(){
                    $('.orderp')[1].innerHTML = "";
                    },3000) 
            }
        })
        }else{
        $('.modelcue')[0].style.display = "block";
        $('.cuep')[0].innerHTML = '请将支付截图后的信息填写完整';
        orderLock = true
    }
        
}else{
    $('.modelcue')[0].style.display = "block";
    $('.cuep')[0].innerHTML = '支付金额与班型价格不一致'
    orderLock = true
}    }
    })

    //流转历史
        $('.historyx').click(function(){
            $('.modelhistory')[0].style.display = "none";
            $('.historyrcontent table')[0].innerHTML = '';
        })
        $('.historynew').click(function(){
        	$('.modelhistory')[0].style.display = "block"
            $('.historyrcontent')[0].style.border = "1px solid #42b983"
            $('.historyrcontent')[0].style.borderRadius = "5px"
            $('.historyrcontent')[0].style.padding = "10px";
            didArr = $('#did').attr("data-did").split('-');
            did = didArr[0];
          
                $.ajax({
                    type:'get', 
                    url:'{{Url("admin/getTransById")}}',//l流转
                    data:{did:did},
                    dataType:'json',
                    success:function(data){
                        if(data == ""){
                            $('.historyrcontent p')[0].innerHTML += "查询结果为空";
                            setTimeout(function(){
                            $('.historyrcontent p')[0].innerHTML = "";
                            $('.historyrcontent')[0].style.border = ""
                            $('.historyrcontent')[0].style.borderRadius = ""
                            $('.historyrcontent')[0].style.padding = ""
                            },3000) 
                        }else{
                                $('.historyrcontent table')[0].innerHTML = 
                                    `<tr>
                                            <td style="    border: 1px solid rgb(204,204,204);text-align: center;width: 20%;height: 40px;">`+data.project+`</td>
                                            <td style="    border: 1px solid rgb(204,204,204);text-align: center;width: 80%;height:240px;">
                                                <div style="display: -webkit-box;-webkit-box-orient: vertical;height:80%;overflow: auto;text-align:left;padding-left:20px">`+data.data_transfer+`</div>
                                            </td>
                                   </tr>` ;    
                        }
                    },
                    error:function(){
                        console.log($('.historycontent p'))
                        $('.historyrcontent p')[0].innerHTML = "服务器错误"; 
                        setTimeout(function(){
                        $('.historyrcontent p')[0].innerHTML = "";
                        $('.historyrcontent')[0].style.border = ""
                        $('.historyrcontent')[0].style.borderRadius = ""
                        $('.historyrcontent')[0].style.padding = ""
                        },3000)
                    }
                })
            
        })


    //反馈
    $('.tablenew').click(function(){
    		if(localStorage.data_mydid != '{{$didds}}'){
	        	$('.modelprompt')[0].style.display = "block";
		        $('.promptp')[0].innerHTML = "请点击回溯按钮回到入口数据";
		        return
		    }
            $('.modeltable')[0].style.display = "block";
            $('.modeltabler table').html(`<tr>
                                    <td>反馈人</td>
                                    <td>反馈时间</td>
                                    <td>数据有效性</td>
                                    <td>无效数据类型</td>
                                    <td>备注</td>
                                </tr>`)
            $.ajax({
                url:'{{Url("admin/getFeedTable")}}',
                type:'get',
                dataType:'json',
                data:{did:"{{$data['did']}}"},
                success:function(data){
                	console.log(data[0])
                    for (var i = 0; i < data.length; i++) {
                        $('.modeltabler table')[0].innerHTML+=`<tr>
                                    <td>`+data[i].user_name+`</td>
                                    <td>`+data[i].feedtime+`</td>
                                    <td>`+data[i].is_valid+`</td>
                                    <td>`+data[i].inval_type+`</td>
                                    <td style="width:10px"><div style="width:100%;line-height:20px" class="beizhu">`+data[i].note+`</div></td>
                                </tr>`
                        
                    }
                },
                error:function(){

                }
            })
            $('#feedback')[0].style.display = 'none'
        })
        $('.tablex').click(function(){
            $('.modeltable')[0].style.display = "none";
        })

    //放弃
    $('.giveupnew').click(function(){
            $('.modelgiveup')[0].style.display = "block"
        })
        $('.giveupx').click(function(){
            console.log(1)
            $('.modelgiveup')[0].style.display = "none";
        })
        $('.giveuphid').click(function(){
            $('.modelgiveup')[1].style.display = "block"
        })
        $('.giveuphx').click(function(){
            console.log(1)
            $('.modelgiveup')[1].style.display = "none";
        })
    var lockGive = true;
    var lockGiveh = true;
    $('#giveupgo').click(function(){
    	did = {{$data['did']}};
    	uid = {{$data['belong_to']}};
    	if(lockGive == true){
    		lockGive = false
    		if(localStorage.ptdid == undefined){
    			localStorage.ptdid = ""
    		}
    		bdid = localStorage.psdid.substring(1).split(',');
    		if(bdid.indexOf(location.href.split('=')[1])<0){
    			localStorage.ptdid+=',';
				localStorage.ptdid+=did;
				localStorage.psdid+=',';
				localStorage.psdid+=location.href.split('=')[1];
    		}
    		
    		$.ajax({
	            url:'{{Url("admin/dataGiveUp")}}',//放弃
	            type:'post',
	            data:{uid:uid,did:localStorage.ptdid.substring(1),_token:"{{csrf_token()}}"},
	            success:function(data){
	                if(data == 1){
	                    $('.giveupp')[0].innerHTML = "放弃成功";
	                    localStorage.ptdid='';
					    localStorage.psdid='';
	                    setTimeout(function(){
	                    $('.giveupp')[0].innerHTML = "";
	                   		window.location.href = "{{Url('/')}}";
	//						window.history.back(-1);
	                    },1500) 
	                    
	                }else{
	                    $('.giveupp')[0].innerHTML = "放弃成功";
	                    
	                    setTimeout(function(){
	                    $('.giveupp')[0].innerHTML = "";
	                    window.location.href = "{{Url('/')}}";
	                    },1500)       
	                }
	            },
	            error:function(){
	                $('.giveupp')[0].innerHTML = "服务器错误"; 
	                setTimeout(function(){
	                $('.giveupp')[0].innerHTML = "";
	                },3000) 
	            }
	        })
    	}
        
    })
    $('#giveuphgo').click(function(){
    	did = {{$data['did']}};
    	uid = {{$data['belong_to']}};
    	if(lockGiveh == true){
    		lockGiveh = false
    		if(localStorage.ptdidh == undefined){
    			localStorage.ptdidh = ""
    		}
    		if(localStorage.psdidh == undefined){
    			localStorage.psdidh = ""
    		}
    		bdidh = localStorage.psdidh.substring(1).split(',');
    		if(bdidh.indexOf(location.href.split('=')[1])<0){
    			localStorage.ptdidh+=',';
				localStorage.ptdidh+=did;
				localStorage.psdidh+=',';
				localStorage.psdidh+=location.href.split('=')[1];
    		}
    		
    		$.ajax({
	            url:'{{Url("admin/dataHidden")}}',//隐藏
	            type:'post',
	            data:{uid:uid,did:localStorage.ptdidh.substring(1),_token:"{{csrf_token()}}"},
	            success:function(data){
	                if(data == 1){
	                    $('.giveuphp')[0].innerHTML = "隐藏成功";
	                    localStorage.ptdidh='';
					    localStorage.psdidh='';
	                    setTimeout(function(){
	                    $('.giveuphp')[0].innerHTML = "";
	                   		window.location.href = "{{Url('/')}}";
	//						window.history.back(-1);
	                    },1500) 
	                    
	                }else{
	                    $('.giveuphp')[0].innerHTML = "隐藏成功";
	                    
	                    setTimeout(function(){
	                    $('.giveuphp')[0].innerHTML = "";
	                    window.location.href = "{{Url('/')}}";
	                    },1500)       
	                }
	            },
	            error:function(){
	                $('.giveuphp')[0].innerHTML = "服务器错误"; 
	                setTimeout(function(){
	                $('.giveuphp')[0].innerHTML = "";
	                },3000) 
	            }
	        })
    	}
        
    })
    //反馈
    var lockFd = true;
    $('#feedback').click(function(){
    	if(lockFd == true){
    		lockFd = false
    		 if ($('select[name = datavalidity]').val()==2) {
    		$.ajax({
	        url:'{{Url("admin/saveFeedBack")}}',
	        type:'post',
	        data:{
	            datavalidity:$('select[name = datavalidity]').val(),
	            nulldata:$('select[name = nulldata]').val(),
	            remarks:$('textarea[name = remarks]').val(),
	            did:$('#did').attr("data-did"),
	            _token:'{{csrf_token()}}'
	        },
	        success:function(data){
	            if(data == 1){
	                $('.feedbackp')[0].innerHTML = "反馈成功";
	                setTimeout(function(){
	                $('.feedbackp')[0].innerHTML = "";
//	                window.location.reload();//暂时关闭
	                },3000) 
	            }else if(data == 2 || data == 4){
	                $('.feedbackp')[0].innerHTML = "反馈失败";
	                setTimeout(function(){
	                $('.feedbackp')[0].innerHTML = "";
	                },3000) 
	            }else if(data==5){
	            	$('.feedbackp')[0].innerHTML = "当日反馈未接通次数大于3";
	                setTimeout(function(){
	                $('.feedbackp')[0].innerHTML = "";
//	                window.location.reload();//暂时关闭
	                },3000) 
	            }else if(data==3){
	            	$('.feedbackp')[0].innerHTML = "反馈无效成功";
	                setTimeout(function(){
	                $('.feedbackp')[0].innerHTML = "";
	                window.location.href='{{Url("/")}}';
	                },1700) 
	            }else if(data==7){
	            	$('.feedbackp')[0].innerHTML = "反馈信息应间隔1小时";
	                setTimeout(function(){
	                $('.feedbackp')[0].innerHTML = "";
//	                window.location.reload();//暂时关闭
	                },3000) 
	            }else{
	            	$('.feedbackp')[0].innerHTML = "未知错误";
	                setTimeout(function(){
	                $('.feedbackp')[0].innerHTML = "";
//	                window.location.reload();//暂时关闭
	                },3000) 
	            }
	            lockFd = true
	        },
	        error:function(){
	            $('.feedbackp')[0].innerHTML = "服务器错误";
	            setTimeout(function(){
	            $('.feedbackp')[0].innerHTML = "";
	            },3000)
	            lockFd = true
	        }
	        })
	    }else if ($('select[name = datavalidity]').val()==1) {
	    	$.ajax({
	            url:"{{Url('admin/missCall')}}",
	            type:"post",
	            data:{matephone:$('#matephone')[0].innerHTML,
	                     _token:'{{csrf_token()}}',type:'2'},
	            success:function(data){
	            	lockFd = true
                if(data == 1){
                	$('.feedbackp')[0].innerHTML = ''
                	$.ajax({
				        url:'{{Url("admin/saveFeedBack")}}',
				        type:'post',
				        data:{
				            datavalidity:$('select[name = datavalidity]').val(),
				            nulldata:$('select[name = nulldata]').val(),
				            remarks:$('textarea[name = remarks]').val(),
				            did:$('#did').attr("data-did"),
				            _token:'{{csrf_token()}}'
				        },
				        success:function(data){
				        	lockFd = true
				            if(data == 1){
				                $('.feedbackp')[0].innerHTML = "反馈成功";
				                setTimeout(function(){
				                $('.feedbackp')[0].innerHTML = "";
//				                window.location.reload();//暂时关闭
				                },3000) 
				            }else if(data == 2 || data == 4){
				                $('.feedbackp')[0].innerHTML = "反馈失败";
				                setTimeout(function(){
				                $('.feedbackp')[0].innerHTML = "";
				                },3000) 
				            }else if(data==5){
				            	$('.feedbackp')[0].innerHTML = "当日反馈未接通次数大于3";
				                setTimeout(function(){
				                $('.feedbackp')[0].innerHTML = "";
//				                window.location.reload();//暂时关闭
				                },3000) 
				            }else if(data==3){
				            	$('.feedbackp')[0].innerHTML = "反馈无效成功";
				                setTimeout(function(){
				                $('.feedbackp')[0].innerHTML = "";
				                window.location.href='{{Url("/")}}';
				                },1700) 
				            }else if(data==7){
				            	$('.feedbackp')[0].innerHTML = "反馈信息应间隔1小时";
				                setTimeout(function(){
				                $('.feedbackp')[0].innerHTML = "";
//				                window.location.reload();//暂时关闭
				                },3000) 
				            }else{
				            	$('.feedbackp')[0].innerHTML = "未知错误";
				                setTimeout(function(){
				                $('.feedbackp')[0].innerHTML = "";
//				                window.location.reload();//暂时关闭
				                },3000) 
				            }
				        },
				        error:function(){
				        	lockFd = true
				            $('.feedbackp')[0].innerHTML = "服务器错误";
				            setTimeout(function(){
				            $('.feedbackp')[0].innerHTML = "";
				            },3000)
				        }
				        })
                }else if(data==3){
                	$('.feedbackp')[0].innerHTML = "1次通话只能反馈一次未接通"
                    $('#feedback')[0].style.display = 'none'
                }else{
                    $('.feedbackp')[0].innerHTML = "1分钟后重试,仍旧失败再将号码提交网管"
                    $('#feedback')[0].style.display = 'none'
                }
            },
            error:function(){
            	lockFd = true
                $('.feedbackp')[0].innerHTML = "服务器错误"
            }
	        })
	        
	    } else{
	        $('.feedbackp')[0].innerHTML = "请选择数据有效性";
	        setTimeout(function(){
	        $('.feedbackp')[0].innerHTML = "";
	        },3000)
	        lockFd = true
	    }
    	}
	   
	        
	    
	})
	
	//确定
	var obj = {}
	didArr = $('#did').attr("data-did").split('-');
    did = didArr[0];
    var quedingLock = true
	$('#queding').click(function(){console.log($('#pingfen')[0].innerHTML)
	    //console.log($("input[name=ke1]")[0].checked);
	    if(quedingLock == true){
	    	quedingLock = false
	    	var obj1={
	            // trade:$('input[name = trade]').val(),
	            trade:$('select[name = trade]').val(),
	            province:$('select[name = province]').val(),
	            class:$('select[name = class]').val(),
	            nextretime:$('input[name = nextretime]').val(),
	            pingfen:$('#pingfen')[0].innerHTML,
	            adviemail:$('input[name = adviemail]').val(),
	            phonenumber:$('input[name = phonenumber]').val(),
	            matephone:$('#matephone')[0].innerHTML,
	            mobilephonenumber:$('input[name = mobilephonenumber]').val(),
	            qqnumber:$('input[name = qqnumber]').val(),
	            wxnumber:$('input[name = wxnumber]').val(),
	            stuname:$('input[name = stuname]').val(),
	            sex:$('select[name = sex]').val(),
	            educate:$('select[name = educate]').val(),
	            workyear:$('select[name = workyear]').val(),
	            chatHistory:$('#chatHistory').val(),
	            last_consult_time:"{{$data['last_consult_time']}}",
	            did:did,type:1, _token:'{{csrf_token()}}'};
	    var obj2={pro1:$('#pro1').text(),
	            class1:$('select[name = class1]').val(),
	            kaoqi:$('select[name = kaoqi]').val(),
	            yuyuetime:$('input[name = yuyuetime]').val(),
	            yuyuemoney:$('input[name = yuyuemoney]').val(),
	            did:$('#did').attr("data-did"),type:2};
//	    if (!$("input[type=checkbox]")[0].checked) {
	        obj = obj1;
//	    }else{
//	        obj = obj2
//	    }
	    
	    if(localStorage.data_mydid != '{{$didds}}'){
        	$('.modelprompt')[0].style.display = "block";
	        $('.promptp')[0].innerHTML = "请点击回溯按钮返回入口数据";
	        return
	    }
	    $.ajax({
	    url:'{{Url("admin/saveConsultInfo")}}',//确定
	    type:'post',
	    data:obj,
	    success:function(data){
	        if(data == 1){
	        	$('.modelprompt')[0].style.display="block";
	            $('.promptp')[0].innerHTML = "提交成功";	  
	            quedingLock = true               
	        }else if(data == 0){
	            $('.modelprompt')[0].style.display="block";
	            $('.promptp')[0].innerHTML = "提交失败";	       
	            quedingLock = true     
	        }else if(data == 4){
	            $('.modelprompt')[0].style.display="block";
	            $('.promptp')[0].innerHTML = "2次跟访时间差应大于1分钟";	         
	            quedingLock = true        
	        }else if(data == 3){
	            $('.modelprompt')[0].style.display="block";
	            $('.promptp')[0].innerHTML = "1分钟后重试,仍失败再将号码提交网管";	  
	            quedingLock = true             
	        }else if(data == 5){
	            $('.modelprompt')[0].style.display="block";
	            $('.promptp')[0].innerHTML = "1次通话只能保存一次跟访信息";	         
	            quedingLock = true        
	        }else{
	            $('.modelprompt')[0].style.display="block";
	            $('.promptp')[0].innerHTML = "未知错误";	          
	            quedingLock = true       
	        }
	    },
	    error:function(){
	        $('.modelprompt')[0].style.display="block";
	            $('.promptp')[0].innerHTML = "服务器错误";	     
	            quedingLock = true            
	    	}
	    })
	    }
	    
	})
	
		//点击电话图标
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
	    $('.modelphonein')[0].style.display='block';
	    $('#phoneingo')[0].style.display='inline';
        $('.phoneinx')[1].style.display='inline';
	})
    $('.phoneinx').click(function(){
        $('.modelphonein')[0].style.display='none';
        $('.phoneinp')[0].innerHTML = '';
    })
    $('#phoneingo').click(function(){
        console.log(phone)
        if('{{$data["Sector"]}}' == "消防四部" ){
            localStorage.check = false
        }else if('{{$data["Sector"]}}' == "消防一部" || '{{$data["Sector"]}}' == "消防二部" || '{{$data["Sector"]}}' == "消防三部"|| '{{$data["Sector"]}}' == "消防五部" || '{{$data["Sector"]}}' == "消防六部"){
            localStorage.check = true
        }
        if(localStorage.check == "false"){
        $.ajax({
            url:'{{Url("admin/clickCallXW")}}',
            type:'post',
            data:{called:phone,_token:'{{csrf_token()}}'},
            success:function(data){
                $('.phoneinp')[0].innerHTML = data;
                $('#phoneingo')[0].style.display='none';
                $('.phoneinx')[1].style.display='none';
            },
            error:function(){
                $('.phoneinp')[0].innerHTML = '服务器错误'
            }
        })
    }else{
        $.ajax({
            url:'{{Url("admin/clickCallZL")}}',
            type:'post',
            data:{called:phone,_token:'{{csrf_token()}}'},
            success:function(data){
                $('.phoneinp')[0].innerHTML = data;
                $('#phoneingo')[0].style.display='none';
                $('.phoneinx')[1].style.display='none';
            },
            error:function(){
                $('.phoneinp')[0].innerHTML = '服务器错误'
            }
        })
    }
    })
	
	//反馈无效检查是否接通
	$('select[name = datavalidity]').click(function(){
	    console.log(phone)
	    if($(this).val() == '2'){ //无效
	        $('#nulldata')[0].style.display= "block";
	        if($('select[name = nulldata]').val() == ""){
	        	$('#feedback')[0].style.display = 'none'
	        }
	    }else if($(this).val() == '1'){ //未通
	        $('#nulldata')[0].style.display= "none";
	        $('select[name = nulldata]')[0].value = 0;
	        $.ajax({
	            url:"{{Url('admin/missCall')}}",
	            type:"post",
	            data:{matephone:$('#matephone')[0].innerHTML,
	                     _token:'{{csrf_token()}}',type:'1'},
	            success:function(data){
                if(data == 1){
                	$('.feedbackp')[0].innerHTML = '';
                    $('#feedback')[0].style.display = 'inline'
                }else if(data==3){
                	$('.feedbackp')[0].innerHTML = "1次通话只能反馈一次未接通"
                    $('#feedback')[0].style.display = 'none'
                }else{
                    $('.feedbackp')[0].innerHTML = "1分钟后重试,仍失败再将号码提交网管"
                    $('#feedback')[0].style.display = 'none'
                }
            },
            error:function(){
                $('.feedbackp')[0].innerHTML = "服务器错误"
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
	            url:"{{Url('admin/missCall3times')}}",
	            type:"post",
	            data:{matephone:$('#matephone')[0].innerHTML,
	                     _token:'{{csrf_token()}}'},
	            success:function(data){
                if(data == 1){
                	$('.feedbackp')[0].innerHTML = '';
                    $('#feedback')[0].style.display = 'inline'
                }else{
                    $('.feedbackp')[0].innerHTML = "1分钟后重试,仍失败再将号码提交网管"
                    $('#feedback')[0].style.display = 'none'
                }
            },
            error:function(){
                $('.feedbackp')[0].innerHTML = "服务器错误"
            }
	        })
	    }else if($(this).val() == '空号'){
	    	$.ajax({
	            url:"{{Url('admin/missCall')}}",
	            type:"post",
	            data:{matephone:$('#matephone')[0].innerHTML,
	                     _token:'{{csrf_token()}}',type:'1'},
	            success:function(data){
                if(data == 1){
                	$('.feedbackp')[0].innerHTML = '';
                    $('#feedback')[0].style.display = 'inline'
                }else if(data==3){
                	$('.feedbackp')[0].innerHTML = "1次通话只能反馈一次未接通"
                    $('#feedback')[0].style.display = 'none'
                }else{
                    $('.feedbackp')[0].innerHTML = "1分钟后重试,仍失败再将号码提交网管"
                    $('#feedback')[0].style.display = 'none'
                }
            },
            error:function(){
                $('.feedbackp')[0].innerHTML = "服务器错误"
            }
	        })
	    }else{
	    	$.ajax({
	            url:"{{Url('admin/missCallInvalid')}}",
	            type:"post",
	            data:{matephone:$('#matephone')[0].innerHTML,
	                    _token:'{{csrf_token()}}'},
	            success:function(data){
                if(data == 1){
                	$('.feedbackp')[0].innerHTML = '';
                    $('#feedback')[0].style.display = 'inline'
                }else{
                    $('.feedbackp')[0].innerHTML = "1分钟后重试,仍失败再将号码提交网管"
                    $('#feedback')[0].style.display = 'none'
                }
            },
            error:function(){
                $('.feedbackp')[0].innerHTML = "服务器错误"
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
	        $('#pro1').attr('disabled','disabled')
	        $('input[name = yuyuetime]').attr('disabled','disabled')
	        $('input[name = yuyuemoney]').attr('disabled','disabled')
	        $('select[name = class1]').attr('disabled','disabled')
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
	        $('select[name = sec1]').attr('disabled',false)
	        $('select[name = kaoqi]').attr('disabled',false)
	    }
	})
//	var year =new  Date().getFullYear();
//	console.log(year)
//	var arr = [];
//	var k1 = year+"03";
//	var k2 = year+"04";
//	var k3 = year+"05";
//	var k4 = year+"06";
//	var k5 = year+"07";
//	var k6 = year+"09";
//	var k7 = year+"10";
//	var k8 = year+"11";
//	var k9 = year+"11";
//	var k10 = year+1+"考期";
//	arr.push(k1,k2,k3,k4,k5,k6,k7,k8,k9,k10)
//	console.log(arr)
//	for(var i = 0 ;i < arr.length;i++){
//	    $('select[name=kaoqi]')[0].innerHTML += "<"+"option value='"+arr[i]+"'"+">"+arr[i]+'<'+"/option"+">"
//	}
	
	//点击调录音

	
	//点击星星"{{asset('img/wujiaoxing4.svg')}}"
	var wujiaox = document.querySelectorAll('.wujiaox')
//console.log(wujiaox)
//	wujiaox.forEach(function(e,i){
//	    wujiaox[i].onclick = function(){
//	        if($(this)[0].style.background == 'url("{{asset('img/wujiaoxing3.svg')}}")'){
//	            for (var j = 0; j <= i; j++) {
//	                wujiaox[j].style.background = 'url("{{asset('img/wujiaoxing4.svg')}}")'
//	            }
//	        }else{
//	            for (var j = i; j < wujiaox.length; j++) {
//	                wujiaox[j].style.background = 'url("{{asset('img/wujiaoxing3.svg')}}")'
//	            }
//	        }
//	        var index = 0; 
//	        for(let h=0;h<wujiaox.length;h++){
//	            if(wujiaox[h].style.background == 'url("{{asset('img/wujiaoxing4.svg')}}")'){
//	                index += 1
//	            }
//	        }
//	        console.log(index)
//	        if(index == 0){
//	            $('#pingfen')[0].innerHTML = "";
//	        }else if(index == 1){
//	            $('#pingfen')[0].innerHTML = "E";
//	        }else if(index == 2){
//	            $('#pingfen')[0].innerHTML = "D";
//	        }else if(index == 3){
//	            $('#pingfen')[0].innerHTML = "C";
//	        }else if(index == 4){
//	            $('#pingfen')[0].innerHTML = "B";
//	        }else if(index == 5){
//	            $('#pingfen')[0].innerHTML = "A";
//	        }
//	    }
//	        
//	 })
	 
	 switch($('#pingfen')[0].innerHTML){
	    case "A":
	    for(let h=0;h<wujiaox.length;h++){wujiaox[h].style.background = 'url("{{asset('img/wujiaoxing4.svg')}}")';}
	        break;
	    case "B":
	    for(let h=0;h<wujiaox.length-1;h++){wujiaox[h].style.background = 'url("{{asset('img/wujiaoxing4.svg')}}")';}
	        break;
	    case "C":
	    for(let h=0;h<wujiaox.length-2;h++){wujiaox[h].style.background = 'url("{{asset('img/wujiaoxing4.svg')}}")';}
	        break;
	    case "D":
	    for(let h=0;h<wujiaox.length-3;h++){wujiaox[h].style.background = 'url("{{asset('img/wujiaoxing4.svg')}}")';}
	        break;
	    case "E":
	    for(let h=0;h<wujiaox.length-4;h++){wujiaox[h].style.background = 'url("{{asset('img/wujiaoxing4.svg')}}")';}
	        break;
	   };
	    $('.wujiaox').click(function(){
     dis();
 })
	   $('.promptx').click(function(){
            $('.modelprompt')[0].style.display = "none";
//          window.location.reload();//暂时关闭
        })
     
    $('.viewRecord').click(function(){
    	console.log(1);
        $(this).css('display','none');
        
        $.ajax({
            url:'{{Url("admin/getChats")}}',
            type:'get',
            dataType:'json',
            data:{did:'{{$data["did"]}}',mobile:'{{$data["mobile"]}}',project:'{{$data["project"]}}'},
            success:function(data){
            	console.log(data)
            	if(data.length>0){
            		$('#viewChat').css('display','block');
            	}
                for (var i = 0; i < data.length; i++) {
                    $('#viewChat')[0].innerHTML+=`<div class="span12 Advi-chat" style="margin:0;background: url('{{asset('img/HuaEr.png')}}') 11% 0px no-repeat;background-size:40px ; padding-right:10%;">

      <div style="width:99%;height:auto;border:1px solid rgb(202,202,202);padding-top:40px">
          <div class="luji">
              <p >跟访内容：`+data[i].chat_content+`</p>
              <p><span style="margin-right:40px">跟访时间：`+data[i].chat_time+`</span>通话录音：<button class="laba" style="padding-left:20px;padding-right:10px" data-file=`+data[i].record_file+`>点击下载</button></p>
          </div>
      </div>
  </div>`
                }
                	$('.laba').click(function(){
	    console.log($(this).attr('data-file'));
	    file = $(this).attr('data-file')
	    window.location.href='{{Url('admin/getRecordXW')}}'+'?file='+file;
	})
            },
            error:function(){

            }
        })
      })
      $('.laba').click(function(){
	    console.log($(this).attr('data-file'));
	    file = $(this).attr('data-file')
	    window.location.href='{{Url('admin/getRecordXW')}}'+'?file='+file;
	})
</script>
</html>