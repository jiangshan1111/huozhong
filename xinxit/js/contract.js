var date = new Date();
$('.Year')[0].innerHTML = date.getFullYear()+" ";
$('.Month')[0].innerHTML = date.getMonth()+1;
$('.Day')[0].innerHTML = date.getDate();