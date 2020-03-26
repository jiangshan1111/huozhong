var prize_list = [
  {
    icon: "img/index111.png", // 奖品图片
    // count: 10, // 奖品数量
    name: "iPhone XR", // 奖品名称
    isPrize: 1 // 该奖项是否为奖品
  },
  {
    icon: "img/index112.png",
    // count: 5,
    name: "华为P30",
    isPrize: 1
  },
  {
    icon: "img/index113.png",
    // count: 10,
    name: "iPad mini",
    isPrize: 1
  },
  
  {
    icon: "img/iphone5515.png",
    // count: 5,
    name: "Mi充电宝",
    isPrize: 1
  },
  {
    icon: "img/index114.png",
    // count: 10,
    name: "投影仪",
    isPrize: 1
  },
  {
    icon: "img/index115.png",
    // count: 10,
    name: "蓝牙耳机",
    isPrize: 1
  },
  {
    icon: "img/iphone5.png",
    // count: 0,
    name: "返现500",
    isPrize: 1
  },
  {
    icon: "img/iphone6.png",
    // count: 10,
    name: "返现1000",
    isPrize: 1
  }
];
$(prize_list).each(function(index,el){
  $('.prize-list')[0].innerHTML += `
  <div class="prize-item">
  <div class="prize-pic">
                          <img src="`+el.icon+`">
                      </div>
                      <div class="prize-type">
                          `+el.name+`
                      </div></div>
  `
})
var lottery_ticket= 0,index,duihuan,time,toast_control= false, //抽奖结果弹出框控制器
hasPrize=false, //是否中奖
start_rotating_degree=0, //初始旋转角度
rotate_angle= 0, //将要旋转的角度
start_rotating_degree_pointer= 0, //指针初始旋转角度
rotate_angle_pointer=0, //指针将要旋转的度数
rotate_transition= "transform 6s ease-in-out", //初始化选中的过度属性控制
rotate_transition_pointer= "transform 12s ease-in-out";
$('.wheel-pointer').click(function(){
 $.ajax({
    url:'http://destine.huozhongedu.com/price/choujiangxf0321.php',
    //url:'http://localhost/luck/choujiang.php',
    type:'post',
    xhrFields:{
        withCredentials:true
    },
    // type:'get',
     dataType:'json',
     data:{mobile:phone},
     success:function(data){
   if(data.code == 410){
     $('.selfP').html(`报名班型不符合`);
     $('.wheel-pointer').text('(0)')
     $('.self').show();
     $('.toast-mask').show();
   }else if(data.code == 420){
     $('.selfP').html(`报名类型不符合`);
     $('.wheel-pointer').text('(0)')
     $('.self').show();
     $('.toast-mask').show();
   }else if(data.code == 460){
     $('.selfP').html(`报名科目不符合`);
     $('.wheel-pointer').text('(0)')
     $('.self').show();
     $('.toast-mask').show();
   }else if(data.code == 450){
     $('.selfP').html(`您已抽过奖了`);
     $('.wheel-pointer').text('(0)')
     $('.self').show();
     $('.toast-mask').show();
   }else if(data.code == 400){
     $('.selfP').html(`您还未报名`);
     $('.self').show();
     $('.toast-mask').show();
     $('.wheel-pointer').text('(0)')
   }else if(data.code == 430){
     $('.selfP').html(`您还未绑定手机号`);
     $('.self').show();
     $('.toast-mask').show();
     $('.wheel-pointer').text('(0)')
   }else{
     console.log(data)
     index = data.num;
    //  index = 2;
     duihuan=data.prize.prize_mark
     time = data.prize.prize_long;
     rotating();
     $('.wheel-pointer').text('(0)')
   }
   
     },
     error:function(){

     }
  
 })
// 指定每次旋转到的奖品下标

})
var click_flag = true;
function     rotating() {
  
if (!click_flag) return;
console.log(1)
var type = 0; // 默认为 0  转盘转动 1 箭头和转盘都转动(暂且遗留)
var during_time = 5; // 默认为1s
var random = Math.floor(Math.random() * 7);
var result_index = index ; // 最终要旋转到哪一块，对应prize_list的下标
var result_angle = [337.5, 292.5, 247.5, 202.5, 157.5, 112.5, 67.5, 22.5]; //最终会旋转到下标的位置所需要的度数
var rand_circle = 6; // 附加多转几圈，2-3
click_flag = false; // 旋转结束前，不允许再次触发
if (type == 0) {
  // 转动盘子
  var rotate_angle =
    start_rotating_degree +
    rand_circle * 360 +
    result_angle[result_index] -
    start_rotating_degree % 360;
  start_rotating_degree = rotate_angle;
  rotate_angle = "rotate(" + rotate_angle + "deg)";
  // // //转动指针
  // this.rotate_angle_pointer = "rotate("+this.start_rotating_degree_pointer + 360*rand_circle+"deg)";
  // this.start_rotating_degree_pointer =360*rand_circle;
  var that = this;
  $('.wheel-bg').css('transform',rotate_angle);
  $('.wheel-bg').css('transition',rotate_transition);
  // 旋转结束后，允许再次触发
  setTimeout(function() {
    click_flag = true;
  game_over();
  }, during_time * 1000 + 1500); // 延时，保证转盘转完
} else {
  //
}
}
function game_over() {
$('.toast').show();
$('.toast-mask').show();
hasPrize = prize_list[index].isPrize;
title = hasPrize? `恭喜您抽中:`+ this.prize_list[this.index].name+`<br>兑换码：`+duihuan+`<br>有效期：`+time: "未中奖";
$('.toast-title').html(title);

}
$('.close').click(function(){
  $('.toast').hide();
  $('.toast-mask').hide();
});
$('.toast-cancel').click(function(){
  $('.toast').hide();
  $('.toast-mask').hide();
});
$('.tastx').click(function(){
  $('.tast').hide();
  $('.toast-mask').hide();
});
$('.testx').click(function(){
  $('.test').hide();
  $('.toast-mask').hide();
});
$('.testgo').click(function(){
  $('.test').show();
  $('.toast-mask').show();
});
$('.self_record').click(function(){
$.ajax({
  url:'http://destine.huozhongedu.com/price/chaxunxf0321.php',
  //url:'http://localhost/luck/chaxun.php',
  type:'post',
  xhrFields:{
        withCredentials:true
    },
  dataType:'json',
  data:{mobile:phone},
  success:function(data){
    console.log(data)
    if(data == 0){
      $('.selfP').html("您还未抽中奖品");
    }
      $('.selfP').html(`奖品为：`+data[0].prize_type+`<br>中奖日期：`+data[0].prize_time+`<br>中奖手机号：`+data[0].prize_mobile);
  },
  error:function(){

  }
})
$('.self').show();
$('.toast-mask').show();
})
$('.selfx').click(function(){
$('.self').hide();
$('.toast-mask').hide();
});
var phone = "";
$('.tastgo').click(function(){
  $.ajax({
      url:'http://destine.huozhongedu.com/price/loginxf0321.php',
      //url:'http://localhost/luck/login.php',
      type:'post',
      xhrFields:{
        withCredentials:true
    },
      dataType:'json',
      data:{mobile:$('input[name = phone]').val()},
      success:function(data){
        console.log(data.code)
        if(data.code == 400){
          phone = $('input[name = phone]').val()
          $('input[name = phone]').val('您还未报名')
        }else{
          phone = $('input[name = phone]').val()
          $('input[name = phone]').val('绑定成功')
        }
        
      },
      error:function(){
//        $('.tastp').text('服务器错误')
      }
  })
  setTimeout(function(){
    $('.tast').hide();
  $('.toast-mask').hide();
  },2000)
  
})
$('.lottery_ticket').text(`今日免费抽奖次数：`+lottery_ticket);
