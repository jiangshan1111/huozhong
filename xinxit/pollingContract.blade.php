<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>出纳合同</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('css/contract.css')}}">
    <link rel="stylesheet" href="{{asset('css/studentcontract.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('img/ico1.ico')}}"/>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/model.css')}}">
    <link rel="stylesheet" href="{{asset('css/model2.css')}}">
    <script src="{{asset('js/My97DatePicker/WdatePicker.js')}}"></script>
       <style>
           input[name = poll-content]{
                float: left;
                width:50%;
                height:36px;
                margin-top:4px;
                margin-left:3px
           }
           
           .stu-font{
               font-size: 16px;
           }
           .contract{
           	margin-top: 40px;
           }
           @media screen and (max-width:1000px){
           		h1{
                    font-size: 25px;
                }
                input[name = poll-content]{
                    width:30%;
                }
                .contract{
		           	margin-top: 0px;
		           }
                .stu-font{
                    font-size: 12px;
                }
           }
           .contract input,.modelstur input{
               padding: 0 !important;
           }
           input[type = button]{
               padding: 10px 20px !important;
           }
           .cachet>div{
               position:relative;
           }
           .cachet>div img{
               position: absolute;
               right:30px;
           }
           body,html{
               width:auto;
           }
       </style>
</head>
<body>
    @include('layout/head')
    <div class="contract container-fluid">
        <div class="contract-header" style="height:50px;background:url('{{asset('img/logo1.png')}}')  no-repeat;background-size:contain">

        </div>
        <div style="width:100%;margin:20px 0;height:40px">
            <span class="stu-font" style="width:22%;margin-top:4px;float:left;height:40px;line-height:40px">合同编号：</span>
            <input  style="" type="text" name="poll-content">
            <button class="poll-button" style="padding:5px 15px;margin-top:4px;height:40px;background: #42b983;
            border: none;
            color: white;cursor:pointer">查询</button>
            <button style="padding:5px 15px;height:40px;margin-top:4px;background: #42b983;
            border: none;
            color: white;cursor:pointer" class="plcnew">审核</button>
            <!--  -->
        </div>
        <h1>基金从业资格考试学员报名表</h1>
        <div class="contract-title" style="margin-top:20px">
        	<!--<p>{{isset($belong[0]->belong) ? $belong[0]->belong : ''}}</p>-->
        	<div>当前归属：<span class="Year" style="color: red;">{{isset($data[0]->belong) ? $data[0]->belong : ''}}</span></div>
             <!--<p>提示：*号为必填部分</p>
            <div>填写日期：<span class="Year"></span>年&nbsp;<span class="Month"></span>&nbsp;月&nbsp;<span class="Day"></span>&nbsp;日</div> -->
        </div>
        <table class="contract-body" style="border-collapse:collapse;border:1px solid black">
            <tr>
                <td>*姓名：</td>
                <td><!-- <input type="text"  name="name"> -->
                    {{isset($data[0]->stu_name) ? $data[0]->stu_name : ''}}</td>
                <td>*性别：</td>
                <td><!-- <input type="text"  name="sex"> -->
                    {{isset($data[0]->sex) ? $data[0]->sex : ''}}</td>
            </tr>
            <tr>
                <td>*邮寄地址：</td>
                <td><!-- <input type="text"  name="address"> -->
                    {{isset($data[0]->mail_address) ? $data[0]->mail_address : ''}}</td>
                <td>邮编：</td>
                <td><!-- <input type="text"  name="zip_code"> -->
                    {{isset($data[0]->mail_num) ? $data[0]->mail_num : ''}}</td>
            </tr>
            <tr>
                <td>*身份证号码：</td>
                <td><!-- <input type="text"  name="id_card">  -->
                    {{isset($data[0]->id_num) ? $data[0]->id_num : ''}}</td>
                <td>考期：</td>
                <td><!-- <input type="text"  name="exam_date"> -->
                    {{isset($data[0]->exam_date) ? $data[0]->exam_date : ''}}</td>
            </tr>
            <tr>
                <td>*手机号码：</td>
                <td> 
                	<!-- <input type="text"  name="phonenumber"> -->
                    {{isset($data[0]->mobile) ? $data[0]->mobile : ''}}</td>
                <td>微信号：</td>
                <td>
                	 <!-- <input type="text"  name="wxnumber"> -->
                    {{isset($data[0]->weixin) ? $data[0]->weixin : ''}}
                </td>
            </tr>
            <tr>
                <td>*Email：</td>
                <td>
                	 <!-- <input type="text"  name="email"> -->
                    {{isset($data[0]->email) ? $data[0]->email : ''}}
                </td>
                <td>QQ号码：</td>
                <td>
                	{{isset($data[0]->qq) ? $data[0]->qq : ''}}
                    <!-- <input type="text"  name="qqnumber"> -->
                </td>
            </tr>
            <tr>
                <td>*紧急联系人姓名：</td>
                <td>
                	{{isset($data[0]->ergent_people) ? $data[0]->ergent_people : ''}}
                    <!-- <input type="text"  name="jinjiname"> -->
                </td>
                <td>*紧急联系人手机：</td>
                <td>
                	{{isset($data[0]->ergent_mobile) ? $data[0]->ergent_mobile : ''}}
                    <!-- <input type="text"  name="jinjiphone"> -->
                </td>
            </tr>
            <tr>
                <td>*报名课程：</td>
                <td>
                	{{isset($data[0]->classType) ? $data[0]->classType : ''}}
                    <!-- <input type="text"  name="class"> -->
                </td>
                <td>*报名科目：</td>
                <td style="font-size: smaller;">
                    <!-- <input type="text"  name="subject"> -->
                    <?php 
                		if(isset($data[0]->project) && $data[0]->project == '基金项目'){
                			echo strpos($data[0]->section , '科一')>=0 ? '基金法律法规、职业道德与业务规范<br>' : '';
							echo strpos($data[0]->section , '科二')>=0 ? '证券投资基金基础知识<br>' : '';
							echo strpos($data[0]->section , '科三')>=0 ? '私募股权投资基金基础知识' : '';
                		}elseif(isset($data[0]->project) && $data[0]->project == '消防项目'){
                			echo '消防安全技术实务<br>
                			消防安全技术综合能力<br>
                			消防安全案例分析';
                		}
                	?>
                </td>
            </tr>
            <tr>
                <td>*培训费用：</td>
                <td>
                	{{isset($data[0]->price) ? $data[0]->price : ''}} {{isset($data[0]->sign_type) ? '('.$data[0]->sign_type.')' : ''}} 
                    <!-- <input type="text"  name="money"> -->
                </td>
                <td>*支付方式：</td>
                <td>
                	{{isset($data[0]->pay_way) ? $data[0]->pay_way : ''}}
                    <!-- <input type="text"  name="payment"> -->
                </td>
            </tr>
            <tr>
                <td >备注：</td>
                <td colspan="3" style="text-align:left">
                        {!!isset($data[0]->cnote) ? nl2br($data[0]->cnote) : ''!!}
                </td>
            </tr>
        </table>
        <div class="cachet" >
            <div>
                <span style="line-height:150px">学校盖章：</span>
                <span id="check1" style="margin-left:120px;vertical-align:middle;">{{isset($data[0]->sign_status)&&$data[0]->sign_status==1 ? '已审核' : '待审核'}}</span>
                <!--<img src="" class="schoolcachet" alt="" width="150px" height="150px" style="margin-left:120px;vertical-align:middle;">-->
            </div>
            <div style="overflow: hidden;position:relative">
                <span style="line-height:150px">学员签字：</span>
                <img src="{{isset($data[0]->signature) && !empty($data[0]->signature) ? asset('img/signature').DIRECTORY_SEPARATOR.$data[0]->signature : asset('img/signature').DIRECTORY_SEPARATOR.'officalnieyang.jpg'}}" alt="" width="150px" height="75px" style="position:absolute;margin-left:120px;margin-top:37.5px">
            </div>
        </div>
        <div class="contract-header" style="height:50px;background:url('{{asset("img/logo1.png")}}') no-repeat;background-size:contain">
            
        </div>
        <h1>基金从业资格考试报名协议</h1>
        <div style="overflow:hidden">
            <p style="float:right">——帮助您在火种教育更好地完成学业和收获能力</p>
        </div>
        
        <div class="xieyi">
            <p>亲爱的学员，您好！</p>
            <p style="margin-left:2em">火种教育全体同仁欢迎您选择在这里完成学业并考取证书。</p> 
            <p style="margin-left:2em">在您享受课程的过程中，以下守则遵守和共识的达成，对我们的服务是否及时和有效至关重要。</p>
            <p style="margin-left:2em">请您仔细阅读并签字确认，感谢您的理解和配合。</p>
            <div>
                <p style="font-size:18px"><b>一、班级化管理准则</b></p>
                关于校区：学校以网络直播的授课方式为主，可以随时听课，请大家自我约束并主动学习，请勿自误。直播课堂的学习需要在学员的电脑里安装专用软件，由校方教学运营专员协助学员安装。当您完成报名、培训学习费用缴纳后、学校将向学员发放直播课的会员权限。该权限只允许学员一人使用，不得转借或转让他人。一经发现，学校有权取消该学员听课资格，不承担任何违约责任。
            </div>
            <p style="font-size:18px"><b>校方联系方式：</b></p>
            <p>咨询服务微信：huozhongbanzhuren</p>
            <p>咨询服务邮箱：huozhongedu@126.com</p>
            <p>联系电话：010-60703671</p>
            <p style="font-size:18px"><b>二、学校提供的产品和服务</b></p>
            <p>{!!isset($data[0]->product) ? nl2br($data[0]->product) : ''!!}</p>
            <!--<p>1、在线直播主课程：全年滚动上课</p>
            <p>2、网课：直播结束后上传，可供随时观看</p>
            <p>3、考点练习：全年持续的课上练题</p>
            <p>4、模拟考试：题库系统模考答题及解析</p>
            <p>5、纸质教材：全套考试纸质版教材</p>
            <p>6、考前答疑：考试前夕名师直播解答学员疑问</p>
            <p>7、学校为学员提供上课培训的期限在学校盖章后计起，服务期为一年。</p>
            <p style="font-size:18px"><b>三、课程管理准则</b></p>-->
            <p><b style="margin-left:2em">1、开课：</b>学校为学员所报专业安排的第一次上课时间即为开课日期，插班学员款到日期即为开课日期，插班学员自行去网站观看开课前的课程；在无特殊情况下我们会严格依照原定开课计划履行课程服务。由于各种意外情况或不可抗力导致的无法按时开课的情况，我校将以QQ等方式通知学员，后期会安排补课，具体开课时间另行通知。</p>
            <p><b style="margin-left:2em">2、确认课程安排：</b>学员应及时主动接收微信并查看班主任通知的课表，上课时间及地点，按通知的信息上课。学员因事、病等自身原因不能前来上课，需至少提前6小时请假，请假的学员自行从学校网站观看课程。每个学员在培训期间请假的次数不能超过当期课程的30%。</p>
            <p><b style="margin-left:2em">3、上课纪律：</b>上课时请遵守课堂纪律。如有疑问，可课下咨询班主任或老师。如学员严重干扰课堂纪律，影响他人上课，班主任有权终止该学员继续听课。该情形达到3次，学校有权取消学员听课资格，学校不承担任何违约责任。</p>
            <p><b style="margin-left:2em">4、课程有效性：</b>学员在报名时选择相应的考期，考期结束后，学校会关停学员学习账号。若学员通过报名表中报名科目，则本协议终止。若学员未通过此次考试，则学员需向学校申请重修。</p>
            <p style="font-size:18px"><b>四、缴费标准及方式</b></p>
            <p style="margin-left:2em">学员应在本协议签订前将报名费一次性付清。缴费方式包括微信支付、公户汇款、支付宝支付等。</p>
            <p style="font-size:18px">
            	<b>{{isset($data[0]->is_refund)&&$data[0]->is_refund==1 ? '五、关于重修与退费' : '五、关于重修'}}</b>
            </p>
            <?php $arr = explode("\n",$data[0]->relearn_refund)?>
            	@foreach ($arr as $v)
            	<p><span style="margin-left:2em">{{$v}}</span></p>
            	@endforeach
            
            
            <p style="font-size:18px"><b>六、关于转班</b></p>
            <p><span style="margin-left:2em">学员开课</span>后7天内（含第七天），可以免费换为同等价格的其他课程；超过7天到不超过30天的，需要缴纳新课程的费用的10%作为手续费；超过30天但不超过60天的，需要缴纳新课程的费用的20%作为手续费；超过60天但不超过90天的，需要缴纳新课程的费用的30%作为手续费；超过90天但不超过120天的，需要缴纳新课程的费用的40%作为手续费；超过120天后学员不可以更换课程。更换课程不影响课程的有效期，即更换新课程后服务期仍从初始班名班型开始计算服务期。</p>
            <p style="font-size:18px"><b>七、关于冻结课程</b></p>
            <p><span style="margin-left:2em">学员</span>每次选定考期后，所选当期考期考试第一天（算作第一天）向前推30天（含第30天）之内不允许冻结课程。31天向前可以冻结，不会占用学习次数。</p>
            <p style="font-size:18px"><b>八、关于升班</b></p>
            <p><span style="margin-left:2em">学员</span>报名后随时可以进行班型升级，升级时需要补齐新班型与老班型之前的差价，服务期从新班型差价补齐开始计算；升级班型后将签订新的协议，本协议自动作废。</p>
            <p style="font-size:18px"><b>九、信息变更准则</b></p>
            <p><span style="margin-left:2em">如有</span>任何授课信息的变动，校方会以QQ/微信等形式通知各位学员，重要通知我们也会通过电话等方式提前6小时告知学员。请学员保证预留的联系方式准确无误。如学员的联系方式变更，请及时致电班主任进行修改确认。否则由该学员承担未及时通知的后果。</p>
            <p style="font-size:18px"><b>十、注意事项</b></p>
            <p><span style="margin-left:2em">1、为</span>防止内部讲课视频流出和押题密卷泄露，严禁学员私下建立QQ群和微信群，一经发现取消听课资格，有任何事情随时联系学员的班主任，班主任会一对一为学员解答。</p>
            <p><span style="margin-left:2em">2、学</span>校向学员发出的任何通知均可通过学员预留的任一联系方式发出，学员应及时收悉并回复确认，未及时确认的，通知发出后3小时视为送达。</p>
            <p><span style="margin-left:2em">3、学</span>员应对学校的商业信息（包括但不限于内部视频讲课、押题密卷、上课内容、教材等）负有保密义务。未经学校书面同意，学员不得泄露或用于其他用途，否则学校有权要求学员支付违约金10000元。</p>
            <p><span style="margin-left:2em">4、因</span>学员自身原因被取消听课资格或学员自己提出终止听课的，学校不退还学员任何费用。</p>
            <p><span style="margin-left:2em">5、因</span>不可抗拒（如自然灾害、政府行为、征收、征用、罢工、骚乱等）等特殊情形导致无法完成课程，出现学员退费情形的，学校按学员剩余课时退还学员报名费用。</p>
            <p><span style="margin-left:2em">6、</span>学员不得私自与班主任达成协议，以金钱或其他方式要求班主任为其上课或私自提供课程资料。一经发现，学校有权取消该学员听课资格并不予退还报名费。</p>
            <p><span style="margin-left:2em">7、任</span>何一方对本协议的内容或履行有争议的，应协商解决。协商不成任何一方均可向学校所在地法院起诉。</p>
            <p><span style="margin-left:2em">8、本</span>协议自学校盖章、学员签字后生效。本协议一式两份，学校、学员各持一份。</p>
        </div>
        <div class="cachet" >
                <div>
                    <span style="line-height:150px">学校盖章：</span>
                    <span id="check2" style="margin-left:120px;vertical-align:middle;">{{isset($data[0]->sign_status)&&$data[0]->sign_status==1 ? '已审核' : '待审核'}}</span>
                    <!--<img src="" class="schoolcachet" alt="" width="150px" height="150px" style="margin-left:120px;vertical-align:middle;">-->
                    <div>填写日期：<span>{{isset($data[0]->order_time) ? substr($data[0]->order_time,0,4) : ''}}</span>年&nbsp;<span>{{isset($data[0]->order_time) ? substr($data[0]->order_time,5,2) : ''}}</span>&nbsp;月&nbsp;<span>{{isset($data[0]->order_time) ? substr($data[0]->order_time,8,2) : ''}}</span>&nbsp;日</div>
                </div>
                <div style="overflow: hidden;position:relative">
                    <span style="line-height:150px">学员签字：</span>
                    <img  src="{{isset($data[0]->signature) && !empty($data[0]->signature) ? asset('img/signature').DIRECTORY_SEPARATOR.$data[0]->signature : asset('img/signature').DIRECTORY_SEPARATOR.'officalnieyang.jpg'}}" alt="" width="150px" height="75px" style="position:absolute;margin-left:120px;margin-top:37.5px">
                    <div>填写日期：<span>{{isset($data[0]->order_time) ? substr($data[0]->order_time,0,4) : ''}}</span>年&nbsp;<span>{{isset($data[0]->order_time) ? substr($data[0]->order_time,5,2) : ''}}</span>&nbsp;月&nbsp;<span>{{isset($data[0]->order_time) ? substr($data[0]->order_time,8,2) : ''}}</span>&nbsp;日</div>
                </div>
        </div>
        <div class="xieyidate" style="margin-bottom:40px">
                <!-- <div>填写日期：<span>2018</span>年&nbsp;<span>07</span>&nbsp;月&nbsp;<span>07</span>&nbsp;日</div>
                <div>填写日期：<span>2018</span>年&nbsp;<span>07</span>&nbsp;月&nbsp;<span>07</span>&nbsp;日</div> -->
         </div>
    </div> 
    <div class="modelphone1">
        <div class="modelphone1r">
        <div class="modelphone1-head">
            <p style="color:#42b983">提示</p>
            <button class="plcx">X</button>
        </div>
        <div class="modeldel-body">
                    
            <div class="monumber">
                    <p class="Auditp" style="color:#42b983;">msg</p>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
