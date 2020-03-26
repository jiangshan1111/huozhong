

























if(typeof doyoor=='undefined' || !doyoor){
    var d_genId=function(){
    var id ='',ids='0123456789abcdef';
    for(var i=0;i<32;i++){ id+=ids.charAt(Math.floor(Math.random()*16)); } return id;
    };
    
    var schema='http';
    if(location.href.indexOf('https:') == 0){
    schema = 'https';
    }
    var doyoor={
    env:{
    secure:schema=='https',
    mon:schema+'://m9100.talk99.cn/monitor',
    chat:schema+'://chat7123b.talk99.cn/chat',
    file:schema+'://aux.soperson.com/131221',
    compId:20001925,
    confId:10090457,
    workDomain:'',
    vId:d_genId(),
    lang:'',
    fixFlash:0,
    fixMobileScale:0,
    subComp:26689,
    _mark:'788b9fee7f8b2d03dac3d67122c51f20ebb9ee0b208c557301e153eee1692390c0d1b1823040fcac'
    },
    chat:{
    mobileColor:'',
    mobileHeight:80,
    mobileChatHintBottom:0,
    mobileChatHintMode:0,
    mobileChatHintColor:'',
    mobileChatHintSize:0,
    priorMiniChat:0
    }
    
    
    
    
    ,sniffer:{
    ids:'newyidong14anhui.jpg,newyidong14beijing.jpg,newyidong14chongqing.jpg,newyidong14fujian.jpg,newyidong14gansu.jpg,newyidong14guangdong.jpg,newyidong14guangxi.jpg,newyidong14guizhou.jpg,newyidong14hainan.jpg,newyidong14hebei.jpg,newyidong14heilongjiang.jpg,newyidong14henan.jpg,newyidong14hubei.jpg,newyidong14hunan.jpg,newyidong14jiangsu.jpg,newyidong14jiangxi.jpg,newyidong14jilin.jpg,newyidong14liaoning.jpg,newyidong14neimenggu.jpg,newyidong14ningxia.jpg,newyidong14qinghai.jpg,newyidong14shandong.jpg,newyidong14shanghai.jpg,newyidong14shanxi1.jpg,newyidong14shanxi3.jpg,newyidong14sichuan.jpg,newyidong14tianjin.jpg,newyidong14xinjiang.jpg,newyidong14xizang.jpg,newyidong14yunnan.jpg,newyidong14zhejiang.jpg,newyidong14.jpg,xf20180531.jpg,yidong12.jpg,xiaofangyidong11.jpg,xiaofangyidong131.jpg,xiaofangyidong132.jpg,xiaofangyidong133.jpg,20180410.png,7463_01.jpg,7463_02.jpg,7463_03.jpg,7463_04.jpg,111.jpg,222.jpg,333.jpg,444.jpg,555.jpg,666.jpg,777.jpg,header.jpg',
    gids:'10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929,10076929'
    }
    
    };
    
    if(typeof talk99Init == 'function'){
    talk99Init(doyoor);
    }
    if(!document.getElementById('doyoor_panel')){
    var supportJquery=typeof jQuery!='undefined';
    var doyoorWrite=function(html){
    document.writeln(html);
    }
    
    doyoorWrite('<div id="doyoor_panel"></div>');
    
    
    doyoorWrite('<div id="doyoor_monitor"></div>');
    
    
    doyoorWrite('<div id="talk99_message"></div>')
    
    doyoorWrite('<div id="doyoor_share" style="display:none;"></div>');
    doyoorWrite('<lin'+'k rel="stylesheet" type="text/css" href="'+schema+'://aux.soperson.com/131221/oms.css?181204"></li'+'nk>');
    doyoorWrite('<scr'+'ipt type="text/javascript" src="'+schema+'://aux.soperson.com/131221/oms.js?190802" charset="utf-8"></scr'+'ipt>');
    }
    }
    