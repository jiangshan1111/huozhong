// $(function() {
//     Side Bar Toggle
//     $('.hide-sidebar').click(function() {
// 	  $('#sidebar').hide('fast', function() {
// 	  	$('#content').removeClass('span9');
// 	  	$('#content').addClass('span12');
// 	  	$('.hide-sidebar').hide();
// 	  	$('.show-sidebar').show();
// 	  });
// 	});

// 	$('.show-sidebar').click(function() {
// 		$('#content').removeClass('span12');
// 	   	$('#content').addClass('span9');
// 	   	$('.show-sidebar').hide();
// 	   	$('.hide-sidebar').show();
// 	  	$('#sidebar').show('fast');
// 	});
// });
var nnn2 = document.getElementsByClassName('link2');
console.log($('.new1'))
$('.new2').click(function(){
    nnn2[0].style.display = "table";
})
// $('.new2').on('touchstart',function(){
//     nnn2[0].style.display = "table";
// })
$('.modal-defa-button').click(function(){
    nnn2[0].style.display = "none";
});
var nnn4 = document.getElementsByClassName('link4');
console.log($('.new1'))
$('.new4').click(function(){
    nnn4[0].style.display = "table";
})
$('.modal-defa-button').click(function(){
    nnn4[0].style.display = "none";
});
var nnn3 = document.getElementsByClassName('link3');
console.log($('.new1'))
$('.new3').click(function(){
    nnn3[0].style.display = "table";
})
$('.modal-defa-button').click(function(){
    nnn3[0].style.display = "none";
});
$(document).mousemove(function(){
    if($('#tex2').val() != ""){
        console.log(1);
        $('.modal-default-button2').attr('disabled',false);
    }else{
        $('.modal-default-button2').attr('disabled',"disabled");
    }
})
$(document).on('touchstart',function(){
    if($('#tex2').val() != ""){
        $('.modal-default-button2').attr('disabled',false);
    }else{
        $('.modal-default-button2').attr('disabled',"disabled");
    }
})
$('.modal-default-button2').click(function(){
    $.ajax({
        type: 'POST',
        url: url,
        data: {projectname:$('input[name=projectname]').val()},
        success: function(data){
            if(data == 1){
                $('.status')[0].innerHTML = "新建成功";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }else{
                $('.status')[0].innerHTML = "新建失败";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }
        },
        error:function(){
            $('.status')[0].innerHTML = "服务器错误";
            setTimeout(function(){
                $('.status')[0].innerHTML = "";
            },3000)
        }
    })
})
$(document).mousemove(function(){
    if($('#tex3').val() != "" && $('.sele3').val() != ""){
        console.log(1);
        $('.modal-default-button4').attr('disabled',false);
    }else{
        $('.modal-default-button4').attr('disabled',"disabled");
    }
})
$(document).on('touchstart',function(){
    if($('#tex3').val() != "" && $('.sele3').val() != ""){
        $('.modal-default-button4').attr('disabled',false);
    }else{
        $('.modal-default-button4').attr('disabled',"disabled");
    }
})
//新建班型
$('.modal-default-button4').click(function(){
    $.ajax({
        type: 'POST',
        url: url,
        data: {classname:$('input[name=classname]').val(),
        sectorvalue:$('select[name=sectorvalue]').val()},
        success: function(data){
            if(data == 1){
                $('.status')[0].innerHTML = "新建成功";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }else{
                $('.status')[0].innerHTML = "新建失败";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }
        },
        error:function(){
            $('.status')[0].innerHTML = "服务器错误";
            setTimeout(function(){
                $('.status')[0].innerHTML = "";
            },3000)
        }
    })
})
var nnn1 = document.getElementsByClassName('modal-mask');
console.log($('.new1'))
$('.new1').click(function(){
    nnn1[0].style.display = "table";
})
$('.modal-defa-button').click(function(){
    nnn1[0].style.display = "none";
});
 
$(document).mousemove(function(){
    if( $('.sele').val() != "" &&
    $('#tex').val() != ""){
        
        $('.modal-default-button').attr('disabled',false);
    }else{
        $('.modal-default-button').attr('disabled',"disabled");
    }
})
$(document).on('touchstart',function(){
    if( $('.sele1').val() != "" &&
    $('#tex1').val() != ""){
        $('.modal-default-button').attr('disabled',false);
    }else{
        $('.modal-default-button').attr('disabled',"disabled");
    }
})
//分组
$('.modal-default-button').click(function(){
    $.ajax({
        type: 'POST',
        url: url,
        data: {groupname:$('input[name=groupname]').val(),
        sectorvalue:$('select[name=sectorvalue]').val()},
        success: function(data){
            if(data == 1){
                $('.status')[0].innerHTML = "新建成功";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }else{
                $('.status')[0].innerHTML = "新建失败";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }
        },
        error:function(){
            $('.status')[0].innerHTML = "服务器错误";
            setTimeout(function(){
                $('.status')[0].innerHTML = "";
            },3000)
        }
    })
})
$(document).mousemove(function(){
    if( $('.sele1').val() != "" &&
    $('#tex1').val() != ""){
        
        $('.modal-default-button3').attr('disabled',false);
    }else{
        $('.modal-default-button3').attr('disabled',"disabled");
    }
})
$(document).on('touchstart',function(){
    if( $('.sele1').val() != "" &&
    $('#tex1').val() != ""){
        $('.modal-default-button3').attr('disabled',false);
    }else{
        $('.modal-default-button3').attr('disabled',"disabled");
    }
})
//新建部门
$('.modal-default-button3').click(function(){
    $.ajax({
        type: 'POST',
        url: url,
        data: {sectorname:$('input[name=sectorname]').val(),
        projectvalue:$('select[name=projectvalue]').val()},
        success: function(data){
            if(data == 1){
                $('.status')[0].innerHTML = "新建成功";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }else{
                $('.status')[0].innerHTML = "新建失败";
                setTimeout(function(){
                    $('.status')[0].innerHTML = "";
                },3000)
            }
        },
        error:function(){
            $('.status')[0].innerHTML = "服务器错误";
            setTimeout(function(){
                $('.status')[0].innerHTML = "";
            },3000)
        }
    })
})