















if(typeof doyoo=='undefined' || !doyoo){
    var d_genId=function(){
    var id ='',ids='0123456789abcdef';
    for(var i=0;i<32;i++){ id+=ids.charAt(Math.floor(Math.random()*16)); } return id;
    };
    
    var schema='http';
    if(location.href.indexOf('https:') == 0){
        schema = 'https';
    }
    var doyoo={
    env:{
    secure:schema=='https',
    mon:schema+'://m2423.looyu.com/monitor',
    chat:schema+'://looyuoms2431.looyu.com/chat',
    file:schema+'://yun-static.soperson.com/131221',
    compId:20001925,
    confId:10102132,
    workDomain:'',
    vId:d_genId(),
    lang:'',
    fixFlash:0,
    fixMobileScale:0,
    subComp:32026,
    _mark:'b2162a8697235854a1b4387a80cf9ea957316a1e341a5ad22722f111a6227c8ba8bf97576ab70abd'
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
    
    , monParam:{
    index:1,
    preferConfig:0,
    
    title:'\u5728\u7ebf\u5ba2\u670d',
    text:'<span style="font-size:large;color:#ff6666;"><strong>2018\u5e74\u57fa\u91d1\u8003\u8bd5\u8003\u8bd5\u65f6\u95f4\u5b89\u6392\u5df2\u516c\u5e03\uff01</strong></span>',
    auto:-1,
    group:'10064681',
    start:'00:00',
    end:'24:00',
    mask:false,
    status:true,
    fx:0,
    mini:1,
    pos:0,
    offShow:0,
    loop:0,
    autoHide:0,
    hidePanel:0,
    miniStyle:'#0680b2',
    miniWidth:'340',
    miniHeight:'490',
    showPhone:0,
    monHideStatus:[0,0,0],
    monShowOnly:'',
    autoDirectChat:-1,
    allowMobileDirect:0,
    minBallon:0,
    chatFollow:1,
    backCloseChat:0,
    ratio:0
    }
    
    };
    
    if(typeof talk99Init == 'function'){
    talk99Init(doyoo);
    }
    if(!document.getElementById('doyoo_panel')){
    var supportJquery=typeof jQuery!='undefined';
    var doyooWrite=function(html){
    document.writeln(html);
    }
    
    doyooWrite('<div id="doyoo_panel"></div>');
    
    
    doyooWrite('<div id="doyoo_monitor"></div>');
    
    
    doyooWrite('<div id="talk99_message"></div>')
    
    doyooWrite('<div id="doyoo_share" style="display:none;"></div>');
    }
    }
    