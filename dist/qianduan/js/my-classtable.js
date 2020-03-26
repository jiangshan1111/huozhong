(function($){
    $(function(){
        var op = {
            view: "month",
            theme:1,
            weekstartday:0,
            autoload:true, //
            showday: new Date(),
            eventItems:true,
            onBeforeRequestData: false,
            onAfterRequestData: false,
            // url: "/usersCenter/selMyClassTableByMonth"
        };
        op.height = 440;
        op.eventItems =[];
        var p = $("#xgcalendarp").bcalendar(op).BcalGetOp();
        $("#prevbtn").click(function(){
            var p = $("#xgcalendarp").BCalPrev().BcalGetOp();
            if (p && p.datestrshow) {
                $("#dateshow").text(p.datestrshow);
            }
        });

        $("#nextbtn").click(function(){
            var p = $("#xgcalendarp").BCalNext().BcalGetOp();
            if (p && p.datestrshow) {
                $("#dateshow").text(p.datestrshow);
            }
        });
        $("#todaybtn").click(function(e) {
            var p = $("#xgcalendarp").BCalGoToday().BcalGetOp();
            if (p && p.datestrshow) {
                $("#dateshow").text(p.datestrshow);
            }
        });

        //点击弹出框中的关闭按钮
        $(".my-classtable").on("click","#bubbleClose1",function(){
            $(".mask-bg,#bbit-cal-buddle,.drag-lasso").hide();
        });

		var p = $("#xgcalendarp").BCalGoToday().BcalGetOp();
        if (p && p.datestrshow) {
            $("#dateshow").text(p.datestrshow);
        }

        //鼠标移入日期点击弹出内容
        $(document)/*.off("mouseenter").on("mouseenter","td.st-bg,td.st-dtitle",function(e){
            var w=$(this).width();
            var h=$(this).height();
            var div='<div class="bg"></div>';
            $(div).css("width",w).css("height",h).css("top",0).css("left",0).appendTo($(this));
        }).on("mouseleave","td.st-bg,td.st-dtitle",function(){
            $(this).find(".bg").remove();
        })*/.on("click","td .bg",function(){
            $(".mask-bg,#bbit-cal-buddle").show();
        });
        
        //鼠标移入td增加阴影
        $(document).on("mouseover",".st-grid td",function(){
            $(this).addClass("hover");
            var index=$(this).index();
            $(this).parents(".month-row").find(".st-bg-table td").eq(index).addClass("hover")
        }).on("mouseleave",".st-grid td",function(){
            $(this).removeClass("hover");
            var index=$(this).index();
            $(this).parents(".month-row").find(".st-bg-table td").eq(index).removeClass("hover")
        });
        $(document).on("mouseover",".st-bg-table td",function(){
            $(this).addClass("hover");
            var index=$(this).index();
            $(this).parents(".month-row").find(".st-grid td").eq(index).addClass("hover")
        }).on("mouseleave",".st-bg-table td",function(){
            $(this).removeClass("hover");
            var index=$(this).index();
            $(this).parents(".month-row").find(".st-grid td").eq(index).removeClass("hover")
        })
    });
    function beforefuc(type){
    	$(".loading,.mask-bg").show();
    }
    function afterfuc(type){
    	$(".loading,.mask-bg").hide();
    }
})(jQuery);
