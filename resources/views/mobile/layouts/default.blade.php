<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title>@yield('title', '绝世武魂最新章节_男频小说排行榜推荐_'){{env('APP_NAME')}}</title>
    <meta name="keywords" content="@yield('keywords', '网络小说在线推荐')" />
    <meta name="description" content="@yield('description', env('APP_NAME').'(www.linchengxs.com)为广大书友提供男频、女频小说排行榜推荐，'.env('APP_NAME').'为你推荐热门男频小说《绝世武魂》，绝世武魂是作者洛城东的一本玄幻小说。')" />
    @yield('meta')
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link href="{{asset('css/mip.min.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mip.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="canonical" href="@yield('canonical',env('M_APP_URL'))">
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
<mip-data>
<script src="{{asset('js/mip.js')}}"></script>
<script src="{{asset('js/mip-form.js')}}"></script>
<script src="{{asset('js/mip-history.js')}}"></script>
<script src="{{asset('js/mip-lightbox.js')}}"></script>
<script src="{{asset('js/mip-stats-baidu.js')}}"></script>
<script src="{{asset('js/mip-list.js')}}"></script>
<script src="{{asset('js/mip-mustache.js')}}"></script>
<script src="{{asset('js/mip-vd-tabs.js')}}"></script>
    <script src="{{asset('js/mip-showmore.js')}}"></script>
    <script src="{{asset('js/mip-html-os.js')}}"></script>
</mip-data>

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