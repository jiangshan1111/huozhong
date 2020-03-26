var prize_list = [
  {
    icon: "img/iphone3.png", // 奖品图片
    // count: 10, // 奖品数量
    name: "泰国青草药膏", // 奖品名称
    isPrize: 1 // 该奖项是否为奖品
  },
  {
    icon: "img/iphone4.png",
    // count: 5,
    name: "泰国驱蚊水",
    isPrize: 1
  },
  {
    icon: "img/iphone5.png",
    // count: 10,
    name: "冰凉贴一包",
    isPrize: 1
  },
  
  {
    icon: "img/iphone6.png",
    // count: 5,
    name: "奇强内衣皂",
    isPrize: 1
  },
  {
    icon: "img/iphone7.png",
    // count: 10,
    name: "现金10元",
    isPrize: 1
  },
  {
    icon: "img/iphone1.png",
    // count: 10,
    name: "卫生巾",
    isPrize: 1
  },
  {
    icon: "img/iphone8.png",
    // count: 0,
    name: "泰国洗脸皂",
    isPrize: 1
  },
  {
    icon: "img/iphone2.png",
    // count: 10,
    name: "抽纸一包",
    isPrize: 1
  }
];
/*<div class="prize-pic">
                          <img src="`+el.icon+`">
                      </div> */
$(prize_list).each(function(index,el){
  $('.prize-list')[0].innerHTML += `
  <div class="prize-item">
  
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
var timeLuck = true;
$('.wheel-pointer').click(function(){
  if(timeLuck == true){
    var str ='';
    var num =parseInt(Math.random(0,1)*75);
    if(num>=0 && num <5){
      str = 0;
    }else if(num>=5 && num <10){
      str = 1
    }else if(num>=10 && num <15){
      str = 2
    }else if(num>=15 && num <23){
      str = 3
    }else if(num>=23 && num <31){
      str = 4
    }else if(num>=31 && num <41){
      str = 5
    }else if(num>=41 && num <56){
      str = 6
    }else if(num>=56 && num <76){
      str = 7
    }
      console.log(num)
      // timeLuck = false
    index = str;
    duihuan=2;
    time = 2;
    rotating();
    
  }
  
//指定每次旋转到的奖品下标
})
var click_flag = true;
function getNowFormatDate(date) {
  var seperator1 = "-";
  var seperator2 = ":";
  var month = date.getMonth() + 1;
  var strDate = date.getDate();
  var hour = date.getHours();
  var minute = date.getMinutes();
  var second = date.getSeconds();
  if (month >= 1 && month <= 9) {
      month = "0" + month;
  }
  if (strDate >= 0 && strDate <= 9) {
      strDate = "0" + strDate;
  }
  if (hour >= 0 && hour <= 9) {
      hour = "0" + hour;
  }
  if (minute >= 0 && minute <= 9) {
      minute = "0" + minute;
  }
  if (second >= 0 && second <= 9) {
      second = "0" + second;
  }
  var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
          + " " + hour + seperator2 + minute
          + seperator2 + second;
  return currentdate;
  }
function     rotating() {
  
if (!click_flag) return;
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
  timeLuck = true;
$('.toast').show();
$('.toast-mask').show();
hasPrize = prize_list[index].isPrize;
title = hasPrize? `恭喜您抽中:`+ this.prize_list[this.index].name+`<br>抽奖时间：`+getNowFormatDate(new Date()): "未中奖";
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

