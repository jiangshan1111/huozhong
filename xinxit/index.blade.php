<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>火种教育天网</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/jquery.easy-pie-chart.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" media="screen">
           <link rel="stylesheet" href="{{asset('css/index.css')}}">
           <link rel="stylesheet" href="{{asset('css/model2.css')}}">
           <link rel="stylesheet" href="{{asset('css/model.css')}}">
             <link rel="icon" type="image/x-icon" href="{{asset('img/ico1.ico')}}"/>
           
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="{{asset('vendors/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
        <style type="text/css">
            #span3{
                margin-left: 0;
                margin-right: 1.59%;
            }
            @keyframes didi{
                0%{
                    filter:alpha(opacity=0);  
                    -moz-opacity:0; 
                    -khtml-opacity: 0;  
                    opacity: 0;  
                }
                50%{
                    filter:alpha(opacity=100);  
                    -moz-opacity:1;  
                    -khtml-opacity: 1;  
                    opacity: 1;
                }
            }
            .didi{
                /*animation: didi 1s linear infinite;*/
            }
            .beizhu{
                height: 40px;
            }
        </style>
    </head>
    
    <body>      
        @include('layout/head')
        <script src="{{asset('js/jquery.cookie.js')}}"></script>
        <script type="text/javascript">
//          $(function () {
//              var str = window.location.href;
//              str = str.substring(str.lastIndexOf("/") + 1);
//              if ($.cookie(str)) {
//              
//              $("html,body").animate({ scrollTop: $.cookie(str) }, 500);
//              }
//              else {
//              }
//          })
//          $(window).scroll(function () {
//              var str = window.location.href;
//              str = str.substring(str.lastIndexOf("/") + 1);
//              var top = $(document).scrollTop();
//              $.cookie(str, top, { path: '/' });
//              return $.cookie(str);
//          })
            //引入jquery.js和cookie.js,跳转到上一页面的指定位置
                    window.onbeforeunload=function(){
            var scrollPos;    
            if (typeof window.pageYOffset != 'undefined') {
               scrollPos = window.pageYOffset;
            }
            else if (typeof document.compatMode != 'undefined' &&
                 document.compatMode != 'BackCompat') {
               scrollPos = document.documentElement.scrollTop;
            }
            else if (typeof document.body != 'undefined') {
               scrollPos = document.body.scrollTop;
            }
            localStorage.scroll="scrollTop="+scrollPos; 
        }
        window.onload=function()
        { 
            if(localStorage.scroll.match(/scrollTop=([^;]+)(;|$)/)!=null){
                var arr=localStorage.scroll.match(/scrollTop=([^;]+)(;|$)/); 
                document.documentElement.scrollTop=parseInt(arr[1]);
                document.body.scrollTop=parseInt(arr[1]);
            }
        }
        </script>
        <div class="container-fluid">
                
                <!--/span-->
                
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="block-content collapse in simple">
                                <div class="span3" style="position:relative;overflow:hidden">                      
                                    
                                    <ul class="simple-ul span9" id="simple-ul" style="margin-left: 0;font-size: ;">
                                        <li>当月实际绩效:<span style="color: red;"class="month_money"></span></li>
                                        <li>今日成单/流水:<span style="color: red;">{{$achieve_info[0]->today_sign_num}}/{{$achieve_info[0]->today_sign_money}}</span></li>
                                       
                                         <li>本月成单/流水:<span style="color: red;" class="month_money">{{$achieve_info[0]->month_sign_num}}/{{$achieve_info[0]->month_sign_money}}</span></li>
                                        <li>目标/完成率：<span style="color: red;" class="tar"></span></li>
                                    </ul>
                                    <div style="position:absolute;top:50%;right:0;margin-top:-60px;text-align:center">
                                        <img src="{{asset('img/header')}}/{{Session::get('header')}}" width="50px" style="height:50px" alt="">
                                        <p style="margin-top:10px"><a href="{{Url('admin/document')}}">#用户文档</a></p>
                                    </div>
                                </div>
                                <div class="span6">
                                    <img src="{{asset('img/activity/')}}/{{$activity[0]->gname}}" alt="" style="width:100%;height:100%">
                                </div>
                                <div class="span3">
                                    <div class="block-content collapse in">
                                        <div class="span12">
                                            <p style="text-align:center">排行榜</p>
                                            <div class="rank-button1">小组排名：{{$count1}}</div>
                                            <div class="rank-button2">部门排名：{{$count2}}</div>
                                              <table class="table table1" >
                                              <thead>
                                                <tr>
                                                  <th style="text-align: center;">编号</th>
                                                  <th style="text-align: center;">姓名</th>
                                                  <th style="text-align: center;">金额</th>
                                                  <th style="text-align: center;">小组</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                
                                                @foreach($rank1 as $index=>$val )
                                                    @if($index<5)
                                                        <tr>
                                                          <td>{{$index+1}}</td>
                                                          <td>{{mb_substr($val->user_name,0,3)}}</td>
                                                          <td>￥{{$val->money}}</td>
                                                          <td>{{Session::get('group')}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                               
                                              </tbody>
                                            </table>
                                            <table class="table table2" style="display:none">
                                                <thead>
                                                <tr>
                                                  <th style="text-align: center;">编号</th>
                                                  <th style="text-align: center;">姓名</th>
                                                  <th style="text-align: center;">金额</th>
                                                  <th style="text-align: center;">部门</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($rank2 as $index=>$val )
                                                    @if($index<5)
                                                        <tr>
                                                          <td>{{$index+1}}</td>
                                                          <td>{{mb_substr($val->user_name,0,3)}}</td>
                                                          <td>￥{{$val->money}}</td>
                                                          <td>{{Session::get('sector')}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="hiddan block-content collapse in">
                                <div class="span3" id="hiddan">
                                    <div>
                                        <div class="didi"></div>
                                        <p><span>{{$achieve_info[0]->today_alloc}}</span>/<span>{{$achieve_info[0]->today_visit}}</span>个</p>
                                        <p>首咨/回访</p>
                                    </div>
                                </div>
                                <div class="span3" id="hiddan">
                                        <div>
                                        <div class=""></div>
                                        
                                            <p>个数:<span class="call1">{{$calls[0]->callout != 0 ? $calls[0]->callout : 0}}</span>/<span class="call2">{{$calls[0]->connects}}</span></p>
                                            <p>时长:<span class="call3">{{$calls[0]->duration != 0 ? $calls[0]->duration : 0}}</span>秒</p>
                                        </div>
                                </div>
                                <div class="span3" id="hiddan">
                                        <div>
                                        <div class=""></div>
                                        
                                            <p><span>{{$chance[0]->today_chance}}</span>/<span id="miss">{{$chance[0]->today_miss}}</span></p>
                                            <p>今日机会/未处理</p>
                                        </div>
                                </div>
                                <div class="span3" id="hiddan">
                                        <div>
                                        <div class=""></div>
                                        
                                            <p><span>{{$chance[0]->month_chance}}</span></p>
                                            <p>总机会</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    <div class="row-fluid">
                        <!-- block --><p class="bematep" style="color:#42b983;">{{Session::get('uuname')!=null ? '当前归属人：' : ''}}<span>{{Session::get('uuname')}}</span></p>
                        <div class="block">
                            <div class="hehe navbar navbarb navbar-inner block-header"style="cursor:pointer">
                                <div class="muted pull-left">首咨</div>
                               
                                <button class="retract">收起</button>
                                <button>已处理</button>
                                <button>未处理</button> 
                                <a href="{{Url('admin/moveDataIn')}}" class="aa" style="margin-top:10px">点击迁入数据</a>
                            </div>
                            <div class="block-content collapse in"  style="display:block;">
                                <div class="row-fluid padd-bottom">
                                  
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                       
                        <div class="block">
                            <div class="hehe navbar navbar-inner block-header" style="cursor:pointer">
                                <div class="muted pull-left">当周回访</div>
                                <button class="retract">收起</button>
                                <button>已处理</button>
                                <button>未处理</button>
                            </div>
                            <div class="block-content collapse in"  style="display:block;">
                                <div class="row-fluid padd-bottom">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hehe navbar navbar-inner block-header" style="cursor:pointer">
                                <div class="muted pull-left">跨期回访</div>
                                <button class="retract">收起</button>
                                <button>已处理</button>
                                <button>未处理</button>
                            </div>
                            <div class="block-content collapse in" style="display:block;">
                                <div class="row-fluid padd-bottom">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hehe navbar navbar-inner block-header" style="cursor:pointer">
                                <div class="muted pull-left">即将过期</div>
                                <button class="retract">收起</button>
                                <button>已处理</button>
                                <button>未处理</button>
                            </div>
                            <div class="block-content collapse in"  style="display:block;">
                                <div class="row-fluid padd-bottom">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="hehe navbar navbar-inner block-header" style="cursor:pointer"> 
                                <div class="muted pull-left">公海数据</div>
                                <button class="retract">收起</button>
                                <button>已处理</button>
                                <button>未处理</button>
                            </div>
                            <div class="block-content collapse in"  style="display:block;">
                                <div class="row-fluid padd-bottom">
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
          
        </div>
       
        <script>
            function toPercent(point){
            var str=Number(point*100).toFixed(2);
            str+="%";
            return str;
        }
        var point={{$achieve_info[0]->month_sign_money}}/{{Session::get('target')}};
        
        $('.tar')[0].innerHTML = {{Session::get('target')}}+'/'+toPercent(point);
            function getWeek(date){
    var nowTime = new Date(date).getTime() ; 
    var day = new Date(date).getDay();
    var oneDayLong = 24*60*60*1000 ; 


    var MondayTime = nowTime - (day-1)*oneDayLong  ; 
    var SundayTime =  nowTime + (7-day)*oneDayLong ; 


    var monday = new Date(MondayTime);
    var sunday = new Date(SundayTime);
    
    monday.setHours(0);
    monday.setMinutes(0);
    monday.setSeconds(0);
    sunday.setHours(23);
    sunday.setMinutes(59);
    sunday.setSeconds(59);
    return [new Date(monday).getTime(),new Date(sunday).getTime()];
            }
var firstChat = [],
    thisWeek = [],
    lastWeek = [],
    willRemove = [],
    publicData = [],
    total = {!!$data_info!!};
//  total= JSON.parse(total)
    console.log(total)
    total = total.sort(function(a,b){
                if(a.get_time>b.get_time){
                    return -1
                }else{
                    return 1
                }
            })
    todayDate = new Date(new Date(new Date().toLocaleDateString()).getTime());
    if(localStorage.psdid == undefined){
        localStorage.psdid=""
    }
    if(localStorage.psdidh == undefined){
        localStorage.psdidh=""
    }
    var adid ;
    if('{{Session::get('project')}}' == '消防升级'){
        adid= localStorage.psdidh.substring(1).split(',')
    }else{
        adid= localStorage.psdid.substring(1).split(',')
    }
    for (i=0; i < total.length; i++) { 
    data = total[i];
    if(adid.indexOf(data.did+'')<0){
        if(data.chat_content == null){
        data.chat_content = ""
    }
    data['first_record'] = data['chat_content']=='' ? data['first_record'] : data['chat_content'];
    if(data['last_consult_time']=='1992-08-02 00:00:00'){
        firstChat.push(data)
    }else{
        if(new Date(data['next_consult_time']).getTime()<new Date(todayDate).getTime() || new Date(data['next_consult_time']).getTime()>new Date(todayDate).getTime()+86400000){
        continue;
        }
        if(data['get_time'] > data['last_consult_time']){
        publicData.push(data)
        }else{
        if(new Date().getTime() - new Date(data['last_consult_time']).getTime() > 259200000){
        willRemove.push(data)
        }else{
        
        if(new Date(data['alloc_time']).getTime() >= getWeek(new Date())[0] && new Date(data['alloc_time']).getTime() <= getWeek(new Date())[1]){
        thisWeek.push(data);
        }else{
        lastWeek.push(data)
        }
        }
        }    
    }
    }
    
    }
    for (var i = 0; i < $('.padd-bottom').length; i++) {
        $('.padd-bottom')[i].innerHTML=``
    }
for (var i = 0; i < firstChat.length; i++) {
        $('.padd-bottom')[0].innerHTML+=`<div class="span3" id="span3" >
            <div class="thumbnail Avdi">
          <h4 style="padding: 10px 0;margin: 0;background:greenyellow;" class="jump" data-mydid="`+firstChat[i].did+`">`+firstChat[i].book_reason+`次未接通<span style="font-size:14px;margin-left:3px">`+firstChat[i].project+`</span></h4>
           <a  class="phone">`+firstChat[i].mobile+`</a> <span style="float:right">乐语在线</span>
           <p><b>分配时间：</b><span>`+firstChat[i].alloc_time+`</span></p>
           <p><b>获取时间：</b><span>`+firstChat[i].get_time+`</span></p>
           <p><b>预约跟访时间：</b><span>`+firstChat[i].next_consult_time+`</span></p>
           <p><b>最后反馈时间：</b><span>`+firstChat[i].last_mark_time+`</span></p>
           <p><b>反馈呼叫未通数：</b><span>`+firstChat[i].book_reason+`</span>次</p>
           <button>已分配</button>
            </div>
`
    }
    for (var i = 0; i < thisWeek.length; i++) {
        if(thisWeek[i].chat_content !=""){
            chat = thisWeek[i].chat_content;
        }else{
            chat = thisWeek[i].first_record;
        }
        $('.padd-bottom')[1].innerHTML+=`<div class="span3" id="span3">
            <div class="thumbnail yuyue ">
                   <h4 style="padding: 10px 0;margin: 0;background:lightseagreen;" class="jump"  data-mydid="`+thisWeek[i].did+`">`+thisWeek[i].stu_name+`<span style="font-size:14px;margin-left:30px">`+thisWeek[i].project+`</span></h4>
                    <a  class="phone">`+thisWeek[i].mobile+`</a> <span style="float:right">乐语在线</span>
                    <p><b>预约跟访时间：</b><span>`+thisWeek[i].next_consult_time+`</span></p>
                     <p><b>分配时间：</b><span>`+thisWeek[i].alloc_time+`</span></p>
           <p><b>获取时间：</b><span>`+thisWeek[i].get_time+`</span></p>
                     <p><b>反馈呼叫未通数：</b><span>`+thisWeek[i].book_reason+`</span>次</p>
                      <p style="border-bottom:1px dashed rgb(221,221,221);padding-bottom:10px"><b>最后跟访时间：</b><span>`+thisWeek[i].last_consult_time+`</span></p>
                    <p style="position:relative;overflow:hidden;line-height:30px" class="beizhupa"><b>聊天备注：</b><button style="bottom:0" class="openbeizhu" data-mydid="`+thisWeek[i].did+`">展开</button></p>
                     </div>
                     
         </div>
`
    }
    for (var i = 0; i < lastWeek.length; i++) {
        if(lastWeek[i].chat_content !=""){
            chat = lastWeek[i].chat_content;
        }else{
            chat = lastWeek[i].first_record;
        }
        $('.padd-bottom')[2].innerHTML+=`<div class="span3" id="span3">
            <div class="thumbnail yuyue ">
                   <h4 style="padding: 10px 0;margin: 0;background:deepskyblue;" class="jump"  data-mydid="`+lastWeek[i].did+`">`+lastWeek[i].stu_name+`<span style="font-size:14px;margin-left:30px">`+lastWeek[i].project+`</span></h4>
                    <a  class="phone">`+lastWeek[i].mobile+`</a> <span style="float:right">乐语在线</span>
                    <p><b>预约跟访时间：</b><span>`+lastWeek[i].next_consult_time+`</span></p>
                     <p><b>分配时间：</b><span>`+lastWeek[i].alloc_time+`</span></p>
           <p><b>获取时间：</b><span>`+lastWeek[i].get_time+`</span></p>
                     <p><b>反馈呼叫未通数：</b><span>`+lastWeek[i].book_reason+`</span>次</p>
                      <p style="border-bottom:1px dashed rgb(221,221,221);padding-bottom:10px"><b>最后跟访时间：</b><span>`+lastWeek[i].last_consult_time+`</span></p>
                    <p style="position:relative;overflow:hidden;line-height:30px" class="beizhupa"><b>聊天备注：</b><button style="bottom:0" class="openbeizhu" data-mydid="`+lastWeek[i].did+`">展开</button></p>
                     </div>
                     
         </div>`
    }
    for (var i = 0; i < willRemove.length; i++) {
        if(willRemove[i].chat_content !=""){
            chat = willRemove[i].chat_content;
        }else{
            chat = willRemove[i].first_record;
        }
        $('.padd-bottom')[3].innerHTML+=`<div class="span3" id="span3">
            <div class="thumbnail yuyue ">
                   <h4 style="padding: 10px 0;margin: 0;background:indianred;" class="jump"  data-mydid="`+willRemove[i].did+`">`+willRemove[i].stu_name+`<span style="font-size:14px;margin-left:30px">`+willRemove[i].project+`</span></h4>
                    <a  class="phone">`+willRemove[i].mobile+`</a> <span style="float:right">乐语在线</span>
                    <p><b>预约跟访时间：</b><span>`+willRemove[i].next_consult_time+`</span></p>
                     <p><b>分配时间：</b><span>`+willRemove[i].alloc_time+`</span></p>
           <p><b>获取时间：</b><span>`+willRemove[i].get_time+`</span></p>
                     <p><b>反馈呼叫未通数：</b><span>`+willRemove[i].book_reason+`</span>次</p>
                      <p style="border-bottom:1px dashed rgb(221,221,221);padding-bottom:10px"><b>最后跟访时间：</b><span>`+willRemove[i].last_consult_time+`</span></p>
                    <p style="position:relative;overflow:hidden;line-height:30px" class="beizhupa"><b>聊天备注：</b><button style="bottom:0" class="openbeizhu" data-mydid="`+willRemove[i].did+`">展开</button></p>
                     </div>
                     
         </div>`
    }
    for (var i = 0; i < publicData.length; i++) {
        if(publicData[i].chat_content !=""){
            chat = publicData[i].chat_content;
        }else{
            chat = publicData[i].first_record;
        }
        $('.padd-bottom')[4].innerHTML+=`<div class="span3" id="span3">
            <div class="thumbnail yuyue ">
                   <h4 style="padding: 10px 0;margin: 0;background:burlywood;" class="jump"  data-mydid="`+publicData[i].did+`">`+publicData[i].stu_name+`<span style="font-size:14px;margin-left:30px">`+publicData[i].project+`</span></h4>
                    <a  class="phone">`+publicData[i].mobile+`</a> <span style="float:right">乐语在线</span>
                    <p><b>预约跟访时间：</b><span>`+publicData[i].next_consult_time+`</span></p>
                     <p><b>分配时间：</b><span>`+publicData[i].alloc_time+`</span></p>
           <p><b>获取时间：</b><span>`+publicData[i].get_time+`</span></p>
                     <p><b>反馈呼叫未通数：</b><span>`+publicData[i].book_reason+`</span>次</p>
                      <p style="border-bottom:1px dashed rgb(221,221,221);padding-bottom:10px"><b>最后跟访时间：</b><span>`+publicData[i].last_consult_time+`</span></p>
                    <p style="position:relative;overflow:hidden;line-height:30px" class="beizhupa"><b>聊天备注：</b><button style="bottom:0" class="openbeizhu" data-mydid="`+publicData[i].did+`">展开</button></p>
                     </div>
                     
         </div>`
    }
    
    $('.openbeizhu').click(function(){
                did = $(this).attr('data-mydid');
                par = $(this).parent()
                par.css('display','none')
                $.ajax({
                    url:'{{Url("admin/getLastChat")}}',
                    type:'get',
                    data:{did:did},
                    dataType:'json',
                    success:function(data){
                        chat = ""
                        if(data[0].chat_content == null){
                            if(data[0].first_record == null){
                                chat = "无"
                            }else{
                                chat=data[0].first_record
                            }
                        }else{
                            chat=data[0].chat_content
                        }
                        console.log(chat)
//                      that.css('display','none')
                        par.before(`<div class="beizhu"><b>备注：</b>`+chat+`</div>`)
                    },
                    error:function(){

                    }
                })
            })
    
            //查询绩效(咨询师,其他权限如果没有流水都为0)
            var achieve;
            var money;
            
            money = {{$achieve_info[0]->month_sign_money}}
          switch ("{{Session::get('project')}}") {
           case '消防项目':
            if(money==0){
             achieve = 0;
            }else if(money<=30000){
             achieve = 4000+0.1*money;
            }else if(money<=50000) {
             achieve = 4000+0.11*money;
            }else if(money<=70000) {
             achieve = 4000+0.12*money;
            }else if(money>70000) {
             achieve = 4000+0.13*money;
            }else{
             achieve = 0;
            }
            break;
           case '基金项目':
            if(money==0){
             achieve = 0;
            }else if(money<=15000) {
             achieve = 4000+0.08*money;    
            }else if(money<=30000) {
             achieve = 4000+0.1*money;
            }else if(money<=45000) {
             achieve = 4000+0.12*money;
            }else if(money<=70000) {
             achieve = 4000+0.14*money;
            }else if(money<=100000) {
             achieve = 4000+0.17*money;
            }else if(money>100000) {
             achieve = 4000+0.2*money;
            }else{
             achieve = 0;
            }
            break;
           default:
             achieve = 0;
            break;
          }
            $('.month_money')[0].innerHTML = achieve
            //5分钟刷新一次时长
            function time(){
                console.log(1)
                $.ajax({
                    url:'{{Url("admin/getCallTime")}}',
                    type:'post',
                    data:{_token:'{{csrf_token()}}'},
                    dataType:'json',
                    success:function(data){
                        $('.call1')[0].innerHTML = data[0]
                        $('.call3')[0].innerHTML = data[1]
                        $('.call2')[0].innerHTML = data[2]
                    },
                    error:function(){
                    }
                })
            }
             setInterval(function(){
                 time()
             },60000)//1分钟刷一次
            
            function tishi(){//查询未处理工单数
            $.ajax({
                url:'{{Url("admin/getDataNum")}}',
                type:'get',
                data:{},
                success:function(data){
                    if(data != 0){
                        $('#miss')[0].innerHTML = data;
                        $('.didi')[0].style.animation = "didi 1s linear 0s infinite normal none running"
                        $('audio')[0].currentTime = 0;
                        $('audio')[0].play()     
                    }else{
                        $('#miss')[0].innerHTML = data;
                        $('.didi')[0].style.animation = "none"
                        $('audio')[0].currentTime = 0;
                        $('audio')[0].pause()   
                    }
                },
                error:function(){
                    
                }
            })
        }
        for(var i=0;i<$('.retract').length;i++){
            $('.retract')[i].innerText = "收起"
        }
        $('.retract').click(function(){
            if(this.parentNode.parentNode.children[1].style.display == "block"){
                console.log(1)
                this.parentNode.parentNode.children[1].style.display = "none";
                $(this)[0].innerText = "展开"
            }else{
                this.parentNode.parentNode.children[1].style.display = "block";
                $(this)[0].innerText = "收起"
            }
            
        })
        console.log(localStorage.data_mydid)
         //点击名片进入数据反馈页
        $('.jump').click(function(){
//          var localStorage.data
            event.stopPropagation();
            console.log(this.getAttribute('data-mydid'));
            localStorage.data_mydid = this.getAttribute('data-mydid');
            window.location.href = '{{Url("admin/dataFeedBack")}}'+"?data="+this.getAttribute('data-mydid');
        })
            // 电话
var phone;
$('.phone').click(function(e){
    if(e && e.stopPropagation) {  
    　　e.stopPropagation();   
        } else {  
    　　window.event.cancelBubble = true;  
    }  
    console.log($(this)[0].innerHTML) 
    phone = $(this)[0].innerHTML
    $('.modelphonein')[0].style.display='block';
    $('#phoneingo')[0].style.display='inline';
    $('.phoneinx')[1].style.display='inline';
})
$('.phoneinx').click(function(){
    $('.modelphonein')[0].style.display='none';
    $('.phoneinp')[0].innerHTML = '';
})
$('#phoneingo').click(function(){
    if('{{Session::get("sector")}}' == "消防四部" || '{{Session::get("sector")}}' == "消防二部"){
            localStorage.check = false
        }else if('{{Session::get("sector")}}' == "消防一部" || '{{Session::get("sector")}}' == "消防三部"|| '{{Session::get("sector")}}' == "消防五部" || '{{Session::get("sector")}}' == "消防六部"){
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
        
        $('.rank-button1').click(function(){
            $('.table2')[0].style.display = "none";
            $('.table1')[0].style.display = "block";
        })
        $('.rank-button2').click(function(){
            $('.table1')[0].style.display = "none";
            $('.table2')[0].style.display = "block";
        })
        
         $('.rank-button1').click(function(){
                this.style.background = "white";
                $('.rank-button2')[0].style.background = "rgb(239,239,239)";
            })
            $('.rank-button2').click(function(){
                this.style.background = "white";
                $('.rank-button1')[0].style.background = "rgb(239,239,239)";
            });
        </script>
    </body>

</html>