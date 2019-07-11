<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '绝世武魂最新章节_男频小说排行榜推荐_'){{env('APP_NAME')}}</title>
    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="@yield('keywords', '网络小说在线推荐')" />
    <meta name="description" content="@yield('description', env('APP_NAME').'(www.linchengxs.com)为广大书友提供男频、女频小说排行榜推荐，'.env('APP_NAME').'为你推荐热门男频小说《绝世武魂》，绝世武魂是作者洛城东的一本玄幻小说。')" />
    @yield('meta')
    <meta name="shenma-site-verification" content="640cd821d750f66fb2c84259caecbccc_1547718180"/>
    <link href="/favicon.ico" rel="shortcut icon" />
    <link href="{{asset('css/base.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/novel.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/checkmobile.js')}}"></script>

    <meta name="mobile-agent" content="format=xhtml;url=@yield('mobile', env('M_APP_URL'))">
    <meta name="mobile-agent" content="format=html5;url=@yield('mobile', env('M_APP_URL'))">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/function.js')}}"></script>

    <style>
        .book-info .guess ol li:hover,.book-info .guess ul li p em,.book-info .tags a,.book-list h2,.book-list ul li .intro a,.book-list ul li .update a,.bookshelf-list ul li .update a,.box1 .category li a:hover,.box2 .top-news li h4 a,.box3 .carousel-nav li .info span.type,.box3 .hot-book .more a,.box3 .rec-list ul li .info em,.box3 .rec-list ul li .intro a,.header .bookcase .iconfont,.header .bookcase a:hover,.header .search .search-btn,.news-info .book dd .update a,.news-info .cover .read a,.news-info .porn li a,.news-list ul li .text a,.search-list ul li .intro a,.search-list ul li .update a,.top-list>ul>li .intro a,.top-list>ul>li .update a,a:hover ,.book-base .btns a,.show-more button,.search-list .result span,.search-list .result em,.book-info .review .more a:hover,.header .bookcase a,.bookshelf-list ul li .read a,.bookshelf-list ul li .del:hover{
            color: #00bf99}
        .book-info .attentions h3::before,.book-info .chapters h3::before,.book-info .guess h3::before,.book-info .reading-content h3::before,.book-info .review h3::before,.book-list ul li .view,.book-nav ul li.on a,.box1 .banner-nav li.selected,.box3 .carousel-nav li .view,.box4 .new-book ol li.on,.chapter-header,.news-info .book dd .view,.pages a:hover,.pages b,.pages span.current,.top-nav ul li.on a ,.book-base .btns .read-online a,.bookshelf-list ul li .pic i{
            background: #00bf99}
        .show-more button:after,.show-more button:before {
            border-left: 2px solid #00bf99;
            border-bottom: 2px solid #00bf99}
        .footer {
            border-top: 2px solid #00bf99}

        .pages b , .book-info .review .more a:hover ,.pages a:hover,.bookshelf-list ul li .read a{
            border: 1px solid #00bf99}

        .box1 .banner-nav li.selected:after {
            border-right: 10px solid #00bf99}

        .news-info .content h3 {
            border-left: 3px solid #00bf99}

        .book-info .guess ul li p em,.box1 .category li a:hover,.box3 .carousel-nav li .info span.type,.box3 .rec-list ul li .info em,.footer,.header .search .search-btn,.header .search .search-key,.news-info .content h3,.pages a:hover,.pages b ,.book-base .btns .read-online a,.book-base .btns a,.pages span.current{
            border-color: #00bf99}

        .book-info .base dd .btns li.read-online a:hover {
            border: 1px solid #01a080;
        }

        .book-list ul li .view:hover,.book-info .base dd .btns li.read-online a:hover,.news-info .book dd .view:hover {
            background: #01a080;
        }

        .book-info .tags a:hover {
            color: #01a080;
        }

    </style>
</head>

<body  style="height:100%;">

@include('layouts._header')


<div class="container">
    @yield('content')
    @include('layouts._footer')
</div>

{{--<script src="{{ mix('js/app.js') }}"></script>--}}
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?f72f14e70efef172364e0c49a11dc386";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
@yield('script')
</body>
</html>