<!-- <script src="js/font.js"></script> -->
<!--<script src="{{asset('js/bootstrap.js')}}"></script>-->
<script>
    $('.plcx').click(function(){
        $('.modelphone1')[0].style.display = "none"
        $('.Auditp')[0].innerHTML = ""
    })
    var Href = location.href.split('?')[1];
    console.log(Href)
    if(Href == undefined){
        $('input[name = poll-content]').val('')
    }else{
        $('input[name = poll-content]').val(Href.split('=')[1])
    }
    $('.poll-button').click(function(){
        window.location.href = "{{Url('admin/pollingContract')}}?content="+$('input[name = poll-content]').val()
    })
    $('.plcnew').click(function(){
        var Href = location.href.split('?')[1].split('=')[1];
            console.log(1)
            $.ajax({
            url:'{{Url("admin/checkContract")}}',
            type:'post',
            data:{Href,teacher:$('select[name = contract_teacher] :selected').val(),_token:'{{csrf_token()}}',sign_time:$('input[name = in_time]').val()},
            success:function(data){
                if(data == 1){
                    $('.Auditp')[0].innerHTML = "审核成功"
//                  $('.schoolcachet')[0].src = "img/offical111.jpg"
//                  $('.schoolcachet')[1].src = "img/offical111.jpg"
						$('#check1').text('已审核').css('color','red');
						$('#check2').text('已审核').css('color','red');
	                    setTimeout(function(){
	                    $('.Auditp')[0].innerHTML = ""
                    },3000)
                }else if(data == 4){
                    $('.Auditp')[0].innerHTML = "未找到合同或班主任信息"
                    setTimeout(function(){
                    $('.Auditp')[0].innerHTML = ""
                    },3000)
                }
                else{
                    $('.Auditp')[0].innerHTML = "审核失败"
                    setTimeout(function(){
                    $('.Auditp')[0].innerHTML = ""
                    },3000)
                }
            },
            error:function(){
                console.log($('.schoolcachet'))
                
                $('.Auditp')[0].innerHTML = "服务器错误"
                setTimeout(function(){
                    $('.Auditp')[0].innerHTML = ""
                },3000)
            }
            })
            $('.modelphone1')[0].style.display = "block"
    })
</script>
</html>