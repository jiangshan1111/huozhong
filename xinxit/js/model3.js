var htmlheight=document.documentElement.clientHeight;
var htmlwidth=document.documentElement.clientWidth;

if(htmlheight>800 && htmlwidth<700){
    $('.modal-container1')[0].style.height = htmlheight*0.7 + "px";
    // $('.modal-defa-button')[0].style.top = htmlheight*0.14 + "px";
};


//  $('targetbox')$('groupbox')$('sectorbox')$('projectbox')
//判断权限
var Targetbox= document.getElementsByClassName('targetbox');
var Groupbox= document.getElementsByClassName('groupbox');
var Sectorbox= document.getElementsByClassName('sectorbox');
var Projectbox= document.getElementsByClassName('projectbox');
var Armybox= document.getElementsByClassName('armybox');
$('.sel').click(function(){
    var va = $('.sel').val();
   if ( va == 776) {
    Targetbox[0].style.display = "block";
    Sectorbox[0].style.display = "block";
    Projectbox[0].style.display = "block";
    Armybox[0].style.display = "block";
    Groupbox[0].style.display = "none";
    
   }else if (va == 778){
    Targetbox[0].style.display = "block";
    Sectorbox[0].style.display = "none";
    Projectbox[0].style.display = "block";
    Armybox[0].style.display = "block";
    Groupbox[0].style.display = "none";
   }else if (va == 777){
    Targetbox[0].style.display = "block";
    Sectorbox[0].style.display = "none";
    Projectbox[0].style.display = "block";
    Armybox[0].style.display = "block";
    Groupbox[0].style.display = "none";
   }  else if (va == 775 || va == 774){
    Targetbox[0].style.display = "block";
    Sectorbox[0].style.display = "block";
    Projectbox[0].style.display = "block";
    Armybox[0].style.display = "block";
    Groupbox[0].style.display = "block";
   } else if (va == 554 || va == 665){
    Targetbox[0].style.display = "none";
    Sectorbox[0].style.display = "none";
    Projectbox[0].style.display = "block";
    Armybox[0].style.display = "none";
    Groupbox[0].style.display = "none";
   }else{
    Targetbox[0].style.display = "none";
    Sectorbox[0].style.display = "none";
    Projectbox[0].style.display = "none";
    Armybox[0].style.display = "none";
    Groupbox[0].style.display = "none";
   }
})

//判断账户
var regacc =  /^[0-9a-zA-Z_]{6,15}$/;
console.log($('input[name=accouttext]')[0].style.color);
$('input[name=accouttext]').on('keyup',function(){
    if(!regacc.test($('input[name=accouttext]').val())){
        $('input[name=accouttext]')[0].style.color = "red";
    }else{
        $('input[name=accouttext]')[0].style.color = "green";
        
    }
})

//判断密码
var regpwd =  /^[0-9a-zA-Z_]{6,}$/;
console.log($('input[name=accouttext]')[0].style.color);
$('input[name=pwdtext]').on('keyup',function(){
    if(!regpwd.test($('input[name=pwdtext]').val())){
        $('input[name=pwdtext]')[0].style.color = "red";
    }else{
        $('input[name=pwdtext]')[0].style.color = "green";
        
    }
    if($('input[name=conpwdtext]').val() != $('input[name=pwdtext]').val()){
        $('input[name=conpwdtext]')[0].style.color = "red";
    }else{
        $('input[name=conpwdtext]')[0].style.color = "green";
        
    }
})

