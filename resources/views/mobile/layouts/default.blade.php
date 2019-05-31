<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title>网络小说在线推荐-闲余时光尽享小说-享阅小说网</title>
    <meta name="keywords" content="网络小说在线推荐" />
    <meta name="description" content="享阅小说网有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link href="{{asset('css/mip.min.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mip.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="canonical" href="http://m.xiaoshuo.test/">
    <style mip-custom>
        /* background */
        .mod-head h2:before,
        .mod-head h3:before,
        .search-form button ,
        .book-info .btns li a.read-online, .layui-m-layer a.btn-wechat,
        .novel-similar .mip-vd-tabs-nav .mip-vd-tabs-nav-selected,.book-nav ul li.on a,
        .news-info .show-fpage a,
        .news-info .book dd .view
        {
            background: #00bf99;
        }
        /* color */
        .news-info .porn li a ,
        .book-info .update a,
        .nav .iconfont,
        .book-info .tags a span,
        .book-info .intro .intro-more button,
        .header .icon-back,.icon-grouop,
        .menu-list a .iconfont,
        .top-nav ul li.on a,
        .news-info .show-more,
        .search .lightbox-close,
        .tags-info dd ul li a,
        .tags-info dd p span em,
        .news-info .cover .read a,
        .novel-similar .mip-vd-tabs-nav li,
        .content-more button
        {
            color: #00bf99;
        }
        .novel-similar .mip-vd-tabs-nav li:last-child{
            border-right: 1px solid #00bf99;
        }
        .novel-similar .mip-vd-tabs-nav li{
            border: 1px solid #00bf99;
            border-width: 1px 0 1px 1px;
        }
        .content-more button:after, .content-more button:before{
            border-color: #00bf99;
        }
        /* border */
        .search-form input,
        .book-info .btns li a.read-online,
        .layui-m-layer a.btn-wechat,
        .book-info .tags a span,
        .novel-similar .mip-vd-tabs-nav .mip-vd-tabs-nav-selected,
        .book-nav ul li.on a,
        .top-nav ul li.on a,
        .tags-info dd ul li a
        {
            border: 1px solid #00bf99;
        }
        .news-info .content h3 ,
        .news-info .chapters h3,
        .mod-chapters .chapters h3
        {
            border-left: 3px solid #00bf99;
        }
    </style>
</head>
@include('mobile.layouts._header')

@yield('content')

@include('mobile.layouts._footer')

<mip-stats-baidu>
    <script type="application/json">
        {
            "token": "",
            "_setCustomVar": [1, "login", "1", 2],
            "_setAutoPageview": [true]
        }
    </script>
</mip-stats-baidu>
<script src="{{asset('js/mip.js')}}"></script>
<script src="{{asset('js/mip-form.js')}}"></script>
<script src="{{asset('js/mip-history.js')}}"></script>
<script src="{{asset('js/mip-lightbox.js')}}"></script>
<script src="{{asset('js/mip-stats-baidu.js')}}"></script>
<script src="{{asset('js/mip-list.js')}}"></script>
<script src="{{asset('js/mip-mustache.js')}}"></script>
<script src="{{asset('js/mip-vd-tabs.js')}}"></script>

<!-- <link rel="stylesheet" href="{{asset('')}}css/style.css">

<script src="{{asset('')}}js/mip-list.js"></script>
<script src="{{asset('')}}js/mip-mustache.js"></script>


<div class="information_box" id="information">
<div class="found_list">
<ul class="found_list_ul">
<mip-list src="https://5088h.anyoy.com/index.php?g=api&m=book&a=getBook&model=fixed&count=4&mip=1" preload>
<template type="mip-mustache">

        </template>
        </mip-list>
        </ul>
        </div>
        </div> -->

</body>
</html>