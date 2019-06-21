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
                <a href="/" >
                    <i class="iconfont">&#xe626;</i>
                    <span>首页</span>
                </a>
                <a href="/top/" >
                    <i class="iconfont">&#xe7bd;</i>
                    <span>排行榜</span>
                </a>
                <a href="/book/" >
                    <i class="iconfont">&#xe809;</i>
                    <span>小说库</span>
                </a>
                <a href="/chapter/" >
                    <i class="iconfont">&#xe70f;</i>
                    <span>目录</span>
                </a>
                <a href="/article/" >
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
                <mip-form  method="post" url="/search" target="_blank" >
                    {{ csrf_field() }}
                    <input type="text" name="q" id="q" placeholder="请输入书名/作者" class="search-key">
                    <input type="hidden" name="modelid" value="13">
                    <button type="submit" class="search-btn" id="search-btn">Go</button>
                </mip-form>
                <span on="tap:search.toggle" class="lightbox-close">取消</span>
            </div>
            <div class="search-bar">大家都在看</div>
            <div class="search-tags">
                @foreach( \App\Models\NovelBook::where(['is_up'=>1])->orderBy('id','desc')->limit(10)->get() as $item )
                <a href="/book/{{$item->id}}.html">{{$item->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</mip-lightbox>