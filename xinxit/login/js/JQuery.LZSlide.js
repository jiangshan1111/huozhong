// 首先可以将整体封装成一个匿名自运行函数
(function($){
    // 本函数每次被调用只负责一个轮播图的功能，也就是说只会产生一个轮播图，这个函数的作用域只能分配给一个轮播图
    // 所以要求在调用本函数的时候请务必将当前轮播图和标签传递过来
    var slide=function(ele,options){
        // 转为jq标签
        var $ele=$(ele)
        // 默认的设置选项
        var setting={
            // 控制刚炸开的时间
            delay:1000,
            // 控制time的时间（轮播速度）
            speed:2000
        };

        // 对象合并
        // 参数一：Boolean类型，是否深度合并对象，默认值是false（不支持该参数为false）若为true，且多个对象的某个同名属性也是对象，则该“属性对象”的属性也将进行合并
        // 参数二，三，四.....都是要和并的对象，最后后面的同名属性会将前面的属性值覆盖掉
        $.extend(true,setting,options);
        console.log( document.documentElement.clientWidth);
        var states = {}
        if( document.documentElement.clientWidth < 1000){ states = [
                { ZIndex: 1, width: 120, height: 128, top: 69, left: -250, opac: 0.2 },
                { ZIndex: 2, width: 130, height: 148, top: 59, left: -150, opac: 0.5 },
                { ZIndex: 3, width: 170, height: 168, top: 24, left: -50, opac: 0.7 },
                { ZIndex: 4, width: 224, height: 188, top: 0, left: 50, opac: 1 },
                { ZIndex: 3, width: 170, height: 168, top: 24, left: 150, opac: 0.7 },
                { ZIndex: 2, width: 130, height: 148, top: 59, left: 250, opac: 0.5 },
                { ZIndex: 1, width: 120, height: 128, top: 69, left: 350, opac: 0.2 },
            ];
        }else{ states = [
            { ZIndex: 1, width: 120, height: 128, top: 69, left: 134, opac: 0.2 },
            { ZIndex: 2, width: 130, height: 148, top: 59, left: 0, opac: 0.5 },
            { ZIndex: 3, width: 170, height: 168, top: 24, left: 110, opac: 0.7 },
            { ZIndex: 4, width: 224, height: 188, top: 0, left: 263, opac: 1 },
            { ZIndex: 3, width: 170, height: 168, top: 24, left: 470, opac: 0.7 },
            { ZIndex: 2, width: 130, height: 148, top: 59, left: 620, opac: 0.5 },
            { ZIndex: 1, width: 120, height: 128, top: 69, left: 500, opac: 0.2 },
        ];
        }
        
        var lis=$(ele).find('li');
        function move(){
            lis.each(function(index,item){
                var state=states[index];
                $(item).css('z-index',state.ZIndex).finish().animate(state,1000).find('img').css('opacity',state.opac);
            })
        }
        move();
        function next(){
            states.unshift(states.pop())
            move()
        }
        function prev(){
            states.push(states.shift());
            move()
        }
        $(ele).find('.slide-prev').click(function(){
            prev();
        })
        $(ele).find('.slide-next').click(function(){
            next();
        })
        var time=null
        function autoplay(){
            time=setInterval(function(){
                next()
            },setting.speed)
        }
        autoplay();
        $ele.find('section').add(lis).hover(function(){
            clearInterval(time)
        },function(){
            autoplay();
        })

    }
    $.fn.LZSlide=function(options){
        // $(this)是通过jq拿到的标签
        $(this).each(function(i,ele){
            slide(ele,options)
        })
        return this;
    }

})(jQuery);



