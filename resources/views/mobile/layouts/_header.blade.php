<body class="home">
<!--header-->
<div class="header">
    <h1 class="logo">享阅小说网</h1>
    <div class="icon-grouop">
        <span class="icon-search" on="tap:search.toggle"><i class="iconfont">&#xe651;</i></span>
        <span class="icon-menu" on="tap:menu.toggle"><i class="iconfont">&#xe62a;</i></span>
    </div>
</div>
<!--menu-->
<mip-lightbox
        id="menu"
        layout="nodisplay"
        class="mip-show"
        content-scroll>
    <div class="menu show">
        <div class="menu-panel">
            <div class="menu-list">
                <a href="/" data-type="mip">
                    <i class="iconfont">&#xe626;</i>
                    <span>首页</span>
                </a>
                <a href="/top" data-type="mip">
                    <i class="iconfont">&#xe7bd;</i>
                    <span>排行榜</span>
                </a>
                <a href="/book" data-type="mip">
                    <i class="iconfont">&#xe809;</i>
                    <span>小说库</span>
                </a>
                <a href="/zt" data-type="mip">
                    <i class="iconfont">&#xe70f;</i>
                    <span>专题</span>
                </a>
                <a href="/article" data-type="mip">
                    <i class="iconfont">&#xe63a;</i>
                    <span>资讯</span>
                </a>
            </div>
        </div>
    </div>
</mip-lightbox>
<!-- 搜索 -->
<mip-lightbox
        id="search"
        layout="nodisplay"
        class="mip-show"
        content-scroll>
    <div class="search show">
        <div class="search-mask"></div>
        <div class="search-panel">
            <div class="bar">
                <mip-form  method="post" url="http://m.mind98.cn/index.php?g=Search" target="_blank" >
                    <input type="text" name="q" id="q" placeholder="请输入书名/作者" class="search-key">
                    <input type="hidden" name="modelid" value="13">
                    <button type="submit" class="search-btn" id="search-btn">Go</button>
                </mip-form>
                <span on="tap:search.toggle" class="lightbox-close">取消</span>
            </div>
            <div class="search-bar">大家都在看</div>
            <div class="search-tags">
                <a href="/book/19039.html">染情欢：逮个美男当驸马</a><a href="/book/19016.html">钻石闪婚：珠光宝妻</a><a href="/book/19010.html">绝世武神系统</a><a href="/book/18967.html">惊婚蜜爱：总裁，别太坏</a><a href="/book/18950.html">总裁爹地蜜宠妻</a><a href="/book/18940.html">胜者为王</a><a href="/book/18875.html">这具尸体开花了</a><a href="/book/18837.html">首席的亿万娇妻</a><a href="/book/18726.html">绝望高校</a><a href="/book/18707.html">99次拒爱：戚总请自重</a>            </div>
        </div>
    </div>
</mip-lightbox>