$(function () {
    $('.campus-recruitment-tab li').click(function () {
        var index = $(this).index();
        // console.log(index);
        $(this).addClass('on').siblings().removeClass('on');
        $('.campus-recruitment-detail').eq(index).addClass('on').siblings().removeClass('on');
    });

    $('.campus-recruitment-apply button').click(function () {
        $('.popus').show(200);
    });

    $('.popus button').click(function () {
        $(this).parent().parent().hide(200);
    });

});