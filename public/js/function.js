//把对象调整到中心位置
;(function($){
    $.fn.setmiddle = function() {
        var dl = $(document).scrollLeft(),
            dt = $(document).scrollTop(),
            ww = $(window).width(),
            wh = $(window).height(),
            ow = $(this).width(),
            oh = $(this).height(),
            left = (ww - ow) / 2 + dl,
            top = (wh - oh) / 2 + dt;
        $(this).css({left:Math.max(left, dl) + "px",top:Math.max(top, dt) + "px"}); 
        return this;
    }
})(jQuery);

//提示信息
;(function($){
    $.tips = function(options) {
        var settings = {
            content: "",
            icon: "success",
            time: 1500,
            close: false,
            zindex: 2999
        };
        if (options) {
            $.extend(settings, options);
        }
        if (settings.close) {
            $(".tips").hide();
            return;
        }
        if (!$(".tips")[0]) {
            $("body").append('<div class="tips"><i></i><span></span></div>');
            $(".tips").css("z-index", parseInt(settings.zindex));
        }
        $(".tips span").html(settings.content);
        $(".tips").attr("class", "tips tips-" + settings.icon);
        $(".tips").css("z-index", parseInt($(".tips").css("z-index"))+1).setmiddle().show();
         
        if (settings.time > 0) {
            setTimeout(function() {
                $(".tips").fadeOut()
            }, settings.time);
        }
    }
})(jQuery);

//设置cookie
var setCookie = function(cname, cvalue, exdays) {
    var day = new Date();
    day.setTime(day.getTime() + (exdays*24*60*60*1000));
    document.cookie = cname + "=" + encodeURI(cvalue) + "; " + "expires=" + day.toUTCString() +"; path=/";
};