//确认密码
$('input[name=conpwdtext]').on('keyup',function(){
    if($('input[name=conpwdtext]').val() != $('input[name=pwdtext]').val()){
        $('input[name=conpwdtext]')[0].style.color = "red";
    }else{
        $('input[name=conpwdtext]')[0].style.color = "green";
        
    }
})
//$('modal-default-button1').click(function(){
//  console.log(1)
//})
//判断目标
var reg =  /^[0-9]*$/;
console.log(reg.test('1234呵呵'))
console.log($('input[name=accouttext]')[0].style.color);
$('input[name=targettext]').on('keyup',function(){
    if(!reg.test($('input[name=targettext]').val())){
        $('input[name=targettext]')[0].style.color = "red";
    }else{
        $('input[name=targettext]')[0].style.color = "green";
        
    }
})
//提交按钮可用 
$(document).mousemove(function(){
    var va =  $('.sel').val()
    console.log(va)
    if( $('input[name=conpwdtext]')[0].style.color == "green" && 
    $('input[name=pwdtext]')[0].style.color == "green" && 
    $('input[name=accouttext]')[0].style.color == "green" && 
    $('.sel').val() != 0 &&
    
    $('input[name=nametext]').val() != ""){
        if ( va == 776){
                if($('input[name=targettext]')[0].style.color == "green"
                && $('select[name=sectortext]').val()!=""
                && $('select[name=armytext]').val()!=""
                && $('select[name=projecttext]').val()!=""){
                    console.log(1)
                    $('.modal-default-button1').attr('disabled',false);
                    $('.createSip').attr('disabled',false);
                    }else{
                    $('.modal-default-button1').attr('disabled',"disabled");
                    $('.createSip').attr('disabled',"disabled");
                }
        }
            
        else if (va == 777){
            if($('input[name=targettext]')[0].style.color == "green"
            &&  $('select[name=projecttext]').val()!=""
            && $('select[name=armytext]').val()!=""){
                console.log(1)
                $('.modal-default-button1').attr('disabled',false);
                    $('.createSip').attr('disabled',false);
                    }else{
                    $('.modal-default-button1').attr('disabled',"disabled");
                    $('.createSip').attr('disabled',"disabled");
            }
       }else if (va == 778){
        if($('input[name=targettext]')[0].style.color == "green"
        &&  $('select[name=projecttext]').val()!=""
        && $('select[name=armytext]').val()!=""){
            console.log(1)
            $('.modal-default-button1').attr('disabled',false);
                $('.createSip').attr('disabled',false);
                }else{
                $('.modal-default-button1').attr('disabled',"disabled");
                $('.createSip').attr('disabled',"disabled");
        }
   }
            else if (va == 775 || va == 774){
                if($('input[name=targettext]')[0].style.color == "green"
                && $('select[name=sectortext]').val()!=""
                && $('select[name=projecttext]').val()!=""
                && $('select[name=grouptext]').val()!=""
                && $('select[name=armytext]').val()!=""){
                    console.log(1)
                    $('.modal-default-button1').attr('disabled',false);
                    $('.createSip').attr('disabled',false);
                    }else{
                    $('.modal-default-button1').attr('disabled',"disabled");
                    $('.createSip').attr('disabled',"disabled");
                }
           } else if (va == 554 || va == 665){
            if( $('select[name=projecttext]').val()!=""){
                console.log(1)
                $('.modal-default-button1').attr('disabled',false);
                    $('.createSip').attr('disabled',false);
                    }else{
                    $('.modal-default-button1').attr('disabled',"disabled");
                    $('.createSip').attr('disabled',"disabled");
            }
           }else{
                $('.modal-default-button1').attr('disabled',false);
                    $('.createSip').attr('disabled',false);
           }
    }else{
        $('.modal-default-button1').attr('disabled',"disabled");
                    $('.createSip').attr('disabled',"disabled");
    }
})

//流转过程
  $('.circulnew').click(function(){
      $('.modelcircul')[0].style.display = "block"
  })
  $('.circulx').click(function(){
      $('.modelcircul')[0].style.display = "none";
      $('input[name = searchnumber]').innerHTML = '';
  })
