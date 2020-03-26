$('.rank-button1').click(function(){
    this.style.background = "white";
    $('.rank-button2')[0].style.background = "rgb(239,239,239)";
})
$('.rank-button2').click(function(){
    this.style.background = "white";
    $('.rank-button1')[0].style.background = "rgb(239,239,239)";
});
$('.modaldate-body-del').click(function(){
    $('.modaldate')[0].style.display = "none";
})
$('.newdate').click(function(){
    $('.modaldate')[0].style.display = "block";
})

// $('.navbarb>a').on('touchstart',function(){
//     console.log(1)
//     console.log($('.navbar>a')[0].innerHTML)
//     $(this).removeClass('aa')
//     $(this).addClass('bb')
// })
// $('.navbarb>a').on('touchend',function(){
//     console.log(1)
//     console.log($('.navbar>a')[0].innerHTML)
//     $(this).removeClass('bb')
//     $(this).addClass('aa')
// })
$(document).click(function(e){
    for(let i=0;i<$('.dropdow-menu').length;i++){
        $('.dropdow-menu')[i].parentNode.childNodes[3].style.display = "none";
    }
    $('.dropdown-menu')[0].style.display = "none";
})
for(let i=0;i<$('.dropdow-menu').length;i++){
    var index = i
    console.log($('.dropdow-menu')[i].parentNode.childNodes[1])
    console.log(i)
    $('.dropdow-menu')[i].parentNode.childNodes[1].onclick = function(){
    //   return console.log(i,j)
        if($(this)[0].parentNode.childNodes[3].style.display == "block"){
        $(this)[0].parentNode.childNodes[3].style.display = "none"
       }else if($(this)[0].parentNode.childNodes[3].style.display == "none"){
           $(this)[0].parentNode.childNodes[3].style.display = "block"
       }
        for (let j = 0; j < $('.dropdow-menu').length; j++) {
            if(j != i){
                // console.log(i,j)
                $('.dropdow-menu')[j].parentNode.childNodes[3].style.display = "none";
                $($('.dropdow-menu')[j].parentNode).removeClass('open');
            }
            
        }
        
        
        // $('.dropdow-menu')[i].parentNode.childNodes[3].style.display = "none"
        
       
    
    // console.log($(this)[0].childNodes[3]);
    //    if($(this)[0].childNodes[3].style.display == "block"){
    //        $(this)[0].childNodes[3].style.display = "none"
    //    }
       
   }
}

