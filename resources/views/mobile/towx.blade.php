

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>{{$data['book']}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <style>
        @charset 'UTF-8';
        body,button,dd,dl,dt,h1,h2,h3,h4,h5,h6,input,li,ol,p,select,textarea,ul{margin:0;padding:0}body,html{height:100%}ol,ul{list-style:none}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:400}em,i,s,u{font-style:normal;text-decoration:none}img{vertical-align:top;border:none}button,input,select,textarea{font-family:inherit;box-sizing:border-box;-webkit-tap-highlight-color:transparent}a{color:inherit;text-decoration:none;outline:0}html{font-size:16px}@media screen and (min-width:320px){html{font-size:calc(87.5% + 2 * (100vw - 320px)/ 55);font-size:calc(14px + 2 * (100vw - 320px)/ 55)}}@media screen and (min-width:375px){html{font-size:calc(100% + 2 * (100vw - 375px)/ 39);font-size:calc(16px + 2 * (100vw - 375px)/ 39)}}@media screen and (min-width:414px){html{font-size:calc(112.5% + 4 * (100vw - 414px)/ 186);font-size:calc(18px + 4 * (100vw - 414px)/ 186)}}@media screen and (min-width:600px){html{font-size:calc(125% + 4 * (100vw - 600px)/ 400);font-size:calc(20px + 4 * (100vw - 600px)/ 400)}}@media screen and (min-width:1000px){html{font-size:calc(137.5% + 6 * (100vw - 1000px)/ 1000);font-size:calc(22px + 6 * (100vw - 1000px)/ 1000)}}body{font:.28rem/1 "microsoft yahei",Helvetica,sans-serif;color:#333;background:#fff;fill:currentColor;-webkit-tap-highlight-color:rgba(0,0,0,.05);-webkit-text-size-adjust:none;-webkit-touch-callout:none}aria{font-size:0;position:absolute;clip:rect(0 0 0 0)}.clearfix::after,.clearfix::before{display:block;clear:both;overflow:hidden;visibility:hidden;height:0;content:" "}.header{position: relative;z-index:999;width:100%;height:2.75rem;background:#ededed;}.header h1,.header h2,.header h3{position:absolute;left:2.75rem;line-height:2.75rem;max-width:60%;font-size:1rem;font-weight:400;color:#474747;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.header .icon-back{float:left;width:2.75rem;height:2.75rem;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDBCNzcyN0IzRTYwMTFFOUJEOEJDMDdCMjMxNEE4MkEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDBCNzcyN0MzRTYwMTFFOUJEOEJDMDdCMjMxNEE4MkEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpEMEI3NzI3OTNFNjAxMUU5QkQ4QkMwN0IyMzE0QTgyQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpEMEI3NzI3QTNFNjAxMUU5QkQ4QkMwN0IyMzE0QTgyQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PuMOmyoAAAOhSURBVHja7JxrTxNBFIan6zX6L/wbJl6DVlRUiHgX1MQoARSBgE0rhGqoF7ygYIyJF7wjBkGEarz9JT8Yv1nfE3djbbpnSNjdmfFwkjdt9iTt5Ol7zu7MzjZVKpXUQiKdTiuTUSwWy8fSjJcfOPY6qs/31H8SgNOAl4fQON5vXQT0L5xGvJS7ZgrHahYB/XXOKyhVdngF9BG5g9IB7YEmmPyahX7BUofh1FeUVWVk0KwHpQLaDb1h8rko4LgKaCc0yeTPA05B6llslwZONko4rjmozoeTCsn3A86lqL/UFUC1dG3D5C8ATj6OL3ahxHZAb5l8X1xwXHBQrQ9nSUg+DzgDcQ7AZkA0n3rP5AlMX9yD8Cwuq2nTcGx10Ha/IYf9eINJwbHRQbS4NMOMi07jmSQHZBOgbZqyukgXgkkPyrPIOVRWy0LyV2h+ZWJgNvSgLdAck78M9ZoanGkH1WjKqmASjmlA5Jx36s/qX7UYopm5aXubKrFN0Acmfw3qtqE5mnDQZv9UrpiGbAUcEw4K4KxknNNj04VZkoDWQ5+Y/JBNzkm6xDZCs5pTeZeNk8IkAG3wz1arQvI3TJ/KTZbYOuiLCl8mvQmdUxaHF3NZzTFwqOd0KMvDixHODFNWw7b2nCRKjMrqM+OcO9AZ5Uh4McCZZeBQQ25TDoUXMRxaQ14dkh+xvSHHWWJroa8M8LtQq3IwonAQrSF/U/wyaYtyNKIAtFzjxO/K4YgCEN0vr9PMzgckA1L+VIL27IRtmc25CinKsxgtutP2lF8MpJxkQIGT6pl8YndEbZ5qTGkg9bsEKa652KSm3AhSRjIgimmNk+j6KCsZ0HzKLW97405iRXHSh1RiGndGMqAAUoOL5ZbkfTGC1Kgpt6xkQBT06MBeDaReyYAoJjSQaAdZj2RAAaQDTL5gS+M2ubvjpQYSNe5uyYACSPuZPC2VdEoGREFPCx5i8kY3NNiyR/H5PHpSh2RAQbntY/LXobOSAVGMQ9yDuHRfrUsyIIoX0BEmfxVqlwyI4qnGSbdUQvfZbH5eTOek20n0JNsfqCMnNXM9KZ1Ot0oGRPEYOsw5CZBaJAOieAYdY/IjgNQuGRDFI+gE17gB6bRkQBQPoCYmPwpIJyUDohjTOOkeILVJBhQ4iYM0HFXjdvnvcXTlRo27UzKgoNyOM/mf0gHRn7zR/5ZVa8xHkRsVD8iHdL/CSU049kR6D6rmJFpUO4X3Y1F97m8BBgAJlcWY0Ljh4AAAAABJRU5ErkJggg==) no-repeat 50% 50%;background-size:1.125rem}
        /*公众号引流样式*/
        body{margin:0 auto;}
        .warp{padding:.625rem;width:23.238rem;box-sizing: border-box;margin: 0 auto;}
        .so_wechat_pic{position:relative;padding-top:3.438rem;display: none;}
        .so_wechat_pic img{width:100%}
        .so_wechat_pic span{position:absolute;font-size:1.125rem}
        .so_wechat_pic .col-1{top:6.875rem;left:2.5rem;font-weight:700}
        .so_wechat_pic .col-2{top:10.412rem;left:10rem;color:#00a933}
        .so_wechat_pic .col-3{top:14.9rem;left:8.75rem;color:#00a933}
        .so_wechat_pic .title{font-size:1.225rem;height:3.438rem;line-height:3.438rem;width:100%;color:#0189d0;text-align:center;display:block;top:0;font-weight:700}
        .novel_info{text-align:center;font-size:1rem;line-height:1.125rem}
        .f61d3ec0,.not_we{text-align:center;font-size:.86rem;line-height:1.325rem}
        .not_we{color: red;}
        .novel_info p{margin-top:.5rem}
        .f61d3ec0 p {margin-top: .6rem;}
        .novel_info span{font-weight:700;    color: red;}
        .btn-copy-wechat{display:block;width:18.75rem;height:2.5rem;text-align:center;line-height:2.5rem;margin:.9rem auto 0 auto;border-radius:.05rem;font-size:1.1rem;border-radius:.2rem;background:#1AAD19;color:#fff}
        .f61d3ec0 .p1{color:red}
        .f61d3ec0 .p2{color:#00f}
        .f61d3ec0 .p3{color:#999}

        .btn-copy-wechat img{
            position: relative;
            height: 1.1rem;
            /* display: -webkit-inline-box; */
            vertical-align: middle;
            margin-right: .6rem;
            -webkit-animation: blink 1s linear infinite;
            -moz-animation: blink 1s linear infinite;
            -ms-animation: blink 1s linear infinite;
            -o-animation: blink 1s linear infinite;
        }

        @-webkit-keyframes blink {
            0% { left: .1rem }
            50% { left: .1rem }
            50.01% { left: 0rem }
            100% { left: 0rem }
        }
        #copy-bn,#copy-name{ width:46px;font-size:14px; height:26px; line-height: 26px; display: inline-block; margin-left:5px; margin-top: 0px;}
        .footer {
            position:relative;
            width:100%;
            bottom:0px;
            display: block;
            box-sizing: border-box;
            height: 75px;
            padding: .9rem 9rem 0 4rem;
            background-color: #f6f7f9;
            font-family: "Microsoft Yahei";
            line-height: 1.5;
            color: #33373d;
            fill: currentColor;
            -webkit-text-size-adjust: none;
            font-size: 16px;
        }
        .footer-h {
            font-size:14px;
            font-weight: 700;
            padding-top: 2px;
        }
        .footer-p {

            font-size: 12px;
            color: #969ba3;
            font-weight:400;

        }
        .footer .btn-primary-small {

            position: absolute;
            top: 0;
            right: 1rem;
            bottom: 0;
            height: 1.625rem;
            margin: auto;

        }
        .btn-primary, .btn-primary-small {

            font-size: .975rem;
            line-height: 1.75rem;
            display: inline-block;
            padding-right: 1em;
            padding-right: 2ch;
            padding-left: 1em;
            padding-left: 2ch;
            text-align: center;
            color: #fff;
            border-radius: 99px;
            background-color: #f87405;

        }
    </style>
</head>
<body>
<script>
    document.writeln("<div class=\"header\">");
    document.writeln("<a class=\"icon-back\" href=\"javascript:history.go(-1)\"></a>");
    document.writeln("<h1>{{$data['book']}}</h1>");
    document.writeln("</div>");
    document.writeln("<div class=\"warp clearfix\">");
    document.writeln("<div class=\"novel_info\">");
    document.writeln("<p>");
    document.writeln("<img src=\"{{env('IMG_URL').'/'.$book->cover_img}}\" width=\"30%\" alt=\"\">");
    document.writeln("</p>");
    document.writeln("<p class=\"novel_name\">书名：<span>{{$data['book']}}</span><a href=\"javascript:void(0);\" id=\"copy-name\" class=\"btn-copy-wechat\">复制</a></p>");
    document.writeln("<p class=\"wechat_id\">关注微信公众号：<span>{{$data['wechat']}}</span></p>");
    document.writeln("<p class=\"novel_id\">回复书号：<span>{{$data['bookid']}}</span> 阅读全文<a href=\"javascript:void(0);\" id=\"copy-bn\" class=\"btn-copy-wechat\">复制</a></p>");
    document.writeln("<a href=\"javascript:void(0);\" id=\"btn-copy-wechat\" class=\"btn-copy-wechat\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJIAAAB8CAMAAAC16xlOAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzYwOTYxNUEzRTUxMTFFOTlGQjI4MzlFMDc2Mjg0NEIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzYwOTYxNUIzRTUxMTFFOTlGQjI4MzlFMDc2Mjg0NEIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3NjA5NjE1ODNFNTExMUU5OUZCMjgzOUUwNzYyODQ0QiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3NjA5NjE1OTNFNTExMUU5OUZCMjgzOUUwNzYyODQ0QiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PikncagAAAAGUExURf///////1V89WwAAAACdFJOU/8A5bcwSgAAAf9JREFUeNrs3NtywyAMBNDV//90+5Bp09yKpF2xbeA1HnyMHFBsEQSh4br1eyODCCoIRE0UJKIWCiJRwwSVqI6CTlQ1SUmYJ+EPkjBNgjnpiXKW9OTUG0lPT901gT1I/cQAfNHPz0xIsYX0OjiHtHIHt24mDSnmSQnREAnmpCDHrUSCHWlhDdtK+vWICRLsSCupxyxJL8qSYEdKi5YakRQk0k1X2D9Id7m7h+i6O5BFdRLyJLXoq0twRS0ScqQJ0aVbVEAIEQnLJIyRcE1qTLcSUmsB4D6AvZA2ih6sUtguujNhv+g2dc6SItSmT5KBqEEKWbsJnYGon2RZkELdrDD5UTokS1J4kGBHwiHl8yW3SXI36XHurSelfw54kWKGlE1/3pQUucXLiRRupPWjp0jhRkodPUFKXoCYVBlTds5ICPP/JOGQsmmsAyndm5wEc1KEXeAO6ZAGl5MTOENSHBIrbu9IgjepkTvwSKWre1z1wdow5U7q3X6SwPVuPwUp7EapObTwISkngdb3FF4k7iQOKankKpKy78PlccuT2nOehFRJovWklZOgTCLUi1JFhSqvUu1glkQp0KSkSt+kfu0hXk92kScxULQpFvw5fobUY4WKVGaFlBT9/RMCUsiLjRgbG8l5FmvDNTHzk/6fQLFX7gsJRtbOqbyhPm/5EGAA8V0vwzwv9DsAAAAASUVORK5CYII=\">复制公众号并打开微信</a>");

    document.writeln("</div>");
    document.writeln("<div class=\"so_wechat_pic\">");
    document.writeln("<span class=\"title\">↓↓↓ 微信公众号关注方法 ↓↓↓</span>");
    document.writeln("<span class=\"col-1\">erha58</span>");
    document.writeln("<span class=\"col-2\">erha58</span>");
    document.writeln("<span class=\"col-3\">erha58</span>");
    document.writeln("<img src=\"/gzh.jpg?vvvverha58\" alt=\"搜索公众号\">");
    document.writeln("</div>");
    document.writeln("<div class=\"f61d3ec0\">");
    document.writeln("<p class=\"p1\">↓↓↓离线阅读，有记录更方便↓↓↓</p>");
    document.writeln("<p class=\"p2\"><a href=\"http://m.suqiLai.com/down/lm_app?uid=123333114\"  id=\"openxz\">&gt;&gt;&gt; 全本小说免费下载，点击获取 &lt;&lt;&lt;</a></p>");
    document.writeln("<p class=\"p3\">app内找书技巧，如没您要的结果？您可以搜索主角名称试试！</p>");
    document.writeln("</div>");
    document.writeln("</div>");
    document.writeln('<a id="footer" href="http://m.suqiLai.com/down/lm_app?uid=123333114"  class="footer" id="openxz"><img src="{{env('IMG_URL').'/'.$book->cover_img}}" style="position: absolute; top: 18px;     width: 2.35rem; height: 2.35rem; left: 1rem;"><h3 class="footer-h">全本免费下载</h3><p class="footer-p">全本下载看书省流量更方便</p> <span class="btn-primary-small">下载</span> </a>');
</script>

<script>
    !function(t){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var e;e="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,e.Clipboard=t()}}(function(){var t,e,n;return function t(e,n,o){function i(a,c){if(!n[a]){if(!e[a]){var l="function"==typeof require&&require;if(!c&&l)return l(a,!0);if(r)return r(a,!0);var s=new Error("Cannot find module '"+a+"'");throw s.code="MODULE_NOT_FOUND",s}var u=n[a]={exports:{}};e[a][0].call(u.exports,function(t){var n=e[a][1][t];return i(n||t)},u,u.exports,t,e,n,o)}return n[a].exports}for(var r="function"==typeof require&&require,a=0;a<o.length;a++)i(o[a]);return i}({1:[function(t,e,n){function o(t,e){for(;t&&t.nodeType!==i;){if("function"==typeof t.matches&&t.matches(e))return t;t=t.parentNode}}var i=9;if("undefined"!=typeof Element&&!Element.prototype.matches){var r=Element.prototype;r.matches=r.matchesSelector||r.mozMatchesSelector||r.msMatchesSelector||r.oMatchesSelector||r.webkitMatchesSelector}e.exports=o},{}],2:[function(t,e,n){function o(t,e,n,o,r){var a=i.apply(this,arguments);return t.addEventListener(n,a,r),{destroy:function(){t.removeEventListener(n,a,r)}}}function i(t,e,n,o){return function(n){n.delegateTarget=r(n.target,e),n.delegateTarget&&o.call(t,n)}}var r=t("./closest");e.exports=o},{"./closest":1}],3:[function(t,e,n){n.node=function(t){return void 0!==t&&t instanceof HTMLElement&&1===t.nodeType},n.nodeList=function(t){var e=Object.prototype.toString.call(t);return void 0!==t&&("[object NodeList]"===e||"[object HTMLCollection]"===e)&&"length"in t&&(0===t.length||n.node(t[0]))},n.string=function(t){return"string"==typeof t||t instanceof String},n.fn=function(t){return"[object Function]"===Object.prototype.toString.call(t)}},{}],4:[function(t,e,n){function o(t,e,n){if(!t&&!e&&!n)throw new Error("Missing required arguments");if(!c.string(e))throw new TypeError("Second argument must be a String");if(!c.fn(n))throw new TypeError("Third argument must be a Function");if(c.node(t))return i(t,e,n);if(c.nodeList(t))return r(t,e,n);if(c.string(t))return a(t,e,n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")}function i(t,e,n){return t.addEventListener(e,n),{destroy:function(){t.removeEventListener(e,n)}}}function r(t,e,n){return Array.prototype.forEach.call(t,function(t){t.addEventListener(e,n)}),{destroy:function(){Array.prototype.forEach.call(t,function(t){t.removeEventListener(e,n)})}}}function a(t,e,n){return l(document.body,t,e,n)}var c=t("./is"),l=t("delegate");e.exports=o},{"./is":3,delegate:2}],5:[function(t,e,n){function o(t){var e;if("SELECT"===t.nodeName)t.focus(),e=t.value;else if("INPUT"===t.nodeName||"TEXTAREA"===t.nodeName){var n=t.hasAttribute("readonly");n||t.setAttribute("readonly",""),t.select(),t.setSelectionRange(0,t.value.length),n||t.removeAttribute("readonly"),e=t.value}else{t.hasAttribute("contenteditable")&&t.focus();var o=window.getSelection(),i=document.createRange();i.selectNodeContents(t),o.removeAllRanges(),o.addRange(i),e=o.toString()}return e}e.exports=o},{}],6:[function(t,e,n){function o(){}o.prototype={on:function(t,e,n){var o=this.e||(this.e={});return(o[t]||(o[t]=[])).push({fn:e,ctx:n}),this},once:function(t,e,n){function o(){i.off(t,o),e.apply(n,arguments)}var i=this;return o._=e,this.on(t,o,n)},emit:function(t){var e=[].slice.call(arguments,1),n=((this.e||(this.e={}))[t]||[]).slice(),o=0,i=n.length;for(o;o<i;o++)n[o].fn.apply(n[o].ctx,e);return this},off:function(t,e){var n=this.e||(this.e={}),o=n[t],i=[];if(o&&e)for(var r=0,a=o.length;r<a;r++)o[r].fn!==e&&o[r].fn._!==e&&i.push(o[r]);return i.length?n[t]=i:delete n[t],this}},e.exports=o},{}],7:[function(e,n,o){!function(i,r){if("function"==typeof t&&t.amd)t(["module","select"],r);else if(void 0!==o)r(n,e("select"));else{var a={exports:{}};r(a,i.select),i.clipboardAction=a.exports}}(this,function(t,e){"use strict";function n(t){return t&&t.__esModule?t:{default:t}}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}var i=n(e),r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},a=function(){function t(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}return function(e,n,o){return n&&t(e.prototype,n),o&&t(e,o),e}}(),c=function(){function t(e){o(this,t),this.resolveOptions(e),this.initSelection()}return a(t,[{key:"resolveOptions",value:function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.action=e.action,this.container=e.container,this.emitter=e.emitter,this.target=e.target,this.text=e.text,this.trigger=e.trigger,this.selectedText=""}},{key:"initSelection",value:function t(){this.text?this.selectFake():this.target&&this.selectTarget()}},{key:"selectFake",value:function t(){var e=this,n="rtl"==document.documentElement.getAttribute("dir");this.removeFake(),this.fakeHandlerCallback=function(){return e.removeFake()},this.fakeHandler=this.container.addEventListener("click",this.fakeHandlerCallback)||!0,this.fakeElem=document.createElement("textarea"),this.fakeElem.style.fontSize="12pt",this.fakeElem.style.border="0",this.fakeElem.style.padding="0",this.fakeElem.style.margin="0",this.fakeElem.style.position="absolute",this.fakeElem.style[n?"right":"left"]="-9999px";var o=window.pageYOffset||document.documentElement.scrollTop;this.fakeElem.style.top=o+"px",this.fakeElem.setAttribute("readonly",""),this.fakeElem.value=this.text,this.container.appendChild(this.fakeElem),this.selectedText=(0,i.default)(this.fakeElem),this.copyText()}},{key:"removeFake",value:function t(){this.fakeHandler&&(this.container.removeEventListener("click",this.fakeHandlerCallback),this.fakeHandler=null,this.fakeHandlerCallback=null),this.fakeElem&&(this.container.removeChild(this.fakeElem),this.fakeElem=null)}},{key:"selectTarget",value:function t(){this.selectedText=(0,i.default)(this.target),this.copyText()}},{key:"copyText",value:function t(){var e=void 0;try{e=document.execCommand(this.action)}catch(t){e=!1}this.handleResult(e)}},{key:"handleResult",value:function t(e){this.emitter.emit(e?"success":"error",{action:this.action,text:this.selectedText,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)})}},{key:"clearSelection",value:function t(){this.trigger&&this.trigger.focus(),window.getSelection().removeAllRanges()}},{key:"destroy",value:function t(){this.removeFake()}},{key:"action",set:function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"copy";if(this._action=e,"copy"!==this._action&&"cut"!==this._action)throw new Error('Invalid "action" value, use either "copy" or "cut"')},get:function t(){return this._action}},{key:"target",set:function t(e){if(void 0!==e){if(!e||"object"!==(void 0===e?"undefined":r(e))||1!==e.nodeType)throw new Error('Invalid "target" value, use a valid Element');if("copy"===this.action&&e.hasAttribute("disabled"))throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if("cut"===this.action&&(e.hasAttribute("readonly")||e.hasAttribute("disabled")))throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');this._target=e}},get:function t(){return this._target}}]),t}();t.exports=c})},{select:5}],8:[function(e,n,o){!function(i,r){if("function"==typeof t&&t.amd)t(["module","./clipboard-action","tiny-emitter","good-listener"],r);else if(void 0!==o)r(n,e("./clipboard-action"),e("tiny-emitter"),e("good-listener"));else{var a={exports:{}};r(a,i.clipboardAction,i.tinyEmitter,i.goodListener),i.clipboard=a.exports}}(this,function(t,e,n,o){"use strict";function i(t){return t&&t.__esModule?t:{default:t}}function r(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function a(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}function c(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}function l(t,e){var n="data-clipboard-"+t;if(e.hasAttribute(n))return e.getAttribute(n)}var s=i(e),u=i(n),f=i(o),d="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},h=function(){function t(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}return function(e,n,o){return n&&t(e.prototype,n),o&&t(e,o),e}}(),p=function(t){function e(t,n){r(this,e);var o=a(this,(e.__proto__||Object.getPrototypeOf(e)).call(this));return o.resolveOptions(n),o.listenClick(t),o}return c(e,t),h(e,[{key:"resolveOptions",value:function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.action="function"==typeof e.action?e.action:this.defaultAction,this.target="function"==typeof e.target?e.target:this.defaultTarget,this.text="function"==typeof e.text?e.text:this.defaultText,this.container="object"===d(e.container)?e.container:document.body}},{key:"listenClick",value:function t(e){var n=this;this.listener=(0,f.default)(e,"click",function(t){return n.onClick(t)})}},{key:"onClick",value:function t(e){var n=e.delegateTarget||e.currentTarget;this.clipboardAction&&(this.clipboardAction=null),this.clipboardAction=new s.default({action:this.action(n),target:this.target(n),text:this.text(n),container:this.container,trigger:n,emitter:this})}},{key:"defaultAction",value:function t(e){return l("action",e)}},{key:"defaultTarget",value:function t(e){var n=l("target",e);if(n)return document.querySelector(n)}},{key:"defaultText",value:function t(e){return l("text",e)}},{key:"destroy",value:function t(){this.listener.destroy(),this.clipboardAction&&(this.clipboardAction.destroy(),this.clipboardAction=null)}}],[{key:"isSupported",value:function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:["copy","cut"],n="string"==typeof e?[e]:e,o=!!document.queryCommandSupported;return n.forEach(function(t){o=o&&!!document.queryCommandSupported(t)}),o}}]),e}(u.default);t.exports=p})},{"./clipboard-action":7,"good-listener":4,"tiny-emitter":6}]},{},[8])(8)});
</script>

<script>
    var weixin_name = "{{$data['wechat']}}",book_name = "{{$data['book']}}",book_number = "{{$data['bookid']}}";
    var clipboard = new Clipboard('#btn-copy-wechat',{
        text: function() {
            return weixin_name;
        }
    });

    var clipboard2 = new Clipboard('#copy-name',{
        text: function() {
            return book_name.replace(/^\s+|\s+$/g,"");;
        }
    });
    clipboard2.on('success',
        function(e) {
            alert("书名《"+book_name+"》已复制成功，点击确定前往微信。\r\n搜索时直接粘贴就可以了哦！");
            window.location.href = "weixin://";
        });

    clipboard2.on('error',
        function(e) {
            alert("书名《"+book_name+"》已复制成功，点击确定前往微信。\r\n搜索时直接粘贴就可以了哦！");
            window.location.href = "weixin://";
        });
    var clipboard3 = new Clipboard('#copy-bn',{
        text: function() {
            return book_number.replace(/^\s+|\s+$/g,"");;
        }
    });

    clipboard3.on('success',
        function(e) {
            alert("书号"+book_number+"已复制成功，点击确定前往微信。\r\n搜索时直接粘贴就可以了哦！");
            window.location.href = "weixin://";
        });

    clipboard3.on('error',
        function(e) {
            alert("书号"+book_number+"已复制成功，点击确定前往微信。\r\n搜索时直接粘贴就可以了哦！");
            window.location.href = "weixin://";
        });

    clipboard.on('success',
        function(e) {
            alert("公众号"+weixin_name+"已复制成功，点击确定前往微信。\r\n搜索时直接粘贴就可以了哦！");
            window.location.href = "weixin://";
        });

    clipboard.on('error',
        function(e) {
            alert("公众号"+weixin_name+"已复制成功，点击确定前往微信。\r\n搜索时直接粘贴就可以了哦！");
            window.location.href = "weixin://";
        });
    var mf = new Clipboard('#openxz',{
        text: function() {
            return '{"bookId":"","chapterId":"","bookName":"\u83ab\u95ee\u76f8\u601d\u51e0\u8bb8","bookHero":"\u590f\u82e5\u5b8b\u5ead\u591c","channelCode":"AXA1000000","dzSearchKey":"\u83ab\u95ee\u76f8\u601d\u51e0\u8bb8"}';
        }
    });
</script>
<script>
    function getClientHeight()
    {
        var clientHeight=0;
        if(document.body.clientHeight&&document.documentElement.clientHeight)
        {
            var clientHeight = (document.body.clientHeight<document.documentElement.clientHeight)?document.body.clientHeight:document.documentElement.clientHeight;
        }
        else
        {
            var clientHeight = (document.body.clientHeight>document.documentElement.clientHeight)?document.body.clientHeight:document.documentElement.clientHeight;
        }
        return clientHeight;
    }
    document.getElementsByClassName("warp")[0].style.height= (getClientHeight() - 120) + "px";
    window.onresize=function(){
        document.getElementsByClassName("warp")[0].style.height= (getClientHeight() - 120) + "px";
    }
</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?de9e26a46bfc0ff516b634d9df167187";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</body>
</html>