//var regnumber = /^1[3|4|5|7|8][0-9]{9}$/;
//
//$('input[name = searchnumber]').on('keyup',function(){
//    if(regnumber.test($('input[name = searchnumber]').val())){
//        $('input[name=searchnumber]')[0].style.color = "green";
//    }else{
//        $('input[name=searchnumber]')[0].style.color = "red";
//    }
//})
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
 	
 	//个人信息
 	 $('.simplenew').click(function(){
      $('.modelsimple')[0].style.display = "block"
	  })
	  $('.simplex').click(function(){
	      $('.modelsimple')[0].style.display = "none";
	      $('input[name = resetpwd]').innerHTML = '';
	  })
	  $("input[name=header]").change(function(){   
	      console.log($("input[name=simplehead]"))
	      var file = this.files[0];
	      console.log(file.size)
	      var maxsize = 1*1024*1024
	          if(file.size > maxsize){
	              $('.simplep')[0].innerHTML = "图片尺寸超过1MB 请另选图片";
	                              setTimeout(function(){
	                                  $('.simplep')[0].innerHTML = "";
	                              },3000);
	              
	              $('.simplego').attr('disabled','disabled');
	              return
	          }else if (window.FileReader) {    
	              
	                  var reader = new FileReader();    
	                  reader.readAsDataURL(file);    
	                  //监听文件读取结束后事件    
	                  reader.onloadend = function (e) {
	                      console.log(e.target)
	                      
	                  $(".headimg").attr("src",e.target.result);
	                  $('.simplego').attr('disabled',false);    //e.target.result就是最后的路径地址
	                  };    
	              } 
	      });

	//修改密码
	$('.revisenew').click(function(){
            console.log(1)
            $('.modelrevise')[0].style.display = "block";
        })
        $('.revisex').click(function(){
            $('.modelrevise')[0].style.display = "none";
        })
        $('.revisewen').click(function(){
            $('.revisehid')[0].style.display = "block";
             $(this)[0].style.display = "none";
        })
        $('.revisenone').click(function(){
            $('.revisehid')[0].style.display = "none";
            $('.revisewen')[0].style.display = "inline-block";
        })
        var regrevise =  /^[0-9a-zA-Z_]{6,}$/;
        $('input[name=oldpwd]').on('keyup',function(){
            if(!regrevise.test($('input[name=oldpwd]').val())){
                $('input[name=oldpwd]')[0].style.color = "red";
            }else{
                $('input[name=oldpwd]')[0].style.color = "green";
                
            }
        })
        $('input[name=newpwd]').on('keyup',function(){
            if(!regrevise.test($('input[name=newpwd]').val())){
                $('input[name=newpwd]')[0].style.color = "red";
            }else{
                $('input[name=newpwd]')[0].style.color = "green";
                
            }
            if($('input[name=againnewpwd]').val() != $('input[name=newpwd]').val()){
                $('input[name=againnewpwd]')[0].style.color = "red";
            }else{
                $('input[name=againnewpwd]')[0].style.color = "green";
                
            }
        })
        $('input[name=againnewpwd]').on('keyup',function(){
            if($('input[name=againnewpwd]').val() != $('input[name=newpwd]').val()){
                $('input[name=againnewpwd]')[0].style.color = "red";
            }else{
                $('input[name=againnewpwd]')[0].style.color = "green";
                
            }
        })
        
        //重置密码
		 $('.resetx').click(function(){
	            $('.modelreset')[0].style.display = "none";
	            $('input[name = resetname]').innerHTML = '';
	        })
	        $('.resetwen').click(function(){
	            $('.resethid')[0].style.display = "block";
             	$(this)[0].style.display = "none";
	        })
	        $('.resetnone').click(function(){
	            $('.resethid')[0].style.display = "none";
            	$('.resetwen')[0].style.display = "inline-block";
	        })
	        
		//账户移除
		$('.delx').click(function(){
            $('.modeldel')[0].style.display = "none";
            $('input[name = delname]').innerHTML = '';
        })
        $('.delwen').click(function(){
            $('.delhid')[0].style.display = "block";
            $(this)[0].style.display = "none";
        })
        $('.delnone').click(function(){
            $('.delhid')[0].style.display = "none";
            $('.delwen')[0].style.display = "inline-block";
        })
        
		//目标设定
		  var regtarget =  /^[0-9]*$/;
        $('input[name=targetmoney]').on('keyup',function(){
            if(regtarget.test($('input[name=targetmoney]').val())){
                $('input[name=targetmoney]')[0].style.color = "green";
            }else{
                $('input[name=targetmoney]')[0].style.color = "red";
            }
        })
        $('.targetx').click(function(){
            $('.modeltarget')[0].style.display = "none";
            $('input[name = targetname]').innerHTML = '';
        })
        $('.targetwen').click(function(){
            $('.targethid')[0].style.display = "block";
            $(this)[0].style.display = "none";
        })
        $('.targetnone').click(function(){
            $('.targethid')[0].style.display = "none";
            $('.targetwen')[0].style.display = "inline-block";
        })
        
		//数据分配
		$('.allotx').click(function(){
            $('.modelallot')[0].style.display = "none";
        })
        $('.allotwen').click(function(){
            $('.allothid')[0].style.display = "block";
            $(this)[0].style.display = "none";
        })
        $('.allotnone').click(function(){
            $('.allothid')[0].style.display = "none";
            $('.allotwen')[0].style.display = "inline-block";
        })
        
		//数据总览
		 $('select[name=bematedata]').click(function(){
            $('.dropdow-menu')[2].parentNode.childNodes[3].style.display = "none";
        })