//获取cookie
var getCookie = function(cname) {
    var name = cname + "=";
    var obj = document.cookie.split(';');
    for (var i = 0; i < obj.length; i++) {
        var c = obj[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return "";
};

//清除cookie 
var clearCookie = function(cname) { 
    setCookie(cname, "", -1); 
};

//检查cookie 
var checkCookie = function(cname) {
    var value = getCookie(cname);
    if (value != "") {
        return true;
    }
    else {
        return false;
    }
};

Array.prototype.remove = function (val) {
    var index = this.indexOf(val);
    if (index > -1) {
        this.splice(index, 1);
    }
};

var bookshelfInit = function() {
    var novel_id = $("#novel_id").data('id');
    if (checkCookie("_bookinfo") == false) {
        setCookie("_bookinfo", '{"count":0,"book":[]}', "365");
    }
    //判断cookie
    if (checkCookie("_bookinfo") == false) {
        var data = {"count":"0","book":[]};
    }else{
        var data = JSON.parse(decodeURI(getCookie("_bookinfo")));
    }
    //书架
    $(".header .bookcase").click(function() {
        $(".bookshelf-mask").show();
        $(".bookshelf-panel").show();
        var html = "";
        var list = "";
        if($(".bookshelf-panel").length == 0){
            html += "<div class=\"bookshelf-mask\"></div>";
            html += "<div class=\"bookshelf-panel\">";
            html += "<div class=\"bookshelf-head\"><h4>我的书架("+data.count+"本)</h4><a class=\"close\" target=\"_self\">关闭</a></div>";
            html += "<div class=\"bookshelf-list\">";
            html += "<ul class=\"clearfix\"></ul>";
            html += "</div>";
            html += "</div>";
            $("body").append(html);
        }else{
            $(".bookshelf-head h4").text("我的书架("+data.count+"本)");
        }
        if (data.count > 0) {
            $.ajax({
                type: "post",
                url: "/api.php?m=booksehlf",
                data: {
                    book_id : data.book
                },
                success: function(data,status) {
                    $res = JSON.parse(data);
                    if($res.state == "success"){
                        var list = "";
                        $(".bookshelf-list ul").html("");
                        for (var i = $res.data.length - 1; i >= 0; i--) {
                            list += "<li>";
                            list += "<a class=\"pic\" href=\""+$res.data[i]['url']+"\"><img src=\""+$res.data[i]['thumb']+"\" alt=\""+$res.data[i]['bookname']+"\" target='_blank'><i class=\""+status+"\">"+$res.data[i]['status_txt']+"</i></a>";
                            list += "<p class=\"tit\"><a href=\""+$res.data[i]['url']+"\" target='_blank'>"+$res.data[i]['bookname']+"</a></p>";
                            list += "<p class=\"description\">"+$res.data[i]['description']+"</p>";
                            list += "<p class=\"read\"><a href=\""+$res.data[i]['url']+"\" target='_blank'>继续阅读</a></p>";
                            list += "<i class=\"del iconfont\" data-id=\""+$res.data[i]['id']+"\">&#xe60b;</i>";
                            list += "</li>";
                        }
                        $(".bookshelf-list ul").html(list);
                    }                        
                }
            });
        }else{
            //没有内容就清空书架
            $(".bookshelf-list ul").html("");
        }
    }); 
    $(".bookshelf-head .close").live("click", function() {
        $(".bookshelf-mask").hide();
        $(".bookshelf-panel").hide();
    }); 
    $(".bookshelf-list li .del").live("click", function() {
        /*if(confirm("确定从书架中移除？")) {
            data.book.remove($(this).data('id'));
            data.count = data.book.length;
            var json_str = JSON.stringify(data);
            setCookie("_bookinfo",json_str);
            $(this).parent().remove();
            $(".bookshelf-head h4").text("我的书架("+data.count+"本)");
            if(novel_id){
                if (data.book.indexOf(novel_id)){
                    $('.add-bookshelf').html($('.add-bookshelf').html().replace(/已放入书架/,"放入书架"));
                }
            }
        }*/
        data.book.remove($(this).data('id'));
            data.count = data.book.length;
            var json_str = JSON.stringify(data);
            setCookie("_bookinfo",json_str);
            $(this).parent().remove();
            $(".bookshelf-head h4").text("我的书架("+data.count+"本)");
            if(novel_id){
                if (data.book.indexOf(novel_id)){
                    $('.add-bookshelf').html($('.add-bookshelf').html().replace(/已放入书架/,"放入书架"));
                }
            }
    });

    //判断是否已经添加到了书架
    if(data.book.indexOf(novel_id) != -1){
        $(".add-bookshelf").html($(".add-bookshelf").html().replace(/放入书架/,"已放入书架"));
    }
    //防止重复点击
    var flag = true;
    //放入书架
    $(".add-bookshelf").on("click", function(){
        if(flag){
            flag = false;
            //判断是否存在
            if (data.book.indexOf(novel_id) != -1){
                data.book.remove(novel_id);
                $(this).html($(this).html().replace(/已放入书架/,"放入书架"));
                $.tips({content:"已移除书架", icon:"success"});
            }else{
                //添加小说ID
                data.book.push(novel_id);
                $(this).html($(this).html().replace(/放入书架/,"已放入书架"));
                $.tips({content:"已添加书架", icon:"success"});
            }            
            data.count = data.book.length;
            if(data.count > 12){
                $.tips({content:"已达到书架上限！", icon:"success"});
                $(this).html($(this).html().replace(/已放入书架/,"放入书架"));
                //移除多添加的小说，重置小说数量
                data.book.remove(novel_id);
                data.count = data.book.length;
            }
            var json_str = JSON.stringify(data);
            //设置cookie
            setCookie("_bookinfo",json_str);
            //设置延迟，防止点击过于频繁
            setTimeout(function(){
                flag = true;
            },1000);
        }else{
            alert("请勿频繁操作");
        }
    });

};


$(function(){
    //首页切换
    $(".new-book ol li").click(function() {
        var index = $(this).index();
        $(this).addClass("on").siblings("li").removeClass("on");
        $(".new-book ul").eq(index).show().siblings("ul").hide();
    });
    $(".go-review").click(function() {
        $('body,html').animate({
            scrollTop: $(".review").offset().top
        }, 300);
        return false;
    });
	$(".j-textarea").live("focus", function() {
		if ($(this).val() == "说点什么吧，您的评论是对本书最大的支持！") {
			$(this).val("")
		}
	}).live("blur", function() {
		if ($.trim($(this).val()) == "") {
			$(this).val("说点什么吧，您的评论是对本书最大的支持！")
		}
	}).live("keydown", function(){  
        var len = $(".j-textarea").val().length;
        if (len >= 200) {
            var num = $(".j-textarea").val().substr(0,200);;
            $(".j-textarea").val(num);;
        }
        else {
            $(".j-count").text(200-len-1);
        }
		$(".form-msg").text("");
    });
    $(".j-send").click(function() {
    	var txt = $(".j-textarea").val();
    	var len = $(".j-textarea").val().length;
    	if (txt == "说点什么吧，您的评论是对本书最大的支持！" || len == 0) {
    		$(".form-msg").text("评论内容不能为空");
    		return false;
    	}
    	else {
    		alert("您的评论已提交，审核过后您的评论会出现在这里！");
    	}
    });
    var $review = $(".review-list ul");
    if ($review.children("li").length > 5) {
    	$review.children("li").slice(5).css("display","none");
    	$(".review .more").click(function() {
    		$(this).css("display","none");
    		$review.children("li").slice(5).css("display","block");
    	});
    }
    $(".guess ol li").click(function() {
        var index = $(this).index();
        $(this).addClass("on").siblings("li").removeClass("on");
        $(".guess ul").eq(index).show().siblings("ul").hide();
    });
    //搜索输入字符串合法性验证
    $("#search-btn").click(function(){
        var str = $("#q").val();
        var ret = /[^\w\u4e00-\u9fa5]/;
        if(ret.test(str)){
           alert("搜索内容不合法");
           return false;
        }else{
           return ture;
        }
    });
    bookshelfInit();
});