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
    chat:schema+'://looyuoms2432.looyu.com/chat',
    file:schema+'://yun-static.soperson.com/131221',
    compId:20001925,
    confId:10097299,
    workDomain:'',
    vId:d_genId(),
    lang:'sc',
    fixFlash:0,
    fixMobileScale:0,
    subComp:26699,
    _mark:'b2162a86972358547425bef7562fa3d057316a1e341a5ad2053e27e7193e00de7cc176b06725ca22'
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
    
    title:'',
    text:'',
    auto:-1,
    group:'10064681',
    start:'00:00',
    end:'24:00',
    mask:false,
    status:true,
    fx:0,
    mini:1,
    pos:0,
    offShow:1,
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
    minBallon:1,
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
    doyooWrite('<lin'+'k rel="stylesheet" type="text/css" href="'+schema+'://yun-static.soperson.com/131221/oms.css?171107"></li'+'nk>');
    doyooWrite('<scr'+'ipt type="text/javascript" src="'+schema+'://yun-static.soperson.com/131221/oms.js?181103" charset="utf-8"></scr'+'ipt>');
    }
    }

    