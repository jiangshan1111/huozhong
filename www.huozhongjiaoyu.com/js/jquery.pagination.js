;(function($){
    $.fn.pagination = function(maxentries,opts){
        opts = $.extend({
            items_per_page:10,
            num_display_entries:10,
            current_page:0,
            num_edge_entries:0,
            link_to:"#",
            prev_text:"上一页",
            next_text:"下一页",
            first_text:"首页",
            last_text:"尾页",
            ellipse_text:"…",
            prev_show_always:true,
            next_show_always:true,
            goto_show_always:true,
            callback:function(){return false;}
        },opts||{});

        return this.each(function(index, el) {
        	/**计算最大分页显示数目*/
        	function numPages(){
        		return Math.ceil(maxentries/opts.items_per_page);
        	}
        	/**
        	*极端分页的起始盒结束点，这取决于current_page和num_display_entries
        	* @返回 {数组(Array)}
        	*/
        	function getInterval(){
                var ne_half = Math.ceil(opts.num_display_entries/2),
                    np = numPages(),
                    upper_limit = np-opts.num_display_entries,
                    start = current_page > ne_half?Math.max(Math.min(current_page-ne_half,upper_limit),0):0,
                    end = current_page > ne_half?Math.min(current_page+ne_half,np):Math.min(opts.num_display_entries, np);
                return [start,end];
        	}
        	/**
        	* 分页链接事件处理函数
        	* @参数{int} page_id 为新页码
        	*/
        	function pageSelected(page_id, evt){
                current_page = page_id;
                drawLinks();
                var continuePropagation = opts.callback(page_id, panel);
                if (!continuePropagation) {
                	if(evt.stopPropagation){
                		evt.stopPropagation();
                	}else{
                		evt.cancelBubble = true;
                	}
                }
                return continuePropagation;
        	}
        	/**此函数将分页链接插入到容器元素中*/
        	function drawLinks(){
        		var interval = getInterval(),
        		    np = numPages(),
        		    getClickHandler = function(page_id){
                        return function(evt){return pageSelected(page_id,evt);}
        		    },
        		    appendItem = function(page_id, appendopts){
                        page_id = page_id<0?0:(page_id<np?page_id:np-1);
                        appendopts = $.extend({text:page_id+1,classes:""},appendopts||{});
                        if (page_id == current_page) {
                        	var lnk = $("<span class='current'>"+(appendopts.text)+"</span>");
                        }else{
                        	var lnk = $("<a>"+(appendopts.text)+"</a>")
                        	    .bind("click",getClickHandler(page_id))
                        	    .attr("href",opts.link_to.replace(/__id__/,page_id));
                        }
                        if (appendopts.classes) {lnk.addClass(appendopts.classes);}
                        panel.append(lnk);
        		    },
                    appendGoto = function(){
                        panel.append('<span class="goto">共'+np+'页，跳到 <input type="text"> 页<a href="#" class="goto-btn">确定</a></span>');
                    };
                panel.empty();
                //产生“首页”-链接
                if(opts.first_text && (current_page > 0 || opts.prev_show_always)){
                	appendItem(0,{text:opts.first_text,classes:"page-btn first"});
                }
                //产生"Previous"-链接
                if(opts.prev_text && (current_page > 0 || opts.prev_show_always)){
                	appendItem(current_page-1,{text:opts.prev_text,classes:"page-btn prev"});
                }
                //产生起始点
                if(interval[0] > 0 && opts.num_edge_entries > 0){
                    var end = Math.min(opts.num_edge_entries, interval[0]);
                    for(var i = 0; i < end; i++){
                    	appendItem(i);
                    }
                    if(opts.num_edge_entries < interval[0] && opts.ellipse_text){
                    	$("<span>"+opts.ellipse_text+"</span>").appendTo(panel);
                    }
                }
                //产生内部的链接
                for(var i = interval[0]; i < interval[1]; i++){
                	appendItem(i);
                }
                //产生结束点
                if(interval[1] < np && opts.num_edge_entries > 0){
                	if(np-opts.num_edge_entries > interval[1] && opts.ellipse_text){
                		$("<span>"+opts.ellipse_text+"</span>").appendTo(panel);
                	}
                	var begin = Math.max(np-opts.num_edge_entries, interval[1]);
                	for(var i = begin; i<np;i++){
                		appendItem(i);
                	}
                }
                //产生"Next"-链接
                if(opts.next_text && (current_page < np-1 || opts.next_show_always)){
                	appendItem(current_page+1,{text:opts.next_text, classes:"page-btn next"});
                }
                //产生“尾页”-链接
                if(opts.last_text && (current_page < np-1 || opts.next_show_always)){
                	appendItem(np-1,{text:opts.last_text,classes:"page-btn last"});
                }
                if(opts.goto_show_always){appendGoto();}
        	}
        	//从选项中提取current_page
        	var current_page = opts.current_page,
        	    panel = $(this);
        	//创建一个显示条数和每页显示条数值
        	maxentries = (!maxentries || maxentries < 0)?1:maxentries;
        	opts.items_per_page = (!opts.items_per_page || opts.items_per_page < 0)?1:opts.items_per_page;
        	this.selectPage = function(page_id){pageSelected(page_id);}
        	this.prevPage = function(){
                if(current_page > 0){
                	pageSelected(current_page -1);
                	return true;
                }else{
                	return false;
                }
        	}
        	this.nextPage = function(){
                if(current_page < numPages()-1){
                	pageSelected(current_page+1);
                	return true;
                }else{
                	return false;
                }
        	}
            //为跳转绑定响应事件
            panel.on('click','.goto',function(evt){
                var current_page = panel.find("input").val();
                if(current_page==0){
                    return false;
                }
                pageSelected(parseInt(current_page)-1,evt);
            });
        	//所有初始化完成，绘制链接
        	drawLinks();
        	//回调函数
        	opts.callback(current_page,this);
        });
    }
})(jQuery);