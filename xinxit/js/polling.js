console.log($('#polling-header-body')[0].children[0].length);
$('.reset').click(function(){
    var arr = $('#polling-header-body')[0].children[0]
    for (var i = 0; i < arr.length; i++) {
        // console.log(arr[0].type);
       if(arr[i].type == 'text' || ){
           arr[i].value = "";
       }
        
    }
})