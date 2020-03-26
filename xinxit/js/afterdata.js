var reg1=/^([\u4e00-\u9fa5]){2,10}$/;
var reg12= /^[\u4E00-\u9FA5A-Za-z]+$/;
var reg13= /^[\u4E00-\u9FA5A-Za-z0-9]+$/;
var reg14= /^[A-Za-z0-9]+$/;
var reg2 = /^[0-9]{6,15}$/;
var reg3 = /^[0-9]{2,15}$/;
var regkd = /^[0-9.]{0,}$/
var regnum = /^\d{0,}$/
var reg21=/^\d{6}$/;
var reg444=/^\d{9}$/;
var reg4441=/^\d{8}$/;
var reg4444=/^1[3|4|5|7|8|9][0-9]{9}$/;
var reg4442=/^(D|E|S|P)\d{8}$/;
var regtel = /^([0-9]{3,4})?[0-9]{7,8}$/;
var reg4443=/^(H|M)\d{10}$/;
var reg44 =  /(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
var regsh = /^[A-Za-z0-9]{15,20}$/;
var reg4445=/^\d{11,12}$/;
var regemail = /^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
$('input[name=stu_name]').on('keyup',function(){
    if(reg12.test($('input[name=stu_name]').val())||$('input[name=stu_name]').val()==""){
       $('input[name=stu_name]')[0].style.color = "black";
    }else{
       $('input[name=stu_name]')[0].style.color = "red";
    }
})
$('input[name=email]').on('keyup',function(){
    if(regemail.test($('input[name=email]').val())||$('input[name=email]').val()==""){
       $('input[name=email]')[0].style.color = "black";
    }else{
       $('input[name=email]')[0].style.color = "red";
    }
})
$('input[name=mobile]').on('keyup',function(){
    if(reg4444.test($('input[name=mobile]').val())||$('input[name=mobile]').val()==""){
       $('input[name=mobile]')[0].style.color = "black";
    }else{
       $('input[name=mobile]')[0].style.color = "red";
    }
})
$('input[name=class_mobile]').on('keyup',function(){
    if(reg4444.test($('input[name=class_mobile]').val())||$('input[name=class_mobile]').val()==""){
       $('input[name=class_mobile]')[0].style.color = "black";
    }else{
       $('input[name=class_mobile]')[0].style.color = "red";
    }
})
$('input[name=id_num]').on('keyup',function(){
    if(reg44.test($('input[name=id_num]').val())||$('input[name=id_num]').val()==""){
       $('input[name=id_num]')[0].style.color = "black";
    }else{
       $('input[name=id_num]')[0].style.color = "red";
    }
})
// $('input[name=weixin]').on('keyup',function(){
//     if(reg44.test($('input[name=weixin]').val())||$('input[name=weixin]').val()==""){
//        $('input[name=weixin]')[0].style.color = "black";
//     }else{
//        $('input[name=weixin]')[0].style.color = "red";
//     }
// })
function stu(){
    for (let i = 0; i < $('#stu_info input').length; i++) {
        if($('#stu_info input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('input[name=exam_one]').on('keyup',function(){
    if(regnum.test($('input[name=exam_one]').val())){
       $('input[name=exam_one]')[0].style.color = "black";
    }else{
       $('input[name=exam_one]')[0].style.color = "red";
    }
})
$('input[name=exam_two]').on('keyup',function(){
    if(regnum.test($('input[name=exam_two]').val())){
       $('input[name=exam_two]')[0].style.color = "black";
    }else{
       $('input[name=exam_two]')[0].style.color = "red";
    }
})
$('input[name=exam_three]').on('keyup',function(){
    if(regnum.test($('input[name=exam_three]').val())){
       $('input[name=exam_three]')[0].style.color = "black";
    }else{
       $('input[name=exam_three]')[0].style.color = "red";
    }
})
function examc(){
    for (let i = 0; i < $('#examc_info input').length; i++) {
        if($('#examc_info input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('input[name=in_type]').on('keyup',function(){
    if(reg1.test($('input[name=in_type]').val())){
       $('input[name=in_type]')[0].style.color = "black";
    }else{
       $('input[name=in_type]')[0].style.color = "red";
    }
})
$('input[name=in_ns_num]').on('keyup',function(){
    if(regsh.test($('input[name=in_ns_num]').val())){
       $('input[name=in_ns_num]')[0].style.color = "black";
    }else{
       $('input[name=in_ns_num]')[0].style.color = "red";
    }
})
$('input[name=in_phone]').on('keyup',function(){
    if(reg4445.test($('input[name=in_phone]').val())){
       $('input[name=in_phone]')[0].style.color = "black";
    }else{
       $('input[name=in_phone]')[0].style.color = "red";
    }
})
$('input[name=in_bank]').on('keyup',function(){
    if(reg13.test($('input[name=in_bank]').val())){
       $('input[name=in_bank]')[0].style.color = "black";
    }else{
       $('input[name=in_bank]')[0].style.color = "red";
    }
})
$('input[name=in_bank_num]').on('keyup',function(){
    if(reg14.test($('input[name=in_bank_num]').val())){
       $('input[name=in_bank_num]')[0].style.color = "black";
    }else{
       $('input[name=in_bank_num]')[0].style.color = "red";
    }
})
function bill(){
    for (let i = 0; i < $('#bill_info input').length; i++) {
        if($('#bill_info input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('input[name=keyi_once_money]').on('keyup',function(){
    if(regnum.test($('input[name=keyi_once_money]').val())){
       $('input[name=keyi_once_money]')[0].style.color = "black";
    }else{
       $('input[name=keyi_once_money]')[0].style.color = "red";
    }
})
$('input[name=keer_once_money]').on('keyup',function(){
    if(regnum.test($('input[name=keer_once_money]').val())){
       $('input[name=keer_once_money]')[0].style.color = "black";
    }else{
       $('input[name=keer_once_money]')[0].style.color = "red";
    }
})
$('input[name=kesan_once_money]').on('keyup',function(){
    if(regnum.test($('input[name=kesan_once_money]').val())){
       $('input[name=kesan_once_money]')[0].style.color = "black";
    }else{
       $('input[name=kesan_once_money]')[0].style.color = "red";
    }
})
$('input[name=keyi_second_money]').on('keyup',function(){
    if(regnum.test($('input[name=keyi_second_money]').val())){
       $('input[name=keyi_second_money]')[0].style.color = "black";
    }else{
       $('input[name=keyi_second_money]')[0].style.color = "red";
    }
})
$('input[name=keer_second_money]').on('keyup',function(){
    if(regnum.test($('input[name=keer_second_money]').val())){
       $('input[name=keer_second_money]')[0].style.color = "black";
    }else{
       $('input[name=keer_second_money]')[0].style.color = "red";
    }
})
$('input[name=kesan_second_money]').on('keyup',function(){
    if(regnum.test($('input[name=kesan_second_money]').val())){
       $('input[name=kesan_second_money]')[0].style.color = "black";
    }else{
       $('input[name=kesan_second_money]')[0].style.color = "red";
    }
})
$('input[name=keyi_third_money]').on('keyup',function(){
    if(regnum.test($('input[name=keyi_third_money]').val())){
       $('input[name=keyi_third_money]')[0].style.color = "black";
    }else{
       $('input[name=keyi_third_money]')[0].style.color = "red";
    }
})
$('input[name=keer_third_money]').on('keyup',function(){
    if(regnum.test($('input[name=keer_third_money]').val())){
       $('input[name=keer_third_money]')[0].style.color = "black";
    }else{
       $('input[name=keer_third_money]')[0].style.color = "red";
    }
})
$('input[name=kesan_third_money]').on('keyup',function(){
    if(regnum.test($('input[name=kesan_third_money]').val())){
       $('input[name=kesan_third_money]')[0].style.color = "black";
    }else{
       $('input[name=kesan_third_money]')[0].style.color = "red";
    }
})
function kaoqi(){
    for (let i = 0; i < $('#kaoqi_info input').length; i++) {
        if($('#kaoqi_info input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('input[name=xf_first_subsidy]').on('keyup',function(){
    if(regnum.test($('input[name=xf_first_subsidy]').val())){
       $('input[name=xf_first_subsidy]')[0].style.color = "black";
    }else{
       $('input[name=xf_first_subsidy]')[0].style.color = "red";
    }
})
$('input[name=xf_second_subsidy]').on('keyup',function(){
    if(regnum.test($('input[name=xf_second_subsidy]').val())){
       $('input[name=xf_second_subsidy]')[0].style.color = "black";
    }else{
       $('input[name=xf_second_subsidy]')[0].style.color = "red";
    }
})
$('input[name=xf_third_subsidy]').on('keyup',function(){
    if(regnum.test($('input[name=xf_third_subsidy]').val())){
       $('input[name=xf_third_subsidy]')[0].style.color = "black";
    }else{
       $('input[name=xf_third_subsidy]')[0].style.color = "red";
    }
})
$('input[name=finall_subsidy]').on('keyup',function(){
    if(regnum.test($('input[name=finall_subsidy]').val())){
       $('input[name=finall_subsidy]')[0].style.color = "black";
    }else{
       $('input[name=finall_subsidy]')[0].style.color = "red";
    }
})
$('input[name=finall_back_money]').on('keyup',function(){
    if(regnum.test($('input[name=finall_back_money]').val())){
       $('input[name=finall_back_money]')[0].style.color = "black";
    }else{
       $('input[name=finall_back_money]')[0].style.color = "red";
    }
})
function xf(){
    for (let i = 0; i < $('#xf_info input').length; i++) {
        if($('#xf_info input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('input[name=finall_back_money]').on('keyup',function(){
    if(regnum.test($('input[name=finall_back_money]').val())){
       $('input[name=finall_back_money]')[0].style.color = "black";
    }else{
       $('input[name=finall_back_money]')[0].style.color = "red";
    }
})
function xf(){
    for (let i = 0; i < $('#xf_info input').length; i++) {
        if($('#xf_info input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('#add_form0 input[name=sm_free]').on('keyup',function(){
    if(regkd.test($('#add_form0 input[name=sm_free]').val())){
       $('#add_form0 input[name=sm_free]')[0].style.color = "black";
    }else{
       $('#add_form0 input[name=sm_free]')[0].style.color = "red";
    }
})
$('#add_form0 input[name=sm_courier_number]').on('keyup',function(){
    if(reg14.test($('#add_form0 input[name=sm_courier_number]').val())){
       $('#add_form0 input[name=sm_courier_number]')[0].style.color = "black";
    }else{
       $('#add_form0 input[name=sm_courier_number]')[0].style.color = "red";
    }
})
$('#add_form2 input[name=sm_free]').on('keyup',function(){
    if(regkd.test($('#add_form2 input[name=sm_free]').val())){
       $('#add_form2 input[name=sm_free]')[0].style.color = "black";
    }else{
       $('#add_form2 input[name=sm_free]')[0].style.color = "red";
    }
})
$('#add_form2 input[name=sm_courier_number]').on('keyup',function(){
    if(reg14.test($('#add_form2 input[name=sm_courier_number]').val())){
       $('#add_form2 input[name=sm_courier_number]')[0].style.color = "black";
    }else{
       $('#add_form2 input[name=sm_courier_number]')[0].style.color = "red";
    }
})
function xadd(){
    for (let i = 0; i < $('#add_info input').length; i++) {
        if($('#add_info input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('input[name=jijinhuanke]').on('keyup',function(){
    if(regkd.test($('input[name=jijinhuanke]').val())){
       $('input[name=jijinhuanke]')[0].style.color = "black";
    }else{
       $('input[name=jijinhuanke]')[0].style.color = "red";
    }
})
function huanke(){
    for (let i = 0; i < $('div[data-hidden="基金换科补费"] input').length; i++) {
        if($('div[data-hidden="基金换科补费"] input')[i].style.color == 'red'){
            return false;
        }
    }
    return true;
}
$('input[name=sc_oneScore]').on('keyup',function(){
    if(regkd.test($('input[name=sc_oneScore]').val())){
       $('input[name=sc_oneScore]')[0].style.color = "black";
    }else{
       $('input[name=sc_oneScore]')[0].style.color = "red";
    }
})
$('input[name=sc_twoScore]').on('keyup',function(){
    if(regkd.test($('input[name=sc_twoScore]').val())){
       $('input[name=sc_twoScore]')[0].style.color = "black";
    }else{
       $('input[name=sc_twoScore]')[0].style.color = "red";
    }
})
$('input[name=sc_threeScore]').on('keyup',function(){
    if(regkd.test($('input[name=sc_threeScore]').val())){
       $('input[name=sc_threeScore]')[0].style.color = "black";
    }else{
       $('input[name=sc_threeScore]')[0].style.color = "red";
    }
})
$('input[name=sc_oneAttend]').on('keyup',function(){
    if(regkd.test($('input[name=sc_oneAttend]').val())){
       $('input[name=sc_oneAttend]')[0].style.color = "black";
    }else{
       $('input[name=sc_oneAttend]')[0].style.color = "red";
    }
})
$('input[name=sc_twoAttend]').on('keyup',function(){
    if(regkd.test($('input[name=sc_twoAttend]').val())){
       $('input[name=sc_twoAttend]')[0].style.color = "black";
    }else{
       $('input[name=sc_twoAttend]')[0].style.color = "red";
    }
})
$('input[name=sc_threeAttend]').on('keyup',function(){
    if(regkd.test($('input[name=sc_threeAttend]').val())){
       $('input[name=sc_threeAttend]')[0].style.color = "black";
    }else{
       $('input[name=sc_threeAttend]')[0].style.color = "red";
    }
})
$('input[name=apaly_price]').on('keyup',function(){
    if(regkd.test($('input[name=apaly_price]').val())){
       $('input[name=apaly_price]')[0].style.color = "black";
    }else{
       $('input[name=apaly_price]')[0].style.color = "red";
    }
})
function jiangxuejin(){
    for (let i = 0; i < $('div[data-hidden="奖学金"] input').length; i++) {
        console.log($('div[data-hidden="奖学金"] input')[i].style.color)
        if($('div[data-hidden="奖学金"] input')[i].style.color == 'red'){
            return false;
        } 
    }
    return true;
}
$('input[name=bp_price]').on('keyup',function(){
    if(regkd.test($('input[name=bp_price]').val())){
       $('input[name=bp_price]')[0].style.color = "black";
    }else{
       $('input[name=bp_price]')[0].style.color = "red";
    }
})
function tuifei(){
    for (let i = 0; i < $('div[data-hidden="退费"] input').length; i++) {
        console.log($('div[data-hidden="退费"] input')[i].style.color)
        if($('div[data-hidden="退费"] input')[i].style.color == 'red'){
            return false;
        } 
    }
    return true;
}
$('#order_form input[name=stu_name]').on('keyup',function(){
    if(reg12.test($('#order_form input[name=stu_name]').val())){
        $('#order_form input[name=stu_name]')[0].style.color = "black";
    }else{
        $('#order_form input[name=stu_name]')[0].style.color = "red";
    }
})
$('#order_form input[name=mobile]').on('keyup',function(){
    if(reg4444.test($('#order_form input[name=mobile]').val())){
        $('#order_form input[name=mobile]')[0].style.color = "black";
    }else{
        $('#order_form input[name=mobile]')[0].style.color = "red";
    }
})
$('#order_form input[name=email]').on('keyup',function(){
    if(regemail.test($('#order_form input[name=email]').val())){
        $('#order_form input[name=email]')[0].style.color = "black";
    }else{
        $('#order_form input[name=email]')[0].style.color = "red";
    }
})
$('#order_form input[name=mail_num]').on('keyup',function(){
    if(reg21.test($('#order_form input[name=mail_num]').val())){
        $('#order_form input[name=mail_num]')[0].style.color = "black";
    }else{
        $('#order_form input[name=mail_num]')[0].style.color = "red";
    }
})
$('#order_form input[name=id_num]').on('keyup',function(){
    if(reg44.test($('#order_form input[name=id_num]').val())){
        $('#order_form input[name=id_num]')[0].style.color = "black";
    }else{
        $('#order_form input[name=id_num]')[0].style.color = "red";
    }
})
$('#order_form input[name=class_mobile]').on('keyup',function(){
    if(reg4444.test($('#order_form input[name=class_mobile]').val())){
        $('#order_form input[name=class_mobile]')[0].style.color = "black";
    }else{
        $('#order_form input[name=class_mobile]')[0].style.color = "red";
    }
})
$('#order_form input[name=ergent_people]').on('keyup',function(){
    if(reg13.test($('#order_form input[name=ergent_people]').val())){
        $('#order_form input[name=ergent_people]')[0].style.color = "black";
    }else{
        $('#order_form input[name=ergent_people]')[0].style.color = "red";
    }
})
$('#order_form input[name=ergent_mobile]').on('keyup',function(){
    if(reg4445.test($('#order_form input[name=ergent_mobile]').val())){
        $('#order_form input[name=ergent_mobile]')[0].style.color = "black";
    }else{
        $('#order_form input[name=ergent_mobile]')[0].style.color = "red";
    }
})
$('#order_form input[name=price]').on('keyup',function(){
    if(regkd.test($('#order_form input[name=price]').val())){
        $('#order_form input[name=price]')[0].style.color = "black";
    }else{
        $('#order_form input[name=price]')[0].style.color = "red";
    }
})
function ordero(){
    for (let i = 0; i < $('#order_form input').length; i++) {
        console.log($('#order_form input')[i].style.color)
        if($('#order_form input')[i].style.color == 'red'){
            return false;
        } 
    }
    return true;
}